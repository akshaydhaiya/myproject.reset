<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    protected $table = 'employes';
    protected $fillable = ['name','image'];

}
