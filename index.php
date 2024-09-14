<?php
    $producto1 = [
        'imagen' => 'resources/img/card01.jpg',
        'titulo' => 'Delicias Recien Horneadas',
        'descripcion' => 'Disfruta de nuestros pasteles y panes horneados al día, elaborados con los mejores ingredientes para asegurar frescura en cada bocado.'];
        
    $producto2 = ['imagen' => 'resources/img/card02.jpg',
        'titulo' => 'Compartiendo Momentos',
        'descripcion' => 'Perfectos para cualquier ocasión, nuestros productos están diseñados para crear momentos especiales en familia o con amigos.'];
        
    $producto3 = [
        'imagen' => 'resources/img/card03.jpg',
        'titulo' => 'Ingredientes Naturales',
        'descripcion' => 'Todos nuestros productos están hechos con ingredientes frescos y locales, garantizando calidad en cada receta.'];
    $producto4 = [
        'imagen' => 'resources/img/card04.jpg',
        'titulo' => 'Innovacion y Sabores',
        'descripcion' => 'Descubre nuestras combinaciones únicas de sabores que sorprenderán a tu paladar y te harán volver por más.'];

    $producto5 = [
        'imagen' => 'resources/img/card05.jpg',
        'titulo' => 'Experiencia Gourmet',
        'descripcion' => 'Nuestro equipo de expertos ofrece una variedad de platillos diseñados para complacer a los paladares más exigentes.'];
    $producto6 = [
        'imagen' => 'resources/img/card06.jpg',
        'titulo' => 'Satisfaccion Garantizada',
        'descripcion' => 'Cada uno de nuestros productos está pensado para ofrecer la mejor experiencia gastronómica a nuestros clientes.'];
    

    $productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto6];
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <nav class="header">
        <div class="header-image">
            <img src="resources/img/logo.png" alt=""><span>Tiendas MAS</span>
        </div>
        <div class="header-redes">
            <i class="fab fa-facebook"></i> <span>Facebook</span>
            <i class="fab fa-whatsapp"></i> <span>Whatsapp</span>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resources/img/slide01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="resources/img/slide02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="resources/img/slide03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

    <div class="container">
        <h4 class="text-center">NUESTROS PRODUCTOS</h4>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
            <?php foreach ($productos as $producto) { ?>
                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="<?php echo $producto['imagen']; ?>" class="img-fluid w-100 rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $producto['titulo']; ?></h5>
                                    <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container-footer">
        <div class="container-direccion">
            <ul>
                <li><i class="fa-solid fa-signs-post"></i> <span>Jr. Amazonas 120</span> </li>
                <li> <i class="fa-solid fa-phone"></i> <span>123456789</span> </li>
            </ul>
        </div>
        <div class="container-derechos">
            <p>Todos Los Derechos Reservadors <strong> @JavierCM 2024. </strong></p>
        </div>
    </div >



    <script src="vendor/js/bootstrap.bundle.js"></script>
    <script src="vendor/js/bootstrap.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>