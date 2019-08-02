<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['is_vacant','unit_no','property_id'];

    /*
    *relation between unit to property
    */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
    
    /*
    *relation between unit to sale
    */
    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
    /*
    *relation between unit to expense
    */
    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
}
