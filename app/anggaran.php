<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggaran extends Model
{
    //
    protected $table = 'anggarans';
    protected $primaryKey = 'agid';
    protected $fillable = ['agnam','agbobot'];
}
