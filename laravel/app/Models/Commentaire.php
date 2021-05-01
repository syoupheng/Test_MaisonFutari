<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Etablissement;

class Commentaire extends Model
{
    protected $table = 'commentaire';
    use HasFactory;

    public function auteur_rel() {
        return $this->hasOne(User::class, 'id', 'auteur');
    }

    public function etablissement_rel() {
        return $this->hasOne(Etablissement::class, 'id', 'etablissement');
    }
}
