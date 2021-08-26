<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacinas extends Model
{
    use HasFactory;
    public $timestamps = false;
     
    protected $table='vacinas';
    protected $fillable=['id', 'nome', 'fabricante', 'doses'];

    public function registros()
    {
        return $this->hasMany(Registros::class);
    }
}
