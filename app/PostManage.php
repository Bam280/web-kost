<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostManage extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title','category_id','max_lantai','max_kamarT','max_kamarM','alamat_kost','jalur_transportasi','fasilitas_kamar','fasilitas_sekitar','maps','harga','picture' ];
    
}