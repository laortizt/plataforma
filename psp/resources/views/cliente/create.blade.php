@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h4>Registro de Clientes</h4>

    <div class="card" style="width: 15rem; margin: 20px auto;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <form action="{{url('/cliente')}}" method="post" enctype="multipart/form-data">
                <!-- se incluye la vista del formulario  -->
                @csrf
                @include('cliente.form')
                
                </form>
        </div>

        
    </div>
</div>




@endsection