<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/headerDos.php' ?>

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
                    <a href="#" id="til">Ecoturismo</a>
                </h2>
                <p><span class="articulofecha" id="do">25 Noviembre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                <p class="articulo-contenido text-justify">
                    <i>Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam.</i>
                </p>
                <div class="contenedor-botones">
                    <a href="<?php echo $fsConfig->getUrl() ?>index.php/home/categoriasDetalleUsuario" class="btn btn-primary">Ver Mas</a>
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
        <!---Comentarios--->
        <div class="col-md-9 comments-main ">
            <div class="comments-container">
                <h1>Comentarios <a href="#">bugaturismo.com</a></h1>
                <ul id="comments-list" class="comments-list">
                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="<?php echo $fsConfig->getUrl() ?>img/slide2.png" alt="Imagen"></div>
                            <!-- Contenedor del comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-autor"><a href="#">Alan Alaman</a></h6>
                                    <span>Hace 20 min</span>
                                    <i class="ico icon-heart"></i>
                                    <i class="ico icon-controller-jump-to-start"></i>
                                </div> 
                                <div class="comment-content">
                                    Hola eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                    nibh dictum eu. Nam fermentum id tellus tempus tincidunt.
                                </div>
                            </div>
                        </div>
                        <!-- Respuesta del comentario -->
                        <ul class="comments-list reply-list">
                            <li>                
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="<?php echo $fsConfig->getUrl() ?>img/slide3.png" alt="Imagen"></div>
                                <!-- Contenedor del comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name"><a href="#">Loren Ethan</a></h6>
                                        <span>Hace 10 min</span>
                                        <i class="ico icon-heart"></i>
                                        <i class="ico icon-controller-jump-to-start"></i>
                                    </div> 
                                    <div class="comment-content">
                                        Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                        nibh dictum eu. Nam fermentum id tellus tempus tincidunt.
                                    </div>
                                </div>                
                            </li>
                        </ul>
                        <!-- Comentario Dos -->
                        <ul class="comment-list">
                            <li>                
                                <!-- Avatar -->
                                <div class="comment-avatar"><img src="<?php echo $fsConfig->getUrl() ?>img/slide3.png" alt="Imagen"></div>
                                <!-- Contenedor del comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name"><a href="#">Illinois Elmont</a></h6>
                                        <span>Hace 40 min</span>
                                        <i class="ico icon-heart"></i>
                                        <i class="ico icon-controller-jump-to-start"></i>
                                    </div> 
                                    <div class="comment-content">
                                        Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
                                        nibh dictum eu. Nam fermentum id tellus tempus tincidunt.
                                    </div>
                                </div>                
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!---Fin De Comentarios--->
    </div>
</section>

<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
