<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    //
    protected $table = 'kegiatans';
    protected $primaryKey = 'kgid';
    protected $fillable = ['kgnam','kgjnsdi','kgpmid','kgagid','kgreid'];
}
