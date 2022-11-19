<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donvi extends Model
{
    use HasFactory;
    protected $table="donvi";
    protected $primaryKey="dv_ma";
    protected $fillable = 
    [
        'dv_ten',
        'dv_tinhtrang',
    ];
    public function sanpham(){
        return $this->hasMany(sanpham::class,'dv_ma');
    }
}
