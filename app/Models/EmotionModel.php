<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmotionModel extends Model
{
    use HasFactory;
    protected $table = 'emotion_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['emotion_name', 'emotion_text', 'emotion_image'];
}
