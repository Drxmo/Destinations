<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/headerDos.php' ?>

<section class="main container">
    <div class="row ">
        <div class="miga-de-pan col-md-10">
            <ol class="breadcrumb">
                <li class="inicio"><a href="#"></a>Inicio</li>
                <li><a href="#">Tiamat</a></li>
                <li class="active">Itinerario</li>
            </ol>
        </div>
    </div>
    <!--Termina Miga De Pan-->
    <div class="row">
        <div class="itineraio col-lg-2">
            <aside class="" >   
                <div class="list-group">
                    <a href="#" class="list-group-item">Sitios</a>
                    <a href="#" class="list-group-item">Eventos</a>
                    <a href="#" class="list-group-item">Proximos</a>

                </div>
            </aside>
        </div>
        <div class="col-md-8">
            <article class="">    
                <div class="table-responsive">
                    <table class="table table-striped">                                                                                 
                        <thead>
                            <tr class="active">
                                <th>Evento</th>
                                <th>Fecha</th>
                                <th>Opciones</th>
                            </tr>
                            <tr>
                                <td>Buga Tatto</td>
                                <td>25/11/2015</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="#" class="btn btn-xs btn-warning"><i class="icon-direction"></i></a>
                                    <a href="#" class="btn btn-xs btn-primary"><i class="icon-bell"></i></a>
                                    <a href="#" class="btn btn-xs btn-danger"><i class="icon-cross"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Concierto</td>
                                <td>02/12/2015</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="#" class="btn btn-xs btn-warning"><i class="icon-direction"></i></a>
                                    <a href="#" class="btn btn-xs btn-primary"><i class="icon-bell"></i></a>
                                    <a href="#" class="btn btn-xs btn-danger"><i class="icon-cross"></i></a>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>   
            </article>
        </div>

        <aside class="col-md-2 hidden-xs hidden-sm pull-right " >
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
    </div>  
</section>
<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
