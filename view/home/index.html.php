<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>



<!--Activar Boton navbar-->
<script>
//    Reemplazar '.contInicioX' 
//    por '.sitiosX' si es para Sitios
//    por '.eventosX' si es para Eventos
    $(document).ready(function () {
        console.log("document loaded");
        $('.contInicioX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('parrafoX').addClass('limit');

    });

    $(window).load(function () {
        console.log("window loaded");
        $('.contInicioX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('.parrafoX').addClass('limit');
    });

    $(function () {
        $(".parrafoX").each(function (i) {
            len = $(this).text().length;
            if (len > 10)
            {
                $(this).text($(this).text().substr(0, 530) + '...');
            }
        });
    });

    $(function () {
        $(".titulo-eventoX").each(function (i) {
            len = $(this).text().length;
            if (len > 100)
            {
                $(this).text($(this).text().substr(0, 700) + '...');
            }
        });
    });

    $(document).find('.parrafoX2').each(function () {
        var presentHeight = $(this).parents('.parrafoX2').height(),
                difference = max - presentHeight;
        if (difference > 0) {
            $(this).height($(this).height() + difference);
        }
    });

</script>
<!-- Slider -->
<div class="spaceSlideTop"></div>
<section class="container-fluid container-fluidX main">

    <div class="row">
        <div class="">
<!--            <section class="absoluteX">  -->
            <a>                               
                <div class="back backX">
                    <section class="slideuno slideX1">
                        <div class="slides slideX2">
                            <img class="slidejs" src="<?php echo $fsConfig->getUrl() ?>img/im1.jpg"  alt="Imagen">
                            <img src="<?php echo $fsConfig->getUrl() ?>img/im2.jpg" alt="Imagen">
                            <img src="<?php echo $fsConfig->getUrl() ?>img/im3.JPG" alt="Imagen">
                        </div>
                    </section>
                </div>
            </a>

        </div>
    </div>
    <div class="spaceSlideBott"></div>
</section>

<!--Categorias------------------------------------------------------------------->
<!--Categorias------------------------------------------------------------------->
<!--Categorias------------------------------------------------------------------->

<secton class="col-md-12">
    <div class="row eventoWelcome panel-success"><center><h1 class="eventoWelcome ">Hola a todos</h1></center></div>


    <div class="container-fluid">
        <div class="row contenidoX">
            <!--    <div class="row rowEvento container-fluid">-->

            <article class="articuloX">
                <section class="container-fluid ">
                    <div class="columnaX">
                        <article class="articuloX articulo">  
                            <a>
                                <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/paisajeX.jpg" alt="Imagen">
                            </a>
                            <h2 class="titulo-eventoX titulo-evento">
                                <a href="#">Caminata Ecologica</a>
                            </h2>
                            <p ><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                            <div class="containerXpa">
                                <p class="parrafoX parrafoX2 articulo-contenido  text-justify" >
                                    Vestibulum id magna nibh. Morbi suscipit vestibulum malesuada. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                    nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
                                    Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
                                    neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
                                    lectus non imperdiet.<br>  sapien, consequat 
                                    molestie odio placerat eu. Vestibulum id magna nibh. Morbi
                                    suscipit vestibulum malesuada. Integer dictum tortor et quam
                                    porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
                                    Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
                                    est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
                                    congue at pellentesque quis, suscipit eget est.
                                </p>
                                <div class="contenedor-botones">
                                    <a href="#" class="btn btn-primary">Ver Mas</a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="columnaX">
                        <article class="articuloX articulo">    
                            <a>
                                <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/relig.jpg" alt="Imagen">
                            </a>
                            <h2 class="titulo-eventoX titulo-evento">
                                <a href="#">Visita de monumentos</a>
                            </h2>
                            <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                            <p class="articulo-contenido parrafoX2 parrafoX text-justify">
                                Etiam eu eros justo. Mauris semper rutrum felis, etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                nibh dictum eu. Nam fermentum id tellus tempus tincidunt. Vestibulum id magna nibh. Morbi
                                suscipit vestibulum malesuada.  Cras nibh felis, 
                                congue at pellentesque quis, suscipit eget est.
                                Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
                                neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
                                lectus non imperdiet.<br> Integer dictum tortor et quam
                                porttitor rhoncus. Mauris feugiat diam sapien, consequat 
                                molestie odio placerat eu. Integer at mi laoreet dolor rhoncus porttitor.
                                Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
                                est, sit amet auctor sapien lorem ut sapien.
                            </p>
                            <div class="contenedor-botones">
                                <a href="#" class="btn btn-primary">Ver Mas</a>
                            </div>
                        </article>      
                    </div> 
                    <div class="columnaX">
                        <article class="articuloX articulo">  
                            <a>
                                <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/paisajeX.jpg" alt="Imagen">
                            </a>
                            <h2 class="titulo-eventoX titulo-evento">
                                <a href="#">Caminata Ecologica</a>
                            </h2>
                            <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                            <p class="parrafoX2 articulo-contenido parrafoX text-justify">
                                Morbi suscipit vestibulum malesuada. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                nibh dictum eu. Nam fermentum id tellus tempus tincidunt. Vestibulum id magna nibh. 
                                Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
                                neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
                                lectus non imperdiet.<br> Integer dictum tortor et quam
                                porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
                                Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
                                est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
                                congue at pellentesque quis, suscipit eget est. Mauris feugiat diam sapien, consequat 
                                molestie odio placerat eu. Vestibulum id magna nibh. Morbi
                                suscipit vestibulum malesuada. 
                            </p>
                            <div class="contenedor-botones">
                                <a href="#" class="btn btn-primary">Ver Mas</a>
                            </div>
                        </article>
                    </div>
                </section><section class="container-fluid">
                    <div class="columnaX">
                        <article class="articuloX articulo">    
                            <a>
                                <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/relig.jpg" alt="Imagen">
                            </a>
                            <h2 class="titulo-eventoX titulo-evento">
                                <a href="#">Visita de monumentoX</a>
                            </h2>
                            <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                            <p class="parrafoX2 articulo-contenido parrafoX text-justify">
                                Cras nibh felis, 
                                congue at pellentesque quis, suscipit eget est. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
                                Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
                                neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
                                lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
                                molestie odio placerat eu. Vestibulum id magna nibh. Morbi
                                suscipit vestibulum malesuada. Integer dictum tortor et quam
                                porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
                                Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
                                est, sit amet auctor sapien lorem ut sapien. 
                            </p>
                            <div class="contenedor-botones">
                                <a href="#" class="btn btn-primary">Ver Mas</a>
                            </div>
                        </article>      
                    </div> 
                    <div class="columnaX">
                        <article class="articuloX articulo">  
                            <a>
                                <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/paisajeX.jpg" alt="Imagen">
                            </a>
                            <h2 class="titulo-eventoX titulo-evento">
                                <a href="#">Caminata Ecologica</a>
                            </h2>
                            <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                            <p class="parrafoX2 articulo-contenido parrafoX text-justify">
                                nteger dictum tortor et quam
                                porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
                                Etiam laoreet, tellus non maximus tempor. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
                                Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
                                neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
                                lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
                                molestie odio placerat eu. Vestibulum id magna nibh. Morbi
                                suscipit vestibulum malesuada. I ipsum tellus condimentum 
                                est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
                                congue at pellentesque quis, suscipit eget est.
                            </p>
                            <div class="contenedor-botones">
                                <a href="#" class="btn btn-primary">Ver Mas</a>
                            </div>
                        </article>
                    </div>

                    <div class="columnaX">
                        <!--                    <div class="">-->
                        <article class="articuloX articulo">    
                            <a>
                                <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/relig.jpg" alt="Imagen">
                            </a>
                            <h2 class="titulo-eventoX titulo-evento">
                                <a href="#">Visita de monumentos</a>
                            </h2>
                            <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                            abso
                            <p class="parrafoX2 articulo-contenido parrafoX text-justify">
                                Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
                                Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
                                neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
                                lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
                                molestie odio placerat eu. Vestibulum id magna nibh. Morbi
                                suscipit vestibulum malesuada. Integer dictum tortor et quam
                                porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
                                Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
                                est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
                                congue at pellentesque quis, suscipit eget est.
                            </p>
                            <div class="contenedor-botones">
                                <a href="#" class="btn btn-primary">Ver Mas</a>
                            </div></article>  
                        <!--                    </div>-->
                    </div> 
                </section>
            </article> 
            <!--        <div class="footer " style="class:top-20px"></div>-->

            <!--        <aside class="aside-index hidden-xs hidden-sm col-md-2 xiloAside1" >
                        <h4>Categorias</h4>    
                        <div class="list-group xiloAsDiv1">
                            <a href="#" class="list-group-item active">Religion</a>
                            <a href="#" class="list-group-item">Deportes</a>
                            <a href="#" class="list-group-item">Ecoturismo</a>
                            <a href="#" class="list-group-item">Cicloturismo</a>
                            <a href="#" class="list-group-item">Gastronomia</a>
                        </div>
                        <h4>Articulos Recientes</h4>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-heading">Buga tatto el mejor evento de arte en la ciudad de buga</h4>
                            <p class="list-item-text">Participa en el evento</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-heading">Buga tatto el mejor evento de arte en la ciudad de buga</h4>
                            <p class="list-item-text">Participa en el evento</p>
                        </a>
                    </aside>-->

        </div>
    </div>
</secton>


<?php // include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
