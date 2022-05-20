<?php
/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");

if (isset($_POST['typeLabel']) ) {

    $typeLabel = $_POST['typeLabel'];

                  
	$url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);

    
	$query = "INSERT into car_type(typeLabel) 
				VALUES(?);";

	$value = array($typeLabel);
	$result = PDO($query,$value);

        if ($result) {
            if($tab[count($tab)-1]=="traitType.php"){
                    header("location: types.php?etat=true");
            }
        }else{

            if($tab[count($tab)-1]=="traitType.php"){
                    header("location: types.php.php?etat=false");
            }
        }
}
else
{

  if($tab[count($tab)-1]=="traitType.php"){
      header("location: types.php?etat=false");
    }else{
      header("location: types.php.php?etat=false");
     }
}
?>