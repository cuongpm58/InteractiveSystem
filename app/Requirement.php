<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $table = 'requirement_category';
    protected $fillable = [
        'requirement_category', 'user', 'atm_id','serial_number','address','branch_mannager','type_atm','description','type_requirement','incident_time','requirement_time','start_time', 'end_time', 'other', 'name_contact', 'phone_contact', 'mail_contact',
    ];
}
