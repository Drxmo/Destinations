<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<header>
  <nav class="navbar navmain navbar-default">
    <div class="container">
      <div class="navbar-header">
        <h1><a href="" title="BugaTurismo" rel="home">BUGA TURISMO</a>
        </h1>
      </div>   
    </div>
  </nav>
  <nav class="navsub navbar navbar-default">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/index">Inicio <span class="sr-only">(current)</span></a></li>
          <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/sitioUsuario">Sitios</a></li>
          <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/eventoUsuario">Eventos</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/categoriasUsuario">Todas</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Deportes</a></li>
              <li><a href="#">Ecoturismo</a></li>
              <li><a href="#">Gastronomia</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form action="<?php echo $fsConfig->getUrl() ?>index.php/home/busqueda" class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">
            <span class="icon-magnifying-glass"></span>
          </button>
        </form>
          
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $_SESSION['user']; ?>">Bienvenido</a></li>
          <li><a href="#">Bienvenido</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
               <li role="separator" class="divider"></li> 
              <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/itinerario">Mi itinerario</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/panelControl">Panel de control</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/config">Configuracion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>