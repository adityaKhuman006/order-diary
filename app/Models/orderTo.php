<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderTo extends Model
{
    use HasFactory;

    protected $table = "order_to";

    protected $fillable = [
        "name",
        "number"
    ];
}
