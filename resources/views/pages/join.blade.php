@extends('master')

@section('titulo')
	Registrate
@stop

@section('body')

		<div id="registroUsuario">
			<div id="registroTitulo">
				<h1>Crea tu cuenta</h1>
			</div>
			
			<div id="registroDatos">

				<div class="registros"><input type="text" class="form-control" placeholder="Nombre"></div>
				<div class="registros"><input type="text" class="form-control" placeholder="Apellidos"></div>
				<div class="registros"><input type="text" class="form-control" placeholder="...ejemplo@correo.com"></div>
				<div><input type="password" class="form-control" placeholder="Contraseña"></div>
				<div><input type="password" class="form-control" placeholder="Confirme Contraseña"></div>
				
				
				<div class="radio" align="left">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				    Hombre
				  </label>
				</div>
				<div class="radio" align="left">
				  <label>
				    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				    Mujer
				  </label>
				</div>	
				<div class="conteiner">
				<button type="button" class="btn btn-primary">Crear Cuenta</button>
				</div>

			</div>
		</div>
@stop

