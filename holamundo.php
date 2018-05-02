
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
      <!--para añadir un logo-->
<img id="Imagen2" src="Imagenes/Imagen2.jpg" alt="Imagen2" height="120">

    </header>
    <div>
      <div class="container">
  
        <div class="row">
          <div class="col">
            <p>Tienda online</p>
          </div>
          <div class="col">
            <p>Precios inigualables</p> 
          </div>
          <div class="col">
            <img src="Imagenes/Imagen3.jpg" width="240">
          </div>
          <div class="col">
            <p>Envio gratis</p>
          </div>
        </div>
        <div class="row">
          <?php for ($i=1; $i <= 12; $i++) { ?>
              <div class="col-md-3">
                  <img  src="Imagenes/foto<?= $i ?>.jpg"  width="200">
              </div>
          <?php } ?>
        </div>
      </div>
    </div>

  
    <footer>
    </footer>










      <h1>Hola Juan</h1>

      <p id="uno" class="cabecera"> Esto es el parrafo 1</p>
      <p id="dos" class="cabecera">Esto es el parrafo 2</p>
      <p id="tres">Esto es el parrafo 3</p>
      <p id="cuatro">Esto es el parrafo 4</p>
      <p id="cinco"class="destacado">Esto es el parrafo 5</p>
      <p id="seis"class="destacado">Esto es el parrafo 6</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>