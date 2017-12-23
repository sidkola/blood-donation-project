<?php
include('header.inc.php');

include('db_connect.php');

$q = "select * from reg";
//Execute SQL Statement and store results as a recordset
    $result = mysql_query($q);
  
 echo "<table align=\"left\" colspan=\"3\" border=3 width=750><tr bgcolor=\"E6E6FA\">
		
<th>Name</th>
<th>Blood Group</th>
<th>Gender</th>
 <th>Date Of Birth</th>
 <th>Mobile No</th>
<th>State</th> 
<th>District</th>
 <th>City</th>
 <th>Email</th>
 <th>Address</th>
</tr>";
echo "<tr><h1><u>Detail List of Registred Persons</u></h1></tr>";
//fetches selected records and dispaly database
while ($row = mysql_fetch_array($result))
{
echo "<tr>
 <td>".$row['name']."</td>
 <td>".$row['bloodgroup']."</td>
 <td>".$row['gender']."</td>
 <td>".$row['dob']."</td>
 <td>".$row['mobileno']."</td>
 <td>".$row['state']."</td>
 <td>".$row['district']."</td>
 <td>".$row['city']."</td>
 <td>".$row['email']."</td>
 <td>".$row['add']."</td>
  </tr>";
}
echo"</table>";
include('footer.inc.php');
?>