<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;
    public $timestamps= false;

    protected $fillable=['email','email','name','adress','city','zip','state','comment'];
}
