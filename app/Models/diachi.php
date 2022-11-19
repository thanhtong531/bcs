<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diachi extends Model
{
    use HasFactory;
    protected $table="diachi";
    protected $primaryKey="dc_ma";
    protected $fillable = 
    [
        'dc_ten',
        'dc_tinhtrang',
    ];
    public function khachhang(){
        return $this->belongsTo(khachhang::class,'kh_ma');
    }
}
