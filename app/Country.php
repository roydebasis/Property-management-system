<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country_name'];
    
    /*
    *relation between country to property
    */
    public function properties()
    {
        return $this->hasMany('App\Property');
    }

}

