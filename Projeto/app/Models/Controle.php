<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controle extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $table='controle';
    protected $fillable=['atividade','descricao','data'];

}
