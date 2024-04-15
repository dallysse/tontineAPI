<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    use HasFactory;
    protected $table = "Pret";
    protected $fillable = ['datePret','duree', 'montant', 'dateRemboursement', 'beneficiaire','rembourser'];
}
