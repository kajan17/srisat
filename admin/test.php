<html>
<head>
<?php

include("database/db_conection.php");
?></head>
 <body> 
<?php
              
              $sql = "SELECT COUNT(user_ID) as f , MONTH(date) as d FROM user  WHERE status='1' GROUP BY MONTH(date)";

              
              $query = mysqli_query($dbcon, $sql);
              $n=1;
              while($row = mysqli_fetch_array($query)){
                echo $row['d']; 
                echo "_";
                echo $row['f']; 
                echo "</br>";

                
               $n=$n+1;
              }
  
  ?>

</body>
</html>