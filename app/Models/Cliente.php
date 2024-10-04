<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'nome',
        'cognome',
        'cellulare',
        'email',
        'eta',
        'peso',
        'altezza',
        'massa_magra',
        'massa_grassa',
        'massa_ossea',
        'testa',
        'collo',
        'spalle',
        'petto',
        'bicipite_dx',
        'bicipite_sx',
        'avambraccio_dx',
        'avambraccio_sx',
        'polso_dx',
        'polso_sx',
        'vita',
        'fianchi',
        'coscia_dx',
        'coscia_sx',
        'polpaccio_dx',
        'polpaccio_sx',

    ];
}
