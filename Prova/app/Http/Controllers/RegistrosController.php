<?php

namespace App\Http\Controllers;
use App\Models\Vacinas;
use App\Models\Registros;
use App\Models\Pessoas;
use App\Models\Unidades;
use App\Http\Requests\RegistrosRequest;

use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    private $objRegistros;
    private $objPessoas;
    private $objUnidades;
    private $objVacina;

    public function __construct()
    {
        $this->objRegistros = new Registros();
        $this->objPessoas = new Pessoas();
        $this->objUnidades = new Unidades();
        $this->objVacina = new Vacinas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Registros::orderBy('id')->get();
        return view('registros', ['registro'=> $registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoa = Pessoas::orderBy('id')->get();
        $unidade = Unidades::orderBy('id')->get();
        $vacina = Vacinas::orderBy('id')->get();

        return view('registros.create', ['pessoa'=> $pessoa, 'unidade'=> $unidade, 'vacina'=> $vacina]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrosRequest $request)
    {
        Registros::create($request->all());
        session()->flash('mensagem', 'Registro criado com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Registros $registro)
    {
        $pessoa = Pessoas::orderBy('id')->get();
        $unidade = Unidades::orderBy('id')->get();
        $vacina = Vacinas::orderBy('id')->get();
        return view('registros.edit', ['registro'=>$registro, 'pessoa'=>$pessoa, 'unidade'=>$unidade, 'vacina'=>$vacina]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistrosRequest $request, Registros $registro)
    {
        $registro->fill($request->all());
        $registro->save();

        session()->flash('mensagem', 'Registro atualizado com sucesso!');
        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registros $registro)
    {
        $registro->delete();
        session()->flash('mensagem', 'Registro excluído com sucesso!');
        return redirect()->route('registros.index');
    }
}
