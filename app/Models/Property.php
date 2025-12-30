<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type',
        'status',
        'price',
        'address',
        'bedrooms',
        'bathrooms',
        'size',
        'image',
        'agent_name',
        'agent_company',
        'agent_phone',
        'agent_avatar',
    ];

}
