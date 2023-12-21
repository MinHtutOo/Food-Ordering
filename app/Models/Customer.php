<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory,HasRoles,SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'password',
    ];
}
