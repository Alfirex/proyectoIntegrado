<?php
	include '../lib/dietas.php';
	$dietas=new dietas();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Dietas</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/master.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="modificarDietas.js"></script>
  </head>
  <body>
    <header>
  		<div class="container-fluid">
        <img style="float:left; width:108px; height:61px;" src="./img/logo.png" >
  			<h1 >Panel de Administracion</h1>
				<ul style="position:absulute; float:right; margin-right:50px; ">
					<li style="position:absulute; float:right; "><a href="#"><i class="glyphicon glyphicon-log-out "></i> Salir </a></li>
				</ul>
  		</div>

  	</header>
  <div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-4">
	      <nav class="navbar navbar-inverse">
	        <div class="container-fluid">
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	            <span class="visible-xs navbar-brand">Menu</span>
	          </div>
	          <div class="navbar-collapse collapse sidebar-navbar-collapse">
	          <div class="navbar-header">
	            <a class="navbar-brand" href="#">DietPlus+</a>
	          </div>
	          <ul class="nav navbar-nav navcolor">
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"></span>Agregar <span class="glyphicon glyphicon-plus"></span></a>
	              <ul class="dropdown-menu">
									<li><a href="agregarDietas.php">Dietas</a></li>
	                <li><a href="agregarEjercicios.php">Ejercicios</a></li>
	                <li><a href="agregarNoticias.php">Noticias</a></li>
	              </ul>
	            </li>
	            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Modificar <span class="glyphicon glyphicon-play"></span></a>
	              <ul class="dropdown-menu">
									<li><a href="modificarDietas.php">Dietas</a></li>
	                <li><a href="modificarEjercicios.php">Ejercicios</a></li>
	                <li><a href="modificarNoticias.php">Noticias</a></li>
	              </ul>
	            </li>
	            <li><a href="listadoUsuario.php">Lista de Usuarios</a></li>
	          </ul>
	        </div>
	        </div>
	      </nav>
	    </div>
	    <!-- Contenido del panel de administracion -->
	    <section class="col-sm-8 contenido" >
	      <article style="color:#5cb8b5; margin:25px; padding:5px;">
	        <h1 >Modificar Y/O Eliminar Dietas</h1>
	        <table class="table table-responsive table-hover table-striped">
	          <tr>
	            <td>Id</td>
	            <td>Nombre</td>
	            <td>Descripcion</td>
							<td>Categoria</td>
							<td>Eliminar</td>
							<td>Modificar</td>
	          </tr>
	        <?php
	          $tabla=$dietas->MostrarDietas();
	          while($fila=mysqli_fetch_array($tabla)){
	            /*$fila[0]==IdDietas*/ /*$fila[1]==Nombre*/ /*$fila[2]==Descripcion*/ /*$fila[3]==Categoria*/ /*$fila[4]==Fecha*/
	            echo '
	            <tr>
	              <td>
	                <input type="hidden" value="'.$fila[0].'">'.$fila[0].'
	              </td>
	              <td><input type="text" class="nombre" value="'.$fila[1].'"></td>
	              <td><input type="text" class="descripcion" value="'.$fila[2].'"></td>
								<td>
										<select  class="categoria">
												<option value="'.$fila[3].'">Actual:'.$fila[3].'</option>
												<option value="vegetariana">Vegetariana</option>
					              <option value="hipocaloricas">Hipocaloricas</option>
					              <option value="hipercaloricas">Hipercaloricas</option>
					              <option value="carnivoras">Carnivoras</option>
					              <option value="proteinicas">Proteinicas</option>
										</select>
								</td>
	              <td><button class="eliminar btn btn-danger" data-id="'.$fila[0].'">Eliminar</button></td>
	              <td><button class="modificar btn btn-warning" data-id="'.$fila[0].'">Modificar</button></td>
	            </tr>';
	          }
	        ?>
	      </table>
	      </article>
	  </div>
  </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
