<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamentos extends Model
{
    public $timestamps = false; 
    use HasFactory;
    protected $table='equipamentos';
    protected $fillable=['name'];

    public function relUsers(){
        return $this->hasOnde('App\Models\User','id', 'id');
    }
}
