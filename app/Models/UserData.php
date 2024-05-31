<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserData extends Authenticatable
{


    use HasFactory;

    protected $table = 'UserData';
    protected $fillable = ['nama', 'email', 'username', 'telepon', 'password'];
}
