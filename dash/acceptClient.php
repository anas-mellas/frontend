<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");
                    
    $url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	$dernier = $tab[count($tab)-1];
	$tab2 = explode("?",$dernier);
	$dernier2 = $tab2[0];
    $lastPage = "newClient.php";

  if (isset($_POST['id']) ) {
                    
                    $query = 'select * from  demande where id= ? ;';
                    $value = array($_POST['id']);			
                    $result = PDO($query,$value);
                    
                    
                          
                
                    if($result->rowCount()!=0) {
                        while($row = $result->fetch())
                          {
                            $firstName= $row['firstName'];
                            $lastName = $row['lastName'];
                            $city = $row['city'];
                            $adresse = $row['adresse'];
                            $mobile = $row['mobile'];
                            $email = $row['email'];
                            $password = $row['password'];
                            $type = "user";

                            $query2 = "INSERT into users(firstName,lastName,mobile,city,adresse,email,type,password)
                                    values(?,?,?,?,?,?,?,?) ;";
                            $value2=array($firstName,$lastName,$mobile,$city,$adresse,$email,$type,$password);
                            $result2 = PDO($query2,$value2);

                            if ($result2->rowCount()!=0) {
                                if($dernier2==$lastPage){
                                    echo '<script language="Javascript"> document.location.replace("client.php?etat=true"); </script>';
                                    
                                    }else{
                                        echo '<script language="Javascript"> document.location.replace("client.php?etat=true"); </script>';
                                    }

                                      $sql = "DELETE FROM demande WHERE id=?" ;
                                      $value = array($_POST['id']);
                                      $result = PDO($sql,$value);
                            }else{
                                if($dernier2==$lastPage){
                                    echo '<script language="Javascript"> document.location.replace("client.php?etat=false"); </script>';
                                    }else{
                                        echo '<script language="Javascript"> document.location.replace("client.php?etat=false"); </script>';
                                    }
                            }
                          
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
	if($dernier2==$lastPage){
		echo '<script language="Javascript"> document.location.replace("client.php?etat=false"); </script>';
		}
        
  }
?>