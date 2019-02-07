<?php
session_start();
if(isset($_SESSION['SessionName'])){
  echo "<script>location='home.php';</script>";
}
if(isset($_POST['User'])){
	$u = $_POST['User'];
	$p = $_POST['Pass'];
  if($u == 'root' && $p == 'toor')
  {    
    $_SESSION['SessionName'] = $u;
    $_SESSION['SessionPass'] = $p;
    echo "<script>location='home.php';</script>";
  }	else
  {
    echo "<script>location='?fail';</script>";
  }
}
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
      section{        
        background: -webkit-radial-gradient( 10px 70px, circle farthest-side, #F06, #000 );
        background: radial-gradient( farthest-side circle at 60px 70px, #F06, #000 );          
      }
      input
      {
        font-size: 19px;
        float: left;
        border: 3px solid #6b30a9;
        width: 65%;
        padding: 2%;
        color: #b671b0;
      }
      button{
        background: #ea4edb;
        float: right;
        width: 100px;
        border: 2px solid black;
        color: white;
        font-size: 25px;
        cursor: pointer;
      }
      button:hover
      {
        background: white;
        color: #ea4edb;
        border: white;
        transition: all 1s;
      }
      .textbox {
        height: 700px;
      }

      .progress {
        margin-bottom: 10px;
      }

      .progress-bar {
        width: 0;
      }
    </style>
    <script type="text/javascript">
      var delay = 500;
      $(".progress-bar").each(function(i){
          $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );

          $(this).prop('Counter',0).animate({
              Counter: $(this).text()
          }, {
              duration: delay,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now)+'%');
              }
          });
      });
    </script>
    <title>login</title>
  </head>
  <body>
    <section class="mt-2 container">
      <div class="row">      
        <div class="col-4"></div>
        <form class="col-4 mt-5 mb-5" action="" method="POST">
          <div class="form-group">
            <img src="simplePage/img/logoV1.png">            
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <?php
          if(isset($_GET['fail'])){
            ?>
            <div class="alert alert-success">
              <strong>Recuerde!</strong> <b>U</b>:root - <b>P</b>: toor
            </div>
            <?php
          }
          ?>
          <div class="form-group">            
            <input type="text" placeholder="U:" name="User" id="email">
          </div>
          <div class="form-group">            
            <input type="password" placeholder="P:" name="Pass" id="pwd">
          </div>                    
          <button type="submit" class="">🖰 Go!</button>
        </form>
      </div>
      <div class="col-4"></div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>	