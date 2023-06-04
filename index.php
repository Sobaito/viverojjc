<?php

$limite = 3;
$inicio = true;
$logo = false;
 include 'src/includes/templates/header.php';
?>

    <main class="contenedor seccion">

        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            
           <div class="icono">

            <img src="/build/img/camionIcono.png" alt="icono camion" loading="lazy">
            <h3>Transporte</h3>
            <p>Trabajamos con empresas de transporte confiables y con experiencia en el manejo de árboles frutales para garantizar que los árboles sean entregados de manera segura y en el plazo acordado. Además, nos aseguramos de que los árboles estén debidamente embalados y protegidos durante el transporte para evitar cualquier daño.</p>
           </div>

           <div class="icono">

            <img src="/build/img/CertificadoIcono.png" alt="icono certificado" loading="lazy">
            <h3>Certificados</h3>
            <p>En nuestro vivero de árboles frutales, nos esforzamos por ofrecer la mejor calidad en cada uno de nuestros productos. Todos nuestros árboles frutales han sido cultivados con cuidado y atención, utilizando prácticas agrícolas sostenibles y respetuosas con el medio ambiente.</p>
           </div>

           <div class="icono">

            <img src="/build/img/candadoIcono.png" alt="icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Nos tomamos muy en serio la seguridad de nuestros clientes y nos aseguramos de que nuestros productos sean seguros y saludables. Utilizamos prácticas agrícolas sostenibles y respetuosas con el medio ambiente para cultivar nuestros árboles frutales y nos aseguramos de que no se utilicen productos químicos tóxicos.</p>
           </div>
        </div>

    </main>

    <section class="seccion contenedor">
   
        <h2>Arboles Frutales</h2>

        <?php 
            include 'src/includes/templates/anuncios.php';
        ?>

        

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todos</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Gran variedad de Arboles Frutales</h2>
        <p>¡Cultiva tus propios sabores! Descubre la variedad de árboles frutales en nuestro vivero.</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>

    </section>

    <div class="contenedor seccion seccion-inferior">

        <section  class="blog">

            <h3>Nuestro blog</h3>

            <article class="entrada-blog">

                <div class="imagen">

                    <img src="/build/img/cerezo.jpg" alt="">
                </div>

                <div class="texto-entrada">

                    <a href="entrada.html"></a>

                    <h4>Cerezo</h4>

                    <p>Publicado el: <span>02/02/2023</span> por: <span>Administrador</span></p>

                    <p>Si estás buscando agregar un toque de belleza y sabor a tu jardín, un cerezo puede ser una excelente opción. Los cerezos son árboles frutales hermosos y frondosos que producen deliciosas cerezas dulces.</p>

                </div>

            </article><!--Articulo 1-->

            <article class="entrada-blog">

                <div class="imagen">

                    <img src="/build/img/nogalNueces.jpg" alt="">
                </div>

                <div class="texto-entrada">

                    <a href="entrada.html"></a>

                    <h4>Nogal</h4>

                    <p>Publicado el: <span>13/04/2023</span> por: <span>Administrador</span></p>

                    <p>Durante la temporada de crecimiento, es importante regar el nogal regularmente y fertilizarlo con regularidad para asegurarte de que esté obteniendo los nutrientes necesarios para crecer bien. También debes podar el nogal regularmente para darle forma y evitar que crezca demasiado.</p>

                </div>

            </article><!--Articulo 2-->

        </section>

        <section class="testimoniales">

            <h3>Testimoniales</h3>

            <div class="testimonial">

                <blockquote>
                Tuve la oportunidad de visitar el vivero de árboles frutales de esta empresa y fue una experiencia maravillosa. Quedé impresionado con la amplia variedad de árboles frutales que tenían disponibles, desde manzanas y peras hasta cerezas y melocotones.
                </blockquote>

                <p>- Ana Salinas</p>
            </div>

            <div class="testimonial">

                <blockquote>
                ¡Increíble selección de árboles frutales! Definitivamente volveré a comprar aquí.
                </blockquote>

                <p>- Carmen Rodriguez</p>
            </div>

        </section>

    </div>

<?php
include 'src/includes/templates/footer.php'
?>