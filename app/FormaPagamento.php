<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formapagamento extends Model
{
    protected $table = 'forma_pagamento';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome'
    ];
}
