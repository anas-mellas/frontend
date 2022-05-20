<?php
/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");

if (isset($_POST['carModel']) AND isset($_POST['carBrand']) AND
    isset($_POST['carColor']) AND isset($_POST['isDisponible']) AND isset($_POST['purchaseDate']) AND 
    isset($_POST['priceKm']) AND isset($_POST['typeID']) ) {

    $carModel = $_POST['carModel'];
	$carBrand = $_POST['carBrand'];
	$carColor = $_POST['carColor'];
	$isDisponible = $_POST['isDisponible'];
	$purchaseDate = $_POST['purchaseDate'];
	$priceKm = $_POST['priceKm'];
    $typeID = $_POST['typeID'];

                  
	$url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);

    
	$query = "INSERT into cars(carModel,carBrand,carColor,isDisponible,purchaseDate,priceKm,typeID) 
				VALUES(?,?,?,?,?,?,?);";

	$value = array($carModel,$carBrand,$carColor,$isDisponible,$purchaseDate,$priceKm,$typeID);
	$result = PDO($query,$value);

        if ($result) {
            if($tab[count($tab)-1]=="traitCar.php"){
                    header("location: cars.php?etat=true");
            }
        }else{

            if($tab[count($tab)-1]=="traitCar.php"){
                    header("location: cars.php?etat=false");
            }

        }



}
else
{

  if($tab[count($tab)-1]=="traitCar.php"){
      header("location: cars.php?etat=false");
    }else{
      header("location: cars.php?etat=false");
     }
}
?>