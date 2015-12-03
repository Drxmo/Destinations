<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

<section class="main container">
    <div class="row">
        <div class="jumbotron boxuser">
            <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/home/indexUsuario" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-xs-3">Sitio:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" placeholder="Sitio">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-xs-3">Direccion:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" placeholder="Direccion">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-xs-3">Telefono:</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" placeholder="Telefono">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-xs-3">Descripcion:</label>
                    <div class="col-xs-9">
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </div>

                <div class="form-inline">
                    <label class="control-label col-xs-3" for="ejemplo_archivo_1">Imagen</label><br>
                    <input type="file" id="ejemplo_archivo_1">         
                </div>      

                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-default" value="Crear">
                        <a class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                    </div>
                </div>
        </div>


        </form>
    </div>
</div>
</section>

<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
