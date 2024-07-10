<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentBank extends Model
{
    use HasFactory;

    protected $table = 'sbl_contentbank';

    // Definir los campos que son asignables en masa
    protected $fillable = [
        'BookId',
        'state',
    ];

    // Relación con la tabla 'sbl_books'
    public function book()
    {
        return $this->belongsTo(Book::class, 'BookId', 'id');
    }

    // Relación con la tabla 'sbl_bankbooks'
    public function bankBooks()
    {
        return $this->hasMany(BankBook::class, 'BankId', 'id');
    }
}
