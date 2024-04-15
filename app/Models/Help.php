<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;

    protected $table = "Aide";
    protected $fillable = ['id_aide','type_aide', 'montant', 'date_versement', 'beneficiaire', 'remis'];
}
