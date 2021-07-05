<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorsModel extends Model
{
    use HasFactory;
    protected $table = 'colors_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['color', 'color_tag', 'color_one', 'color_two', 'one_tag', 'two_tag'];
}
