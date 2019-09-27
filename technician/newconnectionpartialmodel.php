<?php

include("database/db_conection.php");
if(isset($_POST['partial'])){
$connectionid=$_POST['connectionid'];
$partial=$_POST['comment'];
$sql = "UPDATE tvconnection SET partialstatus = '1',connectionstatuscomments='$partial' WHERE connectionID = '$connectionid'";

    
   if($dbcon->query($sql)){
    $_SESSION['delay'] = 'Partaly Done';

header('location:newconnections.php');
 }
}

?>
<?php

include("database/db_conection.php");
$update_id=$_GET['update'];
$connectionid=$_POST['connectionid'];
$partial=$_POST['comment'];
$sql = "UPDATE tvconnection SET finishstatus = '1' WHERE connectionID = '$update_id'";

    
   if($dbcon->query($sql)){
    //$_SESSION['delay'] = 'Partaly Done';

header('location:newconnections.php');
 }


?>