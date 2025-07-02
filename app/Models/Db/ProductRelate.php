<?php

namespace App\Models\Db;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRelate extends Model
{
    protected $fillable= ['image', 'product_id'];
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
