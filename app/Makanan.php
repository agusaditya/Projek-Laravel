<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    //
    protected $table='makanan';
    protected $primarykey='id_makanan';
    protected $fillable=['nama_makanan','keterangan','status'];
    public $timestamps=false;
}
