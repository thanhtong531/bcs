<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table="sanpham";
    protected $primaryKey="sp_ma";
    protected $fillable = 
    [
        'sp_ten',
        'sp_hinh',
        'sp_soluong',
        'sp_giaban',
        'sp_giamgia',
        'sp_mota',
        'sp_tinhtrang',
        'nsx_ma',
        'lsp_ma',
        'dv_ma',
    ];

    public function hinhsp(){
        return $this->hasMany(hinhsp::class,'sp_ma');
    }
    public function thuoctinh(){
        return $this->hasMany(thuoctinh::class,'sp_ma');
    }
    public function donvi(){
        return $this->belongsTo(sanpham::class,'dv_ma');
    }
    public function loaisp(){
        return $this->belongsTo(loaisp::class,'lsp_ma');
    }
    public function nhasanxuat(){
        return $this->belongsTo(nhasanxuat::class,'nsx_ma');
    }
    public function hoadon(){
        return $this->belongsToMany(hoadon::class,'ct_hoadon','sp_ma','hd_ma')->withPivot('soluong','giaban','thanhtien');
    }
    public function phieunhap(){
        return $this->belongsToMany(phieunhap::class,'ct_phieunhap','sp_ma','pn_ma')->withPivot('soluong','gianhap','thanhtien');
    }
    public function ngay(){
        return $this->belongsToMany(ngay::class,'giaban','sp_ma','n_ma')->withPivot('giamgia','giaban','tinhtrang');
    }
    public function khuyenmai(){
        return $this->belongsToMany(khuyenmai::class,'ct_khuyenmai','sp_ma','km_ma');
    }
    public function khachhang(){
        return $this->belongsToMany(khachhang::class,'danhgia','sp_ma','kh_ma');
    }
}
