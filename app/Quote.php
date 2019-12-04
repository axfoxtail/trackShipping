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

    public function users() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function senders() {
        return $this->hasOne(Sender::class, 'id', 'senderid');
    }

    public function fromAddress() {
        return $this->hasOne(Address::class, 'id', 'from');
    }

    public function toAddress() {
        return $this->hasOne(Address::class, 'id', 'to');
    }
}
