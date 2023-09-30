<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}
$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<?php
$usuario = "NombreUsuario"; // Reemplaza 'NombreUsuario' con el nombre que desees mostrar.
$pagina = "Guanajuato";
?>

<body>
    <h1>Bienvenido, <?php echo $usuario; ?>! Aquí encontrarás información sobre <?php echo $pagina; ?>.</h1>
</body>

</html>
