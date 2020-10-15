<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolector extends Model
{
    protected $table = "recolectores";
    protected $fillable =  ['nombre', 'dias'];
}
