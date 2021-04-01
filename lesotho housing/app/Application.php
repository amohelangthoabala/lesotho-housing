<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'gender',
        'state',
        'nationality',
        'birth_date',
        'idnumber',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
