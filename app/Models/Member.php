<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = "Membre";
    protected $fillable = ['nom', 'prenom', 'formation', 'date_naissance'];
}
