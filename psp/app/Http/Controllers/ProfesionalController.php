<?php

namespace App\Http\Controllers;

use App\Profesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    /** nosmbre profionals es de la base de datos*/
    {$registros['profesionals']=Profesional::paginate(20);
        return view('profesional.index', $registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesional.create');
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
            'telephone'=>'required|string|max:50',
            'country'=>'required|string|max:50',
            'photo'=>'required|numeric',
        ];
        $this->validate($request, $campos);

        // $datosprofesional=request()->all();
        $datosprofesional=request()->except('_token');

        // ver si la foto está llegando
        if($request->hasFile('photo')){
            $datosprofesional['photo']=$request->file('photo')->store('uploads', 'public');
        }

        Profesional::insert($datosprofesional); 
        // return response()->json($datosprofesional);
        return redirect('profesional')->with('msn','Profesional registrado exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function show(Profesional $profesional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $profesional=Profesional::findOrFail($id);
        return view('profesional.edit',compact('profesional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoscliente=request()->except('_token','_method');

        if($request->hasFile('photo')){
            $profesional=Profesional::findOrFail($id);
            Storage::delete('public/'.$profesional->photo);
            $datosprofesional['photo']=$request->file('photo')->store('uploads','public');
        }
        Profesional::where('id','=',$id)->update($datosprofesional);
        return redirect('profesional')->with('msn','Cliente actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profesional::destroy($id);
        return redirect('profesional')->with('msn','Cliente eliminado exitosamente');
    }
}
