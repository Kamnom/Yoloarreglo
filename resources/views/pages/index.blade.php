@extends('master')

@section('titulo')
	YoLoArreglo
@stop

@section('body')
	

	<div id="main-index">
		
		<div id="portada">
			<div>
				<img src="{{ asset('img/we-can-fix-it.jpg') }}">
			</div>
		</div>

		<div id="noticias" >
				<div id="titulo-noticia">
					<a href="" class="icon-news"><span>Noticias</span></a>
				</div>
				
					<section class ="posts">
				@foreach ($noticias as $noticia)
						
					<article class="post clearfix">
						<h2 class="post-title">
							<a href="#">{{$noticia->titulo}}</a>
						</h2>
						<p><span class="post-fecha">{{$noticia->fecha}}</span> por <span class="post-autor"><a href="#">Yoloarreglo</a></span></p>
						<p class="post-contenido text-justify">
							{{$noticia->encabezado}}
						</p>
					</article>

				@endforeach	

					</section>
			
		</div>
	
	</div>

@stop

