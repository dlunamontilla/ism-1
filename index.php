<?php
  include __DIR__ . "/componentes/master.php";
?>
<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gonzalo & Fernanda</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="recursos/extensiones/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- Fuentes -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap&subset=latin-ext" rel="stylesheet"> -->

    <!-- Estilos principales -->
    <link rel="stylesheet" href="vista/css/fonts.css">
    <link rel="stylesheet" href="vista/css/style.css?v=1.3">
  </head>
  
  <body>
    <main class="main">
      
      <?= $header ?>

      <?= $we; ?>
      
    </main>

    <?= $javascript; ?>

  </body>
</html>