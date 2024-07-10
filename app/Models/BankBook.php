<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankBook extends Model
{
    protected $table = 'sbl_bankbooks';
    protected $fillable = [
        'BankId', 'studentId', 'observation', 'Grado'
    ];

    public function contentBank()
    {
        return $this->belongsTo(ContentBank::class, 'BankId', 'id');
    }

}

