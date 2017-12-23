<?php
include('header.inc.php');
include('db_connect.php');

$q = "select * from donarreg";
//Execute SQL Statement and store results as a recordset
    $result = mysql_query($q);
  
 echo "<table align=\"left\" colspan=\"3\" border=3 width=750><tr bgcolor=\"E6E6FA\">
<th>Blood Group</th>		
<th>Name</th>
<th>Unit</th>
 <th>Date</th>
 <th>Mobile No</th>
<th>State</th> 
<th>District</th>
 <th>City</th>
 </tr>";
echo "<tr><h1><u>Detail List of Blood Avaliable</u></h1></tr>";
//fetches selected records and dispaly database


while ($row = mysql_fetch_array($result))
{
echo "<tr>
 <td>".$row['bloodgroup']."</td>
 <td>".$row['name']."</td>
 <td>".$row['unit']."</td>
 <td>".$row['date']."</td>
 <td>".$row['mobileno']."</td>
 <td>".$row['state']."</td>
 <td>".$row['district']."</td>
<td>".$row['city']."</td>
   </tr>";
}
echo"</table>";
include('footer.inc.php');



?>