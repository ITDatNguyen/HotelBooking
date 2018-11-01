<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = "District";
    protected $fillable = ['id','name'];

    public function hotels()
    {
        return $this->hasMany('App\Hotel');
    }
}
