<?php
 $route=$_GET['routeid'];
 $bus_type=$_GET['busid'];
  include '../include/sqlconn.php';
 $sql=" select * from price where route='$route'and bus_type ='$bus_type'";
$result =mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
        extract($row);
        echo $amount;
}
?>
