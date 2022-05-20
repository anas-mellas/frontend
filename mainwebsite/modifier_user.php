<?php
/*Ajouter la connexion a lbase de donnes*/


include('../dash/traitement/function.php');


$_POST['id_user']=$_POST['id'];


  if (isset($_POST['firstName']) AND isset($_POST['lastName'])

     AND isset($_POST['city']) AND 

    isset($_POST['mobile']) AND isset($_POST['adresse']) AND isset($_POST['email'])) {



              if (!(empty($_POST['firstName'])) AND !(empty($_POST['lastName'])) 

                  AND !(empty($_POST['city'])) AND 

                  !(empty($_POST['mobile'])) AND !(empty($_POST['adresse'])) AND !(empty($_POST['email']))) {

              if(isset($_POST['pass1']) AND isset($_POST['pass2'])){

              		if((!(empty($_POST['pass1'])) AND !(empty($_POST['pass2']))) AND ($_POST['pass1']==$_POST['pass2'])){

                      	     $query1 = 'UPDATE users

                      				set firstName=?,

                      				lastName=?,

                      				mobile=?,

                      				city=?,

                      				adresse=?,

                              email=?,

                              password=?


                      				WHERE customerID=? ;';

                              $values1 = array(
                                        test_input($_POST['firstName']),test_input($_POST['lastName']),
                                        $_POST['mobile'],test_input($_POST['city']),
                                        test_input($_POST['adresse']),$_POST['email'],
                                        test_input($_POST['pass1']),$_POST['id_user']
                                      );

              				}else{

                               $query1 = 'UPDATE users

                              set firstName=?,

                              lastName=?,

                              mobile=?,

                              city=?,

                              adresse=?,

                              email=?

                              WHERE customerID=? ;';

                               $values1 = array(
                                        test_input($_POST['firstName']),test_input($_POST['lastName']),
                                        $_POST['mobile'],test_input($_POST['city']),
                                        test_input($_POST['adresse']),$_POST['email'],
                                        $_POST['id_user']
                                      );

                      }

              				

                      $result = PDO($query1,$values1);

					if($result) {

		           echo '<script language="Javascript"> document.location.replace("profile.php?etat=true"); </script>';
          }else{

              echo '<script language="Javascript"> document.location.replace("profile.php?etat=false"); </script>';
          }

	}



	else{
      echo '<script language="Javascript"> document.location.replace("profile.php?etat=false"); </script>';
	}



              }

          else{

          	echo '<script language="Javascript"> document.location.replace("profile.php?etat=false"); </script>';
            

          }



            }

        else{

        	header("location: profile.php");

        }

?>