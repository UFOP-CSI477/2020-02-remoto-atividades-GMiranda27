<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function calendario(){
        return view('calendario');
    }

    public function controle(){
        return view('controles');
    }

    public function cronometro(){
        return view('cronometro');
    }

    public function flashcards(){
        return view('flashcards');
    }

}
