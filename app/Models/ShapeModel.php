<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShapeModel extends Model
{
    use HasFactory;
    protected $table = 'shape_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['shape_name', 'shape_text', 'shape_image'];
}
