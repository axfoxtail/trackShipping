<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $table = 'senders';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'gender', 'address', 'city', 'postcode', 'country', 'visualcheck', 'doccheck', 'generalcheck', 'class', 'paymentstatus'
    ];

    public $timestamps= true;
    
    public function quotes() {
        return $this->belongsTo(Quote::class, 'senderid', 'id');
    }
}
