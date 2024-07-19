<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = 'area'; // Specify the table name
    protected $primaryKey = 'area_id'; // Specify the primary key

    protected $fillable = [
        'area_name',
        'city_id'
    ];
}
