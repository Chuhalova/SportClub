<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public $table = 'coach';
    public $timestamps = true;
    protected $primaryKey = 'numb_coach';
}
