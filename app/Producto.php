<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // public $table = "producutos";
    // public $id = "id";
    // public $timestamps = false;
    public $guarded = [];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
}
