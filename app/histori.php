<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class histori extends Model
{
    protected $table = "histori";
    protected $primaryKey = "id";
    protected $guarded =[];
    public $timestamps = true;
}
