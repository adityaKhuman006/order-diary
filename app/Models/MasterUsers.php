<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterUsers extends Model
{
    use HasFactory;

    protected $table = "master_user";

    protected $fillable = [
        "name",
        "type"
    ];

    const OFFICE = 1;
    const VENDOR = 2;
}
