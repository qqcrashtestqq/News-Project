<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomAuthToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'user_id'
    ];

    public static function getToken(?string $token, ?int $user_id): bool
    {
       $token = CustomAuthToken::where('token', $token)
        ->where('user_id', $user_id)->first();

       if(!$token) {
           return false;
       }

       return true;
    }
}
