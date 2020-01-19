<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ahlikariah extends Model
{
    //
    protected $table = 'ahli_kariah';
    protected $fillable = ['id','Nama','ic_no','email','umur','alamat1','alamat2','poskod','bandar','poskod','bandar','negeri','phone_rumah','phone_bimbit','status','tempoh','created_at','updated_at'];
}
