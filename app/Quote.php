<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quotes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'gender', 'package', 'height', 'width', 'length', 'weight', 'date', 'extra', 'from', 'to', 'user_id', 'status', 'price', 'trackingnumber'
    ];

    public $timestamps= true;
}
