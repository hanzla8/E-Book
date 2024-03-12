<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'name',
        'email',
        'phone',
        'address',
        // 'book_type',
        'quantity',
    ];

    public function book(){
        return $this->hasOne('App\Models\Book','id','book_id');
    }
}
