  <?php require '../include/sqlconn.php';
$sqllocation="select * from location order by name";
$sqluser="select * from user order by user_name";
$resultuser = mysql_query($sqluser);
$resultlocation = mysql_query($sqllocation);
$sqlbus = "select * from bus_info order by bus_number";
$resultbus=mysql_query($sqlbus);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="../script/datepicker.js"></script>

    </head>


    <body>
<fieldset><legend><b>QUERY</b></legend>
  <script type="text/javascript" src="../script/datepicker.js"></script>
<form method="post" action="datequery.php" name="query" >
<table border="1" width="100%">
    
        <tr>
            <td colspan="10"><b>Search Criteria</b></td>

        </tr>
    
    <tbody>
        <tr>
            <td>Start Date</td>
            <td><input class="textfield" type="text" name="travel_date" value="" id="c" READONLY onclick="show_calendar('query.travel_date');"><a href="javascript:show_calendar('query.travel_date');"><img src="../css/images/cal.gif" border="0"></a></td>
            <td>End Date </td>
            <td><input class="textfield" type="text" name="travel_date1" value="" id="c" READONLY onclick="show_calendar('query.travel_date1');"><a href="javascript:show_calendar('query.travel_date1');"><img src="../css/images/cal.gif" border="0"></a></td>
            <td>Location</td><td><select class="textfield" name="location"><option value="">Pick Location</option><?php while ($row = mysql_fetch_assoc($resultlocation)){
            extract($row); echo "<option value='$name'>$name</option>"; } ?></select></td><td>User</td><td><select class="textfield" name="user" ><option value="" class="field">Pick user</option><?php while ($row = mysql_fetch_assoc($resultuser)){
    extract($row); echo "<option value='$user_name'>$user_name</option>"; } ?></select></td><td>Vehicle No.</td><td><select class="textfield" name="vehicle_number" ><option value="" class="field">Bus Number</option><?php while ($row = mysql_fetch_assoc($resultbus)){
    extract($row); echo "<option value='$bus_number'>$bus_number</option>"; } ?></select></td>
        </tr>
        <tr>
            <td colspan="10"><input class="formbutton" type="submit" name="submit" value="Search" /></td>
            
        </tr>
    </tbody>
</table>

</form>

<?php
require '../include/sqlconn.php';
$travel_dater =trim($_POST['travel_date']);
$location =trim($_POST['location']);
$user =trim($_POST['user']);
$vehicle_number =trim($_POST['vehicle_number']);
$travel_date=explode("/", $travel_dater);
$travel_date=$travel_date[2]."-".$travel_date[0]."-".$travel_date[1];

$travel_date1r =trim($_POST['travel_date1']);
          $travel_date1=explode("/", $travel_date1r);
          $travel_date1=$travel_date1[2]."-".$travel_date1[0]."-".$travel_date1[1];
          
