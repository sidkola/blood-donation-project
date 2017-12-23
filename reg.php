<?php
include("header.inc.php");
?>

<script>
function validate()
{
var u=document.reg.txtFullName.value;
var p=document.reg.dpBloodGroup.value;
if(u=="")
{
alert("Please Enter the Full Name");
return false;
}
if(p=="")
{
alert("Please Select Blood Group");
return false;
}
return true;
}
</script>
														<form name="regfrm" action="" method="post">
<form name="reg" method="POST">
					 									 <center><h3>Registration</h3></center>
                                                        <table cellspacing="1" cellpadding="3" width="70%" align="center">
                                                            <tbody><tr>
                                                                <td colspan="3" align="center">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="107" style="width: 115px">
                                                                    <strong>Full Name</strong>
                                                                </td>
                                                               
                                                                <td width="307" style="width: 327px">
                                                                    <input name="txtFullName" type="text" maxlength="100" class="textarea">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td style="width: 107px">
                                                                    <strong>Blood Group</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <select name="dpBloodGroup" id="dpBloodGroup" class="textarea">
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

</select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>Gender</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <select name="dpGender" id="dpGender" class="textarea">
	<option value="0">-----Select-----</option>
	<option value="M">Male</option>
	<option value="F">Female</option>

</select>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td style="width: 107px">
                                                                    <strong>Date Of Birth<br>
                                                                        <font color="#ff0000" size="1">(MM/DD/YYYY)</font> </strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <input name="txtDOB" type="text" maxlength="10" id="txtDOB" class="textarea" onchange="javascript:return enterDateFormat(&#39;txtDOB&#39;)">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#e5e5e5">
                                                                <td height="30" colspan="3">
                                                                    <strong>Contact Information</strong>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td style="width: 107px">
                                                                    <strong>Mobile Number<br>
                                                                        (</strong>Eg: 9500389002)<font color="blue" size="1"><br>(Please enter 10 digit phone number only)</font>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <input name="txtMobileNumber" type="text" maxlength="10" id="txtMobileNumber" class="textarea" onkeypress="javascript:return allowOnlyNumbers(event);">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td style="width: 107px">
                                                                    <strong>Land Line Number<br>
                                                                    </strong>(Eg: 0863351725)
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <input name="txtLandLineNumber" type="text" maxlength="12" id="txtLandLineNumber" class="textarea" onkeypress="javascript:return allowOnlyNumbers(event);">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>Select State</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    
                                                                    <select name="dpState" id="dpState" class="textarea">
	
<option value="">-----Select-----</option><option value="29">Andaman and 
Nicobar Islands </option><option value="1">Andhra Pradesh</option><option value="2">Arunachal 
Pradesh </option><option value="3">Assam </option><option value="4">Bihar </option><option value="30">Chandigarh </option><option value="5">Chhattisgarh </option><option value="31">Dadra and Nagar 
Haveli </option><option value="32">Daman and Diu 
</option><option value="35">Delhi </option><option value="6">Goa </option><option value="7">Gujarat </option><option value="8">Haryana </option><option value="9">Himachal Pradesh 
</option><option value="10">Jammu and 
Kashmir </option><option value="11">Jharkhand </option><option value="12">Karnataka </option><option value="13">Kerala </option><option value="33">Lakshadweep </option><option value="14">Madhya Pradesh 
</option><option value="15">Maharashtra </option><option value="16">Manipur </option><option value="17">Meghalaya </option><option value="18">Mizoram </option><option value="19">Nagaland </option><option value="20">Odisha</option><option value="34">Pondicherry</option><option value="21">Punjab </option><option value="22">Rajasthan </option><option value="23">Sikkim </option><option value="24">Tamil Nadu </option><option value="25">Tripura </option><option value="27">Uttar Pradesh 
</option><option value="26">Uttaranchal </option><option value="28">West Bengal</option></select>
                                                                    <input type="hidden" name="StateCascading_ClientState" id="StateCascading_ClientState" value="::::::">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>Select District</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <div id="dv">
                                                                        
                                                                        <select name="dpDistrict" id="dpDistrict" class="textarea" disabled="">
	
	

<option value="">-----Select-----</option></select>
                                                                        <input type="hidden" name="DistrictCascading_ClientState" id="DistrictCascading_ClientState" value="::::::">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>Select City</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <div id="dv1">
                                                                        <select name="dpCity" id="dpCity" class="textarea" disabled="">
	
	

<option value="">-----Select-----</option></select>
                                                                        <input type="hidden" name="CityCascading_ClientState" id="CityCascading_ClientState" value="::::::">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td style="width: 107px">
                                                                    <strong>E-Mail ID</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <input name="txtEmailId" type="text" maxlength="100" id="txtEmailId" class="textarea">
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td style="width: 107px">
                                                                    <strong>Permanent Address</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <textarea name="txtPermentAddress" rows="2" cols="20" id="txtPermentAddress" class="textarea" style="height:76px;width:160px;"></textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>UserId</strong>
                                                                </td>
                                                                
                                                                
                                                                <td style="width: 327px">
                                                                    <div>
                                                                        <div id="PnlUsrDetails">
	
                                                                                <table>
                                                                                    <tbody><tr>
                                                                                        
                                                                                        <td style="width: 327px">
                                                                                            <input name="txtUserName" type="text" maxlength="100" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtUserName\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;return IsAlphaNumeric(event);" id="txtUserName" ondrop="return false;" onpaste="return false;">
                                                                                                <span id="error" style="color: Red; display: none">* Special Characters not allowed, Please use only letters (a-z) and numbers</span>
                                                                                            
                                                                                            <div class="waitingdiv" id="loadingdiv" style="display: none; margin-left: 5.3em">
                                                                                                <img src="./registraion form_files/LoadingImage.gif" alt="Loading">Please wait...
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                                
                                                                            
</div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr id="trPassword">
	<td style="width: 107px">
                                                                    <strong>Password</strong>
                                                                </td>
	
	<td style="width: 327px">
                                                                    <input name="txtUserPassword" type="password" maxlength="50" id="txtUserPassword" class="textarea">
                                                                </td>
</tr>

                                                            <tr id="trRetypePassword">
	<td style="width: 107px">
                                                                    <strong>Re-type Password</strong>
                                                                </td>
	
	<td style="width: 327px">
                                                                    <input name="txtRetypePassword" type="password" maxlength="50" id="txtRetypePassword" class="textarea">
                                                                </td>
</tr>

                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>Please confirm your availability to donate blood</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <select name="dpAvailUnAvailable" id="dpAvailUnAvailable">
	<option selected="selected" value="A">Available</option>
	<option value="U">UnAvailable</option>

</select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" style="width: 107px" valign="top" height="30">
                                                                    <input type="checkbox" id="chkTermsAndCondition" name="chkTermsAndCondition">
                                                                    I authorise the website to display my telephone number, e-mail ID and mailing address
                                                                    so that the needy could contact me, as and when there is an emergency.
                                                                </td>
                                                            </tr>
                                                            <tr bgcolor="#ffffff">
                                                                <td colspan="3" height="30">
                                                                    <div align="center">
                                                                        &nbsp;
                                                                        <input name="hidDistrict" type="hidden" id="hidDistrict">
                                                                        <input type="submit" name="btnSubmit" value="Submit" onclick="validate()">
                                                                        <input name="hidCity" type="hidden" id="hidCity">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
</form>

<?php
include("footer.inc.php");
?>