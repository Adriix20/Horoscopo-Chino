<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Horóscopo chino</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      
      h1 {
        color: #333;
        text-align: center;
      }
      
      form {
        text-align: center;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
      }
      
      img {
        display: block;
        margin: 0 auto;
        border-radius: 50%;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
      }
      
      p {
        text-align: center;
        font-size: 24px;
        margin-top: 20px;
      }
      
      .error {
        color: red;
        text-align: center;
        font-size: 24px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <h1>Horóscopo chino</h1>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anio = $_POST["anio"];
        $animal = "";
        
        switch (($anio - 4) % 12) {
          case 0:
            $animal = "Rata";
            $imagen = "img/rata.jpg";
            break;
          case 1:
            $animal = "Buey";
            $imagen = "img/buey.jpg";
            break;
          case 2:
            $animal = "Tigre";
            $imagen = "img/tigre.jpg";
            break;
          case 3:
            $animal = "Conejo";
            $imagen = "img/conejo.jpg";
            break;
          case 4:
            $animal = "Dragón";
            $imagen = "img/dragon.jpg";
            break;
          case 5:
            $animal = "Serpiente";
            $imagen = "img/serpiente.jpg";
            break;
          case 6:
            $animal = "Caballo";
            $imagen = "img/caballo.jpg";
            break;
          case 7:
            $animal = "Cabra";
            $imagen = "img/cabra.jpg";
            break;
          case 8:
            $animal = "Mono";
            $imagen = "img/mono.jpg";
            break;
          case 9:
            $animal = "Gallo";
            $imagen = "img/gallo.jpg";
            break;
          case 10:
            $animal = "Perro";
            $imagen = "img/perro.jpg";
            break;
          case 11:
            $animal = "Cerdo";
            $imagen = "img/cerdo.jpg";
            break;
          default:
            echo "<p>Introduce un año válido</p>";
            exit();
        }
        echo "<p>Tu año de nacimiento es: " . $anio . "</p>";
        echo "<p>Tu animal del horóscopo chino es: " . $animal . "</p>";
        echo "<img src='" . $imagen . "' width='200' height='200'>";
      }
    ?>
  </body>
</html>