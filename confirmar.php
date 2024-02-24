<?php 

$nombre = $_POST["nombre"];


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISFT 130</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="Css/style.css" />
    <!-- ICONO EN PESTAÑA -->
    <link rel="icon" href="Images/LOGO-ISFT.png" />
  </head>
  <body>
      <!-- LINKS NAVEGACION -->
      <header class="header">
        <div class="logo">
          <a href="index.html"
            ><img src="Images/LOGO-ISFT.png" alt="Logo instituto"
          /></a>
        </div>
      </header>
      <!-- SECCION CONFIRMACION DE CONTACTO -->
      <section class="section-php">
        <div class="mensaje-php">
        <div class="confirmacion-nombre">
          <p>
            Hola <strong><?php echo $nombre?>!</strong>, muchas gracias por comunicarte con el Instituto Superior de Formación Técnica N° 130. Tu correo ha sido recibido correctamente y en las próximas horas obtendrás una respuesta en la casilla de mensaje del mail enviado a través del formulario.
          </p>
        </div>
        </div>
      </section>
  </body>
</html>
