<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public $timestamps = true;
    protected $fillable = ['program_id', 'level', 'description'];

    public function program(){
        return $this->belongsTo(Level::class);
    }
}
