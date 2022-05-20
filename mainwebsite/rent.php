<?php
session_start();
/*Ajouter la connexion a lbase de donnes*/
include('../dash/traitement/function.php');

if (isset($_POST['pickupDay']) AND isset($_POST['returnDay']) AND
    isset($_POST['pickupLocation']) AND isset($_POST['returnLocation'])
    AND isset($_POST['carID']) ) {

    if (!empty($_POST['pickupDay']) AND !empty($_POST['returnDay']) AND
    !empty($_POST['pickupLocation']) AND !empty($_POST['returnLocation'])
    AND !empty($_POST['carID'])) {
   
    $pickupDay =  $_POST['pickupDay'];
    $returnDay = $_POST['returnDay'];
    $pickupLocation = $_POST['pickupLocation'];
    $returnLocation = $_POST['returnLocation'];
    $carID = $_POST['carID'];
    $customerID = $_SESSION['id_user'];

    $sql = "SELECT priceKm FROM `cars` where carID=?";
    $value = array($carID);
    $result = PDO($sql,$value);
    if($result->rowCount()!=0) {
        while($row = $result->fetch()){
            $priceKm = $row['priceKm'];
        }
    }

    $difference = (new DateTime($pickupDay))->diff(new DateTime($returnDay))->format("%r%a");

    if($difference<=0){
        header("location: index.php?etat=false");
    }

    $priceKm = $priceKm * $difference;
    
                  
	$url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);

    
	$query = "INSERT into reservations(pickupDay,returnDay,price,pickupLocation,returnLocation,customerID,carID) 
				VALUES(?,?,?,?,?,?,?);";

	$value = array($pickupDay,$returnDay,$priceKm,$pickupLocation,$returnLocation,$customerID,$carID);
	$result = PDO($query,$value);

        if ($result) {
            if($tab[count($tab)-1]=="index.php"){
                    header("location: index.php?etat=true");
            }else{
                header("location: index.php?etat=true");
            }
        }else{

            if($tab[count($tab)-1]=="index.php"){
                    header("location: index.php?etat=false");
            }else{
                header("location: index.php?etat=false");
            }

        }

    }else{
        //empty
        header("location: index.php");
    }

}
else
{

  if($tab[count($tab)-1]=="index.php"){
      header("location: index.php?etat=false");
    }else{
      header("location: index.php?etat=false");
     }
}
?>