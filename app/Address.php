<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    protected $primaryKey = 'id';

    protected $fillable = [
        'address', 'city', 'postcode', 'country',
    ];

    public $timestamps= true;

    public function quotesByFrom() {
        return $this->belongsTo(Quote::class, 'from', 'id');
    }

    public function quotesByTo() {
        return $this->belongsTo(Quote::class, 'to', 'id');
    }
}
