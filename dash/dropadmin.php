<?php
        //done
          include("traitement/function.php");

          if (!isset($_POST['id'])) {
                echo '<script language="Javascript"> document.location.replace("admin.php"); </script>';
            }else{
            
                $id = $_POST['id'];
            }
        
          $sql = "DELETE FROM `users` WHERE customerID=?" ;
          $value = array($id);
          $result = PDO($sql,$value);
          
          if($result)  {
            echo '<script language="Javascript"> document.location.replace("admin.php?etat=true"); </script>';
          }
          else{
             echo '<script language="Javascript"> document.location.replace("admin.php?etat=false"); </script>';
          }
?>