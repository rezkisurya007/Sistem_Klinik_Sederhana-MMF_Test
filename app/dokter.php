<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    
    protected $table = "dokter";
    protected $primaryKey = "id";
    protected $guarded =[];
    public $timestamps = true;
}
