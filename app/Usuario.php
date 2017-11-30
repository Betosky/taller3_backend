<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table ='usuario';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','email','password'];
    public $timestamps = false;
}
