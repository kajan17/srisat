<?php

include("database/db_conection.php");
if(isset($_POST['partial'])){
$connectionid=$_POST['connectionid'];
$partial=$_POST['comment'];
$sql = "UPDATE carduser SET partialstatus = '1',partialcomments='$partial' WHERE carduser_ID = '$connectionid'";

    
   if($dbcon->query($sql)){
    $_SESSION['delay'] = 'Partaly Done';

header('location:regnewconnections.php');
 }
}

?>
<?php

include("database/db_conection.php");
$update_id=$_GET['update'];
$connectionid=$_POST['connectionid'];
$partial=$_POST['comment'];
$sql = "UPDATE carduser SET finishstatus = '1' WHERE carduser_ID = '$update_id'";

    
   if($dbcon->query($sql)){
    //$_SESSION['delay'] = 'Partaly Done';

header('location:regnewconnections.php');
 }


?>