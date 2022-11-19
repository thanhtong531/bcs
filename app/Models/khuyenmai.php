<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    use HasFactory;
    protected $table="khuyenmai";
    protected $primaryKey="km_ma";
    protected $fillable = 
    [
        'km_phantram',
        'km_ngaybd',
        'km_ngaykt',
        'km_noidung',
        'km_giaban',
        'km_soluong',
        'km_tinhtrang',
    ];

    public function sanpham(){
        return $this->belongsToMany(sanpham::class,'ct_khuyenmai','km_ma','sp_ma');
    }
}
