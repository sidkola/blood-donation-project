<?php
include("header.inc.php");
?>

														<table cellspacing="0" cellpadding="5" width="257" border="0" align="center">
																<tbody>
<form name="donar" action="dsave.php" method="post">
<table align="center">
                                                                        <tbody>
																		<h2><font color="red" ><center>BLOOD DONOR</center></font></h2>
   
<tr>
	<td>Blood group</td><td><select name="dpBloodGroup" id="dpBloodGroup" class="textarea">
	<option value="Select">-----Select-----</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>
	<option value="A1+">A1+</option>
	<option value="A1-">A1-</option>
	<option value="A2+">A2+</option>
	<option value="A2-">A2-</option>
	<option value="A1B+">A1B+</option>
	<option value="A1B-">A1B-</option>
	<option value="A2B+">A2B+</option>
	<option value="A2B-">A2B-</option>
	<option value="Bombay Blood Group">Bombay Blood Group</option>

</select></td>
</tr>

<tr>
	<td>Name</td><td><input type="text" name="dname"></td>
</tr>
<tr>
	<td>Number of Units</td><td><input type="text" name="unit"></td>
</tr>
<tr>
	<td>Date</td><td><input type="text" name="dt"></td>
</tr>
<tr>
	<td>Mobile Number</td><td><input type="text" name="mnum"></td>
</tr>
<tr>
	<td>State</td><td><input type="text" name="state"></td>
</tr>
<tr>
	<td>District</td><td><input type="text" name="dist"></td>
</tr>
<tr>
	<td>City</td><td><input type="text" name="city"></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" value="submit"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" value="Cancel"/></td>
</tr>
</table>



</form>
<?php
include("footer.inc.php");
?>