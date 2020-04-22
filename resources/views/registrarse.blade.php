@extends('plantilla')
@section('title')
  Registrarse
@endsection
@section('estilo2')
  "\css\backgroundBlue.css"
@endsection
@section('main')

  		<H1>Abrir una cuenta</H1>
  		<h4>¿Ya eres un usuario ?<a href="login">Inicia sesiòn</a></h4>
  		<br>
  		<form action="registrarse.php" method="POST">
  			<div class="form-row">
  				<div class="form-group col-md-6">
  					<label for="nombre">Nombre</label>
  					<input type="text" name="nombre" class="form-control" id="inputnombre4" placeholder="Escriba su Nombre" value="" required>
  					<small></small>
  				</div>
  				<div class="form-group col-md-6">
  					<label for="apellido">Apellido</label>
  					<input type="text" name="apellido" class="form-control" id="inputApellido4" placeholder="Escriba aqui su apellido" value="" required>
  					<small></small>
  				</div>
  			</div>
  			<div class="form-group">
  				<label for="email">Correo Electronico</label>
  				<input type="email" name="email" class="form-control" id="inputCorreo" placeholder="Escriba aqui su email" value="" required>
  				<small></small>
  			</div>

  			<div class="form-group">
  				<label for="password">Contraseña</label>
  				<input type="password" name="password" class="form-control" id="password" placeholder="Escriba su Contraseña" required>
  				<small></small>
  			</div>


        <div class="">
        <label for="Foto">Foto de perfil en png o jpg </label>
        <form enctype="multipart/form-data" action="uploader.php" method="POST">
         <input name="uploadedfile" type="file" />
         <input type="submit" value="submit">
         	<input type="reset" value="reset">


          <div class="clearfixx">
            <label class="pull-left checkbox-inline"><input type="checkbox" id="Remember" name="Remember"> Remember me</label>


  			<p>
  				Al crear una cuenta aceptas nuestras Condiciones de uso y Aviso de Privacidad.
  			</p>
        <br>

  		</form>
    </form>
  </div>
@endsection
