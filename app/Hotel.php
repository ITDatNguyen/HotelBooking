<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "Hotel";
    protected $fillable = ['name'];

    public function district()
    {
        return $this->belongsTo('App\District');
    }

}
