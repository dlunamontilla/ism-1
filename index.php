<?php
  include __DIR__ . "/componentes/master.php";
?>
<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Metadatos de la página -->
    <meta property="og:title" content="Gonzalo & Fernanda" />
    <meta property="og:description" content="De muchas aventuras juntos, nosotros Fernanda y Gonzalo queremos compartir con ustedes una de las más bonitas. Nuestra Boda." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="vista/images/banner_principal/Perfil.jpg" />

    <title>Gonzalo & Fernanda</title>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="recursos/extensiones/css/bootstrap.min.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Arizonia&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet"> 
    <!-- Font Asesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="recursos/extensiones/otras/fontawesome-free-5.5.0-web/css/all.css"> -->
    
    <!-- Estilos principales -->
    <!-- <link rel="stylesheet" href="vista/css/fonts.css?v=1.1"> -->
    <link rel="stylesheet" href="vista/css/style.css?v=2.0">

    <!-- Favicon -->
    <link rel="icon" sizes="any" href="favicon.png" type="image/png">

    <!-- Recaptcha de Google -->
    <script src="https://www.google.com/recaptcha/api.js?explicit&es=es" async defer></script>
  </head>
  
  <body>
    <main class="main">
      
      <?= $header ?>

      <?= $content; ?>

    </main>

    <?= $modal; ?>
    
    <?= $javascript; ?>

  </body>
</html>