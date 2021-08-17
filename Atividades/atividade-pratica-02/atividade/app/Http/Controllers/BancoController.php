<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\Equipamentos;
use App\Models\User;
use App\Http\Requests\BancoRequest;

class BancoController extends Controller
{
    private $objEquipamento;

    public function __construct()
    {
        $this->objEquipamento=new Equipamentos();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamento = Equipamentos::orderBy('name')->get();
        return view('equipamentos.index', ['equipamento'=>$equipamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BancoRequest $request)
    {
        Equipamentos::create($request->all());
        session()->flash('mensagem', 'Estado cadastrado com sucesso!');
        return redirect()->route('equipamentos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamentos $equipamento)
    {
        return view('equipamentos.show', ['equipamento'=>$equipamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamentos $equipamento)
    {
        return view('equipamentos.edit', ['equipamento'=>$equipamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamentos  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BancoRequest $request, Equipamentos $equipamento)
    {
        $equipamento->fill($request->all());
        $equipamento->save();

        session()->flash('mensagem', 'Equipamento atualizado com sucesso!');
        return redirect()->route('equipamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamentos $equipamento)
    {
        $equipamento->delete();
        session()->flash('mensagem', 'Equipamento excluído com sucesso!');
        return redirect()->route('equipamentos.index');
    }
}
