<?php

// app/Models/SblConfig.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SblConfig extends Model
{
    use HasFactory;

    protected $table = 'sbl_config';

    protected $fillable = [
        'period', 
        'start_schol_year', 
        'institute_name', 
        'region', 
        'provincia', 
        'distrito', 
        'modular_code', 
        'phone'
    ];
}
