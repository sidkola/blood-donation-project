<?php
include("header.inc1.php");
?>
<script>
function validate()
{
var u=document.loginfrm.usrtxt.value;
var p=document.loginfrm.passtxt.value;
if(u=="")
{
alert("Please Enter the Username");
return false;
}
if(p=="")
{
alert("Please Enter the Password");
return false;
}
return true;
}
</script>
<form name="loginfrm" action="home.php" method="post">
<table id="customers">
<tr>
<th colspan="2"><center><h3>LOGIN</h1></center></th>
</tr>
</tr>
<tr><td>USERNAME</td><td><input type="text" class="a" name="usrtxt" value=""/></td></tr>
<tr><td>PASSWORD</td><td><input type="password" name="passtxt" value=""/></td></tr><tr align="center"><td colspan="2"><input type="submit" value="Login" onclick="validate()"/>&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" value="Cancel"/></td></tr>
</table>
</form>
<?php
include("footer.inc1.php");
?>
