<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';


    public function relUsers(){// Método para relacionar a tabela usuários com a books
        return $this->hasOne('App\Models\User','id','id_user');
    }
}

