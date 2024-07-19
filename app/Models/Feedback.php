<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback'; // Specify the table name
    protected $primaryKey = 'f_id'; // Specify the primary key

    protected $fillable = [
        'user_id',
        'rating',
        'message'
    ];
}
