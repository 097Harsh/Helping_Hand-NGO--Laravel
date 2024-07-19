<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role'; // Specify the table name
    protected $primaryKey = 'role_id'; // Specify the primary key

    protected $fillable = [
        'role_name',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
