<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category'; // Specify the table name
    protected $primaryKey = 'cat_id'; // Specify the primary key

    protected $fillable = [
        'cat_name',
    ];
}
