<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../CSS/Style.css" rel="stylesheet" type="text/css">
  <title>Document</title>
  <?php include("../IMG/iconosSVG/iconos-sistema.php");?>
</head>
<body class="column">
  <?php include ("../IMG/iconosSVG/iconos-lenguajes.php");?>
  <div class="menu"><?php include ("../maquetacion/menu.php");?></div>
  <main class="column">
    <header class="portada maxW"><?php include ("../maquetacion/header.php");?></header>
    <section class="maxW">
      <?php include ("../maquetacion/contenido.php");?>
    </section>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../javaScript/alerta.js"></script>
  </main>
</body>
</html>