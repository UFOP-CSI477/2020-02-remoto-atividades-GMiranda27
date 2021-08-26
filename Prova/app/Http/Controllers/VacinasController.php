<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacinas;
use App\Http\Requests\VacinasRequest;

class VacinasController extends Controller
{
    private $objVacinas;

    public function __construct()
    {
        $this->objVacinas = new Vacinas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacinas = Vacinas::orderBy('nome')->get();
        return view('vacinas', ['vacinas'=>$vacinas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacinasRequest $request)
    {
        Vacinas::create($request->all());
        session()->flash('mensagem', 'Vacina cadastrada com sucesso!');
        return redirect()->route('vacinas.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
