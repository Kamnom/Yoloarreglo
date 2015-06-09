@extends('master')

@section('titulo')
Tienda
@stop

@section('body')


	<div id="tienda-main">
		
	<div id="tienda-titulo">
		<a href="" class="icon-shopping-bag"> <span>Tienda</span></a>
	</div>

	<div id="articulos">


			@foreach ($dispositivos as $dispositivo)

				<a href="#">N/A</a>

			@endforeach


		

	</div>










	</div>



@stop 
