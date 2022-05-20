<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Commande</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

         <!-- Include the navBar and sideBar-->
         <?php
          include("nav.php");

          include("traitement/function.php");
        ?>

          <?php
                if (isset($_GET['etat'])) {
                  if($_GET['etat']=="true"){
                    echo '
                      <div class="alert alert-success"  style="margin-left: 20px; margin-right: 20px;">
                        <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>
                      </div>
                      <script>
                        setTimeout(function(){
                            window.location.href = \'reservation.php\';
                        }, 2000);
                      </script>
                      ';
                    }else{
                      echo '<div class="alert alert-danger" style="margin-left: 20px; margin-right: 20px;">
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
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Commandes</h1>
          <p class="mb-4">Vous trouverez ici toutes les commandes ! </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">commandes</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>commande</th>
                      <th>Price</th>
                      <th>delivery location</th>
                      <th>Customer Name</th>
                      <th>Customer Phone</th>
                      <th>product ID</th>
                      <th>Etat</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>ID</th>
                      <th>commande</th>
                      <th>Price</th>
                      <th>delivery location</th>
                      <th>Customer Name</th>
                      <th>Customer Phone</th>
                      <th>product ID</th>
                      <th>Etat</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                      <?php
                         $sql = "SELECT * FROM reservations,users WHERE reservations.customerID=users.customerID and isConfirmed='1' ORDER BY reservationID asc";
                         $value = array();
                         $result = PDO($sql,$value);

                        if($result->rowCount()!=0)  
                        {
                          while($row = $result->fetch())
                          {

                            echo '
                                <tr>
                                 <td>'.$row['commandeID'].'</td>
                                  <td>'.$row['commande'].'</td>
                                  <td>'.$row['price'].'</td>
                                  <td>'.$row['deliverylocation'].'</td>
                                  <td>'.$row['firstName'].' '.$row['lastName'].'</td>
                                  <td>'.$row['mobile'].'</td>
                                  <td>'.$row['productID'].'</td>
                                  <td> Confirmer </td>
                                  <td>
                                      
                                      <button type="button" class="btn btn-warning" onclick=" window.location.href = \'traitReservation.php?id='.$row['reservationID'].'\';">
                                          Modifier
                                      </button>
                                  </td>
                                  <td>
                                      <form action="refuseReservation.php" method="post">
                                        <input type="hidden"   name="id" value="'.$row['reservationID'].'" >
                                        <input type="submit" value="Supprimer" class="btn btn-danger">
                                      </form>
                                  </td>
                                </tr>'

                            ;
                          }
                        }
                      ?>
                  </tbody>
                </table>
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
