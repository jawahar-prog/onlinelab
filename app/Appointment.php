<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $table = 'lab_customer';
    protected $fillable = [
        'user_id', 'lab_customer_cd', 'lab_customer_fname', 'lab_customer_gender',
    ];
}
