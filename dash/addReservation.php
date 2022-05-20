<?php
/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");

if (isset($_POST['pickupDay']) AND isset($_POST['returnDay']) AND
    isset($_POST['pickupLocation']) AND isset($_POST['returnLocation']) AND 
    isset($_POST['customerID']) AND isset($_POST['carID']) ) {

   
    $pickupDay =  $_POST['pickupDay'];
    $returnDay = $_POST['returnDay'];
    $pickupLocation = $_POST['pickupLocation'];
    $returnLocation = $_POST['returnLocation'];
    $customerID = $_POST['customerID'];
    $carID = $_POST['carID'];
                  
	$url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);

    $sql3 = "SELECT priceKm FROM `cars` where carID=?";
    $value3 = array($carID);
    $result3 = PDO($sql3,$value3);
    if($result3->rowCount()!=0) {
        while($row3 = $result3->fetch()){
            $priceKm = $row3['priceKm'];
        }
    }

    $difference = (new DateTime($pickupDay))->diff(new DateTime($returnDay))->format("%r%a");
    
    if($difference<=0){
        header("location: reservation.php?etat=false");
    }

    $priceKm = $priceKm * $difference;
    

	$query = "INSERT into reservations(pickupDay,returnDay,price,pickupLocation,returnLocation,customerID,carID) 
				VALUES(?,?,?,?,?,?,?);";

	$value = array($pickupDay,$returnDay,$priceKm,$pickupLocation,$returnLocation,$customerID,$carID);
	$result = PDO($query,$value);

    $query1 = "UPDATE cars set isDisponible = '-1' where carID = ?";

    $value1 = array($carID);
    $result1 = PDO($query1,$value1); 

        if ($result) {
            if($tab[count($tab)-1]=="traitReservation.php"){
                    header("location: reservation.php?etat=true");
            }
        }else{

            if($tab[count($tab)-1]=="traitReservation.php"){
                    header("location: reservation.php?etat=false");
            }

        }




}
else
{

  if($tab[count($tab)-1]=="traitReservation.php"){
      header("location: reservation.php?etat=false");
    }else{
      header("location: reservation.php?etat=false");
     }
}
?>