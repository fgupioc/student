<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $timestamps =  true;
    protected $fillable = ['shift','description'];
}
