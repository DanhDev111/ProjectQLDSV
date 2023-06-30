<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giangvien extends Model
{
    protected $fillable = ['id', 'magv', 'hogv', 'tengv','ngaysinh', 'gioitinh', 'hocham', 'hocvi','created_at','updated_at'];
    protected $table='giangviens';
    public function monhocs()
    {
        return $this->hasMany('App\Monhoc','giangvien_id','id');
    }
}
