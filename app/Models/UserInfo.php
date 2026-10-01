<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_infos';

    protected $fillable = [
        'fullname',
        'age',
    ];
}