<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    use HasFactory;
    public $timestamps = false;
     
    protected $table='pessoas';
    protected $fillable=['id', 'nome', 'bairro', 'cidade', 'data_nascimento'];

    public function registros()
    {
        return $this->hasMany(Registros::class);
    }
}
