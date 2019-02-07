<?php
session_start();
if(!isset($_SESSION['SessionName'])){
	header('location=index.php');
}
?>
<!doctype html>
<html lang="es">
  <head>        
  	<link rel="stylesheet" type="text/css" href="simplePage/css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- menu b-->
    <link rel="stylesheet" type="text/css" href="css/menub"/>
    <script type="text/javascript" src="js/menub.js"></script>
    <!-- menu b fin -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body style="background-color: #1c033d;">
    <!-- este es el inicio-->
    <section id="Welcome"  class="container mt-4 bodyHome">
        <div class="row">
          <div class="col-2 mt-5 col-md-3" for="abrir-cerrar">
          </div>
          <div class="col-6 col-md-8"></div>
          <div class="col-4 col-md-1">            
            <div  data-toggle="modal" data-target="#myModal" class="border text-center">           	
              <img src="simplePage/img/user.png" class="iconUser rounded-circle" />                
              <b class="iconUser text-info"><?php echo $_SESSION['SessionName'];?></b>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-5 mt-5 col-md-4">
          	<a href="users.html"><img class="float-right logoGif mt-5" width="200" src="simplePage/img/btnProofUsers.png"></a>  
          </div>          
          <div class="col-2 mt-5 col-md-4" for="abrir-cerrar">                        
          	<img class="rounded rounded-circle" src="simplePage/img/logoV1.png">  
            <a href="simplePage/index.html"><img  class="w-100 logoGif" style="margin-top: -300px;" src="simplePage/img/btnProofDemudata.png"></a>
          </div>                   
          <div class="col-5 col-md-4">
          	<a href="about.html"><img class="float-left logoGif" style="margin-top: 100px;" width="200" src="simplePage/img/btnProofAbout.png"> </a>
          </div>
        </div>
        <div class="row">
          <div class="col-4 col-md-4">

          </div>
          <div class="col-4 col-md-4">          	
          </div>
          <div class="col-4 col-md-4">
          </div>
        </div>
    </section>
    <!-- este es el fin del inicio-->      

	<!-- The Modal -->
	<div class="modal" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Bienvenido a mi Demo</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	      <div class="modal-body">
	      	<a class="float-right" href="logA.php"><img  data-toggle="tooltip" title="Salir de DemuData!" src="simplePage/img/logOut.png" width="50" /></a>
	      	<p class="text-info">
	      		<b>Usted es:</b>
		        <?php
		        echo 'Usuario: '.$_SESSION['SessionName'];
		        echo 'Su contraseña'.$_SESSION['SessionPass'];
		        ?>
	        </p>
	      </div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">❌</button>
	      </div>

	    </div>
	  </div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>