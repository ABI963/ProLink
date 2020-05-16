<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    public $fillable=[
        'name_company'
        ,'name_contact'
        ,'status_juridique'
        ,'number_rc'
        ,'number_phone'
        ,'mail'
        ,'subcategory_id'
        ,'price'
        ,'user_id'
    ];
}

