<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bootmailer extends Model
{
    use HasFactory;
    protected $table = 'bootmailer';
    protected $fillable = [
        'email',
        'etat_email',
        'nb_demmande',
        
    ];
}
