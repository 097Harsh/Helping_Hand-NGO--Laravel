<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'Donation'; // Specify the table name
    protected $primaryKey = 'D_id'; // Specify the primary key

    protected $fillable = [
        'Title',
        'Description',
        'user_id',
        'address','cat_id',
        'donation_date','city_id',
        'area_id','status','from_Time','To_Time',
        'contact_name','contact_person'
    ];
}
