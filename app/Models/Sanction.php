<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    use HasFactory;
    protected $table = "Straffe";
    protected $fillable = ['motif', 'montant', 'date', 'nom', 'etat'];
}
