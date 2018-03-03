  <link rel="shortcut icon" href="model/img/logo/Logo-Diclase.ico">
<?php
  //llamados css.
  include 'model/route/css/route-css.php';

  //llamados js.
  include 'model/route/js/route-js.php';

  //si no existe una sesion iniciada, me direcciona aqui, inicio.
  $mantenimiento = false;
  if ($mantenimiento == true) {
    echo "<h1>pagina en mantenimiento</h1>";
  }
  elseif (!isset($_GET['sesion']) && ($mantenimiento == false)){
      include('view/index.php');
  }
  elseif(isset($_GET['sesion']) && $_GET['sesion']=="universidad"){
    include('view/1universidades/index.php');
  }
  elseif(isset($_GET['sesion']) && $_GET['sesion']=="educacion"){
    include('view/2liceos/index.php');
  }
  elseif(isset($_GET['sesion']) && $_GET['sesion']=="cursos"){
    include('view/3cursos/index.php');
  }
  elseif(isset($_GET['sesion']) && $_GET['sesion']=="/"){
    include('(core.php)');
  }
 ?>
