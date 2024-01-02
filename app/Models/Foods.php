<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;
    protected $table = 'foods';

    protected $fillable=[
        'name',
        'image',
        'price',
        'meal',
        'stocked',
        'created_at',
        'updated_at'
    ];
}
