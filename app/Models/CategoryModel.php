<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'education_categories';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['category_name', 'category_name_slug', 'category_image', 'order', 'route'];
}
