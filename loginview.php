<?php
include('header.inc.php');

include('db_connect.php');

$q = "select * from login";
//Execute SQL Statement and store results as a recordset
    $result = mysql_query($q);
  
 echo "<table align=\"center\"><tr >
		
<th>User Name</th>
</tr>";
echo "<tr><h1><u> Registred User</u></h1></tr>";
//fetches selected records and dispaly database
while ($row = mysql_fetch_array($result))
{
echo "<tr>
 <td>".$row['username']."</td>
  </tr>";
}
echo"</table>";
include('footer.inc.php');
?>