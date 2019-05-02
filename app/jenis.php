<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    //
    protected $table = 'jenis';
    protected $primaryKey = 'jnsid';
    protected $fillable = ['jnsnam','jnsbobot'];
}
