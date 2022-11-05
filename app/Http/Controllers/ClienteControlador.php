<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $regras=[
        'nome'=>'required|min:3|max:40',
        'idade'=>'required|max:3',
        'endereco'=>'required|min:6',
        'email'=>'required|email|min:6|unique:clientes'
      ];
      $mensagens =[
        // required usado pra todos campos :atribute.
        'required' => 'o atributo :attribute não pode esta em branco',
        'nome.required' =>'Digite seu nome ',
        'nome.min' =>'É necessario no minimo 3 caacteres',
        'nome.max' =>'É necessario no mamixo 40 caacteres',
        'idade.required' =>'Digite sua idade',
        'idade.max' =>'A idade tem no maximo 3 digitos',
        'endereco.required' =>'Digite um endereço',
        'endereco.min' =>'o endereço nâo valido minimo 6 caracteres',
        'email.required' =>'Digite um email',
        'email.email' =>'o email é requerido no formado valido',
        'email.min' =>'o email é requerido com no minimo 6 caracteres',
       'email.unique' =>'email já esta sendo utilizado,por favor digite um novo'

      ];
     $request->validate($regras,$mensagens);
     /* $request->validate([
        'nome'=>'required|min:3|max:40',
        'idade'=>'required|max:3',
        'endereco'=>'required|min:6',
        'email'=>'required|email|min:6|unique:clientes'
      ]);
*/
      $cliente = new Cliente();
      $cliente->nome = $request->input('nome');
      $cliente->idade = $request->input('idade');
      $cliente->endereco = $request->input('endereco');
      $cliente->email = $request->input('email');
      $cliente->save();
      return redirect('/');;

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
