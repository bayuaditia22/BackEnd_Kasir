<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table ='menus';
    protected $fillable =['jenis_id','nama_menu','harga','image','deskripsi'];
}