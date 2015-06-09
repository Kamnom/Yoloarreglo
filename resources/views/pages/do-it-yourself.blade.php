@extends('master')

@section('titulo')
Arreglalo
@stop

@section('body')


	<div id="tutoriales-main">
		
	<div id="tutoriales-titulo">
		<a href="" class="icon-tools"> <span>Tutoriales de Reparacion</span></a>
	</div>

	<div id="tutoriales">


			@foreach ($dispositivos as $dispositivo)

				<a href="/Yoloarreglo/public/Tutoriales/{{$dispositivo->marca}}">{{$dispositivo->marca}}</a>

			@endforeach


		

	</div>










	</div>



@stop 
