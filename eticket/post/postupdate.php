<?php require '../include/sqlconn.php';
$sqlselect="select * from pos_bus";
$resultsel = mysql_query($sqlselect);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>POST DELETE</b></legend><form action="postupdate.php" method="POST">
<table><tr><td colspan="2">
<select class="textfield" name="date"><option value="">Pick Post</option><?php while ($row = mysql_fetch_assoc($resultsel)){
    extract($row); echo "<option value='$date'>$date</option>"; } ?></select></td>
</tr><tr><td><input class="formbutton" type="submit" value="Delete" name="delete" /></td><td><input class="formbutton" type="submit" value="Reset" onclick="location.href='postupdate.php'" /></td></tr>
</table></form>
</fieldset>

<?php

$date = $_POST['date'];

if (!empty ($date)){
if (isset ($_POST['delete']))
{
  $sqldelete ="delete from pos_bus where date ='$date'" ;
   $msql= mysql_query($sqldelete);
   if ($msql)
   {
       echo $date." deleted Sucessfully";
   }
   else
   {
        echo $date." not deleted";
   }

}

}


?>
    </body>
</html>