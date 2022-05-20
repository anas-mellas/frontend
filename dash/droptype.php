<?php
        //done
          include("traitement/function.php");

          if (!isset($_POST['id'])) {
                echo '<script language="Javascript"> document.location.replace("types.php"); </script>';
            }else{
            
                $id = $_POST['id'];
            }
        
          $sql = "DELETE FROM `car_type` WHERE typeID=?" ;
          $value = array($id);
          $result = PDO($sql,$value);
          
          if($result)  {
            echo '<script language="Javascript"> document.location.replace("types.php?etat=true"); </script>';
          }
          else{
             echo '<script language="Javascript"> document.location.replace("types.php?etat=false"); </script>';
          }
?>