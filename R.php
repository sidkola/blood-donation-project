<?php
include("header.inc.php");
?>

<script>
function validate()

{

var p=document.regfrm.txtFullName.value;

var q=document.regfrm.dpBloodGroup.value;

var r=document.regfrm.txtAge.value;

var s=document.regfrm.txtWhenYouNeedDate.value;

var t=document.regfrm.txtHowManyUnits.value;

var u=document.regfrm.txtMobileNumber.value;

var w=document.regfrm.txtLandLineNumber.value;

var x=document.regfrm.txtHospitalName.value;

var y=document.regfrm.txtLocation.value;

var z=document.regfrm.txtPatientAddress.value;

var a=document.regfrm.txtPurpose.value;


if(p=="")
{
alert("Please Enter your first Name");
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






    <style type="text/css">
        .waitingdiv
        {
            background-color: #F5F8FA;
            border: 1px solid #5A768E;
            color: #333333;
            font-size: 93%;
            margin-bottom: 1em;
            margin-top: 0.2em;
            padding: 8px 12px;
            width: 8.4em;
        }
        /*.ui-datepicker
        {
            font-size: 8pt !important;
        }*/
    .style1 {
	color: #CC0000;
	font-weight: bold;
}
    </style>			






<form name="regfrm" action="rsave.php" method="post">
																		<center><h3><font color="red">REGISTRATION</font></h3></center>
                                                        <table cellspacing="1" cellpadding="3" width="70%" align="center">
                                                            <tbody>
                                                            </tr>
                                                            <tr>
                                                                <td width="107" style="width: 115px">
                                                                    <strong>Full Name</strong>
                                                                </td>
                                                               
                                                                <td width="307" style="width: 327px">
                                                                    <input name="txtFullName" type="text" maxlength="100" id="txtFullName" class="textarea">
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
                                                                        
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    <input name="txtMobileNumber" type="text" maxlength="10" id="txtMobileNumber" class="textarea" onkeypress="javascript:return allowOnlyNumbers(event);">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>Select State</strong>
                                                                </td>
                                                                
                                                                <td style="width: 327px">
                                                                    
                                                                    <select name="dpState" id="dpState" class="textarea">
	

<option value="">-----Select-----</option><option value="Andaman and Nicobar Islands"> Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal 
Pradesh">Arunachal 
Pradesh </option><option value="Assam">Assam </option><option value="Bihar">Bihar </option><option value="Chandigarh ">Chandigarh </option><option value="Chhattisgarh">Chhattisgarh </option><option value="Dadra and Nagar 
Haveli">Dadra and Nagar 
Haveli </option><option value="Daman and Diu">Daman and Diu 
</option><option value="Delhi">Delhi </option><option value="Goa">Goa </option><option value="Gujrat">Gujarat </option><option value="Haryana">Haryana </option><option value="Himachal Pradesh">Himachal Pradesh 
</option><option value="Jammu and Kashmir">Jammu and Kashmir </option><option value="Jharkhand">Jharkhand </option><option value="Karnataka ">Karnataka </option><option value="Kerala">Kerala </option><option value="Lakshadweep ">Lakshadweep </option><option value="Madhya Pradesh">Madhya Pradesh 
</option><option value="Maharashtra">Maharashtra </option><option value="Manipur">Manipur </option><option value="Meghalaya">Meghalaya </option><option value="Mizoram">Mizoram </option><option value="Nagaland">Nagaland </option><option value="Odisha">Odisha</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab </option><option value="Rajasthan">Rajasthan </option><option value="Sikkim">Sikkim </option><option value="Tamil Nadu">Tamil Nadu </option><option value="Tripura">Tripura </option><option value="Uttar Pradesh">Uttar Pradesh 
</option><option value="Uttaranchal">Uttaranchal </option><option value="West Bengal">West Bengal</option></select>
                                                                    <input type="hidden" name="StateCascading_ClientState" id="StateCascading_ClientState" value="::::::">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>District</strong>
                                                                </td>
                                                                <td>
                                                                <input type="text" name="district" >
																</td>
																</tr>
                                                            <tr>
                                                                <td style="width: 107px">
                                                                    <strong>City</strong>
                                                                </td>
																<td>
                                                                <input type="text" name="city" >
					</td>
																</tr>
                                                                
                                                                
                                                                       
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
                                                                                        
                                                                                        
                                                                                            <input name="txtUserName" type="text" maxlength="100" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtUserName\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;return IsAlphaNumeric(event);" id="txtUserName" ondrop="return false;" onpaste="return false;">
                                                                                                <span id="error" style="color: Red; display: none">* Special Characters not allowed, Please use only letters (a-z) and numbers</span>
                                                                                            
                                                                                            <div class="waitingdiv" id="loadingdiv" style="display: none; margin-left: 5.3em">
                                                                                                <img src="./registraion form_files/LoadingImage.gif" alt="Loading">Please wait...
                                                                                            </div>
                                                                                        
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
                                                                                   <input type="submit" name="btnSubmit" value="Submit" ">
                                                                       
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>

<?php<script type="text/javascript">
<![CDATA[
(function() {var fn = function() {$get("ToolkitScriptManager1_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();
theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.CalendarBehavior, {"button":$get("Image1"),"format":"MM/dd/yyyy","id":"ctl07"}, null, null, $get("txtDOB"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.CascadingDropDownBehavior, {"Category":"State","ClientStateFieldID":"StateCascading_ClientState","LoadingText":"Loading State...","PromptText":"-----Select-----","ServiceMethod":"BindStatedropdown","ServicePath":"../../DropdownWebService.asmx","id":"StateCascading"}, null, null, $get("dpState"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.CascadingDropDownBehavior, {"Category":"District","ClientStateFieldID":"DistrictCascading_ClientState","LoadingText":"Loading District...","ParentControlID":"dpState","PromptText":"-----Select-----","ServiceMethod":"BindDistrictdropdown","ServicePath":"../../DropdownWebService.asmx","id":"DistrictCascading"}, null, null, $get("dpDistrict"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.CascadingDropDownBehavior, {"Category":"City","ClientStateFieldID":"CityCascading_ClientState","LoadingText":"Loading Cities...","ParentControlID":"dpDistrict","PromptText":"-----Select-----","ServiceMethod":"BindCitydropdown","ServicePath":"../../DropdownWebService.asmx","id":"CityCascading"}, null, null, $get("dpCity"));
});
//]]>
</script>
<?php
include("footer.inc.php");
?>