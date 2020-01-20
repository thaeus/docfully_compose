<?php session_start(); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if (!isset($_SESSION['user_id'])) {
		redirect_to("login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Docfully - Health Care On Demand</title>
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/nav.css" rel="stylesheet">
	<link href="videoConf.php">
	<title>Medical Questionnaire</title>
</head>
<body background="Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg">
	<!---Start Wrapper -->
	<div id="wrapper">
		<!---Start Header -->
		<header>
			<div id="callout">
				<h2><font color="#00FA9A" size="4">&#9742 773.220.7015</font></h2>
			</div>
			<div id="logo">
				<a href="index.html"><img src="images/imageedit_52_9268637590.jpg"></a>
			</div>
		</header><!---End Header -->
		<div class="clearfix"></div><!--- Start Nav & Slider -->
		<div id="banner-wrapper style=">
			<!---Start Nav -->
			<script src="js/jquery-1.11.2.min.js">
			</script> 
			<script src="js/main.js">
			</script>
			<div class="nav-wrap">
				<nav class="navigation">
					<div class="nav">
						<ul class="nav-menu">
                                <li>
								<a href="healthscore.php"><font color="#483D8B">Health Score</font></a>
                            </li>
							<li>
								<a href="vitalsigns.php"><font color="#483D8B">Vital Signs</font></a>

							</li>
                            <li>
								<a href="videoConf.php"><font color="#483D8B">Video Conference</font></a>
                                </li>
							<li>
								<a href="medical.php"><font color="#483D8B">Main</font></a>
							</li>
							<li><a href="logoutMD.php"><font color="#483D8B">Logout</font></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<meta content='text/html; charset=utf-8' http-equiv='content-type'>
			<meta content='web forms' name='description'>
			<meta content='web forms, html forms' name='keywords'>
			<div id="manageboxCD" style="position:fixed;visibility:hidden;z-index:2"></div>
			<div id="pgCalCD" style="position:absolute;visibility:hidden;z-index:2"></div>
			<div id="pgClockCD" style="position:absolute;visibility:hidden;z-index:2"></div>
			<div id="requiredCD" style="position:absolute;visibility:hidden;z-index:2"></div>
			<div id="loadingCD" style="position:fixed;top:200px;left:330px;visibility:visible;z-index:2">
				<table style='width:250px;border-spacing:0px;background-color:#eeeeee;border-radius:10px;border:5px solid #555555;'>
					<tr>
						<td colspan='2' style='text-align:center;width:100%;border-radius:10px;border:5px solid #eeeeee;'>
							<table style='width:100%;border-spacing:0px;background-color:#eeeeee;' width='100%'>
								<tr>
									<td colspan='1' style='text-align:center;border-radius:10px;border:3px solid #000000;'>
										<table style='width:99%;background-color:#ffffff;margin: 0 auto;'>
											<tr>
												<td colspan="1" style='width:10%;background-color:#6699ff;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;background-color:#6699ff;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;background-color:#6699ff;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;background-color:#6699ff;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;background-color:#6699ff;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;background-color:#6699ff;'><span>&nbsp;</span></td>
												<td colspan="1" id="ldbx7" style='width:10%;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;'><span>&nbsp;</span></td>
												<td colspan="1" style='width:10%;'><span>&nbsp;</span></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td colspan='1' style='text-align:left;padding:1px;vertical-align:top;white-space:nowrap;'><span style='color:#0000ff;font-family:Verdana; font-size:20px;padding:2px;font-weight:bold;'>LOADING...</span> &nbsp;&nbsp; <span style='color:#000000;font-family:Verdana; font-size:20px;padding:2px;font-weight:bold;'>Please wait.</span></td>
								</tr>
							</table>
						</td>
					</tr>
				</table><!-- </td></tr></table> -->
			</div>
			<script language='JavaScript'>
			document.getElementById('ldbx7').style.backgroundColor = '#6699ff';
			</script>
			<div id="body2">
				<script language='JavaScript' src='https://www.docfully.com%3E%3C/script%3E%3Cscript%20Language='>
				function pgCalI(x,y,z,zz,i)
				{
				datetimesw = '';
				pgCal(x,y,z,zz,i);
				}
				function pgClockI(x,z,zz,i)
				{
				datetimesw = '';
				pgClock(x,z,zz,i);
				}
				function pgCalClockI(x,y,z,zz,i)
				{
				datetimesw = 'y';
				pgCal(x,y,z,zz,i);
				}
				var highappti = 0;
				</script>
				<script language='JavaScript'>
				var reqid = '';
				function resetFormFields()
				{
				var field_type = '';
				var hold_prev_field_type = '';
				var frm_elements = document.getElementById("form1").elements;
				for (i = 0; i < frm_elements.length; i++)
				{
				field_type = frm_elements[i].type.toLowerCase();
				if ( field_type == 'text' || field_type == 'password' || field_type == 'textarea' ) 
				  {
				   if ( frm_elements[i].name.length > 6 && frm_elements[i].name.substring(0,7) == 'cbprice' ) 
				     {} 
				   else 
				     { 
				    if ( field_type == 'text' && frm_elements[i].name.length > 8 && frm_elements[i].name.substring(0,8) == 'qty_item' )
				      { 
				       if ( hold_prev_field_type == 'checkbox' )
				         { frm_elements[i].value = '1'; } 
				       else 
				         { frm_elements[i].value = '0'; } 
				      } 
				    else 
				      { frm_elements[i].value = ""; } 
				     } 
				  }
				else
				  {
				if ( field_type == 'radio' || field_type == 'checkbox' ) 
				  {
				    if (frm_elements[i].checked)
				    {
				        frm_elements[i].checked = false;
				    }
				  }
				else
				  {
				if ( field_type == 'select-one' || field_type == 'select-multi' ) 
				  {
				    frm_elements[i].selectedIndex = 0;
				}}}
				hold_prev_field_type = field_type; 
				}
				clearCond();
				reqid = 'resetBTN';
				alertI('Form fields have been reset!');
				}
				function appearCond(conditemid)
				{
				try {
				document.getElementById("dvitm"+conditemid).style.display = "inline-block"; 
				} catch(err) 
				{
				try {
				if ( document.getElementById("tditma"+conditemid) != null ) 
				document.getElementById("tditma"+conditemid).style.display = "table-cell"; 
				if ( document.getElementById("tditmb"+conditemid) != null ) 
				document.getElementById("tditmb"+conditemid).style.display = "table-cell"; 
				if ( document.getElementById("tditmc"+conditemid) != null ) 
				document.getElementById("tditmc"+conditemid).style.display = "table-cell"; 
				if ( document.getElementById("tditmd"+conditemid) != null ) 
				document.getElementById("tditmd"+conditemid).style.display = "table-cell"; 
				if ( document.getElementById("tditme"+conditemid) != null ) 
				document.getElementById("tditme"+conditemid).style.display = "table-cell"; 
				} catch(err) {} 
				}
				}
				function disappearCond(conditemid)
				{
				try {
				document.getElementById("dvitm"+conditemid).style.display = "none"; 
				} catch(err) 
				{
				try {
				if ( document.getElementById("tditma"+conditemid) != null ) 
				document.getElementById("tditma"+conditemid).style.display = "none"; 
				if ( document.getElementById("tditmb"+conditemid) != null ) 
				document.getElementById("tditmb"+conditemid).style.display = "none"; 
				if ( document.getElementById("tditmc"+conditemid) != null ) 
				document.getElementById("tditmc"+conditemid).style.display = "none"; 
				if ( document.getElementById("tditmd"+conditemid) != null ) 
				document.getElementById("tditmd"+conditemid).style.display = "none"; 
				if ( document.getElementById("tditme"+conditemid) != null ) 
				document.getElementById("tditme"+conditemid).style.display = "none"; 
				} catch(err) {} 
				}
				}
				function calcTot3()
				{}
				function validRequired(formField,fieldLabel,message,reqidP)
				{
				reqid = reqidP;
				var result = true;
				if (formField.value == "")
				{
				if ( message != null && message.length > 23 && message.substring(0,23) == 'Prefill value remains: ' )
				  { message = ''; }
				alertI('Please enter a value for the "' + fieldLabel + '" field. ' + message + '');
				formField.focus();
				result = false;
				}
				else
				{
				if ( message != null && message.length > 23 && formField.value == message.substring(23,message.length) )
				  {
				  alertI('Please enter a value for the "' + fieldLabel + '" field. ' + message + '');
				   formField.focus();
				   result = false;
				  }
				}
				return result;
				}
				function validRequiredHid(formField,fieldLabel,message,reqidP)
				{
				reqid = reqidP;
				var result = true;
				if (formField.value == "")
				{
				alertI('Please enter a value for the "' + fieldLabel + '" field. ' + message + '');
				formField.focus();
				result = false;
				}
				return result;
				}
				function validRequiredAmt(formField,fieldLabel,message,reqidP,type)
				{
				reqid = reqidP;
				var result = true;
				if ( type != null && type == 'SB' ) 
				{
				if ( formField[0].selected == true )
				  {
				   alertI('Please enter a value for the "' + fieldLabel + '" field. ' + message + '');
				   formField.focus();
				   result = false;
				  }
				}
				else
				{
				if (formField.value == "$.00" ||
				 formField.value == "$0.00" ||
				 formField.value == "$00.00" ||
				 formField.value == "$000.00" ||
				 formField.value == "$" ||
				 formField.value == "")
				{
				alertI('Please enter a value for the "' + fieldLabel + '" field. ' + message + '');
				formField.focus();
				result = false;
				}
				}
				return result;
				}
				function validEmail(formField,fieldLabel,reqidP)
				{
				reqid = reqidP;
				var result = true;
				var email1 = ""; 
				var email2 = ""; 
				var email3 = ""; 
				var localpart = ""; 
				var domainpart = ""; 
				var domainsecondpart = ""; 
				var commaindex = formField.value.indexOf(',');
				var commaindex2 = 0;
				var periodindex = 0;
				var periodindex2 = 0;
				if ( commaindex > 0 )
				{
				email1 = formField.value.substring(0,commaindex);
				commaindex2 = formField.value.indexOf(',',commaindex+1);
				if ( commaindex2 > 0 )
				  {
				   email2 = formField.value.substring(commaindex+1,commaindex2);
				   email3 = formField.value.substring(commaindex2+1,formField.length);
				  }
				else
				  {
				   email2 = formField.value.substring(commaindex+1,formField.length);
				  }
				}
				else
				{
				email1 = formField.value;
				} 
				if ( email1.length > 0 )
				{ 
				if (result && ((formField.value.length < 3) || !isEmailAddr(email1)) )
				  {
				   alertI('Please enter a complete email address in the form: yourname@yourdomain.com');
				   formField.focus();
				   result = false;
				  }
				if (result)
				  {
				   periodindex = email1.lastIndexOf('.');
				   if ( periodindex > 0 )
				     {
				      domainsecondpart = email1.substring(periodindex+1,email1.length);
				      if ( result && domainsecondpart.length > 4 )
				        {
				         alertI('Invalid email address. Domain not valid.');
				         formField.focus();
				         result = false;
				        }
				     }
				   else
				     {
				      alertI('Please enter a complete email address. The period is missing.');
				      formField.focus();
				      result = false;
				     }
				  }
				if (result)
				  {
				   atsignindex = email1.indexOf('@');
				   if ( atsignindex > 0 )
				     {
				      localpart = email1.substring(0,atsignindex);
				      atsignindex2 = email1.indexOf('@',atsignindex+1);
				      if ( atsignindex2 > 0 )
				        {
				         alertI('Invalid email address. Too many @ symbols in email address.');
				         formField.focus();
				         result = false;
				        }
				      if (result && !validEmailChar(localpart))
				        {
				         alertI('Invalid email characters. Please re-enter your email address. (Check for imbedded spaces.)');
				         formField.focus();
				         result = false;
				        }
				      domainpart = email1.substring(atsignindex+1,periodindex);
				      if (result && !validEmailCharD(domainpart))
				        {
				         alertI('Invalid email characters in domain portion. Please re-enter your email address. (Check for imbedded spaces.)');
				         formField.focus();
				         result = false;
				        }
				     }
				  }
				} 
				if ( email2.length > 0 )
				{ 
				if (result && ((formField.value.length < 3) || !isEmailAddr(email2)) )
				  {
				   alertI('Please enter a complete email address in the form: yourname@yourdomain.com');
				   formField.focus();
				   result = false;
				  }
				if (result)
				  {
				   periodindex = email2.lastIndexOf('.');
				   if ( periodindex > 0 )
				     {
				      domainsecondpart = email2.substring(periodindex+1,email2.length);
				      if ( result && domainsecondpart.length > 4 )
				        {
				         alertI('Invalid email address. Domain not valid.');
				         formField.focus();
				         result = false;
				        }
				     }
				   else
				     {
				      alertI('Please enter a complete email address. The period is missing.');
				      formField.focus();
				      result = false;
				     }
				  }
				if (result)
				  {
				   atsignindex = email2.indexOf('@');
				   if ( atsignindex > 0 )
				     {
				      localpart = email2.substring(0,atsignindex);
				      atsignindex2 = email2.indexOf('@',atsignindex+1);
				      if ( atsignindex2 > 0 )
				        {
				         alertI('Invalid email address. Too many @ symbols in email address.');
				         formField.focus();
				         result = false;
				        }
				      if (result && !validEmailChar(localpart))
				        {
				         alertI('Invalid email characters. Please re-enter your email address. (Check for imbedded spaces.)');
				         formField.focus();
				         result = false;
				        }
				     }
				  }
				}
				else 
				{
				if ( result && commaindex > 0 )
				  {
				   alertI('Invalid email adress format. No email address after the comma.');
				   formField.focus();
				   result = false;
				  }
				} 
				if ( email3.length > 0 )
				{ 
				if (result && ((formField.value.length < 3) || !isEmailAddr(email3)) )
				  {
				   alertI('Please enter a complete email address in the form: yourname@yourdomain.com');
				   formField.focus();
				   result = false;
				  }
				if (result)
				  {
				   periodindex = email3.lastIndexOf('.');
				   if ( periodindex > 0 )
				     {
				      domainsecondpart = email3.substring(periodindex+1,email3.length);
				      if ( result && domainsecondpart.length > 4 )
				        {
				         alertI('Invalid email address. Domain not valid.');
				         formField.focus();
				         result = false;
				        }
				     }
				   else
				     {
				      alertI('Please enter a complete email address. The period is missing.');
				      formField.focus();
				      result = false;
				     }
				  }
				if (result)
				  {
				   atsignindex = email3.indexOf('@');
				   if ( atsignindex > 0 )
				     {
				      localpart = email3.substring(0,atsignindex);
				      atsignindex2 = email3.indexOf('@',atsignindex+1);
				      if ( atsignindex2 > 0 )
				        {
				         alertI('Invalid email address. Too many @ symbols in email address.');
				         formField.focus();
				         result = false;
				        }
				      if (result && !validEmailChar(localpart))
				        {
				         alertI('Invalid email characters. Please re-enter your email address. (Check for imbedded spaces.)');
				         formField.focus();
				         result = false;
				        }
				     }
				  }
				} 
				else 
				{
				if ( result && commaindex2 > 0 )
				  {
				   alertI('Invalid email adress format. No email address after the comma.');
				   formField.focus();
				   result = false;
				  }
				} 
				return result;
				}
				function isEmailAddr(email)
				{
				var result = false;
				var theStr = new String(email);
				var index = theStr.indexOf('@');
				if (index > 0)
				{
				var pindex = theStr.indexOf('.',index);
				if ((pindex > index+1) && (theStr.length > pindex+1))
				    result = true;
				}
				return result;
				}
				     function validEmailChar(localpart)
				     {
				      var result = true;
				      if (result && !allDigitsEmail(localpart))
				      {
				       result = false;
				      }
				    return result;
				     }
				     function allDigitsEmail(str)
				     {
				  return inValidCharSetE(str,"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_0123456789.");
				     }
				     function inValidCharSetE(str,charset)
				     {
				    var result = true;
				        var blankindex = 0;
				    for (var i=0;i<str.length;i++)
				      if (charset.indexOf(str.substr(i,1))<0)
				          {
				           if ( i == 0 && str.substring(0,1) == ' ')
				             {}
				           else
				             {    
				              result = false;
				              break;
				             }
				          }
				      return result;
				     }
				     function validEmailCharD(domainpart)
				     {
				      var result = true;
				      if (result && !allDigitsEmailD(domainpart))
				      {
				       result = false;
				      }
				    return result;
				     }
				     function allDigitsEmailD(str)
				     {
				  return inValidCharSetD(str,"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_0123456789.");
				     }
				     function inValidCharSetD(str,charset)
				     {
				    var result = true;
				        var blankindex = 0;
				    for (var i=0;i<str.length;i++)
				      if (charset.indexOf(str.substr(i,1))<0)
				          {
				           result = false;
				           break;
				          }
				      return result;
				     }
				function validNumericDec(formField,fieldLabel,reqidP)
				{
				reqid = reqidP;
				var result = true;
				if (result && !allDigitsDec(formField.value) && formField.value.length > 0 )
				{
				alertI('Please enter only numbers for the "' + fieldLabel + '" field. Value entered: ' + formField.value + '');
				formField.focus();
				result = false;
				}
				return result;
				}
				function allDigitsDec(str)
				{
				return inValidCharSet(str,"$0123456789.");
				}
				function allDigits(str)
				{
				return inValidCharSet(str,"0123456789");
				}
				function inValidCharSet(str,charset)
				{
				var result = true;
				for (var i=0;i<str.length;i++)
				if (charset.indexOf(str.substr(i,1))<0)
				 {
				    result = false;
				  break;
				 }
				return result;
				}
				function validDate(formField,fieldLabel,reqidP)
				{
				reqid = reqidP;
				var result = true;
				if ( formField.value.length == 0 )
				{}
				else
				{
				var dateerr = 'n'; 
				var elems = formField.value.split("/");
				if ( elems.length != 3 ) 
				{ dateerr = 'y'; result = false; } 
				else
				{
				result = (formField.value.length == 10); 
				if (result && formField.value.length > 0 )
				{
				var month = parseInt(elems[0],10);
				var day = parseInt(elems[1],10);
				var year = parseInt(elems[2],10);
				result = allDigits(elems[0]) && (month > 0) && (month < 13) &&
				  allDigits(elems[1]) && (day > 0) && (day < 32) &&
				  allDigits(elems[2]) && (elems[2].length == 4);
				}
				}
				if ( !result )
				{
				alertI('Please enter a date in the format MM/DD/YYYY for the "' + fieldLabel +'" field.');
				formField.focus();
				}
				}
				return result;
				}
				function validCard(formField,formField2,fieldLabel,required,message,reqidP)
				{
				reqid = reqidP;
				var result = true;
				var cardLength = formField.value.length;
				if (result && (!allDigits(formField.value) || cardLength < 4) && formField.value.length > 0 )
				{
				alertI('Invalid card number. Please enter only numbers for the "' + fieldLabel + '" field. No spaces or dashes. Value entered: ' + formField.value + '');
				formField.focus();
				result = false;
				}
				var firstdig = formField.value.substring(0,1);
				var first4dig = formField.value.substring(0,4);
				if (result && formField2.value == 'Master Card' && ( firstdig > '5' || firstdig < '5' || cardLength > 16 || cardLength < 16) && formField.value.length > 0 )
				{
				alertI('Invalid Mastercard card number. Check your card number or card type.');
				formField.focus();
				result = false;
				}
				if (result && formField2.value == 'Visa' && ( firstdig > '4' || firstdig < '4' || cardLength > 16 || cardLength < 13  || cardLength == 14 || cardLength == 15) && formField.value.length > 0 )
				{
				alertI('Invalid Visa card number. Check your card number or card type.');
				formField.focus();
				result = false;
				}
				if (result && formField2.value == 'American Express' && ( firstdig > '3' || firstdig < '3' || cardLength > 15 || cardLength < 15) && formField.value.length > 0 )
				{
				alertI('Invalid American Express card number. Check your card number or card type.');
				formField.focus();
				result = false;
				}
				if (result && formField2.value == 'Discover' && ( first4dig > '6011' || first4dig < '6011' || cardLength > 16 || cardLength < 16) && formField.value.length > 0 )
				{
				alertI('Invalid Discover card number. Check your card number or card type.');
				formField.focus();
				result = false;
				}
				return result;
				}
				function validateForm(theForm)
				{
				if (!validRequired(theForm.first_name_131,"First Name:",'','lbl3'))
				return false;
				if (!validRequired(theForm.last_name_196,"Last Name:",'','lbl4'))
				return false;
				if (!validRequired(theForm.e_mail298,"E-Mail:",'','lbl2'))
				return false;
				if (!validEmail(theForm.e_mail298,"E-Mail:",'lbl2'))
				return false;
				if (!validRequired(theForm.address_line_1_700,"Address Line 1:",'','lbl5'))
				return false;
				if (!validRequired(theForm.city_900,"City:",'','lbl7'))
				return false;
				if (!validRequired(theForm.state_950,"State:",'','lbl8'))
				return false;
				if (!validRequired(theForm.zip_code1025,"Zip Code:",'','lbl9'))
				return false;
				if (!validRequired(theForm.date_of_birth1350,"Date of Birth:",'','lbl16'))
				return false;
				if (!validDate(theForm.date_of_birth1350,"Date of Birth:",'lbl16'))
				return false;
				if (!validRequired(theForm.phone_1575,"Phone:",'','lbl15'))
				return false;
				if (!validRequired(theForm.height_1737,"Height:",'','lbl17'))
				return false;
				if (!validRequired(theForm.weight1868,"Weight:",'','lbl18'))
				return false;
				if (!validRequired(theForm.reason_for_your_visit_2100,"Reason for your visit:",'','lbl19'))
				return false;
				if (theForm.previous_condition_2200[0].checked == false && 
				theForm.previous_condition_2200[1].checked == false ) 
				{
				reqid = 'lbl20';
				alertI('Please enter a value for the Previous Condition? field.');
				theForm.previous_condition_2200[0].focus();
				return false;
				}
				if (!validRequired(theForm.who_was_your_previous_primary_2500,"Who was your previous primary care physician (list name, address & phone)?",'','lbl23'))
				return false;
				if (!validRequired(theForm.list_all_medications___supplem2700,"List all medications & supplements that you are currently taking.",'','lbl25'))
				return false;
				if (!validRequired(theForm.list_all_medications___supplem2900,"List all medications & supplements that you have previously taken.",'','lbl27'))
				return false;
				if (!validRequired(theForm.list_all_drug_allergies_you_cu3100,"List all drug allergies you currently have.",'','lbl29'))
				return false;
				if (!validRequired(theForm.list_all_other_allergies_you_c3300,"List all other allergies you currently have.",'','lbl31'))
				return false;
				if (!validRequired(theForm.date___reason_of_your_last_doc3500,"Date & reason of your last doctor visit.",'','lbl33'))
				return false;
				if (!validRequired(theForm.date___conditions_of_your_past3700,"Date & conditions of your past surgical procedure(s).",'','lbl35'))
				return false;
				if (!validRequired(theForm.date___conditions_of_your_past3900,"Date & conditions of your past hospitalization(s).",'','lbl37'))
				return false;
				if (!validRequired(theForm.how_is_your_overall_health__pl4100,"How is your overall health? Please explain.",'','lbl39'))
				return false;
				if (!validRequired(theForm.how_is_your_energy_level_4300,"How is your energy level?",'','lbl41'))
				return false;
				if (!validRequired(theForm.explain_your_exercise_routine_4500,"Explain your exercise routine. How often?",'','lbl43'))
				return false;
				if (!validRequired(theForm.how_is_your_mental_alertness_4700,"How is your mental alertness?",'','lbl45'))
				return false;
				if (!validRequired(theForm.list_the_diseases_that_run_in_4900,"List the diseases that run in your family.",'','lbl47'))
				return false;
				if (!validRequired(theForm.substance_abuse__please_descri5100,"Substance abuse? Please describe.",'','lbl49'))
				return false;
				if (!validRequired(theForm.do_you_suffer_from_depression_5300,"Do you suffer from depression? Please describe.",'','lbl51'))
				return false;
				if (!validRequired(theForm.alcohol__drinks_per_week__drin5500,"Alcohol: Drinks per week? Drinks per day? Please describe.",'','lbl53'))
				return false;
				if (!validRequired(theForm.smoking__packs_of_cigarettes_p5700,"Smoking: Packs of cigarettes per day? Please describe.",'','lbl12'))
				return false;
				zerocartline(); 
				return true;
				}
				function zerocartline() 
				{
				}
				var  savecondarr = '';

				function saveCondParent(conditemid,formuseritemid)
				{
				var pix   = 0;
				var pix2  = 0;
				var pix3  = 0;
				var holdprnt  = '';
				savecondarr = savecondarr + '^' + conditemid + '^' + '~' + formuseritemid + '~';
				pix = savecondarr.indexOf('^' + formuseritemid + '^');
				if ( pix > -1 )
				{
				pix2 = savecondarr.indexOf('~',pix+2);
				if ( pix2 > -1 )
				  {
				   pix3 = savecondarr.indexOf('^',pix2+2);
				   if ( pix3 > -1 )
				     {
				      holdprnt  = savecondarr.substring(pix2,pix3); 
				      savecondarr = savecondarr + holdprnt;
				     }
				   else
				     {
				      holdprnt  = savecondarr.substring(pix2,savecondarr.length); 
				      savecondarr = savecondarr + holdprnt;
				     }
				  }
				}
				}
				function blankCascade(conditemid)
				{
				var pix   = 0;
				var pix2  = 0;
				var holdpix2a  = 0;
				var holdpix2b  = 0;
				var holdpix2c  = 0;
				var holdprnt  = '';
				while ( savecondarr.length > 4 && pix > -1 )
				{
				pix = savecondarr.indexOf('~' + conditemid + '~');
				holdpix2c = savecondarr.indexOf('^',pix);
				if ( holdpix2c == -1 )
				  { holdpix2c = savecondarr.length; } 
				if ( pix > -1 )
				  {
				   pix2 = 0;
				   pix2 = savecondarr.indexOf('^');
				   while ( pix2 < pix && pix2 > -1 )
				     {
				      holdpix2a  = holdpix2b;
				      holdpix2b  = pix2;
				      pix2 = savecondarr.indexOf('^',pix2+2);
				     }
				   if ( holdpix2a > -1 && holdpix2b > -1 )
				     { try { 
				      holdprnt  = savecondarr.substring(holdpix2a+1,holdpix2b); 
				     disappearCond(holdprnt); 
				      savecondarr = savecondarr.replace(savecondarr.substring(holdpix2a,holdpix2c),'');
				      try { window['noInner'+holdprnt](1); } catch(err) {}
				      } catch(err) {}
				     }
				  }
				}
				}
				function clearCond()
				{
				}
				clearCond();
				var prevreqcolor = '';
				var prevreqid    = '';
				function alertI(messagetxt)
				{
				document.getElementById('body2').style.opacity = .5;
				theString="<table style='width:275px;border-spacing:0px;background-color:#eeeeee;border-radius:10px;border:5px solid #000000;'>"
				theString+="<tr>"
				theString+="<td colspan='2' style='text-align:center;width:100%;border-radius:10px;border:5px solid #eeeeee;'>"
				theString+="<table style='width:100%;border-spacing:0px;background-color:#eeeeee;' width='100%'>"
				theString+="<tr>"
				theString+="<td colspan='6' style='height:10px;text-align:right;vertical-align:center;'>"
				theString+="<span onclick='hidebox();'style='font-family: Arial Black; font-weight: bold; font-size: 15px; color: #000000; background-color: #eeeeee;padding:2px;'>X<\/span><\/a>"
				theString+="<\/td><\/tr>"
				theString+="<tr><td colspan='1' style='text-align:center;padding:1px;vertical-align:top;'><span style='color:#ff0000;font-family:Verdana; font-size:16px;font-weight:bold;'>!!<\/span><\/td>"
				theString+="    <td colspan='5' style='text-align:left;padding:1px;vertical-align:top;'>"
				theString+="<span style='color:#000000;font-family:Verdana; font-size:16px;padding:2px;'>"+messagetxt+"<\/span><\/td><\/tr>"
				theString+="<tr><td colspan='6' style='text-align:right;padding:10px'>"
				theString+="&nbsp;&nbsp;<span onclick='hidebox();' style='color:#000000;background-color:#eeeeee;font-family:Verdana; font-weight:bold; font-size:13px;padding:5px;border:1px solid #0000ff; text-decoration:none; font-style:normal;'>&nbsp;&nbsp;OK&nbsp;&nbsp;<\/span><\/td><\/tr>"
				theString+="<\/table><\/td><\/tr>"
				theString+="<\/table><\/td>  <\/tr><\/table>"
				var msgleft=350; 
				var manageboxtopCD = 5;
				try {
				var ffv = document.getElementById(reqid);
				if ( reqid == 'resetBTN' || reqid == 'submitBTN' )
				{ manageboxtopCD = ExtractNumber2(ffv.offsetTop) - 165; } 
				else
				{ manageboxtopCD = ExtractNumber2(ffv.offsetTop) +30; } 
				msgleft = ExtractNumber2(ffv.offsetLeft) +50;
				if ( msgleft > 600 ) 
				{ msgleft = msgleft -150; }
				if ( prevreqid.length > 0 && prevreqcolor.length > 0 )
				{
				document.getElementById(prevreqid).style.color = prevreqcolor;
				} 
				prevreqcolor = ffv.style.color; 
				prevreqid    = reqid;
				if ( reqid != 'resetBTN' && reqid != 'submitBTN' )
				{ ffv.style.color = '#ff0000'; } 
				} catch(err) {}
				if (document.layers) 
				{
				document.requiredCD.document.write(theString)
				document.requiredCD.document.close()
				document.requiredCD.left=msgleft
				document.requiredCD.top=manageboxtop
				document.requiredCD.visibility="show"
				}
				else
				{
				if(document.getElementById) 
				{
				elm=document.getElementById("requiredCD")
				elm.innerHTML=theString
				elm.style.top=manageboxtopCD
				elm.style.left=msgleft
				elm.style.visibility = "visible"
				}
				}
				document.getElementById("requiredCD").style.top = manageboxtopCD + "px"; 
				document.getElementById("requiredCD").style.left = msgleft + "px"; 
				}  
				function hidebox()
				{
				document.getElementById('body2').style.opacity = 1.0;
				if (document.layers) 
				{
				document.requiredCD.visibility="hidden"
				}
				if(document.getElementById) 
				{
				elm=document.getElementById("requiredCD")
				elm.style.visibility="hidden"
				}
				}
				function ExtractNumber2(value)
				{
				var n = parseInt(value);
				return n == null || isNaN(n) ? 0 : n;
				}
				function selectBox(xid,occ,oldBG)
				{
				var oci = 0;
				while ( document.getElementById(xid+'S'+oci) != null )
				{
				document.getElementById(xid+'S'+oci).style.backgroundColor = oldBG; 
				oci++;
				}
				document.getElementById(xid+'S'+occ).style.backgroundColor = '#cfcfff'; 
				document.getElementById(xid).value = document.getElementById(xid+'S'+occ).innerHTML;
				}
				function hlightBox(xid,occ,oldBG)
				{
				if ( document.getElementById(xid).value.length == 0 )
				{
				var oci = 0;
				var selectFound = '';
				while ( document.getElementById(xid+'S'+oci) != null )
				{
				document.getElementById(xid+'S'+oci).style.backgroundColor = oldBG; 
				oci++;
				}
				document.getElementById(xid+'S'+occ).style.backgroundColor = '#ffffcc'; 
				}
				}
				function decodeHtml(html) {
				var txt = document.createElement("textarea");
				txt.innerHTML = html;
				return txt.value;
				}
				try {
				document.getElementById('body2').style.opacity = 1.0;
				document.getElementById('loadingCD').style.visibility = 'hidden';
				} catch(err) {}
				</script>
				<table style='background-color:#66CCFF;border-spacing:0px;width:760px;max-width:760px;margin:20px auto 10px auto;border-width:3px;border-style:solid;border-color:#336699;'>
					<tr>
						<td style='vertical-align:bottom;padding:5px'>
							<table style='border-spacing:0px;width:100%;'>
								<tr>
									<td style='height:60px;vertical-align:center;text-align:center;padding:5px 5px 10px 10px;'><!--    <img style='position:relative;' id=fileimage97 src=https://ww03.elbowspace.com/client/images/i200708021953394840231.jpg width=100 height=122> -->
									<img height="122" id="fileimage97" src="images/medical_emblem.jpg" style='position:relative;' width="100"></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style='vertical-align:top;text-align:center;padding:5px 5px 5px 5px;'><br>
						<span id="titleid1" style='position:relative;font-family:Bookman Old Style;color:#0000CC;font-size:28px;font-weight:bold;font-style:italic;text-decoration:none;'>Medical Questionnaire</span></td>
					</tr>
					<tr>
						<td style='padding:10px;'>
							<form action='https://ww03.elbowspace.com/servlets/frhclientformupd' id="form1" method="post" name="form1" onsubmit='return validateForm(this)'>
								<input name="xr4" type="hidden" value=''> <input name="formts" type="hidden" value='2017-01-16 15:48:06.503427'> <input name="recordts" type="hidden" value='2017-01-16 16:45:34.031583'>
							</form>
							<table style='border-spacing:1px;width:99%;vertical-align:top;margin: 0 auto;border-collapse:collapse;white-space:nowrap;'>
								<tr>
									<td colspan="8" id="tditma1" style='background-color:#0033FF;padding:5px 5px 5px 5px;text-align:center;vertical-align:center;width:100%; height:18px; border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'><span style='position:relative;font-family: Bookman Old Style; text-decoration:none; font-style:italic; font-weight: bold; font-size: 18px; color: #FFFFFF;white-space:pre-wrap;'>Personal Information</span></td>
								</tr>
								<tr>
									<td colspan="8" id="tditma3" style='font-size:0px;white-space:nowrap;text-align:left;border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'>
										<div id="dvitm3" style='width:250px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl3" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>First Name:*</span><br>
											<input maxlength='15' name="first_name_131" size='15' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm4" style='width:250px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl4" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Last Name:*</span><br>
											<input maxlength='20' name="last_name_196" size='20' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm2" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl2" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>E-Mail:*</span><br>
											<input maxlength='70' name="e_mail298" size='30' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma5" style='font-size:0px;white-space:nowrap;text-align:left;border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'>
										<div id="dvitm5" style='width:250px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl5" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Address Line 1:*</span><br>
											<input maxlength='25' name="address_line_1_700" size='25' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm6" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl6" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Address Line 2:</span><br>
											<input maxlength='25' name="address_line_2750" size='25' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma7" style='font-size:0px;white-space:nowrap;text-align:left;border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'>
										<div id="dvitm7" style='width:250px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl7" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>City:*</span><br>
											<input maxlength='18' name="city_900" size='18' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm8" style='width:250px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl8" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>State:*</span><br>
											<select name="state_950" onchange="calcTot3(this);" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'>
												<option value=''>
													Choose a State
												</option>
												<option value='Alabama'>
													Alabama
												</option>
												<option value='Alaska'>
													Alaska
												</option>
												<option value='Arizona'>
													Arizona
												</option>
												<option value='Arkansas'>
													Arkansas
												</option>
												<option value='California'>
													California
												</option>
												<option value='Colorado'>
													Colorado
												</option>
												<option value='Connecticut'>
													Connecticut
												</option>
												<option value='Delaware'>
													Delaware
												</option>
												<option value='District of Columbia'>
													District of Columbia
												</option>
												<option value='Florida'>
													Florida
												</option>
												<option value='Georgia'>
													Georgia
												</option>
												<option value='Hawaii'>
													Hawaii
												</option>
												<option value='Idaho'>
													Idaho
												</option>
												<option value='Illinois'>
													Illinois
												</option>
												<option value='Indiana'>
													Indiana
												</option>
												<option value='Iowa'>
													Iowa
												</option>
												<option value='Kansas'>
													Kansas
												</option>
												<option value='Kentucky'>
													Kentucky
												</option>
												<option value='Louisiana'>
													Louisiana
												</option>
												<option value='Maine'>
													Maine
												</option>
												<option value='Maryland'>
													Maryland
												</option>
												<option value='Massachusetts'>
													Massachusetts
												</option>
												<option value='Michigan'>
													Michigan
												</option>
												<option value='Minnesota'>
													Minnesota
												</option>
												<option value='Mississippi'>
													Mississippi
												</option>
												<option value='Missouri'>
													Missouri
												</option>
												<option value='Montana'>
													Montana
												</option>
												<option value='Nebraska'>
													Nebraska
												</option>
												<option value='Nevada'>
													Nevada
												</option>
												<option value='New Hampshire'>
													New Hampshire
												</option>
												<option value='New Jersey'>
													New Jersey
												</option>
												<option value='New Mexico'>
													New Mexico
												</option>
												<option value='New York'>
													New York
												</option>
												<option value='North Carolina'>
													North Carolina
												</option>
												<option value='North Dakota'>
													North Dakota
												</option>
												<option value='Ohio'>
													Ohio
												</option>
												<option value='Oklahoma'>
													Oklahoma
												</option>
												<option value='Oregon'>
													Oregon
												</option>
												<option value='Pennsylvania'>
													Pennsylvania
												</option>
												<option value='Rhode Island'>
													Rhode Island
												</option>
												<option value='South Carolina'>
													South Carolina
												</option>
												<option value='South Dakota'>
													South Dakota
												</option>
												<option value='Tennessee'>
													Tennessee
												</option>
												<option value='Texas'>
													Texas
												</option>
												<option value='Utah'>
													Utah
												</option>
												<option value='Vermont'>
													Vermont
												</option>
												<option value='Virginia'>
													Virginia
												</option>
												<option value='Washington'>
													Washington
												</option>
												<option value='West Virginia'>
													West Virginia
												</option>
												<option value='Wisconsin'>
													Wisconsin
												</option>
												<option value='Wyoming'>
													Wyoming
												</option>
											</select><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm9" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl9" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Zip Code:*</span><br>
											<input maxlength='10' name="zip_code1025" size='5' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma10" style='font-size:0px;white-space:nowrap;text-align:left;border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'>
										<div id="dvitm10" style='width:250px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl10" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Marital Status:</span><br>
											<select name="marital_status_1200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'>
												<option value=''>
													Select Status
												</option>
												<option value='Single'>
													Single
												</option>
												<option value='Married'>
													Married
												</option>
												<option value='Divorced'>
													Divorced
												</option>
											</select><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm11" style='width:250px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl11" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Gender:</span><br>
											<select name="gender_1250" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'>
												<option value=''>
													Select Gender
												</option>
												<option value='Male'>
													Male
												</option>
												<option value='Female'>
													Female
												</option>
											</select><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm16" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl16" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Date of Birth:*</span><br>
											<input maxlength='10' name="date_of_birth1350" size='10' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''> <a href="javascript:onClick=pgCalI(document.form1.date_of_birth1350,'','date_of_birth1350i','','16');" style='text-decoration:none;padding:0px 0px 0px 2px;'><img align="absbottom" border="0" id="date_of_birth1350i" src='https://ww04.elbowspace.com/images/cal.gif' style='position:relative'></a><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma15" style='font-size:0px;white-space:nowrap;text-align:left;border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'>
										<div id="dvitm15" style='width:250px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl15" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Phone:*</span><br>
											<input maxlength='25' name="phone_1575" size='12' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm17" style='width:250px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl17" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Height:*</span><br>
											<input maxlength='10' name="height_1737" size='5' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm18" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 1px;padding:2px 5px 2px 5px;'>
											<span id="lbl18" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Weight:*</span><br>
											<input maxlength='10' name="weight1868" size='5' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="text" value=''><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma19" style='font-size:0px;white-space:nowrap;text-align:left;border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'>
										<div id="dvitm19" style='width:250px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;border-style:solid; border-color:#000000; border-width:0px 1px 0px 0px;'>
											<span id="lbl19" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Reason for your visit:*</span><br>
											<textarea cols='22' name="reason_for_your_visit_2100" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'>                      </textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm20" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;border-style:solid; border-color:#000000; border-width:0px 0px 0px 0px;padding:2px 5px 2px 5px;'>
											<span id="lbl20" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Previous Condition?*</span><br>
											<div style='text-align:left;padding:2px 5px 2px 5px;font-family:Verdana;font-weight:normal;text-decoration:none;font-style:normal;font-size:13px;color:#000000;white-space:normal;'>
												<input name='previous_condition_2200' type="radio" value='Yes'>Yes<br>
												<input name='previous_condition_2200' type="radio" value='No'>No<br>
											</div><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma21" style='background-color:#0033FF;padding:5px 5px 5px 5px;text-align:center;vertical-align:center;width:100%; height:18px; border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'><span style='position:relative;font-family: Bookman Old Style; text-decoration:none; font-style:italic; font-weight: bold; font-size: 18px; color: #FFFFFF;white-space:pre-wrap;'>Patient History</span></td>
								</tr>
								<tr>
									<td colspan="8" id="tditma23" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm23" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl23" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Who was your previous primary care physician (list name, address & phone)?*</span><br>
											<textarea cols='40' name="who_was_your_previous_primary_2500" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'>                  </textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma25" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm25" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl25" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>List all medications & supplements that you are currently taking.*</span><br>
											<textarea cols='40' name="list_all_medications___supplem2700" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma27" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm27" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl27" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>List all medications & supplements that you have previously taken.*</span><br>
											<textarea cols='40' name="list_all_medications___supplem2900" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'> </textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma29" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm29" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl29" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>List all drug allergies you currently have.*</span><br>
											<textarea cols='40' name="list_all_drug_allergies_you_cu3100" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma31" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm31" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl31" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>List all other allergies you currently have.*</span><br>
											<textarea cols='40' name="list_all_other_allergies_you_c3300" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma33" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm33" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl33" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Date & reason of your last doctor visit.*</span><br>
											<textarea cols='40' name="date___reason_of_your_last_doc3500" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma35" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm35" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl35" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Date & conditions of your past surgical procedure(s).*</span><br>
											<textarea cols='40' name="date___conditions_of_your_past3700" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma37" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm37" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl37" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Date & conditions of your past hospitalization(s).*</span><br>
											<textarea cols='40' name="date___conditions_of_your_past3900" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma39" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm39" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl39" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>How is your overall health? Please explain.*</span><br>
											<textarea cols='40' name="how_is_your_overall_health__pl4100" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma41" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm41" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl41" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>How is your energy level?*</span><br>
											<textarea cols='40' name="how_is_your_energy_level_4300" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma43" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm43" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl43" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Explain your exercise routine. How often?*</span><br>
											<textarea cols='40' name="explain_your_exercise_routine_4500" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma45" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm45" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl45" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>How is your mental alertness?*</span><br>
											<textarea cols='40' name="how_is_your_mental_alertness_4700" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma47" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm47" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl47" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>List the diseases that run in your family.*</span><br>
											<textarea cols='40' name="list_the_diseases_that_run_in_4900" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma49" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm49" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl49" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Substance abuse? Please describe.*</span><br>
											<textarea cols='40' name="substance_abuse__please_descri5100" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma51" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm51" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl51" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Do you suffer from depression? Please describe.*</span><br>
											<textarea cols='40' name="do_you_suffer_from_depression_5300" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma53" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm53" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl53" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Alcohol: Drinks per week? Drinks per day? Please describe.*</span><br>
											<textarea cols='40' name="alcohol__drinks_per_week__drin5500" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma12" style='width:100%;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
										<div id="dvitm12" style='display: inline-block;text-align:left;white-space:nowrap;vertical-align:top;width:100%;'>
											<span id="lbl12" style='vertical-align:top;position:relative;font-family: Verdana; font-weight: bold; text-decoration:none; font-style:normal; font-size: 16px; background-color:transparent;color: #0000CC;'>Smoking: Packs of cigarettes per day? Please describe.*</span><br>
											<textarea cols='40' name="smoking__packs_of_cigarettes_p5700" rows='4' style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;'></textarea><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma56" style='background-color:#0033FF;padding:5px 5px 5px 5px;text-align:center;vertical-align:center;width:100%; height:18px; border-style:solid; border-color:#000000; border-width:1px 1px 1px 1px;'><span style='position:relative;font-family: Bookman Old Style; text-decoration:none; font-style:italic; font-weight: bold; font-size: 18px; color: #FFFFFF;white-space:pre-wrap;'>Specific Disorders (Check all that apply)</span></td>
								</tr>
								<tr>
									<td colspan="8" id="tditma57" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm57" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl57" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Measles:</span><br>
											<input name="measles_5900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm58" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl58" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Mumps:</span><br>
											<input name="mumps_6000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm59" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl59" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Chicken Pox:</b></span><br>
											<input name="chicken_pox_6100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma60" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm60" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl60" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Whooping Cough:</span><br>
											<input name="whooping_cough_6200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm61" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl61" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Scarlet Fever:</span><br>
											<input name="scarlet_fever_6300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm62" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl62" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Pnemonia:</b></span><br>
											<input name="pnemonia_6400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma63" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm63" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl63" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Bursitis:</span><br>
											<input name="bursitis_6500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm64" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl64" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Polio:</span><br>
											<input name="polio_6600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm65" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl65" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Reduced Vitality:</b></span><br>
											<input name="reduced_vitality_6700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma66" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm66" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl66" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Arteriosclerosis:</span><br>
											<input name="arteriosclerosis_6800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm67" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl67" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Stroke:</span><br>
											<input name="stroke_6900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm68" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl68" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Heart Problems:</b></span><br>
											<input name="heart_problems_7000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma69" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm69" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl69" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Seizure Disorders:</span><br>
											<input name="seizure_disorders_7100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm70" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl70" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Anxiety Disorder:</span><br>
											<input name="anxiety_disorder_7200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm71" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl71" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Elevated PSA Level:</b></span><br>
											<input name="elevated_psa_level_7300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma72" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm72" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl72" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Anemia:</span><br>
											<input name="anemia_7400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm73" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl73" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Bulimia:</span><br>
											<input name="bulimia_7500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm74" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl74" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Anorexia:</b></span><br>
											<input name="anorexia_7600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma75" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm75" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl75" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Cirrhosis of the Liver:</span><br>
											<input name="cirrhosis_of_the_liver_7700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm76" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl76" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Renal Failure:</span><br>
											<input name="renal_failure_7800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm77" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl77" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Colitis:</b></span><br>
											<input name="colitis_7900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma78" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm78" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl78" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Herpes:</span><br>
											<input name="herpes_8000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm79" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl79" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Syphilis:</span><br>
											<input name="syphilis_8100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm80" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl80" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>HIV Disease:</b></span><br>
											<input name="hiv_disease_8200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma81" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm81" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl81" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Chlamydia:</span><br>
											<input name="chlamydia_8300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm82" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl82" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Angina Pectoris:</span><br>
											<input name="angina_pectoris_8400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm83" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl83" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Tachycardia:</b></span><br>
											<input name="tachycardia_8500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma84" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm84" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl84" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Hypertension(high blood presure):</span><br>
											<input name="hypertension_high_blood_presur8600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm85" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl85" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Hypotension(low blood presure):</span><br>
											<input name="hypotension_low_blood_presure_8700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm86" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl86" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Tuberculosis:</b></span><br>
											<input name="tuberculosis_8800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma87" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm87" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl87" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Breathing Problems:</span><br>
											<input name="breathing_problems_8900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm88" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl88" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Asthma:</span><br>
											<input name="asthma_9000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm89" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl89" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Chronic Bronchitis:</b></span><br>
											<input name="chronic_bronchitis_9100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma90" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm90" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl90" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Chronic Cough:</span><br>
											<input name="chronic_cough_9200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm91" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl91" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Emphysema:</span><br>
											<input name="emphysema_9300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm92" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl92" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Chronic Sinusitis:</b></span><br>
											<input name="chronic_sinusitis_9400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma93" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm93" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl93" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Allergic Sinus problem:</span><br>
											<input name="allergic_sinus_problem_9500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm94" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl94" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Chronic Allergic Rhinitis:</span><br>
											<input name="chronic_allergic_rhinitis_9600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm95" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl95" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Sinus Headaches:</b></span><br>
											<input name="sinus_headaches_9700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma96" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm96" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl96" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Chronic Colds:</span><br>
											<input name="chronic_colds_9800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm97" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl97" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Female Menopause:</span><br>
											<input name="female_menopause_9900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm98" style='width:250px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl98" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Andropause - decreased potency:</span><br>
											<input name="andropause___decreased_potency10000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma99" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm99" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl99" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Nervous Disturbances:</span><br>
											<input name="nervous_disturbances_10100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm100" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl100" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Loss of Memory:</span><br>
											<input name="loss_of_memory_10200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm101" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl101" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Psychiatric Disturbances:</b></span><br>
											<input name="psychiatric_disturbances_10300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma102" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm102" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl102" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Decreased Sexual Potency:</span><br>
											<input name="decreased_sexual_potency_10400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm103" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl103" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Sleep Disturbances:</span><br>
											<input name="sleep_disturbances_10500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm104" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl104" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Dizziness:</b></span><br>
											<input name="dizziness_10600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma105" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm105" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl105" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Chronic Migraine:</span><br>
											<input name="chronic_migraine_10700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm106" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl106" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Meningitis:</span><br>
											<input name="meningitis_10800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm107" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl107" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Jaundice:</b></span><br>
											<input name="jaundice_10900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma108" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm108" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl108" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Epilepsy:</span><br>
											<input name="epilepsy_11000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm109" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl109" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Ear Infection:</span><br>
											<input name="ear_infection_11100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm110" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl110" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Hearing Loss:</b></span><br>
											<input name="hearing_loss_11200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma111" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm111" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl111" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Nausea:</span><br>
											<input name="nausea_11300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm112" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl112" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Rectal Bleeding:</span><br>
											<input name="rectal_bleeding_11400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm113" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl113" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Burning of Urination:</b></span><br>
											<input name="burning_of_urination_11500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma114" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm114" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl114" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Breast Cancer:</span><br>
											<input name="breast_cancer_11600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm115" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl115" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Cervical Cancer:</span><br>
											<input name="cervical_cancer_11700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm116" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl116" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Ovarian Cancer:</b></span><br>
											<input name="ovarian_cancer_11800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma117" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm117" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl117" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Prostate Cancer:</span><br>
											<input name="prostate_cancer_11900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm118" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl118" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Enlarged Prostate:</span><br>
											<input name="enlarged_prostate_12000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm119" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl119" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Bladder Cancer:</b></span><br>
											<input name="bladder_cancer_12100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma120" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm120" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl120" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Liver Disease:</span><br>
											<input name="liver_disease_12200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm121" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl121" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Kidney Disease:</span><br>
											<input name="kidney_disease_12300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm122" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl122" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Hyperthyroidism:</b></span><br>
											<input name="hyperthyroidism_12400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma123" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm123" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl123" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Thyroid Disease:</span><br>
											<input name="thyroid_disease_12500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm124" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl124" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Hypothyroidism:</span><br>
											<input name="hypothyroidism_12600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm125" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl125" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Lupus Erythematosus:</b></span><br>
											<input name="lupus_erythematosus_12700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma126" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm126" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl126" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Scleroderma:</span><br>
											<input name="scleroderma_12800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm127" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl127" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Epistaxis (Nosebleed):</span><br>
											<input name="epistaxis__nosebleed__12900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm128" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl128" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Chicken Pox:</b></span><br>
											<input name="chicken_pox_13000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma129" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm129" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl129" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Bacterial/Fungal Infection:</span><br>
											<input name="bacterial_fungal_infection_13100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm130" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl130" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Hepatitis:</span><br>
											<input name="hepatitis_13200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm131" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl131" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Glaucoma:</b></span><br>
											<input name="glaucoma_13300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma132" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm132" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl132" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Loss of Appetite:</span><br>
											<input name="loss_of_appetite_13400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm133" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl133" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Rapid Weight Gain:</span><br>
											<input name="rapid_weight_gain_13500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm134" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl134" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Rapid Weight Loss:</b></span><br>
											<input name="rapid_weight_loss_13600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma135" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm135" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl135" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Digestive problem:</span><br>
											<input name="digestive_problem_13700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm136" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl136" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Acid Indigestion:</span><br>
											<input name="acid_indigestion_13800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm137" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl137" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Stomach Ulcers:</b></span><br>
											<input name="stomach_ulcers_13900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma138" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm138" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl138" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Overweight problem:</span><br>
											<input name="overweight_problem_14000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm139" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl139" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Pancreatitis:</span><br>
											<input name="pancreatitis_14100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm140" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl140" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Pancreatic Insufficiency:</b></span><br>
											<input name="pancreatic_insufficiency_14200" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma141" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm141" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl141" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Leg Cramps:</span><br>
											<input name="leg_cramps_14300" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm142" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl142" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Swollen Ankles:</span><br>
											<input name="swollen_ankles_14400" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm143" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl143" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Varicose Veins:</b></span><br>
											<input name="varicose_veins_14500" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma144" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm144" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl144" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Joint Pain:</span><br>
											<input name="joint_pain_14600" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm145" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl145" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Back Pain:</span><br>
											<input name="back_pain_14700" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm146" style='white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl146" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Arthritis:</b></span><br>
											<input name="arthritis_14800" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="8" id="tditma147" style='font-size:0px;white-space:nowrap;text-align:left;'>
										<div id="dvitm147" style='width:275px;display:inline-block;text-align:left;white-space:pre-wrap;vertical-align:top;padding:2px 5px 2px 5px;'>
											<span id="lbl147" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px; background-color:transparent;color: #0000CC;'>Leg Ulcers:</span><br>
											<input name="leg_ulcers_14900" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm148" style='width:275px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl148" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'>Arms/Legs tingling sensation:</span><br>
											<input name="arms_legs_tingling_sensation_15000" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
										<div id="dvitm149" style='width:211px;white-space:pre-wrap;display:inline-block;vertical-align:top;text-align:left;padding:2px 5px 2px 5px;'>
											<span id="lbl149" style='vertical-align:top;position:relative;font-family: Bookman Old Style; font-weight: bold; text-decoration:none; font-style:normal; font-size: 13px;background-color:transparent;color:#0000CC;'><b>Hands/Legs falling asleep:</b></span><br>
											<input name="hands_legs_falling_asleep_15100" style='max-width:100%;font-family:Verdana; font-weight:normal; text-decoration:none; font-style:normal; font-size:13px;color:#000000;background-color:#ffffff;border:1px solid #000000;' type="checkbox" value="Y"><br>
											<span style='font-family: Arial; font-weight: normal; text-decoration:none; font-style:normal; font-size: 13px; color: #000000'></span>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan='8' style='text-align:center;height:75px;'><span id="resetBTN" onclick='resetFormFields()' style='position:relative;color:#003399;background-color:#FFFFFF;font-family:Bookman Old Style; font-weight:bold; font-size:16px;padding:5px;border-radius:10px; border:4px solid #336699; text-decoration:none; font-style:italic;'>Reset</span>&nbsp; <input id="submitBTN" style='-webkit-appearance:none;position:relative;color:#003399;background-color:#FFFFFF;font-family:Bookman Old Style; font-weight:bold; font-size:16px;padding:5px;border-radius:10px; border:4px solid #336699; text-decoration:none; font-style:italic;' type='submit' value='Submit'> </td>
								</tr>
								<tr>
									<td align='center' colspan='8'>
										<a href='https://www.docfullycom/' target='_blank'></a>
									</td>
								</tr><!-- end of article body -->
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>