<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    protected $table = "kasir";
    protected $primaryKey = "id";
    protected $guarded =[];
    public $timestamps = true;

    public function pasiens()
    {
        return $this->belongsTo(pasien::class, "pasien","id");
    }
    public function dokters()
    {
        return $this->belongsTo(dokter::class, "dokter","id");
    }
    public function tindakans()
    {
        return $this->belongsTo(tindakan::class, "tindakan","id");
    }
    public function users()
    {
        return $this->belongsTo(User::class, "created_by","id");
    }
    public function obats()
    {
        return $this->belongsTo(obat::class, "obat","id");
    }

}
