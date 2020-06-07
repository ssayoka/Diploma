<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function usersBooked()
    {
        return $this->belongsToMany('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
