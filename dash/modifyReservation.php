<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");
                    
    $_POST['reservationID']=$_GET['id'];

    $url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	$dernier = $tab[count($tab)-1];
	$tab2 = explode("?",$dernier);
	$dernier2 = $tab2[0];
    $lastPage = "reservation.php";

  if (isset($_POST['reservationID']) AND isset($_POST['pickupDay']) AND isset($_POST['returnDay']) AND
    isset($_POST['pickupLocation']) AND isset($_POST['returnLocation']) AND isset($_POST['price']) ) {
        if (!(empty($_POST['reservationID'])) AND !(empty($_POST['pickupDay']))  
            AND !(empty($_POST['pickupLocation']))  AND !(empty($_POST['price']))) {
                    
                    $query = 'UPDATE reservations
                            set pickupDay=?,
                            pickupLocation = ?,
                            price= ?
                            WHERE reservationID=? ;';
                    $value = array($_POST['pickupDay'],$_POST['pickupLocation'],$_POST['price'],$_POST['reservationID']);			
                    $result = PDO($query,$value);
                    
                    
                
                    if($result->rowCount()!=0) {
                        
                        if($dernier2==$lastPage){
                            echo '<script language="Javascript"> document.location.replace("reservation.php?etat=true"); </script>';
                        
                        }else{
                            echo '<script language="Javascript"> document.location.replace("reservation.php?etat=true"); </script>';
                        }
                    }
                    else{
                        if($dernier2==$lastPage){
                                echo '<script language="Javascript"> document.location.replace("reservation.php?etat=false"); </script>';
                            }else{
                                echo '<script language="Javascript"> document.location.replace("reservation.php?etat=false"); </script>';
                            }
                    }
            }
            else{
                //Un champ est vide
                echo '<script language="Javascript"> document.location.replace("reservation.php?etat=false"); </script>';

            }

  }
  else{
	if($dernier2==$lastPage){
		echo '<script language="Javascript"> document.location.replace("reservation.php?etat=false"); </script>';
		}
        
  }
?>