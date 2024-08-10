<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbOrder extends Model
{
    use HasFactory;

    protected $table = "tb_order";

    protected $fillable = [
        'customer_name',
        'date',
        'order_given_by',
        'order_select',
        'order_no',
        'belt_id',
        'quantity',
        'description',
        'uom_select',
        'rate',
        'amount',
        'attach_doc_file',
        'remark_vender',
        'order_priority',
        'wight_belt',
        'packing_size_belt',
        'packing_charges',
        'transportaion_charges',
        'doc_attached_file',
        'tentaive_delevery_date',
        'delevery_date',
    ];

    function getExpenses()
    {
       return $this->hasMany(VendorExpenses::class, 'order_id', 'id');
    }

    function getBelt()
    {
        return $this->hasMany(Belt::class, 'id', 'belt_id');
    }
}
