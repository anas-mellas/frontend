<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");
                    
    $_POST['typeID']=$_GET['id'];

    $url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	$dernier = $tab[count($tab)-1];
	$tab2 = explode("?",$dernier);
	$dernier2 = $tab2[0];
    $lastPage = "types.php";

  if (isset($_POST['typeID']) AND isset($_POST['typeLabel']) ) {
           
        if (!(empty($_POST['typeLabel'])) ) {
                    
                    $query = 'UPDATE car_type
                            set typeLabel=?
                            WHERE typeID=? ;';
                    $value = array($_POST['typeLabel'],$_POST['typeID']);			
                    $result = PDO($query,$value);
                    
                    
                
                    if($result->rowCount()!=0) {
                        
                        if($dernier2==$lastPage){
                        echo '<script language="Javascript"> document.location.replace("types.php?etat=true"); </script>';
                        
                        }else{
                            echo '<script language="Javascript"> document.location.replace("types.php?etat=true"); </script>';
                        }
                    }
                    else{
                        if($dernier2==$lastPage){
                            echo '<script language="Javascript"> document.location.replace("types.php?etat=false"); </script>';
                            }else{
                                echo '<script language="Javascript"> document.location.replace("types.php?etat=false"); </script>';
                            }
                    }
            }
            else{
                echo "Un champ est vide";
            }

  }
  else{
	if($dernier2==$lastPage){
		echo '<script language="Javascript"> document.location.replace("types.php?etat=false"); </script>';
		}
        
  }
?>