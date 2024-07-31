<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    protected $table= 'cars';
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'category_id',
        ];
}
