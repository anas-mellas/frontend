<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");
                    
    $url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	$dernier = $tab[count($tab)-1];
	$tab2 = explode("?",$dernier);
	$dernier2 = $tab2[0];
    $lastPage = "confirmReservation.php";

  if (isset($_POST['id']) ) {
                    
                    $query = 'UPDATE reservations
                            set isConfirmed=?
                            WHERE reservationID=? ;';
                    $value = array('1',$_POST['id']);			
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
	if($dernier2==$lastPage){
		echo '<script language="Javascript"> document.location.replace("reservation.php?etat=false"); </script>';
		}
        
  }
?>