<?php
include("php/conexion.php");
$resultado = mysqli_query($conexion, "SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Venta de Materiales de Construcción</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
    <img src="img/logo.png" alt="Logo de la empresa" class="imglogo">
    <nav class="nav">
        <ul class="nav__menu">
            <li class="nav__item"><a href="index.php" class="nav__link">Inicio</a></li>
            <li class="nav__item"><a href="html/nosotros.html" class="nav__link">Nosotros</a></li>
            <li class="nav__item"><a href="html/contacto.html" class="nav__link">Contacto</a></li>
        </ul>
    </nav>
</header>

<main class="main">
    <section class="products">
        <h2 class="products__title">Nuestros Productos</h2>
        <div class="products-grid">
            <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                <article class="producto">
                    <img src="<?php echo $fila['imagen']; ?>" alt="Imagen del producto">
                    <strong><?php echo $fila['titulo']; ?></strong>
                    <p><?php echo $fila['descripcion']; ?></p>
                    <p><strong>Precio:</strong> $<?php echo $fila['precio']; ?></p>
                    <a href="https://wa.me/+524811440849?text=<?php echo urlencode($fila['mensaje_whatsapp'] ?? 'Hola, me interesa este producto'); ?>" class="btn" target="_blank">Consultar por WhatsApp</a>
                </article>
            <?php } ?>
        </div>
    </section>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3698.077031026817!2d-98.87331592566329!3d22.046648652043462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d64082fc99ea19%3A0xdeb86b4d6c28c382!2sCEMEX%20Tamu%C3%ADn!5e0!3m2!1ses-419!2smx!4v1740862617861!5m2!1ses-419!2smx"
        style="border:0; width: 100%; height: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<footer class="footer">
    <div class="footer__social">
        <a href="#" class="footer__link">Facebook</a>
        <a href="#" class="footer__link">Instagram</a>
        <a href="#" class="footer__link">Twitter</a>
        <a href="#" class="footer__link">Tik Tok</a>
    </div>
    <p>&copy; 2025 Nuestra Empresa</p>
</footer>
</body>
</html>