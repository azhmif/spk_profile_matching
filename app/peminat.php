<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminat extends Model
{
    //
    protected $table = 'peminats';
    protected $primaryKey = 'pmid';
    protected $fillable = ['pmnam','pmbobot'];
}
