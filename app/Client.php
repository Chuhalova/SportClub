<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon ;

class Client extends Model
{
    public $table='client';
    public $timestamps=true;
    protected $primaryKey = 'numb_client';
    function getAge(){
     return  Carbon::parse($this->birth_date)->diff(Carbon::now())->format('%y years');
    }
}
