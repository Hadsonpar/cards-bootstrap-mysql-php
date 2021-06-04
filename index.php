<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 

    <div class="container">
    
        <div class="container-fluid bg-success text-center" style="padding-top:10px;padding-bottom:10px">
            <h1>Cards in bootstrap, MySQL and PHP</h1>
        </div></br>

        <?php
            /* incluimos el archovo dbconnect.php para acceder a la base de datos*/
            include_once("dbconnect.php");

            /* query para manipular los datos*/
            $sql = "SELECT id, name, photo, profile, address, skills, website, facebook, gplus, 
                    twitter, flag FROM usuario";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

            /* recorremos los registro obtenidos*/
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>
            <!--Cards que viene siendo alimentado desde la base de datos registro por regstro-->
            <div class="card mb-3">
                <div class="row no-gutters">
                    
                    <div class="col-md-12">
                        <!--Sección card-header-->
                        <div class="card-header text-center">
                            
                            <?php 
                                if ($record['flag'] == 1){
                                    echo '<h3 class="H3Dis">Disponible</h3>';
                                }elseif($record['flag'] == 2){
                                    echo '<h3 class="H3Ocup">Ocupado</h3>';
                                }
                            ?>

                        </div>  
                    </div>  

                    <div class="col-md-3">
                        <!--figure avatar-->
                        <figure class="avatar avatar-xl">
                            <!--img foto-->
                            <img class="foto" alt="" src="<?php echo $record['photo']; ?>">
                        </figure>
                    </div>
                    
                    <div class="col-md-9">  
                        <!--Sección card-body-->                     
                        <div class="card-body info">
                            <h3><?php echo $record['name']; ?></h3>
                            
                            <div> <a target="_blank" href="<?php echo $record['website']; ?>">
                                                            <?php echo $record['website']; ?></a></div>
                            <div><?php echo $record['profile']; ?></div>
                    
                            <div><?php echo $record['address']; ?></div>
                            <h6><?php echo $record['skills']; ?></h6>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!--Sección card-footer-->
                        <div class="card-footer bottom text-center">
                            <a class="btn btn-primary btn-twitter btn-sm" href="<?php echo $record['twitter']; ?>">
                                                                                <i class="fa fa-twitter"></i></a>
                            
                            <a class="btn btn-danger btn-sm" rel="publisher"
                                href="<?php echo $record['gplus']; ?>">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            <a class="btn btn-primary btn-sm" rel="publisher"
                                href="<?php echo $record['facebook']; ?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html> 