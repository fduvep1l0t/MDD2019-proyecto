
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
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>index.php/productos/agregar_view">Agregar producto</span></a>
      </li>
    </ul>
  </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">


      <div class="col-lg-12">

        <div class="row">

    
        <?php foreach ($productos as $posicion => $value): ?>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/450x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                <a href="#"><?php echo $value['prod_name'];?></a>
                </h4>
                <h5>$<?php echo $value['prod_price'];?></h5>
                <p class="card-text"><?php echo $value['prod_desc'];?></p>
                <a href="<?php echo base_url()?>index.php/productos/actualizar_view/<?php echo $value['prod_id']?>">Modificar producto</a><br>
                <a href="<?php echo base_url()?>index.php/productos/eliminar/<?php echo $value['prod_id']?>">Eliminar producto</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

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

