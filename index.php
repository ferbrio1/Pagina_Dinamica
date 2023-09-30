<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Guanajuato</title>
    <style>
        .bottom-image {
            display: block;
            margin: 20px auto;
        }
        body {
            font-family: 'Arial', sans-serif;
            color: #fff;
            background-color: #ff5733;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            display: inline-block;
            margin: 0 10px;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-size: 1.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        form {
            margin-top: 50px;
        }

        input {
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 200px;
        }

        input[type="submit"] {
            background-color: #ff5733;
            color: #fff;
            cursor: pointer;
            font-size: 1em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        input[type="submit"]:hover {
            background-color: #e14c2e;
        }

        a.logout-btn {
            display: block;
            text-align: center;
            font-size: 1.5em;
            margin-top: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
<img src="imagen1.jpg" alt="Imagen 1" class="bottom-image">
<?php
if(isset($_SESSION["usuario"])) {
    echo "<h1>Bienvenido/a, " . $_SESSION["usuario"] . "!</h1>";
    echo "<ul>
            <li><a href='historia.php'>Historia</a></li>
            <li><a href='cultura.php'>Cultura</a></li>
            <li><a href='gastronomia.php'>Gastronomía</a></li>
            <li><a href='turismo.php'>Turismo</a></li>
          </ul>";
    echo "<a href='cerrar_sesion.php'>Cerrar Sesión</a>";
} else {
    echo "<h1>Bienvenido a Guanajuato</h1>
          <form action='login.php' method='post'>
              Usuario: <input type='text' name='usuario'><br>
              Contraseña: <input type='password' name='contrasena'><br>
              <input type='submit' value='Iniciar Sesión'>
          </form>";
}

?>

</body>
</html>
