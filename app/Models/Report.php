<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
        'user_id', 'report_date', 'report_pdf', 'invoice_pdf',
    ];
    Public function ReportDetail(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

