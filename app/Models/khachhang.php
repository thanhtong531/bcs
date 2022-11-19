<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class khachhang extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table="khachhang";
    protected $guarded = 'khachhang';
    protected $primaryKey="kh_ma";
    protected $fillable = 
    [
        'ten',
        'gioitinh',
        'ngaysinh',
        'sdt',
        'email',
        'hinh',
        'kichhoat',
        'lienketkichhoat',
        'ncc',
        'google_id',
        'facebook_id',
        'password',
        'tinhtrang',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function diachi(){
        return $this->hasMany(diachi::class,'kh_ma');
    }
    public function hoadon(){
        return $this->hasMany(hoadon::class,'kh_ma');
    }
    public function user(){
        return $this->hasOne(User::class,'kh_ma');
    }
    public function sanpham(){
        return $this->belongsToMany(sanpham::class,'danhgia','kh_ma','sp_ma');
    }
}
