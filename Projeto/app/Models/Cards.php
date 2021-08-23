<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $table='cards';
    protected $fillable=['name','descricao'];
}
