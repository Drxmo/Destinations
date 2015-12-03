<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

<!--Activar Boton navbar-->
<script>
//    Reemplazar '.contInicioX' 
//    por '.sitiosX' si es para Sitios
//    por '.eventosX' si es para Eventos
    $(document).ready(function () {
        console.log("document loaded");
        $('.sitiosX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('parrafoX').addClass('limit');

    });

    $(window).load(function () {
        console.log("window loaded");
        $('.sitiosX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('.parrafoX').addClass('limit');
    });

</script>

<section class="container container-fluid main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-header">
                <main class="container" role="main">
                    <article class="articulo">                        
                        <div class="">
                            <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/map-explore.jpg" alt="Imagen">
                        </div>
                </main>
            </section>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-contenido">
                <main class="container"role="main">
                    <article class="">                        
                        <header class="sitio-head">
                            <h3><span>Sitios</span></h3>
                        </header>
                </main>
                <div class="container">
                    <div class="row contenido">
                        <figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="<?php echo $fsConfig->getUrl() ?>index.php/home/sitioDetalle">Leer mas</a>
                                </div>
                            </div>
                        </figure>
                        <figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure><figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure><figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure><figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure><figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure><figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure><figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure><figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-img fx">  
                                <img class="img-contenido" src="<?php echo $fsConfig->getUrl() ?>img/finlandia.jpg" alt="Imagen" />  
                                <div class="mascara">
                                    <h2>Restaurante Omg</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                                    <a class="link" href="#">Leer mas</a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
