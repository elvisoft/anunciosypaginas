<?php  
    //require_once 'app/librerias/app.php';
    //$app=new App();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
      <meta charset="UTF-8">       

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

      <title>Anunciosypaginas: Anuncios clasificados y paginas web de Argentina. Anuncie Gratis!</title>
    </head>
    <body>  

    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Anuncios y Paginas web</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Portada</a></li>
          <li><a href="#">Ultimos Anuncios</a></li>
          <li><a href="#">Anuncios Destacados</a></li>          
          <li><a href="#">Contacto</a></li>          
        </ul>        
                
        <form class="navbar-form navbar-right" action="/action_page.php">                  
          <div class="form-group">
            <a class="btn btn-danger" href="public/agregaranuncio.php" role="button">Agrega Anuncio</a>            
            <input type="text" class="form-control" placeholder="Ejemplo: Trabajo">
          </div>
          <button type="submit" class="btn btn-default">Buscar</button>
        </form>
      </div>
  <!-- Navbar content -->
    </nav>
                       

<div class="container">
     
<div class="row align-items-center">
    <div class="col-4">
        <img src="public/img/sql-tutorial.png" style="width:70px; align-content: center;" alt="Curso de SQL">     
    </div>
    <div class="col-4">
        <p>Base Data SQL</p>      
    </div>
</div>


<div class="row">
  <div class="col-4">
    <div class="card" >
      <div class="card-header border-0">
        <img src="public/img/sql-tutorial.png" style="width:70px; align-content: center;" class="card-img-top" alt="Curso de SQL">
      </div>
    <div class="card-body">
      <p class="card-text">Base Data SQL</p>
    </div>
  </div>
  </div>

  <div class="col-4">
  <div class="card">
    <div class="media">
   <img class="media-left" width="70" alt="Image" src="public/img/android-tutorial.png">
   <div class="media-body">
      <h4 class="card-title">Android Developer</h4>
      <p class="card-text">Aplicaciones Moviles</p>      
   </div>
  </div>
  </div>
  

  </div>

  <div class="col-4">
   <div class="card" >
   <div class="media">
   <img class="media-left" width="60" alt="Image" src="public/img/android-tutorial.png">
   <div class="media-body">
      <h2> Android</h2>
      <p class="card-text">Cursos y Tutoriales</p>    
   </div>
   </div>

  </div>
  </div>

</div>

  

<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>

</div>
        
       
        
        <?php
        // put your code here
        ?>
    </body>
</html>
