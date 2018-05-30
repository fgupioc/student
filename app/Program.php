<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public $timestamps = true;
    protected  $fillable = [ 'program', 'description'];

    public function levels(){
        return $this->hasMany(Level::class);
    }
}
