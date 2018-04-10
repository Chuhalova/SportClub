<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubcard extends Model
{
    public $table='clubcard';
    public $timestamps=true;
    protected $primaryKey = 'numb_clubcard';
}
