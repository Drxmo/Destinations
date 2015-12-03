<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/headerDos.php' ?>

<section class="main container">

    <div class="container panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Configuración
                </a>
            </h4>

            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <a href="#" class="list-group-item panel1">
                        <strong class="list-group-item-heading">Nombre</strong>
                        <p>Tiamat</p>
                    </a> 
                </div>
            </div>

            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <a href="#" class="list-group-item panel1">
                        <strong class="list-group-item-heading">Nombre De Usuario</strong>
                        <p>Hathor</p>
                    </a> 
                </div>
            </div>

            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <a href="#" class="list-group-item panel1">
                        <strong class="list-group-item-heading">Correo Electronico</strong>
                        <p>Tiamat@hathor.com</p>
                    </a> 
                </div>
            </div>

            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <a href="<?php echo $fsConfig->getUrl() ?>index.php/usuario/change" class="list-group-item panel1">
                        <strong class="list-group-item-heading">Seguridad</strong>
                        <p>Cambiar Contraseña</p>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
