<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payee extends Model
{
    use HasFactory;

    protected $table = "payee";

    const EXPENSE = 1;
    const INCOME = 2;

    protected $fillable = [
        "transactionType",
        "account",
        "amount",
        "payee",
        "to",
        "category",
        "paymentmethod",
        "remark",
        "cheque",
        "description",
        "date",
        "time"
    ];


    public function payeeCategories()
    {
        return $this->hasMany(PayeeCategory::class, 'id', 'payee'); // Adjust foreign key
    }

    public function toCategorys()
    {
        return $this->hasMany(PayeeCategory::class, 'id', 'to'); // Adjust foreign key
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'id', 'category'); // Adjust foreign key
    }

    public function paymentMethods()
    {
        return $this->hasMany(PaymentCategory::class, 'id', 'paymentmethod'); // Adjust foreign key
    }
}

    // function getCategory(){
    // }

    // function getPayment(){
    // }

