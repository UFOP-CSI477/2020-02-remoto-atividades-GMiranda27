<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table='registros';
    protected $fillable=['id', 'pessoa_id', 'unidade_id', 'vacina_id', 'dose', 'data'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoas::class);
    }
    public function vacina()
    {
        return $this->belongsTo(Vacinas::class);
    }
    public function unidade()
    {
        return $this->belongsTo(Unidades::class);
    }

}
