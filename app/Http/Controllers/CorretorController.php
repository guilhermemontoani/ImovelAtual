<?php

namespace App\Http\Controllers;

use App\Corretor;
use Illuminate\Http\Request;

class CorretorController extends Controller
{

    /**
     * index - Exibir uma relaçao de registro na "tela"
     * create - Exibir um formulário HTML para ser solicitado dados ao usuário
     * store - Recebe os dados do formulário (via create) e envia para o BD.
     * show - Exibir uma página com os dados de um determinado registro.
     * edit - Exibir um formulário com os dados de um determinado registro.
     * update - Recebe os dados do formulário (via edit) e atualizado no BD.
     * destroy - Exclui um determinado registro do BD.
     */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corretores = Corretor::all();

        return view('corretores.index', compact('corretores'));
    }

    public function create()
    {
        return view('corretores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Corretor::create($request->all());

        return redirect()->route('corretores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function show(Corretor $corretor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function edit(Corretor $corretor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corretor $corretor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corretor $corretor)
    {
        //
    }
}
