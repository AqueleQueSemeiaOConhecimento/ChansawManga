<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    protected $table = 'manga';

    public function capitulos()
    {
        return $this->hasMany(Capitulo::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function  users()
    {
        return $this->belongsToMany(User::class);
    }
}
