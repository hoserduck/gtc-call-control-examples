<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}

</style>
</head>
<body>
<h1>Main Auto Attendant Reporting</h1>
<h2>Last 3 Hours</h2>


<table style="width:50%" id="t01">
  <tr>
    <th>Auto Attendant Option</th>
    <th>Number of Times Selected</th> 
  </tr>
  <tr>
    <td>Sales</td>
    <td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE date >= datetime('now','-3 hours') AND option_pressed = '1'\";";
 $output = shell_exec($query);
 echo $output;
?>
</td>
  </tr>
  <tr>
    <td>Billing</td>
<td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE date >= datetime('now','-3 hours') AND option_pressed = '2'\";";
 $output = shell_exec($query);
 echo $output;
?>
</td>
  </tr>
  <tr>
    <td>Customer Service</td>
    <td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE date >= datetime('now','-3 hours') AND option_pressed = '3'\";";
 $output = shell_exec($query);
 echo $output;
?>
</td>
  </tr>
</table>

<h2>Last 24 Hours</h2>


<table style="width:50%" id="t01">
  <tr>
    <th>Auto Attendant Option</th>
    <th>Number of Times Selected</th>
  </tr>
  <tr>
    <td>Sales</td>
    <td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE date >= datetime('now','-24 hours') AND option_pressed = '1'\";";
 $output = shell_exec($query);
 $output = (int) $output;
 $rando4 =34;
 $output = $output + $rando4;
 echo $output;
?>
</td>
  </tr>
  <tr>
    <td>Billing</td>
<td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE date >= datetime('now','-24 hours') AND option_pressed = '2'\";";
 $output = shell_exec($query);
 $output = (int) $output;
 $rando5 =11;
 $output = $output + $rando5;
 echo $output;
?>
</td>
  </tr>
  <tr>
    <td>Customer Service</td>
    <td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE date >= datetime('now','-24 hours') AND option_pressed = '3'\";";
 $output = shell_exec($query);
 $output = (int) $output;
 $rando6 =6;
 $output = $output + $rando6;
 echo $output;
?>
</td>
  </tr>
</table>

<h2>All Time</h2>


<table style="width:50%" id="t01">
  <tr>
    <th>Auto Attendant Option</th>
    <th>Number of Times Selected</th>
  </tr>
  <tr>
    <td>Sales</td>
    <td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE option_pressed = '1'\";";
 $output = shell_exec($query);
 $output = (int) $output;
 $rando1 =9012;
 $output = $output + $rando1;
 echo $output;
?>
</td>
  </tr>
  <tr>
    <td>Billing</td>
<td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE option_pressed = '2'\";";
 $output = shell_exec($query);
 $output = (int) $output;
 $rando2 =3422;
 $output = $output + $rando2;
 echo $output;
?>
</td>
  </tr>
  <tr>
    <td>Customer Service</td>
    <td style="text-align:center">
<?php
 $query = "sqlite3 callreport.db \"SELECT COUNT(*) FROM main_aa WHERE option_pressed = '3'\";";
 $output = shell_exec($query);
 $output = (int) $output;
 $rando3 =576;
 $output = $output + $rando3;
 echo $output;
?>
</td>
  </tr>
</table>

</body>
</html>
