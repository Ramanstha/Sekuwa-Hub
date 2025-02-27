<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function Subcategory(){
        return $this->hasMany(Category::class,'category_id');
    }
    public function Category(){
        return $this->hasMany(SubCategory::class,'category_id');
    }
}
