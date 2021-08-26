<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $table='unidades';
    protected $fillable=['id', 'nome', 'bairro', 'cidade'];

    public function registros()
    {
        return $this->hasMany(Registros::class);
    }
}
