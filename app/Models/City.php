<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'city'; // Specify the table name
    protected $primaryKey = 'city_id'; // Specify the primary key

    protected $fillable = [
        'city_name',
        'state_id'
    ];
}
