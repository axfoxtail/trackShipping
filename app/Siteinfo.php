<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siteinfo extends Model
{
    protected $table = 'siteinfos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'address', 'city', 'postcode', 'country', 'weekstart', 'weekend', 'hourstart', 'hourend', 'restday1', 'restday2', 'url', 'companyname'
    ];

    public $timestamps= true;
    
 }
