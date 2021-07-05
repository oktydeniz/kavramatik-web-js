<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenseModel extends Model
{
    use HasFactory;
    protected $table = 'sense_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['sense_name', 'sense_one_image_text', 'sense_two_image_text', 'sense_one_image', 'sense_two_image'];

}
