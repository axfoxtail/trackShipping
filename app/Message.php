<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'messages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email', 'name', 'subject', 'content', 'user_id', 'status'
    ];

    public $timestamps= true;

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
