<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tocategorys extends Model
{
    use HasFactory;

    protected $table = "to_category";

    protected $fillable = [
        "name"
    ];
}
