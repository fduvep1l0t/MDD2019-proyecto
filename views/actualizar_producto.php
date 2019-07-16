
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Tienda MDD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">


      <div class="col-lg-12">

        <div class="row">

        <form class="form" method="post" action="<?php echo base_url()?>index.php/productos/actualizar/<?php echo $producto->prod_id?>">
          <div class="form-group">
            <label>Nombre</label>
            <input class="form-control" value="<?php echo $producto->prod_name?>" id="nombre" type="" name="nombre">
          </div>
          <div class="form-group">
            <label>Precio</label>
            <input class="form-control" value="<?php echo $producto->prod_price?>" id="precio" type="" name="precio">
          </div>
          <div class="form-group">
            <label>Stock</label>
            <input class="form-control" value="<?php echo $producto->prod_stock?>" id="stock" type="" name="stock">
          </div>  
          <div class="form-group">
            <label>Descripcion</label>
            <input class="form-control" value="<?php echo $producto->prod_desc?>" id="descripcion" type="" name="descripcion">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Actualizar</button>
           </div> 
        </form>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>


</body>

</html>

