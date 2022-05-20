<?php
        //done
          include("traitement/function.php");

          if (!isset($_POST['id'])) {
                echo '<script language="Javascript"> document.location.replace("confirmReservation.php"); </script>';
            }else{
            
                $id = $_POST['id'];
            }
        
          $sql = "DELETE FROM `reservations` WHERE reservationID=?" ;
          $value = array($id);
          $result = PDO($sql,$value);
          
          if($result)  {
            echo '<script language="Javascript"> document.location.replace("confirmReservation.php?etat=true"); </script>';
          }
          else{
             echo '<script language="Javascript"> document.location.replace("confirmReservation.php?etat=false"); </script>';
          }
?>