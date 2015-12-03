<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/headerDos.php' ?>
<section class="main container">
    <div class="row ">
        <div class="miga-de-pan col-md-12">
            <ol class="breadcrumb">
                <li class="inicio"><a href="#"></a>Inicio</li>
                <li><a href="#">Panel De Control</a></li>
            </ol>
        </div>
    </div>
    <!--Termina Miga De Pan -->

    <div class="pan">
        <ul>
            <li>
                <input type="checkbox" checked>
                <i></i>
                <h2>Cuenta</h2>
                <p><a href="#">Configuración</a></p>
                <p><a href="#">Ayuda</a></p>
                <p><a href="#">Salir</a></p>
                <p><a href="#">Informar de un problema</a></p>
            </li>
            <li>
                <input type="checkbox" checked>
                <i></i>
                <h2>Sitios</h2>
                <p><a href="<?php echo $fsConfig->getPath() ?>index.php/home/createSitio">Crear Sitio</a></p>
                <p><a href="#">Editar Sitio</a></p> 
                <p><a href="#">Desactivar Sitio</a></p>
                <p><a href="#">Eliminar Sitio</a></p>

            </li>
            <li>
                <input type="checkbox" checked>
                <i></i>
                <h2>Eventos</h2>
                <p><a href="#">Crear Evento</a></p>
                <p><a href="#">Editar Evento</a></p>
                <p><a href="#">Desactivar Evento</a></p>
                <p><a href="#">Eliminar Evento</a></p>
            </li>
        </ul>
    </div>
</section>
<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>

