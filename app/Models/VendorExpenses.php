<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorExpenses extends Model
{
    use HasFactory;

    protected $table = 'vendor_expenses';
    protected $fillable = [
        'order_id',
        'particular',
        'amount'
    ];
}
