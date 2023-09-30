<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if ($usuario === "fernanda" && $contrasena === "19240569") {
        $_SESSION["usuario"] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        $mensaje = "Credenciales inválidas. Intenta de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffecd1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #ff5733;
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ff5733;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #e14c2e;
        }

        .error-message {
            color: #ff0000;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        
        <?php
        if(isset($mensaje)) {
            echo "<div class='error-message'>$mensaje</div>";
        }
        ?>

        <form action="" method="post">
            Usuario: <input type="text" name="usuario"><br>
            Contraseña: <input type="password" name="contrasena"><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>
