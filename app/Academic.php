<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    public $timestamps = true;
    protected $fillable = ['academic', 'description'];
}
