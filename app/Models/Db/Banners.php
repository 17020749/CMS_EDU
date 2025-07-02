<?php

namespace App\Models\Db;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $fillable= ['banner_name', 'banner_slug','banner_img'];
    use HasFactory;
}
