<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = "pasien";
    protected $primaryKey = "id";
    protected $guarded =[];
    public $timestamps = true;
}
