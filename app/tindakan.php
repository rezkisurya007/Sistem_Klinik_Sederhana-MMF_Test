<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tindakan extends Model
{
    protected $table = "tindakan";
    protected $primaryKey = "id";
    protected $guarded =[];
    public $timestamps = true;
}
