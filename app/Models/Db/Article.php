<?php

namespace App\Models\Db;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable= ['category_code','category_name', 'category_slug','category_img'];
    use HasFactory;
}
