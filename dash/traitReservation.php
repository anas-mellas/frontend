<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reservation traitement</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

</head>



  <body id="page-top">

 <?php
 /*Ajouter le Dashboard*/
include("nav.php");
/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");

if(isset($_GET['id'])){
$id = $_GET['id'];

$sql = "SELECT * FROM `reservations` WHERE reservationID=?";
$value = array($id);

$result = PDO($sql,$value);

    if($result->rowCount()!=0)  {
            while($row = $result->fetch())
                {
                  
                  $reservationID = $row['reservationID'] ;
                  $pickupDay = $row['pickupDay'] ;
                  $returnDay = $row['returnDay'] ;
                  $price = $row['price'];
                  $returnLocation = $row['returnLocation'] ;
                  $pickupLocation = $row['pickupLocation'] ;
                  $customerID = $row['customerID'] ;
                  $carID = $row['carID'] ;

                }       
    }
}
 ?>
<!--*************************************************************************************-->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Commande <?php if(isset($_GET['id'])){echo 'Numero '.$reservationID;}?> </h6>
<?php
      if (isset($_GET['etat'])) {
        if($_GET['etat']=="true"){
          echo '
            <div class="alert alert-success">
              <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>
            </div>
            <script>
               setTimeout(function(){
                  window.location.href = \'reservation.php\';
               }, 2000);
            </script>
            ';


          }else{
            echo '<div class="alert alert-danger">
                      <i class="fas fa-times"></i> <strong>Error !<strong> l\'hors de l\'opération ! .
                  </div>
                  <script>
                     setTimeout(function(){
                        window.location.href = \'reservation.php\';
                     }, 2000);
                  </script>
                  ';

          }
      }
?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php 
                  if(isset($_GET['id'])){
                    echo '<form action="modifyReservation.php?id='.$reservationID.'" method="POST" id="formajout">';
                          
                  }else{
                    echo '<form action="addReservation.php" method="POST" id="formajout">';
                  }
                ?>
                
                <p class="sup2"><i class="fas fa-exclamation-triangle"></i> Touts les champs est obligatoires</p>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Votre commande</span>
                  </div>
                  <input type="text" name="commande" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$commande.'"'; }?>>
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Adresse de livraison</span>
                  </div>
                  <input type="text" name="Adresse" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$Adresse.'"'; }?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mode de livraison</span>
                  </div>
                  <input type="text" name="modedelivraison" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$modedelivraison.'"'; }?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Paiement</span>
                  </div>
                  <input type="text" name="Paiement" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$Paiement.'"'; }?>>
                </div>
                 <?php 
                if(isset($_GET['id'])){
                ?> 
                  <div class="input-group mb-3">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                          </div>
                          <input type="number" name="price"  class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$price.'"'; }?>>
                  </div>
                
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Customer ID</span>
                    </div>
                    <input type="number" name="customerID"  class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$customerID.'" disabled'; }?> >
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Car ID</span>
                    </div>
                    <input type="number" name="carID" placeholder="Adresse..." class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$carID.'" disabled'; }?> >
                  </div>
                <?php 
                }else{
                ?>
                  
                <?php
                }
                ?>
                <input type="submit" name="submit" class="btn btn-info float-right">
                  </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


</body>
</html>