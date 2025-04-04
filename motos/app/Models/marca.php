<?php

namespace App\Models;

use App\Models\Pais;
use Illuminate\Database\Eloquent\Model;

class marca extends Model{

    protected $fillable = ['nombre','logo','pais_id','año','activo','terminacion'];

    public function pais() {
        return $this->belongsTo(pais::class);
    }
}
