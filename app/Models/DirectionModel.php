<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectionModel extends Model
{
    use HasFactory;
    protected $table = 'direction_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['direction_name', 'direciton_text', 'direction_image'];
}
