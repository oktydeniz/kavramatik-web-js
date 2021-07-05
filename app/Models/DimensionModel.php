<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimensionModel extends Model
{
    use HasFactory;
    protected $table = 'dimension_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['dimension_name', 'dimension_text', 'dimension_one_text','dimension_two_text', 'dimension_one_image', 'dimension_two_image'];
    
}

