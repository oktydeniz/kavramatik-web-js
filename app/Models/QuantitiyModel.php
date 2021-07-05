<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuantitiyModel extends Model
{
    use HasFactory;
    protected $table = 'quantitiy_models';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['quantitiy_name', 'quantitiy_text', 'quantitiy_one_text', 'quantitiy_two_text', 'quantitiy_one_image', 'quantitiy_two_image'];
}
