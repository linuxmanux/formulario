<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triple trouble</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">los tres</a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src="images/zumodepepino.jpg"  class="menu-icono" alt="">
                </label>
<nav class="nav">
    <u1>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Sobre nosotros</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Servicios</a></li>
       
        </u1>
</nav>
            <div class="header-content container">
                <div class="header-txt">
                    <h1>triple trouble</h1>
                <p>¡Bienvenido a nuestro sitio web! 
                    Aquí encontrarás informacion
                    de las más alta esencia e insana 
                    posible espero que lo disfrutes nenaza.
                </p>
<a href="#" class="btn">wazaaaaaaaa</a>
                </div>
                <div class="header-img">
                    <img src="images/holaamiguitos.jpg" alt="">
            </div>
        </div>
    </header>
    <section class="about container">
        <div class="about-img">
            <img src="images/yvaliomadres.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Sobre nosotros</h2>
            <p>Somos un equipo apasionado por la tecnología y el diseño. 
                Nuestro objetivo es crear experiencias únicas y memorables para nuestros usuarios.
            </p>
            <br>
            <p>Con años de experiencia en la industria, 
                estamos comprometidos a ofrecer lo mejor en cada proyecto que emprendemos.
            </p>
        </div>

    </section>
<main class="sevicios">
    <h2>Drogas</h2>
    <p>
        Las drogas, también conocidas como sustancias psicoactivas, son sustancias químicas que, 
        al interactuar con el sistema nervioso central, alteran la percepción, 
        el estado de ánimo y el comportamiento. Algunas drogas comunes incluyen la cocaína, el crack, 
        el metilfenidato, el MDMA (éxtasis), el LSD y el cannabis 
    </p>
    <div class="Drogas container">
        <div class="Drogas-item">
            <i class="fa-sharp fa-solid fa-code"></i>
            <h3>hipertrofia</h3>
        <p>La hipertrofia es el aumento del tamaño de las células musculares, 
            lo que resulta en un crecimiento muscular. Este proceso es fundamental para 
            aquellos que buscan mejorar su fuerza y apariencia física a través del entrenamiento de resistencia.
        </p>
        <div class="hipertrofia-item">
            <i class="fa-sharp fa-solid fa-stethcope"></i>
            <h3>informacion</h3>
        </div>
        <div class="servicios-item">
            <i class="fa-sharp fa-solid fa-rocket"></i>
            <h3>lanzamiento</h3>
        </div>

     </div>
</main>
<section class="formulario container">
    <form method="post" autocomplete="off">
<h2>Contáctanos</h2>
              <div class="input-container">
              <input type="text"  name="name" placeholder="nombre y apellido">
              <i class="fa-solid fa-user"></i>

        </div>
              
              <div class="input-container">
              <input type="telefono"  name="phone" placeholder="celular">
              <i class="fa-solid fa-phone"></i>
        </div>

         <div class="input-container">
              <input type="email"  name= "email" placeholder="correo">
              <i class="fa-solid fa-envelope"></i>
    
            </div>

             <div class="input-container">
                <textarea name="message" placeholder="detalles de la info"></textarea>
            </div>
        <input type="submit" name="send" class="btn" onClick="myfuntion">
        
            </div>
    </form>
</section>
<footer class="footer">
    <div class="footer-container container">
        
        <div class="link">
            <a href="#" class="logo">logo</a>
        </div>
<div class="link">
    <ui>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Sobre nosotros</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Servicios</a></li>
</ui>
</div>
            
        </div>

</footer>
<?php
include ("send.php");
?>

<script>
    function myfuntion() {
        window.location.href ="https://localhost/triple_trouble"
    }
     </script>
</body>
</html>