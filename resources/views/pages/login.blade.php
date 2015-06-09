@extends('master')

@section('titulo')
  Ingresa
@stop

@section('body')


   

    <div id="iniciaSesion">
      <div id="iniciaSesionTitulo">
        <h1 align="center">Inicia con tu Cuenta</h1>
      </div>
      <br>
           <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">Contraseña</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Recuerdame
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Iniciar Sesion</button>
            </div>
          </div>
        </form>

        

      
    </div>


@stop
