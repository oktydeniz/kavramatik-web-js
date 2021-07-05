<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUserModel extends Model
{
    use HasFactory;
    protected $table = 'app_user_models';
    protected $guarded = ['id'];
    public $timestamps = true;
    protected $fillable = ['user_email', 'user_name', 'user_profile', 'verification', 'status', 'score', 'user_password'];
}
