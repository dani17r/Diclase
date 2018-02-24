  <?php
  //llamados css.
  include 'model/route/css/route-css.php';

  //llamados js.
  include 'model/route/js/route-js.php';

  //si no existe una sesion iniciada, me direcciona aqui, inicio.
  $_SESSION = false;
  if ($_SESSION == false){
    $estado = 0;
  }

  if (!isset($_SESSION['sesion']) && ($_SESSION === false) && ($estado !== 1)){
      include('view/index.php');
  }else {
      echo "algo salio mal";
    }
  //si no existe una sesion iniciada,me direcciona aqui, fin.

 ?>
