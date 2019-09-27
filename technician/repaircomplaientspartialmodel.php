<?php

include("database/db_conection.php");
if(isset($_POST['partial'])){
$connectionid=$_POST['connectionid'];
$partial=$_POST['comment'];
$sql = "UPDATE repaicomplaient SET partialstatus = '1',partialcomments='$partial' WHERE complaientID = '$connectionid'";

    
   if($dbcon->query($sql)){
    $_SESSION['delay1'] = 'Partaly Done';

header('location:complaients.php');
 }
}

?>
