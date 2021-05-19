@extends('layouts.app')

@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <section class="">
        <div class="card ">
        <div class="card-body ">
            <img class="w-100 card-img-top " src="https://images.pexels.com/photos/3184419/pexels-photo-3184419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            <div class="card-img-overlay ">
            <form class="d-flex  w-50 d-flex ">
                <input class="form-control me-2 mr-2" type="search" placeholder="Escribe la catégoria" aria-label="Search">
                
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </div>
    </section>

    <section> </section>
</body>
<footer>

</footer>

</html>

@endsection