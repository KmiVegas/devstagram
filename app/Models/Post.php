<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //información que Laravel lee y se la lleva a la bd
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    //relación en la que un post tiene un usuario
    public function user()
    {
        return $this->belongsTo(User::class)->select(['name', 'username']);
    }

    /* public function comentarios()
    {
        return $this->belongsToMany(Comentario::class);
    } */
}
