<?php
        //done
          include("traitement/function.php");

          if (!isset($_POST['id'])) {
                echo '<script language="Javascript"> document.location.replace("client.php"); </script>';
            }else{
            
                $id = $_POST['id'];
            }
        
          $sql = "DELETE FROM `users` WHERE customerID=?" ;
          $value = array($id);
          $result = PDO($sql,$value);
          
          if($result)  {
            echo '<script language="Javascript"> document.location.replace("client.php?etat=true"); </script>';
          }
          else{
             echo '<script language="Javascript"> document.location.replace("client.php?etat=false"); </script>';
          }
?>