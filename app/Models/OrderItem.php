<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customer_id',
        'menu_id',
        'quantity',
        'status',
        'sub_total',
        'grand_total',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
