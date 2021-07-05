<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberModel extends Model
{
    use HasFactory;
    protected $table = 'number_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['number_name', 'number_one_text', 'number_quantity_text', 'number_one_image', 'number_quantity_image'];
}
