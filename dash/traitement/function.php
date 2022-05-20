<?php

	function capterConnexion($code,$chemin){

			/*On donne en parametre le code massar : $_SESSION['id_user']*/

		  /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/

		    if (!(isset($code)))

		    {
		    	header("Location: ".$chemin);  

		    }else{

		    	return 1;

		    }

	}


		/*Cette funtion permet d'afficher la dernier page visite*/

	function lastpage($array){

 			$url = (string)$_SERVER['HTTP_REFERER'];

			$tab = explode("/", $url);

			/*ce tableau affiche tous les composant de URL*/

			//print_r($tab);

			$last=$tab[count($tab)-1];

			

			reset($array);

			while($frt = current($array)){

				if($last==$frt){

						echo "<script> alert(\"you can t see this page if you are not login in\");</script>";

				}

				next($array);

			}

			/*exemeple de fonctionnement dans la page : */

 			/*

				 $visite =  array("filiere.php","contact-us.php");

				 lastpage($visite);

 			*/

	}





				/*Traitement avec PDO*/

	function connecte(){

					try{

						$db = new PDO('mysql:host=localhost;dbname=cars;charset=utf8','root','');

						$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

						$db->query("SET NAMES utf8mb4");

					}catch(PDOException $e){		

					}

					return $db;

				}

	/*function connecte(){

					try{

						$db = new PDO('mysql:host=localhost;dbname=id13377668_elearning;charset=utf8','id13377668_root','Youyou-0619209779');

						$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

						$db->query("SET NAMES utf8mb4");

					}catch(PDOException $e){		

					}

					return $db;

				}*/




	function PDO($query,$array){

					$db = connecte();

					$stm = $db->prepare($query);



					$i=1;

					reset($array);

					while($frt = current($array)){

					

							/*echo "string stm->bindValue(".$i.",".$frt.")<br>";*/

							

							$stm->bindValue($i,$frt);

							next($array);

							$i++;

						}



					$stm->execute();

					//Fermer la connexion 

					$db=null;



					//Retourner le resultat 

					return $stm;	

				}


	function searchimage($path,$code){



		$dir = opendir($path);

        $val = 0;

        while ($file = readdir($dir)){

            if ($file != "." && $file != ".."){

                $tab = explode(".", $file);

                    if ($tab[0]==$code) {



                            return 1;

                     }



                          

			}

		}

		return 0;

	}



	function test_input($data) {

  

		  $data = trim($data); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne

		  $data = stripslashes($data); // Supprime les antislashs d'une chaîne

		  $data = htmlspecialchars($data,ENT_QUOTES,'UTF-8'); //Convertit les caractères spéciaux en entités HTML

		  return $data;



    }

	



	function test_email($email) {



		if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //verifie les emails
			//si il est correcte
		    return 1;

		} else {

		    return 0;

		}



	}



	function check_existe_email($email){



		$query = "SELECT email from users where email=?";

		$value = array($email);

		$res = PDO($query,$value);

		if ($res->rowCount()!=0) {

			/*s'il exist*/

			return 0;

		}else{

			$query1 = "SELECT email from demande where email=?";

		    $value1 = array($email);

		    $res1 = PDO($query1,$value1);

		    if ($res1->rowCount()!=0) {

			/*s'il exist*/

			return 0;

			}

		}

		/*s'il n'existe pas*/

		return 1;



	}



	function check_existe_phone($num){



		$query = "SELECT mobile from users where mobile=?";

		$value = array($num);

		$res = PDO($query,$value);

		if ($res->rowCount()!=0) {

			/*s'il exist*/

			return 0;

		}else{

			$query1 = "SELECT mobile from demande where mobile=?";

		    $value1 = array($num);

		    $res1 = PDO($query1,$value1);

		    if ($res1->rowCount()!=0) {

			/*s'il exist*/

			return 0;

			}

		}

		/*s'il n'existe pas*/

		return 1;



	}


?>