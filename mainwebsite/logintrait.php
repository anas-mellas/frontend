<?php

session_start(); 

 $message = '';

include("../dash/traitement/function.php");


$LOGIN = '';

$PASSWORD = '';



  /*****************************************

  *  Vérification du formulaire

  *****************************************/

  // Si le tableau $_POST existe alors le formulaire a été envoyé

  if(!empty($_POST))

  {

    // Le login est-il rempli ?

    if(empty($_POST['login']))

    {

      $message = 'Veuillez indiquer votre login svp !';

    }

      // Le mot de passe est-il rempli ?

    elseif(empty($_POST['password']))

    {

      $message = 'Veuillez indiquer votre mot de passe svp !';

    }

  

  elseif((!empty($_POST['login'])) AND (!empty($_POST['password']))) 

  {

            /*traitement pour le login*/                

                $query1 = "SELECT customerID,firstName,lastName,type from users where email=? and password= ?";



                $values1 = array($_POST['login'],md5($_POST['password']));   

                $result = PDO($query1,$values1);



                if($result->rowCount()!=0){

                    while ($row = $result->fetch()) {
                        
                        
                        $_SESSION['id_user'] = $row['customerID'];
                        
                        $_SESSION['email'] =  test_input($_POST['login']);

                        $_SESSION['nom'] = test_input($row['firstName'].' '.$row['lastName']);

                        $_SESSION['type'] = test_input($row['type']);

                    }



                    
                    if($_SESSION['type']=="admin"){

                      header("Location: ../dash/reservation.php");
                    }else{
                      header("Location: index.php");
                    }

                   



                 }

                 else

                 {

                    $message = 'votre mot de passe ou username incorrect ';

                 }

}

else

{

  $message = "Enter votre cordonnaie ";

}

}         



?>