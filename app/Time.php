<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public $timestamps =  true;
    protected $fillable = ['time','description'];
}
