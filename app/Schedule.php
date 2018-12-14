<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Schedule extends Model
{
   protected $casts = [
       'date' => 'datetime:Y-m-d H:i:s'
   ];
}
