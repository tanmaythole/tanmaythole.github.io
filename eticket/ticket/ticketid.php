 <?php require '../include/sqlconn.php';
        $sql1="select * from ticketid";
        $result = mysql_query($sql1);
     while (  $row = mysql_fetch_assoc($result))
     {
        extract($row);
        $num = $number;
     }
   $num1=(int)$num + 1;
 $sql2="update ticketid set number='$num1'";
        mysql_query($sql2);
        ?>
   