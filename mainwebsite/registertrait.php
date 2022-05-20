<?php


session_start(); 

include('../dash/traitement/function.php');

 $message = '';



  /*****************************************

  *  Vérification du formulaire

  *****************************************/

  // Si le tableau $_POST existe alors le formulaire a été envoyé

  if(!empty($_POST))

  {
      

      
    // Le login est-il rempli ?

    if(empty($_POST['firstName']))

    {

      $message = 'Veuillez indiquer votre nom ';

    }

    elseif(empty($_POST['lastName']))

    {

      $message = 'Veuillez indiquer votre prenom';

    }

    elseif(empty($_POST['adresse']))

    {

      $message = 'Veuillez indiquer votre date de naissance';

    }
    elseif(empty($_POST['email']))

    {

      $message = 'Veuillez indiquer votre filiere';

    }
    elseif(empty($_POST['city']))

    {

      $message = 'Veuillez indiquer votre type ';

    }
    elseif(empty($_POST['mobile']))

    {

      $message = 'Veuillez indiquer votre numero de telephone';

    }
    elseif(empty($_POST['pass']))

    {

      $message = 'Veuillez indiquer votre mot de passe';

    }
    
    

    
  

  elseif((!empty($_POST['firstName'])) AND (!empty($_POST['lastName'])) AND (!empty($_POST['city'])) 
        AND (!empty($_POST['mobile'])) AND (!empty($_POST['email'])) AND (!empty($_POST['pass'])) 
        AND (!empty($_POST['adresse'])) ) 

  {

            /*traitement pour ajout a la base*/

              
    $_POST['firstName']= test_input( $_POST['firstName']);
    $_POST['lastName']= test_input( $_POST['lastName']);
    $_POST['pass']= test_input($_POST['pass'] );
    $_POST['mobile']= test_input( $_POST['mobile']);
    $_POST['adresse']= test_input($_POST['adresse'] );
    $_POST['email']= test_input( $_POST['email']);
    $_POST['city']= test_input($_POST['city'] );



    if (check_existe_email($_POST['email'])!=1 || check_existe_phone($_POST['telephone'])!=1 ) {
      

        if (check_existe_email($_POST['email'])!=1) {
          $message = 'Email deja exist ! ';
        }

        if (check_existe_phone($_POST['mobile'])!=1) {
          $message =  " Numero telephone deja exist ! ";
        }

    }else{

      if(test_email($_POST['email'])==1){
            $query1 = 'INSERT INTO demande(firstName,lastName,mobile,city,adresse,email,password) 
            values(?,?,?,?,?,?,?)';

            $values1 = array($_POST['firstName'],$_POST['lastName'],$_POST['mobile'],$_POST['city'],

            $_POST['adresse'],$_POST['email'],md5($_POST['pass']));

            $stm = PDO($query1,$values1);


            if ($stm) {

              echo '<script language="Javascript"> document.location.replace("index.php?etat=true"); </script>';

              

            }else{

              echo '<script language="Javascript"> document.location.replace("index.php?etat=false"); </script>';

            }

      }else{

        $message = 'Format de l\'email est invalide';
      }
                    
    

  }

  

  }  
  else
  {

    $message = "Enter vos cordonaies ";

  }       

}

?>