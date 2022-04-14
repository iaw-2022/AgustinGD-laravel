<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->hasMany(User::class);
    }

    public const IS_ADMIN = 1;
    public const IS_EDITOR = 2;
    public const IS_ACTUALIZADOR =3;
    public const IS_USER = 4;
}
