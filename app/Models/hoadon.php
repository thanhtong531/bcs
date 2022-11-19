<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    use HasFactory;
    protected $table="hoadon";
    protected $primaryKey="hd_ma";
    protected $fillable = 
    [
        'hd_ngaykt',
        'hd_ngaytt',
        'hd_tongtien',
        'hd_tinhtrang',
        'hd_diachi',
        'nv_ma',
        'vc_ma',
        'tt_ma',
        'kh_ma',
    ];

    public function nhanvien(){
        return $this->belongsTo(nhanvien::class,'nv_ma');
    }
    public function vanchuyen(){
        return $this->belongsTo(vanchuyen::class,'vc_ma');
    }
    public function thanhtoan(){
        return $this->belongsTo(thanhtoan::class,'tt_ma');
    }
    public function khachhang(){
        return $this->belongsTo(khachhang::class,'kh_ma');
    }
    public function sanpham(){
        return $this->belongsToMany(sanpham::class,'ct_hoadon','hd_ma','sp_ma')->withPivot('soluong','giaban','thanhtien');
    }
}
