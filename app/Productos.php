<?php

namespace Distry;

use Distry\Categoria;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public function categorias(){
        return $this->belongsTo(Categoria::class,'id', 'id_categoria');
    }

}
