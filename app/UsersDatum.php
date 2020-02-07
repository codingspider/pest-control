<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UsersDatum extends Model
{
    protected $fillable = [
        'name', 'email'
    ];
}
