  <link rel="shortcut icon" href="model/img/logo/Logo-Diclase.ico">
<?php
 session_start();
  //llamados css.
  include 'model/route/css/route-css.php';

  //llamados js.
  include 'model/route/js/route-js.php';

  //si no existe una sesion iniciada, me direcciona aqui, inicio.
  $_GET = false;
  if ($_GET == false){
    $estado = 0;
  }

  if (!isset($_GET['section']) && ($_GET === false) && ($estado !== 1)){
      include('view/index.php');
  }elseif( isset($_GET['section']) && ($_GET['section']=="Educacion")){
    include('view/a_liceos/index.php');
  }else {
      echo "algo salio mal";
  }
 ?>
