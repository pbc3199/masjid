<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penceramah extends Model
{
    //
    protected $table = 'penceramah';
    protected $fillable = ['id','Nama','ic_no','email','umur','jantina','alamat1','alamat2','poskod','bandar','poskod','bandar','negeri','phone_rumah','phone_bimbit','tajuk','Date_mula_kuliah','End_date','created_at','updated_at'];
}