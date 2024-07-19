<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyDonation extends Model
{
    use HasFactory;
    protected $table = 'money_donation'; // Specify the table name
    protected $primaryKey = 'm_id'; // Specify the primary key

    protected $fillable = [
        'amt',
        'msg',
        'user_id','cat_id',
        'd_name','d_date','payment_status'
    ];
}
