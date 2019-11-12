<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    //Table name
    protected $table = 'activity';

    //primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = 'true';
}
