<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class obat extends Model
{

    protected $table = "obat";
    protected $primaryKey = "id";
    protected $guarded =[];
    public $timestamps = true;
}
