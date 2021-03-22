<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'titolo', 'genere', 'autore', 'anno'
    ];
}
