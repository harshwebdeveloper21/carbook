<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carbook extends Model
{
    use HasFactory;

    protected $table = 'carbooks';

    protected $fillable = [
        'pickup_station',
        'drop_station',
        'book_date',
        'book_off',
        'time_pick',
        'total_kilometer',
        'mobile',
    ];
}
