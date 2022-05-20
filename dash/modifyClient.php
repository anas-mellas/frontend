<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");
                    
    $_POST['customerID']=$_GET['id'];

    $url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	$dernier = $tab[count($tab)-1];
	$tab2 = explode("?",$dernier);
	$dernier2 = $tab2[0];
    $lastPage = "client.php";

  if (isset($_POST['customerID']) AND isset($_POST['firstName']) AND isset($_POST['lastName']) AND
    isset($_POST['mobile']) AND isset($_POST['adresse']) AND isset($_POST['city']) AND 
    isset($_POST['email']) ) {
           
        if (!(empty($_POST['customerID'])) AND !(empty($_POST['firstName'])) AND !(empty($_POST['lastName'])) 
            AND !(empty($_POST['mobile'])) AND isset($_POST['adresse']) AND !(empty($_POST['city'])) AND 
            !(empty($_POST['email']))) {
                    
                    $query = 'UPDATE users
                            set firstName=?,
                            lastName=?,
                            mobile=?,
                            city=?,
                            adresse=?,
                            email=?
                            WHERE customerID=? ;';
                    $value = array($_POST['firstName'],$_POST['lastName'],$_POST['mobile'],$_POST['city'],$_POST['adresse'],$_POST['email'],$_POST['customerID']);			
                    $result = PDO($query,$value);
                    
                    
                
                    if($result->rowCount()!=0) {
                        
                        if($dernier2==$lastPage){
                        echo '<script language="Javascript"> document.location.replace("client.php?etat=true"); </script>';
                        
                        }else{
                            echo '<script language="Javascript"> document.location.replace("client.php?etat=true"); </script>';
                        }
                    }
                    else{
                        if($dernier2==$lastPage){
                            echo '<script language="Javascript"> document.location.replace("client.php?etat=false"); </script>';
                            }else{
                                echo '<script language="Javascript"> document.location.replace("client.php?etat=false"); </script>';
                            }
                    }
            }
            else{
                echo "Un champ est vide";
            }

  }
  else{
	if($dernier2==$lastPage){
		echo '<script language="Javascript"> document.location.replace("client.php?etat=false"); </script>';
		}
        
  }
?>