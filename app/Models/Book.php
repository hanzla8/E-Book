<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'image',
        'description',
        'book_type',
        'current_price',
        'book_weight',
        'delivery_charges',
        'total_price',
    ];
}
