<?php
include("header.inc.php");
?>

								
															<table align="center" cellpadding="3" cellspacing="1" width="90%">
																<tbody>
																<tr><th colspan="2"><center><h3>Feedback</h3></center></th></tr>
																<tr bgcolor="#ffffff">
																	<td><strong>Full Name</strong></td>
																	 
																	</td>
																	<td><input name="txtFullName" maxlength="100" id="txtFullName" class="textarea" type="text"></td>
																</tr>
																<tr bgcolor="#ffffff">
																	<td><strong>Email ID</strong></td>
																	 
																	</td>
																	<td><input name="txtEmailId" maxlength="100" id="txtEmailId" class="textarea" type="text"></td>
																</tr>
																<tr>
																	<td><strong>Mobile Number</strong></td>
																	 
																	</td>
																	<td><input name="txtMobileNumber" maxlength="15" id="txtMobileNumber" class="textarea" onkeypress="javascript:return allowOnlyNumbers(event);" type="text"></td>
																</tr>
																<tr>
																	<td>
																		<p><strong>Landline Number<br>
																			</strong>(Eg: 0294-2434657)</p>
																	</td>
																	 
																	</td>
																	<td valign="top"><input name="txtLandLineNumber" maxlength="20" id="txtLandLineNumber" class="textarea" type="text"></td>
																</tr>
																<tr bgcolor="#ffffff">
																	<td><strong>Occupation</strong></td>
																	 
																	</td>
																	<td><input name="txtOccupation" maxlength="100" id="txtOccupation" class="textarea" type="text"></td>
																</tr>
																<tr bgcolor="#ffffff">
																	<td><strong>Location</strong></td>
																	 
																	</td>
																	<td><input name="txtPresentLocation" maxlength="100" id="txtPresentLocation" class="textarea" type="text"></td>
																</tr>
																<tr bgcolor="#ffffff">
																	<td><strong>Feedback / Suggestions</strong></td>
																	 </td>
																	<td><textarea name="txtFeedBack" rows="2" cols="20" id="txtFeedBack" class="textarea" style="height:203px;width:256px;"></textarea></td>
																</tr>
																
																<tr bgcolor="#ffffff">
																	<td colspan="3" height="30">
																		<div align="center">&nbsp;
																			<input name="btnSubmit" value="Submit" onclick="javascript:return validation1();" id="btnSubmit" class="textarea" type="submit"></div>
																	</td>
																</tr>
															</tbody></table>
														
					




<?php
include("footer.inc.php");
?>
