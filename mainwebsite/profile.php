<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="static/css/bootstrap.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="static/css/profile.css">

    <link rel="stylesheet" href="static/css/index.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Profile</title>

</head>

<body>

    <!-- Nav BAR -->

   <?php

    include('../dash/traitement/function.php');

      if (isset($_GET['etat'])) {

        if($_GET['etat']=="true"){

          echo '

            <div class="alert alert-success">

              <i class="far fa-check-square"></i> Changer avec succes

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'profile.php\';

               }, 2000);

            </script>

            ';
          }else{

            echo '<div class="alert alert-danger">

                      <i class="fas fa-times"></i> Erreur c\'est produit ! verifier votre informations

                  </div>

                  <script>

                     setTimeout(function(){

                        window.location.href = \'profile.php\';

                     }, 2000);

                  </script>

                  ';



          }

      }

    capterConnexion($_SESSION['id_user'],'index.php');

    ?>

    <!-- End NAV BAR -->

    

    <?php

        $query = "SELECT * from users where customerID=? ;";

        $values = array($_SESSION['id_user']);

        $res=PDO($query,$values);

         if($res->rowCount()!=0){

              while ($row = $res->fetch()) {

                $firstName = test_input($row['firstName']);

                $lastName =  test_input($row['lastName']);

                $mobile =  $row['mobile'];

                $adresse =  test_input($row['adresse']);

                $city =  test_input($row['city']);

                $email =  $row['email'];

                $mdps =  test_input($row['password']);

                $type =  test_input($row['type']);

              }

         }

    ?>

    <br>

    <div class="container">

        <div class="row">
 <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                  Bonjour

                </div>

                <div class="card-body">

                  <p class="card-text"><b><?php echo $firstName .' '.$lastName; ?></b></p>

                  <p class="card-text"><b><?php  echo $email."";?></b></p>

                </div>

                <div class="card-footer text-muted">
                  <?php
                    if($type=="admin"){
                      echo'
                        <a href="../dash/reservation.php" class="btn btn-success">Dashboard</a>

                      ';
                    }
                  ?>
                  <a href="index.php" class="btn btn-info">Return Home</a>

                  <a href="deconnexion.php" class="btn btn-danger">Déconnexion</a>

                </div>

              </div>

          </div>

          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                  Information

                </div>

                <div class="card-body">

                    <p class="text"><b>ID : </b><?php  echo $_SESSION['id_user'];?></p>

                    <p class="text"><b>First Name : </b><?php  echo $firstName;?></p>

                    <p class="text"><b>Last Name : </b> <?php  echo $lastName;?></p>

                    <p class="text"><b>City : </b><?php  echo $city;?></p>

                    <p class="text text-area"><b>Adresse : </b><?php  echo $adresse;?></p>

                    <p class="text"><b>Mobile : </b><?php  echo $mobile;?></p>

                    <p class="text"><b>Type : </b><?php echo $type ;?></p>

                </div>

                <div class="card-footer text-muted">

                    <div class="textright">

                    <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modifier</button>

                    </div> 

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                     <div class="modal-dialog" role="document">

                        <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Modification</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <div class="modal-body">

                        <form action="modifier_user.php" method="POST">         

                              <?php 

                              echo '
                                    <input type="hidden" name="id" value="'.$_SESSION['id_user'].'"> 
                                  ';

                              ?>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nouveau mot de pass</label>

                                <input type="password" class="form-control" id="recipient-name" name="pass1"

                                >

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Confirme mot de pass</label>

                                <input type="password" class="form-control" id="recipient-name" name="pass2">

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">First Name</label>

                                <input type="text" class="form-control" id="recipient-name" name="firstName" 

                                value=<?php echo $firstName; ?>>

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">last Name</label>

                                <input type="text" class="form-control" id="recipient-name" name="lastName"

                                value=<?php echo $lastName; ?>>

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">City</label>

                                <input type="text" class="form-control" id="recipient-name" name="city"

                                value=<?php echo $city; ?>>

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Email</label>

                                <input type="text" class="form-control" id="recipient-name" name="email"

                                value=<?php echo $email; ?>>

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Adresse</label>

                                <textarea type="text" class="form-control" id="recipient-name" name="adresse">
                                  <?php
                                    echo $adresse;
                                  ?>
                                  
                                </textarea> 

                                

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Mobile</label>

                                <input type="text" class="form-control" id="recipient-name" name="mobile" 

                                value=<?php echo $mobile; ?>>

                            </div>

                            <div class="modal-footer">

                            <input type="submit" class="btn btn-primary btn-sm" value="Enregistrer">

                             </div>
                             

                           </form>

                        </div>

                        </div>

                    </div>

                    </div>

                </div>

              </div>

          </div>

        </div>

      </div>

<?php

include("footer.php");

?>  


    <!-- End Posts Section -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="static/js/bootstrap.js"></script>

</body>

</html>