<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'customer_id',
        'menu_id',
        'order_date',
        'status',
        'sub_total',
        'grand_total',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
