<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Subcategory(){
        return $this->belongsTo(SubCategory::class);
    }
}
