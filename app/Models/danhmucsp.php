<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmucsp extends Model
{
    use HasFactory;
    protected $table="danhmucsp";
    protected $primaryKey="dm_ma";
    protected $fillable = 
    [
        'dm_ten',
        'dm_tinhtrang',
    ];
    public function loaisp(){
        return $this->hasMany(loaisp::class,'dm_ma');
    }
}
