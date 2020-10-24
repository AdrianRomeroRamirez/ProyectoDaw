<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function registrado()
    {
        return $this->hasOne("App\Models\Registrado");
    }

    public function administrador()
    {
        return $this->hasOne("App\Models\Administrador");
    }

    public function editorial()
    {
        return $this->hasOne("App\Models\Editorial");
    }

}
