<?php
include("header.inc.php");
?>

<script>
function validate()

{

var p=document.reqfrm.txtPatientName.value;

var q=document.reqfrm.dpBloodGroup.value;

var r=document.reqfrm.txtAge.value;

var s=document.reqfrm.txtWhenYouNeedDate.value;

var t=document.reqfrm.txtHowManyUnits.value;

var u=document.reqfrm.txtMobileNumber.value;

var w=document.reqfrm.txtLandLineNumber.value;

var x=document.reqfrm.txtHospitalName.value;

var y=document.reqfrm.txtLocation.value;

var z=document.reqfrm.txtPatientAddress.value;

var a=document.reqfrm.txtPurpose.value;


if(p=="")
{
alert("Please Enter the Patient Name");
return false;
}

if(q=="")
{
alert("Please Select Blood Group");
return false;
}

if(r=="")
{
alert("Please enter date of birth");
return false;
}

if(s=="")
{
alert("Please enter date when u need blood");
return false;
}


if(t=="")
{
alert("Please Enter how many units u want");
return false;
}

if(u=="")
{
alert("Please enter mobile number");
return false;
}

if(v=="")
{
alert("Please enter land line number");
return false;
}

if(w=="")
{
alert("Please enter Hospital name");
return false;
}

if(y=="")
{
alert("Please Enter the location");
return false;
}

if(z=="")
{
alert("Please enter the address");
return false;
}


if(a=="")
{
alert("Please enter the Purpose");
return false;
}



return true;
}
</script>



<form name="reqfrm" action="reuestsave.php" method="post">
 <table align="center">
                                                                        <tbody>
																		<h2><font color="red" ><center>BLOOD REQUESTER</center></font></h2>
                                                            <tr bgcolor="#ffffff">
                                                                <td>
                                                                    <strong>Patient Full Name</strong>
                                                                </td>
 
                                                                   
                                                                <td>
                                                                    <input name="txtPatientName" type="text" maxlength="100" id="txtPatientName" class="textarea" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td>
                                                                    <strong>Patient Blood Group</strong>
                                                                </td>
 
                                                                   <td>
                                                                    <select name="dpBloodGroup" id="dpBloodGroup" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
	<option value="Select">-----Select----</option>
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

</select>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td>
                                                                    <strong>Patient Age</strong>
                                                                </td>
 
                                                                   <td>
                                                                    <input name="txtAge" type="text" maxlength="3" id="txtAge" class="textarea" onkeypress="javascript:return allowOnlyNumbers(event);" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td>
                                                                    <strong>When you need blood?<br>
                                                                        <font color="#ff0000" size="1">(MM/DD/YYYY)</font></strong>
                                                                </td>
 
                                                                   <td>
                                                                    <input name="txtWhenYouNeedDate" type="text" maxlength="10" id="txtWhenYouNeedDate" class="textarea" onchange="javascript:return enterDateFormat(&#39;txtWhenYouNeedDate&#39;)" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
                                                                   
                                                                        
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>How many units you need&nbsp;?</strong>
                                                                </td>
 
                                                                   <td>
                                                                    <input name="txtHowManyUnits" type="text" maxlength="2" id="txtHowManyUnits" class="textarea" onkeypress="javascript:return allowOnlyNumbers(event);" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Mobile Number<br>
                                                                </td>
                                                                <td>
                                                                    <input name="txtMobileNumber" type="text" maxlength="10" id="txtMobileNumber" class="textarea" onkeypress="javascript:return allowOnlyNumbers(event);" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Hospital Name</strong>
                                                                </td>
 
                                                                <td>
                                                                    <input name="txtHospitalName" type="text" maxlength="100" id="txtHospitalName" class="textarea" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Location</strong>
                                                                </td>
 
                                                                <td>
                                                                    <input name="txtLocation" type="text" maxlength="100" id="txtLocation" class="textarea" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Patient Address</strong>
                                                                </td>
 
                                                                <td>
                                                                    <textarea name="txtPatientAddress" rows="2" cols="20" id="txtPatientAddress" class="textarea" onkeypress="javascript:return fnlength(this,&#39;Please enter text less than 500&#39;);" onchange="javascript:return fnlength(this,&#39;Please enter text less than 500&#39;);" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);" style="height:64px;width:180px;"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <strong>Purpose</strong>
                                                                </td>
 
                                                                <td>
                                                                    <textarea name="txtPurpose" rows="2" cols="20" id="txtPurpose" class="textarea" onkeypress="javascript:return fnlength(this,&#39;Please enter text less than 500&#39;);" onchange="javascript:return fnlength(this,&#39;Please enter text less than 500&#39;);" onkeydown="javascript:return enterSubmit(&#39;btnSubmit&#39;);" style="height:64px;width:180px;"></textarea>
                                                                </td>
                                                            </tr>
                                                                                                                       <tr bgcolor="#ffffff">
                                                                <td colspan="3" height="30">
                                                                    <div align="center">
                                                                        &nbsp;
                                                                        <input type="submit" name="btnSubmit" value="Submit"  onclick="validate()" id="btnSubmit" class="textarea"></div>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                                                                         
</form>

<?php
include("footer.inc.php");
?>