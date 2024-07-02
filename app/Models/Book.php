<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'sbl_books';
    protected $fillable = [
        'abbreviation', 'quantity', 'title', 'grade', 'category', 'year', 'observation'
    ];

    // Aquí puedes definir relaciones u otros métodos relacionados con el modelo Book
}
