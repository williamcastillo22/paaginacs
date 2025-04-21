<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    
<header class="header">
    <img src="../img/logo.png" alt="Logo de la empresa" class="imglogo">
    <nav class="nav"></nav>
</header>

<main class="admin-container">
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> 👋</h1>
    <div class="admin-buttons">
        <a href="../php/formulario.php" class="btn">Registrar Producto</a>
        <a href="../php/borrar.php" class="btn">Eliminar Producto</a>
        <a href="../php/logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</main>

<footer class="footer">
    <p>&copy; 2025 Nuestra Empresa</p>
</footer>
</body>
</html>