if(isset ($_POST['submit']))
{ ?>

  <table border="1" width="100%"><thead >
<tr><td>Issue Date</td><td>Departure Date</td><td>Route</td><td>First name</td><td>Last Name</td><td>TicketID</td><td>Amount</td><td>Phone No.</td><td>Total Amount</td><td>Status</td><td>Vehicle No.</td><td>Time</td><td>Bus Type</td><td>User</td><td>Location</td></tr>
      </thead>
    <?php
          if (empty ($travel_dater) || empty ($travel_dater) || empty ($location) || empty ($vehicle_number) || empty ($user))
    {
     $sqlgen="select * from ticket order by date_issue ";
              $result =mysql_query($sqlgen);
              $sqlgenamount="select SUM(fare_amount) from ticket order by date_issue ";
              $result2 =mysql_query($sqlgenamount);
              echo "<font color='red'>All Fields</font>";

              }


    if (!empty ($travel_dater) && !empty ($travel_dater) && empty ($location) && empty ($vehicle_number) &&  empty ($user))
    {
     $sqlgendate="select * from ticket where date_issue between '$travel_date' and '$travel_date1' order by date_issue ";
              $result =mysql_query($sqlgendate);
$sqlgendateamount="select SUM(fare_amount) from ticket where date_issue between '$travel_date' and '$travel_date1' order by date_issue ";
              $result2 =mysql_query($sqlgendateamount);
              echo "<font color='red'> between date $travel_date and $travel_date1</font>";
              }

    if (!empty ($travel_dater) && !empty ($travel_dater) && !empty ($location) && empty ($vehicle_number) && empty ($user))
    {
     $sqlgenloc="select * from ticket where date_issue between '$travel_date' and '$travel_date1' and location='$location' order by date_issue ";
              $result =mysql_query($sqlgenloc);
              $sqlgenlocamount="select SUM(fare_amount) from ticket where date_issue between '$travel_date' and '$travel_date1' and location='$location' order by date_issue ";
              $result2 =mysql_query($sqlgenlocamount);
               echo "<font color='red'> between date $travel_date and $travel_date1 in $location</font>";
              }

if (!empty ($travel_dater) && !empty ($travel_dater) && empty ($location) && !empty ($vehicle_number) && empty ($user))
    {
     $sqlgennoloc="select * from ticket where date_issue between '$travel_date' and '$travel_date1'  and vehicle_number='$vehicle_number' order by date_issue ";
              $result =mysql_query($sqlgennoloc);
              $sqlgennolocamount="select SUM(fare_amount) from ticket where date_issue between '$travel_date' and '$travel_date1'  and vehicle_number='$vehicle_number' order by date_issue ";
              $result2 =mysql_query($sqlgennolocamount);
               echo "<font color='red'> between date $travel_date and $travel_date1 for vehicle number $vehicle_number</font>";
              }

              if (!empty ($travel_dater) && !empty ($travel_dater) && empty ($location) && !empty ($vehicle_number) && empty ($user))
    {
     $sqlgennoloc="select * from ticket where date_issue between '$travel_date' and '$travel_date1'  and vehicle_number='$vehicle_number' order by date_issue ";
              $result =mysql_query($sqlgennoloc);
              $sqlgennolocamount="select SUM(fare_amount) from ticket where date_issue between '$travel_date' and '$travel_date1'  and vehicle_number='$vehicle_number' order by date_issue ";
              $result2 =mysql_query($sqlgennolocamount);
               echo "<font color='red'> between date $travel_date and $travel_date1 for vehicle number $vehicle_number</font>";
              }

 if (!empty ($travel_dater) && !empty ($travel_dater) && !empty ($location) && empty ($vehicle_number) && !empty ($user))
    {
     $sqlgendateuser="select * from ticket where date_issue between '$travel_date' and '$travel_date1' and location='$location'  and user ='$user' order by date_issue ";
              $result =mysql_query($sqlgendateuser);
              $sqlgenuseramount="select SUM(fare_amount) from ticket where date_issue between '$travel_date' and '$travel_date1' and location='$location'  and user ='$user' order by date_issue ";
              $result2 =mysql_query($sqlgenuseramount);
               echo "<font color='red'> between date $travel_date and $travel_date1 in $location for user $user</font>";
              }

if (!empty ($travel_dater) && !empty ($travel_dater) && empty ($location) && empty ($vehicle_number) && !empty ($user))
    {
     $sqlgendatenluser="select * from ticket where date_issue between '$travel_date' and '$travel_date1'   and user ='$user' order by date_issue ";
              $result =mysql_query($sqlgendatenluser);
              $sqlgenusernlamount="select SUM(fare_amount) from ticket where date_issue between '$travel_date' and '$travel_date1'   and user ='$user' order by date_issue ";
              $result2 =mysql_query($sqlgenusernlamount);
               echo "<font color='red'> between date $travel_date and $travel_date1 for user $user</font>";
              }




        while ($row=mysql_fetch_assoc($result))
        {
                   echo "<tr>";
    foreach ($row as $value)
    {
        echo "<td>$value</td>";

   }
   echo "</tr>";
   
}
        
while ($row1=mysql_fetch_assoc($result2))
        {
                   echo "<tfoot><tr><td colspan='6' align='right'><b>TOTAL SUM</b></td>";
    foreach ($row1 as $value)
    {
        echo "<td colspan='3' align='right'><b>N$value.00</b></td>";

   }
   echo "<td colspan='6'></td></tr></tfoot>";

}

    
    
  

}


?>

</table>
</fieldset>

