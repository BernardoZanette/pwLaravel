<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'login',
        'senha',
        'admin'
    ];

    function getAuthIdentifierName() {}
    function getAuthIdentifier() {}
    function getAuthPassword() {}
    function getRememberToken() {}
    function setRememberToken($value) {}
    function getRememberTokenName() {}
}
