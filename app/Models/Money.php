<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;
    protected $table = "Caisse";
    protected $fillable = ['motif', 'montant', 'date', 'nom'];
}
