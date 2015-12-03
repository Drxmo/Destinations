<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

<section class="container main">
    <div class="row ">
        <div class="miga-de-pan col-md-10">
            <ol class="breadcrumb">
                <li class="inicio"><a href="#"></a>Inicio</li>
                <li><a href="#" id="til">Categorias</a></li>
                <li class="active">Todas</li>
            </ol>
        </div>
    </div>

    <!--Termina Miga De Pan-->


    <div class="row">
        <div class="col-md-5" id="elementoA">
            <article class="articulo">    

                <div class="back">
                    <article class="slide " >
                        <div class="slides2">
                            <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/deport.jpg" alt="Imagen">
                        </div>
                </div>

                </a>
                <h2 class="titulo-evento">
                    <a href="#" id="til">Ecoturismo</a>
                </h2>
                <p><span class="articulofecha" id="do">25 Noviembre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                <p class="articulo-contenido text-justify">
                    <i>Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam.</i>
                </p>
                <div class="contenedor-botones">
                    <a href="<?php echo $fsConfig->getUrl() ?>index.php/home/categoriasDetalle" class="btn btn-primary">Ver Mas</a>
                    <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
                </div>

            </article>
        </div>
        <div class="col-md-5">
            <article class="articulo">    
                <a>
                    <div class="back">
                        <article class="slide" >
                            <div class="slides2">
                                <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/deport.jpg" alt="Imagen">
                            </div>
                        </article>
                    </div>
                </a>
                <h2 class="titulo-evento">
                    <a href="#" id="til">Deporte</a>
                </h2>
                <p><span class="articulofecha" id="do">15 Octubre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                <p class="articulo-contenido text-justify">
                    <i>Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam.</i>
                </p>
                <div class="contenedor-botones">
                    <a href="#" class="btn btn-primary">Ver Mas</a>
                    <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
                </div>

            </article>
        </div>
        <aside class="aside-index hidden-xs hidden-sm col-md-2" >
            <h4>Categorias</h4>    
            <div class="list-group">
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
        </aside>
        <div class="row">
            <div class="col-md-5">
                <article class="articulo">    
                    <a>
                        <div class="back">
                            <article class="slide " >
                                <div class="slides2">
                                    <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/deport.jpg" alt="Imagen">
                                </div>
                        </div>
                    </a>
                    <h2 class="titulo-evento">
                        <a href="#" id="til">Gastronomia</a>
                    </h2>
                    <p><span class="articulofecha" id="do">15 Octubre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                    <p class="articulo-contenido text-justify">
                        <i>Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam.</i>
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary">Ver Mas</a>
                        <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
                    </div>

                </article>
            </div>
            <div class="col-md-5">
                <article class="articulo">    
                    <a>
                        <div class="back">
                            <article class="slide " >
                                <div class="slides2">
                                    <img class="imgarticle" src="<?php echo $fsConfig->getUrl() ?>img/deport.jpg" alt="Imagen">
                                </div>
                        </div>
                    </a>
                    <h2 class="titulo-evento">
                        <a href="#" id="til">Religioso</a>
                    </h2>
                    <p><span class="articulofecha" id="do">15 Octubre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                    <p class="articulo-contenido text-justify">
                        <i>Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam.</i>
                    </p>
                    <div class="contenedor-botones">
                        <a href="#" class="btn btn-primary">Ver Mas</a>
                        <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
                    </div>

                </article>
            </div>
        </div>


</section>

<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
