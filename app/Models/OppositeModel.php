<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OppositeModel extends Model
{
    use HasFactory;
    protected $table = 'opposite_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['opposite_name', 'opposite_one_image_text', 'opposite_two_image_text', 'opposite_one_image', 'opposite_two_image'];
}