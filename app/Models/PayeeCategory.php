<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayeeCategory extends Model
{
    use HasFactory;

    protected $table = "payee_category";

    protected $fillable = [
        "name","remark","phone","balance","date","img"
    ];
}
