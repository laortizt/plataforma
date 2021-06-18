<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros['clientes']=Cliente::paginate(20);
        return view('cliente.index', $registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        // $cliente=Cliente::all();
        // // $data=array("cliente"=>$cliente);
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        //validar los formularios
        $campos=[
            'name'=>'required|strig|max:50',
            'email'=>'required|strig|max:100',
            'country'=>'required|string|max:50',
            'photo'=>'required|string|max:500|mimes:jpg,jpeg,png',
        ];
        $this->valide($request, $campos);

        $datoscliente=request()->except('_token');

        // ver si la foto está llegando
        if($request->hasFile('photo')){
            $datoscliente['photo']=$request->file('photo')->store('uploads', 'public');
        }
        Cliente::insert($datoscliente);
        // return response()->json($datoscliente);
        return redirect('cliente')->with('msn','Cliente registrado exitosamente');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datoscliente=request()->except('_token','_method');

        if($request->hasFile('photo')){
            $cliente=Cliente::findOrFail($id);
            Storage::delete('public/'.$cliente->photo);
            $datoscliente['photo']=$request->file('photo')->store('uploads', 'public');
            // $request->file('photo')->storeAs('public/uploads', $datoscliente['photo']);
        }

        Cliente::where('id','=',$id)->update($datoscliente);
        return redirect('cliente')->with('msn','Cliente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        
        if(Storage::delete('public/'.$cliente->photo)){
            Cliente::destroy($id);
        }
        return redirect('cliente')->with('msn','Cliente eliminado exitosamente');
    }
}
