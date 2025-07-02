<?php

namespace App\Models\Db;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= ['product_name', 'product_title','product_img','product_slug','product_description'];
    use HasFactory;
    public function relates()
{
    return $this->hasMany(ProductRelate::class, 'product_id');
}
}
