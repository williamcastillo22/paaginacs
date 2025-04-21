<?php
session_start();

// Bloquea acceso directo sin login
if (!isset($_SESSION['usuario']) || !isset($_SESSION['acceso_formulario']) || $_SESSION['acceso_formulario'] !== true) {
    header("Location: login.php");
    exit();
}

// Borra el permiso después de entrar

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<header class="header">
    <img src="../img/logo.png" alt="Logo de la empresa" class="imglogo">
    <nav class="nav"></nav>
</header>
<h2>Agregar nuevo producto</h2>
<p>Usuario: <?php echo $_SESSION['usuario']; ?> | <a href="../php/logout.php">Cerrar sesión</a></p>

<form action="../php/guardar.php" method="POST" enctype="multipart/form-data">
    <label for="imagen">Imagen del producto:</label>
    <input type="file" name="imagen" required><br>

    <label for="titulo">Título del producto:</label>
    <input type="text" name="titulo" placeholder="Nombre del producto" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" placeholder="Descripción breve del producto" required></textarea><br>

    <label for="precio">Precio:</label>
    <input type="number" name="precio" step="0.01" placeholder="Precio del producto" required><br>

    <label for="mensaje_whatsapp">Mensaje para WhatsApp:</label>
    <textarea name="mensaje_whatsapp" placeholder="Ej: Hola, estoy interesado en este producto..." required></textarea><br>

    <input type="submit" value="Guardar Producto">
    <a href="../php/menu.php" class="btn">Volver al Menú</a>
</form>

<footer class="footer">
    <p>&copy; 2025 Nuestra Empresa</p>
</footer>
</body>
</html>
