<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    use HasFactory;
    protected $table="loaisp";
    protected $primaryKey="lsp_ma";
    protected $fillable = 
    [
        'lsp_ten',
        'lsp_hinh',
        'lsp_tinhtrang',
        'dm_ma',
    ];
    public function sanpham(){
        return $this->hasMany(sanpham::class,'lsp_ma');
    }
    public function danhmucsp(){
        return $this->belongsTo(danhmucsp::class,'dm_ma');
    }
}
