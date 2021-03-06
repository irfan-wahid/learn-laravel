<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawan";

    public function pekerjaan(){
        return $this->belongsTo('App\Models\Pekerjaan');
    }
}
