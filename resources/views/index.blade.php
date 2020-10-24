@extends("layouts.plantilla")

@section("cabecera")
	<nav class="navbar navbar-light bg-light justify-content-end">
  		<form class="form-inline">

  			<input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">

  			<select class="form-control mr-3">
  				<option>Título</option>
  				<option>Categoría</option>
  				<option>Autor</option>
			</select>

    		<button class="btn btn-outline-success mr-3" type="button">Loguearse</button>

    		<button class="btn btn-outline-success mr-3" type="button">Registrarse</button>
  		</form>
	</nav>
@endsection

@section("contenedor")
	<div class="album py-5 bg-light">
    	<div class="container">

    		<div class="row">

    		@foreach($libros as $libro)

        		<div class="col-md-4">
          			<div class="card mb-4 shadow-sm">
            			<img class="w-100" src="{{$libro->portada}}" alt="No hay foto" >
            			<div class="card-body">
              				<p class="card-text text-center">{{$libro->titulo}}</p>
              				<p class="card-text text-center">{{$libro->ficha_autor["nombre"]}}</p>
              				<p class="card-text text-center">{{$libro->precio}}€</p>
            			</div>
            		</div>
          		</div>

      		@endforeach

      		</div>

    	</div>
  	</div>
@endsection
