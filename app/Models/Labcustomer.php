<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labcustomer extends Model
{
    use HasFactory;	
    protected $table = 'lab_customer';
      /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'lab_customer_fname', 'lab_customer_gender', 'lab_cust_mobile', 'lab_Age', 'hrm_org_code', 'status','lab_report_date','lab_ctrid','user_id'
    ];

}
