<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public $timestamps =  true;
    protected $fillable = ['batch','description'];
}
