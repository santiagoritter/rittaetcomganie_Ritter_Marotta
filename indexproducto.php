<?php
    session_start();
    $servername = "127.0.0.1";
    $database = "ritta";
    $username = "alumno";
    $password = "alumnoipm";

    $conexion = mysqli_connect($servername, $username, $password, $database);

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    } else {
        $consultas = "SELECT * FROM perfume where id = ".$_GET['id'].";";
        $resultado = mysqli_query($conexion, $consultas);
        $fila = mysqli_fetch_assoc($resultado);
    }

    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesproductos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<section class="menudesplegable">
            <div class="dropdown">
                <img src="menu.png" alt="" onclick="toggleMenu()" class="dropbtn">
                <div id="myDropdown" class="dropdown-content">
                    <div>
                        <a href="#fin"><p  class="Nosotros">Nosotros</p></a>
                    </div>
                    <div class="rango">
                        <div class="precio">
                            <p>Precio</p>
                        </div>
                        <div class="input">
                            <div class="max"> <p>max </p> <input type="number"></div>
                            <div class="min"> <p>min </p> <input type="number"></div>
                        </div>
                    </div>
                    <div class="submenu">
                        <p class="perfumes_menu">Perfumes</p>
                        <div class="submenu-content">
                            <p>florales</p>
                            <p>amaderados</p>
                            <p>dulces</p>
                            <p>amargos</p>
                        </div>
                        
                    </div>
                    <div class="iniciar_sesion">
                        <a href="inicio-sesion.html" ><p>iniciar sesion</p></a>
                        <a href="register.html"> <p>crear una cuenta</p></a>
                    </div>
            </div>
        </div>
        </section>
    <header id="encabezado">
        <div class="logo">
            <a href="index.php">
            <img src="logo.png" alt="">
        </a>
        </div>
        <div class="barra_de_busqueda">
            <input type="text" placeholder="Buscar" class="buscar">
            <div class="lupa">
                <img src="lupa.png" alt="" >
            </div>
        </div>
        <div class="chango">
            <img src="carrito-de-compras.png" alt="">
        </div>
        <section class="menudesplegable">
            <div class="dropdown">
                <img src="menu.png" alt="" onclick="toggleMenu()" class="dropbtn">
                <div id="myDropdown" class="dropdown-content">
                    <div>
                        <a href="#fin"><p  class="Nosotros">Nosotros</p></a>
                    </div>
                    <div class="rango">
                        <div class="precio">
                            <p>Precio</p>
                        </div>
                        <div class="input">
                            <div class="max"> <p>max </p> <input type="number"></div>
                            <div class="min"> <p>min </p> <input type="number"></div>
                        </div>
                    </div>
                    <div class="submenu">
                        <p class="perfumes_menu">Perfumes</p>
                        <div class="submenu-content">
                            <p>florales</p>
                            <p>amaderados</p>
                            <p>dulces</p>
                            <p>amargos</p>
                        </div>
                        
                    </div>
                    <div class="iniciar_sesion">
                        <p>iniciar sesion</p>
                        <p>crear una cuenta</p>
                    </div>
            </div>
        </div>
        </section>
    </header>

    <main class="product-page">

        <div class="product-container">
            <div class="product-gallery">
                <div class="thumbnail-gallery">
                    <div class="thumbnail" data-image="scandal.png">
                        <img src="<?php echo $fila['foto']; ?>" alt="Scandal Perfume">
                    </div>
                    <div class="thumbnail" data-image="scandal-2.png">
                        <img src="<?php echo $fila['foto']; ?>" alt="Scandal Perfume View 2">
                    </div>
                    <div class="thumbnail" data-image="scandal-3.png">
                        <img src="<?php echo $fila['foto']; ?>" alt="Scandal Perfume View 3">
                    </div>
                    <div class="thumbnail" data-image="scandal-4.png">
                        <img src="<?php echo $fila['foto']; ?>" alt="Scandal Perfume View 4">
                    </div>
                </div>
                </div>
                <div class="main-image">
                    <img src="<?php echo $fila['foto']; ?>" alt="Scandal Perfume" id="mainImage">
                </div>
            </div>


            <div class="tododerecha">
            <div class="product-info">
                <h1><?php echo $fila['nombremarca']; ?> <?php echo $fila['nombremodelo']; ?></h1>
                <div class="stars">
                <div class="radio">
                <input id="rating-5" type="radio" name="rating" value="5" />
                <label 
                or="rating-5" title="5 stars">
                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                    ></path>
                    </svg>
                </label>
                
                  <input id="rating-4" type="radio" name="rating" value="4" />
                  <label for="rating-4" title="4 stars">
                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      ></path>
                    </svg>
                  </label>
                
                  <input id="rating-3" type="radio" name="rating" value="3" />
                  <label for="rating-3" title="3 stars">
                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      ></path>
                    </svg>
                  </label>
                
                  <input id="rating-2" type="radio" name="rating" value="2" />
                  <label for="rating-2" title="2 stars">
                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      ></path>
                    </svg>
                  </label>
                
                  <input id="rating-1" type="radio" name="rating" value="1" />
                  <label for="rating-1" title="1 star">
                    <svg viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                      ></path>
                    </svg>
                  </label>
                </div>
                
                    <div class="stock-status in-stock">
                        <i class="fas fa-check"></i> En stock
                    </div>
                </div>
            </div>
            
            <div class="precio">
                <p>Precio:    <?php echo $fila['precio']; ?>$</p>
            </div>


                <div class="product-options">
                    <div class="size-selector">
                        <label>Tamaño</label>
                        <div class="size-buttons">
                            <button class="size-btn"><?php echo $fila['tamanio']; ?>ml</button>

                        </div>
                    </div>
                </div>

                <div class="add-to-cart">
                    <div class="quantity-selector">
 
                        <input type="number" value="1" min="1" class="qty-input">

                    </div>
                    <button class="primary-button">
                        <p class="fas fa-shopping-cart"></p>
                        Agregar al carrito
                    </button>
                </div>
            </div>


                </div>
            </div>
        </div>
    </main>
    <script>
        function toggleMenu() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        window.addEventListener('load', function() {
            setTimeout(function() {
                var splashScreen = document.getElementById('splash-screen');
                var mainContent = document.getElementById('main-content');
                
                // Iniciamos el desvanecimiento
                splashScreen.classList.add('fade-out');
                
                // Esperamos a que termine la transición antes de ocultar completamente
                splashScreen.addEventListener('transitionend', function() {
                    splashScreen.style.display = 'none';
                    mainContent.style.display = 'block';
                });
            }, 2000);
        });
        let currentSlide = 0;

function moveSlide(direction) {
  const slides = document.querySelectorAll('.carousel-images img');
  currentSlide += direction;

  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  } else if (currentSlide >= slides.length) {
    currentSlide = 0;
  }

  const offset = -currentSlide * 100; // Desplazamiento en %
  document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
}

function moveSlide2(direction) {
  const slides = document.querySelectorAll('.carousel-images2 img');
  currentSlide += direction;

  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  } else if (currentSlide >= slides.length) {
    currentSlide = 0;
  }

  const offset = -currentSlide * 100; // Desplazamiento en %
  document.querySelector('.carousel-images2').style.transform = `translateX(${offset}%)`;
}
function moveSlide3(direction) {
  const slides = document.querySelectorAll('.carousel-images3 img');
  currentSlide += direction;

  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  } else if (currentSlide >= slides.length) {
    currentSlide = 0;
  }

  const offset = -currentSlide * 100; // Desplazamiento en %
  document.querySelector('.carousel-images3').style.transform = `translateX(${offset}%)`;
}


    </script>
</body>
</html>