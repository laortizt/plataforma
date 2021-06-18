@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1>Listado Profesionales</h1>

   

    @if(Session::has('msn'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('msn')}}!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="mb-3">
    <a class="btn btn-primary" href="{{url('/profesional/create')}}" role="button">Nuevo</a>
    </div>
    <table class="table table-dark table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Pais</th>

                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profesionals as $p)
            <tr>
                <th scope="row">{{$p->id}}</th>
                <td><img src="{{asset('storage').'/'.$p->photo}}" width="80px" class="img-fluid  rounded-circle border border-5 border-light"></td>
                <td>{{$p->name}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->telephone}}</td>
                <td>{{$p->country}}</td>
                <td>
                    <a class="btn btn-primary" href="{{url('/profesional/'.$p->id.'/edit')}}" role="button">Editar</a>
                </td>

                <td>
                    <form action="{{url('/profesional/'.$p->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Borrar" onclick="return confirm('¿Esta seguro de eliminar el registro?')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection