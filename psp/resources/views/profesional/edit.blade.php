@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1>Editar información de Profesionales</h1>

    <div class="card" style="width: 15rem; margin: 20px auto;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <form action="{{url('/profesional/'.$profesional->id)}}" method="post">
                <!-- se incluye la vista del formulario  -->
                @csrf
                {{method_field('PATCH')}}
                @include('profesional.form')
                
                </form>
        </div>

        
    </div>
</div>




@endsection