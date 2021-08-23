<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Controle;
use App\Http\Requests\ControleRequest;

class ControleController extends Controller
{
    private $objControles;

    public function __construct()
    {
        $this->objControles=new Controle();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controle = Controle::orderBy('id')->get();
        return view('controle', ['controle'=>$controle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ControleRequest $request)
    {
        Controle::create($request->all());
        session()->flash('mensagem', 'Atividade cadastrada com sucesso!');
        return redirect()->route('controle.index');
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
    public function edit(Controle $controle)
    {
        return view('controle.edit', ['controle'=>$controle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ControleRequest $request, Controle $controle)
    {
        $controle->fill($request->all());
        $controle->save();

        session()->flash('mensagem', 'Atividade atualizada com sucesso!');
        return redirect()->route('controle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Controle $controle)
    {
        $controle->delete();
        session()->flash('mensagem', 'Atividade excluída com sucesso!');
        return redirect()->route('controle.index');
    }
}
