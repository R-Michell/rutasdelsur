<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!--enlace css -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- encabezado  -->

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

<!-- seccion sobre nosotros -->

<div class="heading" style="background:url(images/about1a.jpg) no-repeat">
   <h1>Sobre Nosotros</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about1.jpg" alt="">
   </div>

   <div class="content">
      <h3>¿Por qué elegirnos?</h3>
      <p>Somos una operadora de turismo, con el ímpetu de poder ofrecer servicios de alta calidad, confiabilidad y seguridad, 
         cuidando siempre hasta el más mínimo detalle. 
         Todos estos factores marcan la diferencia; para que el viaje de nuestros clientes, no solo sea un viaje sino una experiencia inolvidable.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Principales destinos</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Precios accesibles</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>Servicio de guia 24/7</span>
         </div>
      </div>
   </div>

</section>

<!-- opiniones y calificaciones -->

<section class="reviews">

   <h1 class="heading-title"> Opiniones  </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"Rutas del Sur ofrece una muy buena relación calidad-precio. Los tours están bien organizados y los guías son muy conocedores y apasionados. Me pareció que obtuve mucho por lo que pagué y quedé muy satisfecha con la experiencia."</p>
            <h3>Chito A.</h3>
            <span>Turista</span>
            <img src="images/pic-8.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"La experiencia general con Rutas del Sur fue buena. La plataforma de reservas es fácil de usar"</p>
            <h3> Javier A.</h3>
            <span>Turista</span>
            <img src="images/pic-10.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
            </div>
            <p>"Desafortunadamente, mi experiencia con Rutas del Sur no fue la mejor. Tuve problemas con la reserva en línea y no pude contactar fácilmente con el servicio al cliente para resolverlo."</p>
            <h3>Dayer L.</h3>
            <span>Turista</span>
            <img src="images/pic-7.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"Rutas del Sur ofrece una muy buena relación calidad-precio. Los tours están bien organizados y los guías son muy conocedores y apasionados"</p>
            <h3>Fabricio R.</h3>
            <span>Turista</span>
            <img src="images/pic-0.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"Desafortunadamente, mi experiencia con Rutas del Sur no fue la mejor, no creo que vuelva a usar sus servicios."</p>
            <h3>Pablo M.</h3>
            <span>Turista</span>
            <img src="images/pic-9.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"El sitio web de Rutas del Sur es muy fácil de usar. Pude encontrar y reservar el paquete perfecto para mi familia sin ningún problema. La navegación es intuitiva y toda la información necesaria está claramente presentada."</p>
            <h3>Jose T.</h3>
            <span>Turista</span>
            <img src="images/pic-11.jpg" alt="">
         </div>

      </div>

   </div>

</section>

<!--pie de pagina -->

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