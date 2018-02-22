<?php
  //llamados css inicio.
  require 'model/route/css/route-css.php';
  //llamados css fin.

  //llamados js inicio.
  require 'model/route/js/route-js.php';
  //llamados js fin.

  //si no existe una sesion iniciada, me direcciona aqui, inicio.
  $_SESSION = false;
  if ($_SESSION == false) {
    $estado = 0;
  }
  if (!isset($_SESSION['sesion']) && ($_SESSION === false) && ($estado !== 1)) {
    include('view/index.php');
  }else {
    echo "algo salio mal";
  }
  //si no existe una sesion iniciada,me direcciona aqui, fin.

 ?>
