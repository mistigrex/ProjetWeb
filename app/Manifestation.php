<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    //protected $fillable = ['nom','description','fréquence','date','prix','image'];
    protected $table ='manifestations';
    public $primaryKey = 'id';
    public $timestamps = true;
}
