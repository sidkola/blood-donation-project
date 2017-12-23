<?php
include('header.inc.php');
include('db_connect.php');

$q = "select * from req";
//Execute SQL Statement and store results as a recordset
    $result = mysql_query($q);
  
 echo "<table align=\"left\" colspan=\"3\" border=3 width=750><tr bgcolor=\"E6E6FA\">
<th>Patient Name</th>		
<th>Blood Group</th>
<th>Age</th>
 <th>When Need Blood</th>
<th>Number of Unit</th>
 <th>Mobile No</th>
<th>Hospital Name</th> 
<th>Location</th>
 <th>Address</th>
<th>Purpose</th> 
</tr>";
echo "<tr><h1><u><center>Detail List of Requestor</center></u></h1></tr>";
//fetches selected records and dispaly database


while ($row = mysql_fetch_array($result))
{
echo "<tr>
<td>".$row['pname']."</td>
 <td>".$row['pbloodgroup']."</td>
  <td>".$row['age']."</td>
 <td>".$row['date']."</td>
 <td>".$row['unit']."</td>
 <td>".$row['mobileno']."</td>
 <td>".$row['hname']."</td>
 <td>".$row['location']."</td>
<td>".$row['add']."</td>
 <td>".$row['purpose']."</td>
</tr>";
}
echo"</table>";
include('footer.inc.php');
?>