<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps =  true;
    protected $fillable = ['group','description'];
}
