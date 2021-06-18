@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1>Registro de Profesionales</h1>

    <div class="card" style="width: 15rem; margin: 20px auto;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <form action="{{url('/profesional')}}" method="post" enctype="multipart/form-data">
                <!-- se incluye la vista del formulario  -->
                @csrf
                @include('profesional.form')
                
                </form>
        </div>

        
    </div>
</div>




@endsection