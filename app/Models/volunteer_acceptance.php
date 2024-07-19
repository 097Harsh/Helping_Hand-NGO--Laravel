<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteer_acceptance extends Model
{
    use HasFactory;
    protected $table = 'volunteer_acceptance';
    protected $primaryKey = 'v_id';
    //in this code we contains d_id(Donation id) and user_id(user_id) for which user accept the donation post,and donation id used for which donation was accepted by the user(volunteer).
    
    protected $field = [
        'd_id','user_id','v_id',
        'date_time','status','description',
        'receive_datetime','receive_message',
        'delivery_datetime','delivery_message'
    ];
}
