<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostManage extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title','picture','category_id','pemilik_nik' ,'max_lantai','max_kamarT','max_kamarM','alamat_kost','jalur_transportasi','fasilitas_kamar','fasilitas_sekitar','maps','harga','published_at'];

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'pemilik_nik', 'nik');
    }

}