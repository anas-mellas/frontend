<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");
                    
    $_POST['carID']=$_GET['id'];

    $url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	$dernier = $tab[count($tab)-1];
	$tab2 = explode("?",$dernier);
	$dernier2 = $tab2[0];
    $lastPage = "cars.php";

  if (isset($_POST['carID']) AND isset($_POST['carModel']) AND isset($_POST['carBrand']) AND
    isset($_POST['carColor']) AND isset($_POST['isDisponible']) AND isset($_POST['purchaseDate']) AND 
    isset($_POST['priceKm']) ) {
           
        if (!(empty($_POST['carID'])) AND !(empty($_POST['carModel'])) AND !(empty($_POST['carBrand'])) 
            AND !(empty($_POST['carColor'])) AND isset($_POST['isDisponible']) AND !(empty($_POST['purchaseDate'])) AND 
            !(empty($_POST['priceKm']))) {
                    
                    $query = 'UPDATE cars
                            set carBrand=?,
                            carModel=?,
                            carColor=?,
                            isDisponible=?,
                            purchaseDate=?,
                            priceKm=?
                            WHERE carID=? ;';
                    $value = array($_POST['carBrand'],$_POST['carModel'],$_POST['carColor'],$_POST['isDisponible'],$_POST['purchaseDate'],$_POST['priceKm'],$_POST['carID']);			
                    $result = PDO($query,$value);
                    
                    
                
                    if($result->rowCount()!=0) {
                        
                        if($dernier2==$lastPage){
                        echo '<script language="Javascript"> document.location.replace("cars.php?etat=true"); </script>';
                        
                        }else{
                            echo '<script language="Javascript"> document.location.replace("cars.php?etat=true"); </script>';
                        }
                    }
                    else{
                        if($dernier2==$lastPage){
                            echo '<script language="Javascript"> document.location.replace("cars.php?etat=false"); </script>';
                            }else{
                                echo '<script language="Javascript"> document.location.replace("cars.php?etat=false"); </script>';
                            }
                    }
            }
            else{
                echo "Un champ est vide";
            }

  }
  else{
	if($dernier2==$lastPage){
		echo '<script language="Javascript"> document.location.replace("cars.php?etat=false"); </script>';
		}
        
  }
?>