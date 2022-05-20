<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Voiture traitement</title>

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

$sql = "SELECT * FROM `cars` WHERE carID=?";
$value = array($id);

$result = PDO($sql,$value);

    if($result->rowCount()!=0)  {
            while($row = $result->fetch())
                {
                  
                  $carID = $row['carID'] ;
                  $carModel = $row['carModel'] ;
                  $carBrand = $row['carBrand'] ;
                  $carColor = $row['carColor'] ;
                  $isDisponible = $row['isDisponible'] ;
                  $purchaseDate = $row['purchaseDate'] ;
                  $priceKm = $row['priceKm'] ;
                  $typeID = $row['typeID'];

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
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Voitures</h6>
<?php
      if (isset($_GET['etat'])) {
        if($_GET['etat']=="true"){
          echo '
            <div class="alert alert-success">
              <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>
            </div>
            <script>
               setTimeout(function(){
                  window.location.href = \'cars.php\';
               }, 2000);
            </script>
            ';


          }else{
            echo '<div class="alert alert-danger">
                      <i class="fas fa-times"></i> <strong>Error !<strong> l\'hors de l\'opération ! .
                  </div>
                  <script>
                     setTimeout(function(){
                        window.location.href = \'cars.php\';
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
                    echo '<form action="modifycar.php?id='.$carID.'" method="POST" id="formajout">';
                          
                  }else{
                    echo '<form action="addCars.php" method="POST" id="formajout">';
                  }
                ?>
                
                <p class="sup2"><i class="fas fa-exclamation-triangle"></i> Touts les champs est obligatoires</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Model</span>
                  </div>
                  <input type="text" name="carModel" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$carModel.'"'; }?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Brand</span>
                  </div>
                  <input type="text" name="carBrand" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$carBrand.'"'; }?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
                  </div>
                  <input type="text" name="carColor" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$carColor.'"'; }?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">purchase Date</span>
                  </div>
                  <input type="date" name="purchaseDate" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$purchaseDate.'"'; }?>>
                </div>
                  
              
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Price per KM</span>
                  </div>
                  <input type="number" name="priceKm"  class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$priceKm.'"'; }?>>
                </div>
                <?php
                  if (isset($_GET['id'])) {
                ?>
                  <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">disponibilte</span>
                        </div>
                        <input type="number" name="isDisponible"  class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$isDisponible.'"'; }?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
                  </div>
                  <input type="number" name="typeID" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$typeID.'"'; }?> disabled>
                </div>
                <?php
                  }else{
                ?>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Disponibilote</span>
                    </div>
                    <select class="form-control" name="isDisponible" aria-describedby="inputGroup-sizing-default" aria-label="Sizing example input">
                          <option value="-1">Non disponible</option>
                          <option value="1">Disponible</option>
                    </select>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
                    </div>
                    <select class="form-control" name="typeID" aria-describedby="inputGroup-sizing-default" aria-label="Sizing example input">
                      <?php
                         $sql = "SELECT * FROM `car_type` ORDER BY typeID asc";
                                   $value = array();
                                   $result = PDO($sql,$value);

                                  if($result->rowCount()!=0)  
                                  {
                                    while($row = $result->fetch())
                                    {
                                    echo'
                          <option value="'.$row['typeID'].'">
                            '.strtoupper($row['typeLabel']).' 
                          </option>
                                    ';
                                    }
                                  }
                      ?>

                    </select>
                  </div>
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

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <script>document.write(new Date().getFullYear());</script></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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