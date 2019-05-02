<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class realisasi extends Model
{
    //
    protected $table = 'realisasis';
    protected $primaryKey = 'reid';
    protected $fillable = ['renam','rebobot'];
}
