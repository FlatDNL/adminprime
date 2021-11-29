<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 
        'email', 
        'ctDemoFX', 
        'ctDemoB3', 
        'ctDemoCOPY',
        'ctRealFX', 
        'ctRealB3', 
        'ctRealCOPY',
        'expiracaoFX', 
        'expiracaoB3', 
        'expiracaoCOPY',
        'empresa'
    ];
}
