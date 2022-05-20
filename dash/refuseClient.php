<?php
        //done
          include("traitement/function.php");

          if (!isset($_POST['id'])) {
                echo '<script language="Javascript"> document.location.replace("newClient.php"); </script>';
            }else{
            
                $id = $_POST['id'];
            }
        
          $sql = "DELETE FROM demande WHERE id=?" ;
          $value = array($id);
          $result = PDO($sql,$value);
          
          if($result)  {
            echo '<script language="Javascript"> document.location.replace("newClient.php?etat=true"); </script>';
          }
          else{
             echo '<script language="Javascript"> document.location.replace("newClient.php?etat=false"); </script>';
          }
?>