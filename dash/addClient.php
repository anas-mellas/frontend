<?php
/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");

if (isset($_POST['firstName']) AND isset($_POST['lastName']) AND
    isset($_POST['mobile']) AND isset($_POST['adresse']) AND isset($_POST['city']) AND 
    isset($_POST['email'])) {

    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$mobile = $_POST['mobile'];
	$adresse = $_POST['adresse'];
	$city = $_POST['city'];
    $email = $_POST['email'];
    $password=md5($_POST['firstName'].''.$_POST['lastName']);
    $type = "user";
	$url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);

    
	$query = "INSERT into users(firstName,lastName,mobile,city,adresse,email,type,password) 
				VALUES(?,?,?,?,?,?,?,?);";

	$value = array($firstName,$lastName,$mobile,$adresse,$city,$email,$type,$password);
	$result = PDO($query,$value);

        if ($result) {
            if($tab[count($tab)-1]=="traitClient.php"){
                    header("location: client.php?etat=true");
            }
        }else{

            if($tab[count($tab)-1]=="traitClient.php"){
                    header("location: client.php?etat=false");
            }

        }



}
else
{

  if($tab[count($tab)-1]=="traitClient.php"){
      header("location: client.php?etat=false");
    }else{
      header("location: client.php?etat=false");
     }
}
?>