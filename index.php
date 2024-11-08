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
    $consultas = "SELECT * FROM perfume ;";
    $resultado = mysqli_query($conexion, $consultas);
}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ritta et compagnie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header id="encabezado">
        <div class="logo">
            <a href="">
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
                        <a href="inicio-sesion.html" ><p>iniciar sesion</p></a>
                        <a href="register.html"> <p>crear una cuenta</p></a>
                    </div>
            </div>
        </div>
        </section>
    </header>
    <section class="proociones">
        <a href="#fin">Nosotros</a>
        <a href="#inicio">Destacados</a>
        <a href="#perfumes">JPG</a>
        <a href="http://localhost/register.html">Crear usuario</a>
    </section>
    <div class="aaa" id="inicio">
        <p>Entre los mas destacados!!</p>

   
    </div>
    <section class="publi">
        <div class="carousel">
            <div class="carousel-images">
              <img src="jpgf1.png" alt="Paisaje Natural">
              <img src="jpg2.jpg" alt="Comida Deliciosa">
              <img src="jpgf3.png" alt="Amigos">
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
          </div>
        <div class="carousel2">
            <div class="carousel-images2">
              <img src="s1.jpeg" alt=" ">
              <img src="s2.jpeg" alt=" ">
               <img src="s3.png" alt="">
            </div>
            <button class="prev" onclick="moveSlide2(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide2(1)">&#10095;</button>
          </div>
          <div class="carousel3">
            <div class="carousel-images3">
              <img src="i1.png" alt=" ">
              <img src="i2.png" alt=" ">
               <img src="i3.png" alt="">
            </div>
            <button class="prev" onclick="moveSlide3(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide3(1)">&#10095;</button>
          </div>
          
    </section>
    <div id="splash-screen">
        <img src="logo.png" alt="Logo" id="splash-logo">
        <p>Ritta et Compagnie</p>
    </div>

    <main>
        <div class="caja_para_categorias">

        </div>

        <section id="perfumes">
            <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>    
                <div class="boton">
                            <a href="" class="link">
                            <img src="<?php echo $fila['foto']; ?>"  alt="" class="perfume">
                            <p class="nombre"><?php echo $fila['nombremarca']; ?> <?php echo $fila['nombremodelo']; ?></p>
                            </a>
                            <div class="botones">
                            <a href="indexproducto.php?id= <?php echo $fila['id']; ?>"><div class="botoncomprar">
                                <p>Comprar</p>
                            </div></a>
                            <div class="agrgaralcarrito"><img src="carrito-de-compras.png" alt=""></div>
                            </div>
                </div>
                <?php } ?>
         </section> 
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
<footer id="fin">
    <div class="text">
        <p>
         Solmos una marca de prestigio de venta de perfuems de todos los tipos especializados en perfumes de diseñador.
        </p>
    </div>
    <div class="text">
    <div class="social-icons">
                    <a href="https://www.instagram.com/frann.marotta/">@Franco Marotta</a>
                    <a href="https://www.instagram.com/santiagoritter/">@Santiago Ritter</a>
                </div>  
              </div>
    <div class="text">
    <p>© 2024 Ritta et compagnie. Todos los derechos reservados.</p>
    </div>
    <div class="text">
        <p></p>
    </div>
</footer>
</html>
