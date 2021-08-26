<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;
use App\Http\Requests\PessoasRequest;

class PessoasController extends Controller
{
    private $objPessoas;

    public function __construct()
    {
        $this->objPessoas = new Pessoas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa = Pessoas::orderBy('nome')->get();
        return view('pessoas', ['pessoa'=>$pessoa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Pessoas $pessoa)
    {
        return view('pessoas.edit', ['pessoa'=>$pessoa]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PessoasRequest $request, Pessoas $pessoa)
    {
        $pessoa->fill($request->all());
        $pessoa->save();

        session()->flash('mensagem', 'Pessoa atualizada com sucesso!');
        return redirect()->route('pessoas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
