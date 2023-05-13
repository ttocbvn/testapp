<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoSoGiamDinh extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hosogiamdinh';
    protected $fillable =  ['soqd','ngayqd','nguoigiao','chucvunguoigiao','nguoinhan','chucvunguoinhan','donvitrungcau','nguoikyqd','soluongmaugiamdinh','linhvucgiamdinh','tinhtrangdoituonggiamdinh','trangthaihoso','ngaynhan'];
}
