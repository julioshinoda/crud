<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
       public $table = "produto";
    public $fillable = ['produto','valor'];
}