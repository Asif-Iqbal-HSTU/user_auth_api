<?php

namespace App\Models;

use MongoDB\Eloquent\Model;

class UserProfile extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'user_profiles';
    protected $fillable = ['user_id', 'password', 'profile'];
}

