<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'taikhoan';
    protected $fillable =  ['hoten','tentaikhoan','matkhau','sodienthoai','doicongtac','chucvucongtac','capbac','chucdanhtuphap','linhvucgiamdinh','sothegiamdinh','noicapthegiamdinh','ngaycapthegiamdinh','avatar'];
}
