<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nachricht extends Model
{
    protected $fillable = [
        'name',
        'email',
        'kurs',
        'teilnahme',
        'datenschutz',
        'startdatum',
        'bemerkung',
        'interessen',
    ];

    protected $casts = [
        'datenschutz' => 'boolean',
        'interessen'  => 'array',
    ];
}
