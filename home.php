<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- ENCABEZADO -->

<section class="header">

   <a href="home.php" class="logo">RUTAS DEL SUR</a>

   <nav class="navbar">
   <a href="form-usuarios.html">Usuario</a>
      <a href="home.php">Inicio</a>
      <a href="about.php">Sobre Nosotros</a>
      <a href="package.php">Paquetes</a>
      <a href="form-reserva.html">Reserva</a>
      <a href="login.html">Cerrar Sesión</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- INICIO  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/inicio1.jpg) no-repeat">
            <div class="content">
               <span>Explora, Descubre y Viaja</span>
               <h3>Explora nuevos paisajes</h3>
               <a href="package.php" class="btn">Descubre más</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/inicio2.jpg) no-repeat">
            <div class="content">
               <span>Explora, Descubre y Viaja</span>
               <h3>Descubre nuevos lugares</h3>
               <a href="package.php" class="btn">descubre más</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/inicio3.jpg) no-repeat">
            <div class="content">
               <span>Explora, Descubre y Viaja</span>
               <h3>Viaja a nuevos rincones del país</h3>
               <a href="package.php" class="btn">descubre más</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>


<!--SERVICIOS -->

<section class="services">

   <h1 class="heading-title">NUESTROS SERVICIOS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Aventura</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Tours guiado</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Campamento</h3>
      </div>

   </div>

</section>

<!-- ABOUT O SOBRE NOSOTROS-->

<section class="home-about">

   <div class="image">
      <img src="images/about1.jpg" alt="">
   </div>

   <div class="content">
      <h3>Sobre Nosotros</h3>
      <p>Explora diferentes partes de Bolivia y déjate llevar por sus maravillas. Desde la histórica Sucre, pasando por la impresionante Potosí, hasta el majestuoso Salar de Uyuni y mucho más. Descubre la cultura, historia y paisajes increíbles.</p>
      <a href="about.php" class="btn">Leer más</a>
   </div>

</section>

<!-- SECCION DE PAQUETES -->

<section class="home-packages">

   <h1 class="heading-title"> Nuestros Paquetes </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/paquete1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tours</h3>
            <p>El magnífico Salar de Uyuni con sus 10.582 km cuadrados es el salar más grande del mundo. 
            Está ubicado en el departamento de Potosi en el Suroeste de Bolivia, cerca de los Andes y a una altura de 3.650 msnm.</p>
            <a href="book.php" class="btn">Reserva Ahora</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/paquete2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Aventura</h3>
            <p>Lugar de extraordinario encanto natural donde se encuentra una de las 
            lagunas de mayor belleza gracias al color rojizo de sus aguas. Ubicada a 4278 m.s.n.m. y posee una extensión de 60 km2 y una profundidad máxima de 80 cm.</p>
            <a href="book.php" class="btn">Reserva Ahora</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/paquete3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tours</h3>
            <p>Primera ciudad colonial que se fundó a los pies de los cerros Sica Sica (Oruga) y Churuquella (caracol) y que, 
               con el devenir de la historia, se convirtió en una de la ciudades más importantes del continente gracias a que en ella 
               se establecieron instituciones importantes como: El Arzobispado de la Plata, La universidad de San Francisco Xavier y la 
               Real Audiencia de Charcas.</p>
            <a href="book.php" class="btn">Reserva Ahora</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Ver más</a> </div>

</section>

<!-- PIE DE PAGINA -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Contactanos</h3>
         <a href="#"> <i class="fas fa-phone"></i> +519 88855566 </a>
         <a href="#"> <i class="fas fa-phone"></i> +519 77559933 </a>
         <a href="#"> <i class="fas fa-envelope"></i> rutasdelsur@gmail.com </a>
      </div>

      <div class="box">
         <h3>Sigue nuestras redes sociales</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>