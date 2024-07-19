<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;
    protected $table = 'state'; // Specify the table name
    protected $primaryKey = 'state_id'; // Specify the primary key

    protected $fillable = [
        'state_name',
    ];
}
