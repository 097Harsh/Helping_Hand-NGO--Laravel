<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'Contact'; // Specify the table name
    protected $primaryKey = 'inqurt_id'; // Specify the primary key

    protected $fillable = [
        'name',
        'email',
        'contact',
        'message'
    ];
}
