<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cards;
use App\Http\Requests\CardsRequest;

class CardsController extends Controller
{
    private $objCards;

    public function __construct()
    {
        $this->objCards=new Cards();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Cards::orderBy('id')->paginate(1);
        return view('cards', ['cards'=>$cards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CardsRequest $request)
    {
        Cards::create($request->all());
        session()->flash('mensagem', 'Atividade cadastrada com sucesso!');
        return redirect()->route('cards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cards $card)
    {
        
        return view('cards.show', ['card'=>$card]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cards $cards)
    {
        //return view('cards.edit', ['cards'=>$cards]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CardsRequest $request, Cards $cards)
    {
        /*$cards->fill($request->all());
        $cards->save();

        session()->flash('mensagem', 'Atividade atualizada com sucesso!');
        return redirect()->route('cards.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cards $card)
    {
        $card->delete();
        session()->flash('mensagem', 'Atividade excluída com sucesso!');
        return redirect()->route('cards.index');
    }
}
