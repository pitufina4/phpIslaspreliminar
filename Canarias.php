
<?php


require_once("pasajero.php");
require_once("ferry.php");
require_once("ruta.php");
require_once("agencia.php");
require_once("tarifapasajero.php");
require_once("tarifavehiculo.php");

$p1 = new Pasajero ("Juan","A0000000","2005-10-10",true);

$f1 = new Ferry (1, 300, 50);
$rutahp = new Ruta("HIERRO","PALMA", $f1, 20, 3);
$transmediterranea = new agencia ();
$transmediterranea->inicializarRuta($rutahp);
//echo $transmediterranea->vendarBillete ("HIERRO","PALMA", $p1);

?>



<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
      <header>
        <img src="Imagenes/transmed.jpg" alt="Transmediterranea" height="120">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          </div>
          </li>
          </ul>
          </div>
          </nav>
      </header>
      <div id="uno">
        <div class="container">

          <div class="row">
            <div class="col">
              <h1>Titulo</h1>
                  <form action="recibeformulario.php">
                    <div class="row">
                      <div class="col form-group">
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                      </div>
                      <div class="col form-group">
                        <input name="apellidos" type="text" class="form-control" placeholder="Apellidos">
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col form-group">
                        <input name="email" type="email" class="form-control" placeholder="Correo electronico">
                      </div>
                      <div class="col form-group">
                        <input name="pw" type="password" class="form-control" placeholder="Contraseña">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 form-group">
                        <input name="edad" type="number" class="form-control" placeholder="Edad">
                      </div>
                      <div class="col-md-9 form-group">
                      <select class="form-control" name="nacionalidad">
                        <option value=""selected>Selecciona...</option>
                        <option value="Espana">España</option>
                        <option value="portugal">Portugal</option>
                        <option value="holanda">Holanda</option>
                      </select>   
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-md-9 form-group">
                                <div class="form-check">
                                  <input class="form-check-input" name="intereses[]" type="checkbox" value="informatica" id="defaultCheck1">
                                  <label class="form-check-label" for="defaultCheck1">
                                    Informatica
                                  </label>
                                </div>
                              
                                <div class="form-check">
                                  <input class="form-check-input" name="intereses[]" type="checkbox" value="biologia" id="defaultCheck2">
                                  <label class="form-check-label" for="defaultCheck1">
                                    Biologia
                                  </label>
                                </div>
                              <div class="form-check">
                                <input class="form-check-input" name="intereses[]" type="checkbox" value="empresas" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck1">
                                  Empresas
                                </label>
                              </div>
                      </div>
                      <div class="col-md-3 form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="genero" id="exampleR1adios1" value="mujer">
                          <label class="form-check-label" for="exampleRadios1">
                            Mujer
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="genero" id="exampleRadios2" value="hombre">
                          <label class="form-check-label" for="exampleRadios1">
                            Hombre
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row form-group">
                      <button type="submit" class=" mx-auto btn btn-primary">Enviar</button>  
                    </div> 
                    
                  </form> 
            </div>
            <div class="col">
            <img src="Imagenes/Imagen5.jpg" alt="" width="100%">
            </div>
          </div>
        </div>
      </div>

      <div id="dos">
        <img src="Imagenes/Imagen6.jpg" alt="" width="100%">
      </div>
      <div id="tres">
        <div class="container">
          <div class="row">
            <div class="col">
            TEXTO
            </div>
            <div class="col">
            FORMULARIO
            </div>
          </div>
        </div>
      </div>

      <footer>
      <div class="container">
          <div class="row">
            <div class="col">
             <p>Transmediterranea SL</p>
             <p> 
               Avenida de la guagua,17<br>
                Isla de Tenerife<br>
                10001 - Islas Canarias
             
            </div>
            <div class="col">
              <ol>
                <li>Hierro</li>
                <li>Gomera</li>
                <li>La Palma</li>
                <li>Tenerife</li>
                <li>Fuerteventura</li>
                <li>Lanzarote</li>
                <li>Gran Canaria</li>
              </ol>
            </div>
            <div class="col">
              <p>
                Paga con tarjeta<br>
                Pasarela de pago 100% segura
              </p>
            </div>
            <div class="col">
              <p>
                Para mas info busca en 
                <a href="http://www.google.es" target="_blank"> Google </a>
              </p>  
            </div>
          </div>
        </div>
      
      </footer>





  <?php
  echo $transmediterranea->venderBillete("HIERRO","PALMA", $p1);
  ?>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>