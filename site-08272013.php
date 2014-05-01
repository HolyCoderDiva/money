<?php

//exit('<html><head><title>Website Offline</title></head><body><h1>503 Service Unavailable</h1><hr>This web site is currently under development.</body></html>'); 

if (!empty($_GET['data']))
{
   $_SESSION["ip_address"]="test";
   $_SESSION["first_name"]="Joe";
   $_SESSION["last_name"]="Shmoe";
   $_SESSION["gender"]="M";
   $_SESSION["dob"]="08/17/1965";
   $_SESSION["is_citizen"]="1";
   $_SESSION["is_military"]="zero!";
   $_SESSION["ssn"]="123-45-6789";
   $_SESSION["drivers_lic"]="S222-33-444-555-0";
   $_SESSION["dlstate"]="FL";
   $_SESSION["email"]="me@metml.com";
   $_SESSION["primary_phone"]="7277762530";
   $_SESSION["primary_phone2"]="7275311383";
   $_SESSION["secondary_phone"]="7275311383";
   $_SESSION["cell_phone"]="7274887778";
   $_SESSION["cell_phone2"]="7275311383";
   $_SESSION["best_time_to_call"]="E";
   $_SESSION["contact_time"]="E";
   $_SESSION["address"]="123 Sesame St";
   $_SESSION["address_2"]="";
   $_SESSION["city"]="Largo";
   $_SESSION["state"]="FL";
   $_SESSION["zip"]="33333";
   $_SESSION["country"]="US";
   $_SESSION["timeatresidence"]="";
   $_SESSION["address_months"]="6";
   $_SESSION["address_years"]="10";
   $_SESSION["rent_own"]="R";
   $_SESSION["employer"]="United Nations";
   $_SESSION["emp_years"]="10";
   $_SESSION["emp_address"]="42nd St";
   $_SESSION["emp_address_2"]="1st Ave";
   $_SESSION["emp_city"]="New York";
   $_SESSION["emp_state"]="NY";
   $_SESSION["emp_zip"]="10017";
   $_SESSION["emp_phone"]="2129638687";
   $_SESSION["emp_phone_ext"]="";
   $_SESSION["emp_fax"]="";
   $_SESSION["super_phone"]="";
   $_SESSION["super_name"]="";
   $_SESSION["super_phone_ext"]="";
   $_SESSION["hire_date"]="";
   $_SESSION["emp_type"]="F";
   $_SESSION["job_title"]="Project Manager";
   $_SESSION["workshift"]="O";
   $_SESSION["gross_income"]="";
   $_SESSION["net_income"]="99999";
   $_SESSION["income_type"]="E";
   $_SESSION["employed_months"]="6";
   $_SESSION["pay_period"]="W";
   $_SESSION["pay_type"]="D";
   $_SESSION["last_pay_date"]="06/30/2013";
   $_SESSION["next_pay_date"]="07/15/2013";
   $_SESSION["second_pay_date"]="07/30/2013";
   $_SESSION["requested_amount"]="1000";
   $_SESSION["roundedrequestamount"]="1000";
   $_SESSION["requestedduedate"]="08/15/2013";
   $_SESSION["bank_name"]="Fred's Bank";
   $_SESSION["bank_phone"]="2125551212";
   $_SESSION["account_holder"]="Joe Schmoe";
   $_SESSION["routing_number"]="000000204";
   $_SESSION["acct_number"]="99999999";
   $_SESSION["account_type"]="C";
   $_SESSION["bank_months"]="6";
   $_SESSION["bank_years"]="10";
   $_SESSION["timeatbank"]="?";
   $_SESSION["active_checking"]="?";
   $_SESSION["outstand_amt"]="0";
   $_SESSION["ref_fname"]="Walter";
   $_SESSION["ref_lname"]="Schmoe";
   $_SESSION["ref_relation"]="P";
   $_SESSION["ref_phone"]="7276428768";
   $_SESSION["other_offers"]="";
   $_SESSION["store_key"]="";
   $_SESSION["ref_url"]="http://themoneycompany.com";
   $_SESSION["tier_key"]="";
   $_SESSION["aff_id"]="";
   $_SESSION["sub_id"]="";
   $_SESSION["test"]="n";
   $_SESSION["effectivedate"]="8/12/2013";
   $_SESSION["ach"]="?";
   $_SESSION["optin"]="?";
}

$ID='2167';               // CHANGE THIS TO
$Key='14Cs8kKz50';        // LEAD FLASH DATA

$post_url="http://rckstrtrk.com/d.ashx";
$test_url="http://rckstrtrk.com/d.ashx?ckm_test=1";

$proxy_url="#";
$ID='2167';
$Key='14Cs8kKz50';
$script_url="http://ivr.metml.com/script.htm";

$agent_name="";
$agent_id="";

if(isset($_GET['id'])) $ID=$_GET['id'];
if(isset($_GET['key'])) $Key=$_GET['key'];

$_SESSION['ckm_key']=$Key;
$_SESSION['ckm_campaign_id']=$ID;

if(isset($_GET['script'])) $script_url=$_GET['script'];
if(isset($_GET['agent_name'])) $agent_name=$_GET['agent_name'];
if(isset($_GET['agent_id'])) $agent_id=$_GET['agent_id'];

$post_url="http://rckstrtrk.com/d.ashx";
$test_url="http://rckstrtrk.com/d.ashx?ckm_test=1";
$proxy_url="#";
$output='';

?>

<!DOCTYPE html>

<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->

<html><!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>$1,000 Cash THE NEXT DAY | Instant Approval | The Money Company</title>

	<!-- Basic -->
	<meta name="author" content="Versatility Werks">

	<!--
	Design by Grafx - http://www.grafxtampa.com
	HTML/CSS Conversion, jQuery, and PHP by Versatility Werks https://verswerks.com
	-->

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" type='image/jpg' href="favicon.jpg">

	<!-- Google fonts -->
	<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>

	<!-- CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="DatePicker.css">
		
	<!-- jQuery -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="custom.min.js"></script>
	<script type="text/javascript" src="graph.js"></script>
	<script type="text/javascript" src="DatePicker.js"></script>
	
</head>

<body>

<!-- green -->
<div id='background'></div>

<!-- men, logos (logos will be taken out of the image when they are made live) -->
<div id='foreground'></div>

<!-- content wrapper -->
<div id='body'>
<!-- content center -->
<div id='bodyCenter'>

<!--[if lt IE 7]> 
<div style=' clear: both; height: 59px; padding:0 0 0 0px; position: relative;'> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="100%" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> 
<![endif]-->

<div style="position:fixed; top:30px; right:5px;background-color:#afa;">
<a href='#' class='showModal' data-which='Timeout'>[simulate visitor timeout]</a>

<?php if (!empty($_GET['data'])) { ?>

<a href='/site.php'>[use empty form]</a>
<a href='#' onclick="return handle(99);">[jump to finish]</a>

<? } else { ?>

<a href='/site.php?data=true'>[use test data]</a>

<? } ?>

<br/><font style='color: #f33;'>Validation is OFF</font>
</div>

<!-- logo -->
<div id='logo' class='centerText'>
<img src='logo.png' alt='The Money Company Logo'>
</div>

<!-- slogan -->
<div id='slogan' class='centerText'>
<img src='slogan.png' alt='$1,000 cash the next day!*'>
</div>

<!-- white form box -->
<div id='formArea'>

<!-- instant approval triangle -->
<div id='instantApproval'><img src='instant-approval.png' alt='Instant Approval'></div>

<!-- green loan amount stripe -->
<div id='greenstripe' class='greenStripe'>How much would you like to borrow? <select name='app_borrow' id='app_borrow' style='width: 100px !important;'>
<option value=''>Select</option>
<option value='300'>$300</option>
<option value='400'>$400</option>
<option value='500'>$500</option>
<option value='600'>$600</option>
<option value='700'>$700</option>
<option value='800'>$800</option>
<option value='900'>$900</option>
<option value='1000'>$1,000</option>
</select></div>

<!-- /////////////////////// OUTPUT /////////////////// -->

<div class='output' id='output' style="display:none;" ></div>

<div id='waitspace' style="display:none;z-index:5;text-align:center;"></div>

<!-- ////////////////// FORM SPACE //////////////////// -->

<div id='formspace' style="padding: 10px";>

<form name='bigform' id='bigform' action='#' method='post' onsubmit="return post_form();">

<input type='hidden' name='ckm_campaign_id' id='ckm_campaign_id' value='2167'>
<input type='hidden' name='ckm_key' id='ckm_key' value='14Cs8kKz50'>
<input type='hidden' name='ip_address' id='ip_address' value=''>
<input type='hidden' name='requested_amount' id='requested_amount' value=''>
<input type='hidden' name='ref_url' id='ref_url' value=''>

<!-- ///////////////////// FORM PART 1 /////////////////////////// -->

<div name='formpart1' id='formpart1' style='display:inline;'>

<div id='errpart1'> &nbsp; </div>

<table width='100%'>
<tr>
<td align='left'><span style="color: red;">*</span>First Name</td>
<td align='left'><input type='text' placeholder='' name='first_name' id='first_name' value='' size='25' maxlength='255'></td>
</tr>
<tr>
<td align='left'>Middle Name</td>
<td align='left'><input type='text' placeholder='' name='mid_name' id='mid_name' value='' size='25' maxlength='255'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Last Name</td>
<td align='left'><input type='text' placeholder='' name='last_name' id='last_name' value='' size='25' maxlength='255'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Email Address</td>
<td align='left'><input type='text' placeholder='' name='email' id='email' value='' size='25' maxlength='255'></td>
</tr>
</table>

<span style="color: red;">*</span> = required fields<br>

<!-- agreement -->

<p align="left"> &nbsp; <input type='checkbox' name='agree_terms' id='agree_terms'> By submitting your information, you agree to the terms of our 
<a href='#' class='showModal' data-which='Legal'>Privacy Policy</a>, <a href='#' class='showModal' data-which='Legal'>Terms of Web Site Use</a>, and special offers.</p>

<!-- get started button -->
<p align="center"><a href='#' onclick="return handle(1,1)";><img src='get-started.png' alt='Get Started' style='margin: 0px; border: 0px; padding: 0px;'></a><br>

<!-- learn more button -->
<a href='#' class='showModal btn-green' data-which='HowItWorks' style='margin-bottom: 20px;'>Learn More</a></p>

</div>

<!--formpart1-->

<!-- ////////////////// FORM PART 2 /////////////////// -->

<div name='formpart2' id='formpart2' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p2namespace' align='center'><span class="title">Personal Info</span></div>
</div>

<div id='errpart2'> &nbsp; </div>

<table width='100%'>

<tr>
<td align='left'><span style="color: red;">*</span>Birth Date <input type='text' placeholder='01/01/1900' name='dob' id='dob' value='' class='date' size='10' maxlength='25'></td>
<td align='left'><span style="color: red;">*</span>US Citizen? <select name='is_citizen' id='is_citizen'>
<option value=''>Select</option>
<option value='1'>Yes</option>
<option value='zero!'>No</option>
</select></td>
</tr>

<tr>
<td> &nbsp; </td><td> &nbsp; </td>
</tr>

<tr>
<td align='left'><span style="color: red;">*</span>Active/Reserve Military?</td><td align='left'><select name='is_military' id='is_military'>
<option value='zero!'>No</option>
<option value='1'>Yes</option>
</select></td>
</tr>

<tr>
<td align='left'><span style="color: red;">*</span>Social Security Number</td><td align='left'><input type='text' placeholder='000-00-0000' name='ssn' id='ssn' value='' class="ssn" size='20' maxlength='25'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Drivers License Number</td><td align='left'><input type='text' placeholder='' name='drivers_lic' id='drivers_lic' value='' size='20' maxlength='25'></td>
</tr>
<tr>
<td align='left'>Driver License State</td><td align='left'><select name='dlstate' id='dlstate'>
<option value="">Select</option>
<option value="AL" >Alabama</option>
<option value="AK" >Alaska</option>
<option value="AZ" >Arizona</option>
<option value="AR" >Arkansas</option>
<option value="CA" >California</option>
<option value="CO" >Colorado</option>
<option value="CT" >Connecticut</option>
<option value="DE" >Delaware</option>
<option value="DC" >District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA" >Georgia</option>
<option value="HI" >Hawaii</option>
<option value="ID" >Idaho</option>
<option value="IL" >Illinois</option>
<option value="IN" >Indiana</option>
<option value="IA" >Iowa</option>
<option value="KS" >Kansas</option>
<option value="KY" >Kentucky</option>
<option value="LA" >Louisiana</option>
<option value="ME" >Maine</option>
<option value="MD" >Maryland</option>
<option value="MA" >Massachusetts</option>
<option value="MI" >Michigan</option>
<option value="MN" >Minnesota</option>
<option value="MS" >Mississippi</option>
<option value="MO" >Missouri</option>
<option value="MT" >Montana</option>
<option value="NE" >Nebraska</option>
<option value="NV" >Nevada</option>
<option value="NH" >New Hampshire</option>
<option value="NJ" >New Jersey</option>
<option value="NM" >New Mexico</option>
<option value="NY" >New York</option>
<option value="NC" >North Carolina</option>
<option value="ND" >North Dakota</option>
<option value="OH" >Ohio</option>
<option value="OK" >Oklahoma</option>
<option value="OR" >Oregon</option>
<option value="PA" >Pennsylvania</option>
<option value="RI" >Rhode Island</option>
<option value="SC" >South Carolina</option>
<option value="SD" >South Dakota</option>
<option value="TN" >Tennessee</option>
<option value="TX" >Texas</option>
<option value="UT" >Utah</option>
<option value="VT" >Vermont</option>
<option value="VA" >Virginia</option>
<option value="WA" >Washington</option>
<option value="WV" >West Virginia</option>
<option value="WI" >Wisconsin</option>
<option value="WY" >Wyoming</option>

</select></td>
</tr>
</table>

<br><br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(0,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center' valign='top'> &nbsp; &nbsp; 2 of 8 &nbsp; &nbsp;</td>
<td align='right' valign='top'><a href="#" onclick="return handle(2,1);" class="btn-green right" style="margin-bottom: 20px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart2-->

<!-- /////////////////////// FORM PART 3 ////////////////////////// -->

<div name='formpart3' id='formpart3' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p3namespace' align='center'><span class="title">Contact Info</span></div>
</div>

<div id='errpart3'> &nbsp; </div>

<table width='100%'>
<tr>
<td align='left'><span style="color: red;">*</span>Home Phone</td><td align='left'><input type='text' placeholder='(000) 000-0000' name='primary_phone' id='primary_phone' value='' class="phone"></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Cell Phone</td><td align='left'><input type='text' placeholder='(000) 000-0000' name='cell_phone' id='cell_phone' value='' class="phone"></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Other Phone</td><td align='left'><input type='text' placeholder='(000) 000-0000' name='other_phone' id='other_phone' value='' class="phone"></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Best Time to Call</td><td align='left'><select name='best_time_to_call' id='best_time_to_call'>
<option value=''>Select</option>
<option value='Afternoon'>Afternoon</option>
<option value='Morning'>Morning</option>
<option value='Evening'>Evening</option>
</select></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Best Number to Call</td><td align='left'><select name='best_phone' id='best_phone'>
<option value=''>Select</option>
<option value='Home'>Home</option>
<option value='Cell'>Cell</option>
<option value='Other'>Other</option>
</select></td>
</tr>

</table>

<br><br><br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(1,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center' valign='top'>&nbsp; &nbsp; 3 of 8 &nbsp; &nbsp;</td>
<td align='right' valign='top'><a href="#" onclick="return handle(3,1);" class="btn-green right" style="margin-bottom: 20px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart3-->

<!-- ////////////////////// FORM PART 4 ////////////////////// -->

<div name='formpart4' id='formpart4' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p4namespace' align='center'><span class="title">Home Info</span></div>
</div>

<div id='errpart4'> &nbsp; </div>

<table width='100%'>
<tr>
<td align='left'>Street Address</td><td align='left'><input type='text' placeholder='' name='address' id='address' value='' size='15' maxlength='255'><input type='text' placeholder='Apt' name='address_2' id='address_2' value='' size='3' maxlength='15'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>City</td><td align='left'><input type='text' placeholder='' name='addr_city' id='addr_city' value='' size='15' maxlength='255'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>State <select name='addr_state' id='addr_state'>
<option value="">Select</option>
<option value="AL" >Alabama</option>
<option value="AK" >Alaska</option>
<option value="AZ" >Arizona</option>
<option value="AR" >Arkansas</option>
<option value="CA" >California</option>
<option value="CO" >Colorado</option>
<option value="CT" >Connecticut</option>
<option value="DE" >Delaware</option>
<option value="DC" >District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA" >Georgia</option>
<option value="HI" >Hawaii</option>
<option value="ID" >Idaho</option>
<option value="IL" >Illinois</option>
<option value="IN" >Indiana</option>
<option value="IA" >Iowa</option>
<option value="KS" >Kansas</option>
<option value="KY" >Kentucky</option>
<option value="LA" >Louisiana</option>
<option value="ME" >Maine</option>
<option value="MD" >Maryland</option>
<option value="MA" >Massachusetts</option>
<option value="MI" >Michigan</option>
<option value="MN" >Minnesota</option>
<option value="MS" >Mississippi</option>
<option value="MO" >Missouri</option>
<option value="MT" >Montana</option>
<option value="NE" >Nebraska</option>
<option value="NV" >Nevada</option>
<option value="NH" >New Hampshire</option>
<option value="NJ" >New Jersey</option>
<option value="NM" >New Mexico</option>
<option value="NY" >New York</option>
<option value="NC" >North Carolina</option>
<option value="ND" >North Dakota</option>
<option value="OH" >Ohio</option>
<option value="OK" >Oklahoma</option>
<option value="OR" >Oregon</option>
<option value="PA" >Pennsylvania</option>
<option value="RI" >Rhode Island</option>
<option value="SC" >South Carolina</option>
<option value="SD" >South Dakota</option>
<option value="TN" >Tennessee</option>
<option value="TX" >Texas</option>
<option value="UT" >Utah</option>
<option value="VT" >Vermont</option>
<option value="VA" >Virginia</option>
<option value="WA" >Washington</option>
<option value="WV" >West Virginia</option>
<option value="WI" >Wisconsin</option>
<option value="WY" >Wyoming</option>

</select></td>

<td align='left'><span style="color: red;">*</span>Zip <input type='text' placeholder='' name='zip' id='zip' value='' size='5' maxlength='15'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Time at Residence</td><td align='left'><select name='address_months' id='address_months'>
<option value=''>Select</option>
<option value='Less than 6 Months'>Less than 6 Months</option>
<option value='Less than 1 Year'>Less than 1 Year</option>
<option value='1-2 Years'>1-2 Years</option>
<option value='Over 2 Years'>Over 2 Years</option>
</select></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Do you rent or own?</td><td align='left'><select name='rent_own' id='rent_own'>
<option value=''>Select</option>
<option value='Rent Home'>Rent Home</option>
<option value='Own Home'>Own Home</option>
</select></td>
</tr>
</table>

<br><br><br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(2,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center' valign='top'> &nbsp; &nbsp; 4 of 8 &nbsp; &nbsp; </td>
<td align='right' valign='top'><a href="#" onclick="return handle(4,1);" class="btn-green right" style="margin-bottom: 20px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart4-->

<!-- /////////////////// FORM PART 5 ///////////////// -->

<div name='formpart5' id='formpart5' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p5namespace' align='center'><span class="title">Employment</span></div>
</div>

<div id='errpart5'> &nbsp; </div>

<table width='100%'>
<tr>
<td align='left'><span style="color: red;">*</span>Your Employer</td><td align='left'><input type='text' placeholder='' name='employer' id='employer' value='' size='20' maxlength='255'></td>
</tr>
<tr>
<td align='left'>Employer Address</td><td align='left'><input type='text' placeholder='' name='emp_address' id='emp_address' value='' size='20' maxlength='255'></td>
</tr>
<tr>
<td align='left'>Employer Zip</td><td align='left'><input type='text' placeholder='' name='emp_zip' id='emp_zip' value='' class="zip" size='10' maxlength='25'></td>
</tr>
<tr>
<td align='left'>Years Employed</td><td align='left'><input type='text' placeholder='' name='emp_years' id='emp_years' value='' size='10' maxlength='25'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Employer Phone</td><td align='left'><input type='text' placeholder='(000) 000-0000' name='emp_phone' id='emp_phone' value='' class="phone" size='15' maxlength='25'> <input type='text' placeholder='Ext' name='emp_phone_ext' id='emp_phone_ext' value='' size='5' maxlength='15'></td>
</tr>
<tr>
<td align='left'>Supervisor Name</td><td align='left'><input type='text' placeholder='' name='super_name' id='super_name' value='' size='20' maxlength='255'></td>
</tr>
<tr>
<td align='left'>Employment Type</td><td align='left'><select name='emp_type' id='emp_type'>
<option value=''>Select</option>
<option value='Part Time'>Part Time</option>
<option value='Full Time'>Full Time</option>
</select></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Job Title</td><td align='left'><input type='text' placeholder='Job Title' name='job_title' id='job_title' value='' size='20' maxlength='255'></td>
</tr>
</table>

<br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(3,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center' valign='top'> &nbsp; &nbsp; 5 of 8 &nbsp; &nbsp; </td>
<td align='right' valign='top'><a href="#" onclick="return handle(5,1);" class="btn-green right" style="margin-bottom: 20px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart5-->

<!-- //////////////////////// FORM PART 6 ///////////////////////// -->

<div name='formpart6' id='formpart6' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p6namespace' align='center'><span class="title">Your Income</span></div>
</div>

<div id='errpart6'> &nbsp; </div>

<table width="100%">
<tr>
<td align='left'><span style="color: red;">*</span>Net Income Monthly</td><td align='left'><input type='text' placeholder='000' name='net_income' id='net_income' value='' size='10' maxlength='25'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Income Type</td><td align='left'><select name='income_type' id='income_type'>
<option value=''>Select</option>
<option value='Employment'>Employment</option>
<option value='Disability'>Disability</option>
<option value='S.S.I.'>S.S.I.</option>
<option value='Unemployment'>Unemployment</option>
<option value='Other'>Other</option>
</select></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Months Employed</td><td align='left'><input type='text' placeholder='0' name='employed_months' id='employed_months' value='' size='10' maxlength='25'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Pay Period</td><td align='left'><select name='pay_period' id='pay_period'>
<option value=''>Select</option>
<option value='Weekly'>Weekly</option>
<option value='Bi-Weekly'>Bi-Weekly</option>
<option value='Semi-Monthly'>Semi-Monthly</option>
<option value='Monthly'>Monthly</option>
</select></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Pay Type</td><td align='left'><select name='pay_type' id='pay_type'>
<option value=''>Select</option>
<option value='Direct Deposit'>Direct Deposit</option>
<option value='Payroll/Paycheck'>Payroll/Paycheck</option>
</select></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Last Paydate</td>
<td align='left'><input type='text' placeholder='01/01/1900' class='date' name='last_pay_date' id='last_pay_date' value='' size='10' maxlength='25'>
<a href="javascript:void(0);" onclick="displayDatePicker('last_pay_date', this);"><img border="0" src="calendar.png" alt="Calendar" align="middle" width="15" height="15"></a>
</td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Next Paydate</td>
<td align='left'><input type='text' placeholder='01/01/1900' class='date' name='next_pay_date' id='next_pay_date' value='' size='10' maxlength='25'>
<a href="javascript:void(0);" onclick="displayDatePicker('next_pay_date', this);"><img border="0" src="calendar.png" alt="Calendar" align="middle" width="15" height="15"></a></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Second Paydate</td>
<td align='left'><input type='text' placeholder='01/01/1900' class='date' name='second_pay_date' id='second_pay_date' value='' size='10' maxlength='25'>
<a href="javascript:void(0);" onclick="displayDatePicker('second_pay_date', this);"><img border="0" src="calendar.png" alt="Calendar" align="middle" width="15" height="15"></a></td>
</tr>
</table>

<br><br><br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(4,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center' valign='top'>&nbsp; &nbsp; 6 of 8 &nbsp; &nbsp; </td>
<td align='right' valign='top'><a href="#" onclick="return handle(6,1);" class="btn-green right" style="margin-bottom: 20px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart6-->

<!-- //////////////////////// FORM PART 7 //////////////////////// -->

<div name='formpart7' id='formpart7' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p7namespace' align='center'><span class="title">Banking Info</span></div>
</div>

<div id='errpart7'> &nbsp; </div>

<table width='100%'>
<tr>
<td align='left'><span style="color: red;">*</span>Your Bank Name</td><td align='left'><input type='text' placeholder='' name='bank_name' id='bank_name' value='' size='25' maxlength='255'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Your Bank Phone</td><td align='left'><input type='text' placeholder='(000) 000-0000' name='bank_phone' id='bank_phone' value='' class="phone" size='25' maxlength='30'></td>
</tr>
<tr>
<td align='left'>Account Holder Name</td><td align='left'><input type='text' placeholder='Your Name' name='account_holder' id='account_holder' value='' size='25' maxlength='255'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Routing Number</td><td align='left'><input type='text' placeholder='' name='routing_number' id='routing_number' value='' class="rtn" size='25' maxlength='255'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Account Number</td><td align='left'><input type='text' placeholder='' name='acct_number' id='acct_number' value='' size='25' maxlength='255'></td>
</tr>
<tr>
<td align='left'><span style="color: red;">*</span>Account Type</td><td align='left'><select name='account_type' id='account_type'>
<option value=''>Select</option>
<option value='Checking Account'>Checking Account</option>
<option value='Savings Account'>Savings Account</option>
</select></td>
</tr>
<tr>
<td colspan='2' align='center'> How long have you had this account? </td>
</tr>
<tr>
<td align='left'><label for='bank_years'>Years</label> <input type='number' placeholder='' name='bank_years' id='bank_years' value='' size='5' maxlength='5'></td>
<td align='left'> &nbsp; &nbsp; <label for='bank_months'>Months</label> <input type='number' placeholder='' name='bank_months' id='bank_months' value='' size='5' maxlength='5'></td>
</tr>
<tr>
</table>

<br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(5,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center' valign='top'> &nbsp; &nbsp; 7 of 8 &nbsp; &nbsp; </td>
<td align='right' valign='top'><a href="#" onclick="return handle(7,1);" class="btn-green right" style="margin-bottom: 20px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart7-->

<!-- ////////////////////////// FORM PART 8 ///////////////////////// -->

<div name='formpart8' id='formpart8' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p8namespace' align='center'><span class="title">Personal Reference</span></div>
</div>

<div id='errpart8'> &nbsp; </div>

<table width='100%'>
<tr>
<td align='left'>Reference First Name</td><td align='left'><input type='text' placeholder='First Name' name='ref_fname' id='ref_fname' value='' size='20' maxlegnth='255'></td>
</tr>
<tr>
<td align='left'>Reference Last Name</td><td align='left'><input type='text' placeholder='Last Name' name='ref_lname' id='ref_lname' value='' size='20' maxlength='255'></td>
</tr>
<tr>
<td align='left'>Reference Relationship</td><td align='left'><select name='ref_relation' id='ref_relation'>
<option value=''>Select</option>
<option value='Spouse'>Spouse</option>
<option value='Sibling'>Sibling</option>
<option value='Parent'>Parent</option>
<option value='Co-Worker'>Co-Worker</option>
<option value='Friend'>Friend</option>
<option value='Boyfriend'>Boyfriend</option>
<option value='Girlfriend'>Girlfriend</option>
<option value='Brother'>Brother</option>
<option value='Sister'>Sister</option>
<option value='Other'>Other</option>
</select></td>
</tr>
<tr>
<td align='left'>Reference Phone</td><td align='left'><input type='text' placeholder='(000) 000-0000' name='ref_phone' id='ref_phone' value='' class="phone" size='15' maxlength='25'></td>
</tr>
</table>

<br><br><br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(6,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center' valign='top'> &nbsp; &nbsp; 8 of 8 &nbsp; &nbsp; </td>
<td align='right' valign='top'><a href="#" onclick="return handle(8,1);" class="btn-green right" style="margin-bottom: 20px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart8-->

<!-- ///////////////////////////// FORM PART 9 ////////////////////////// -->

<div name='formpart9' id='formpart9' style='display:none;'>

<div class='formRow mobileExtraPad'>
<div id='p9namespace'></div>
</div>

<h3>You are about to...</h3>

Other Offers <select name='other_offers' id='other_offers'>
<option value='1'>Yes</option>
<option value='zero!'>No</option>
</select>

<br><br><br>

Test Lead? <select name='test' id='test'>
<option value='1'>Yes</option>
<option value='zero!'>No</option>
</select>

<br><br><br>

Recap of data from user here

<br><br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left'><a href="#" onclick="return handle(7,0);" class="btn-green left" style="margin-bottom: 20px;">&#171; Previous</a></td>
<td align='center'> &nbsp; &nbsp; </td>
<td align='right'><input type='submit' name='submit' value='SUBMIT' class='btn-green' style='margin-bitton: 20px;'></td>
</tr>
</table>

</div>

<!--formpart9-->

<!-- /////////////////////// FORM SPACE END ////////////////////// -->

<!-- end formspace--></form></div>
<!-- end formArea --></div>
<!-- end white form box (not a div) -->

<!-- phone number -->
<div id='phoneNumber'>
<b>Questions?</b> <span class='grayText'>Call us 24/7 at:</span> <span style='font-size: 24pt;' class='greenText'>800-888-8888</span>
</div>

<!-- end body center -->
</div>

<!-- footer stripe across full width -->
<div id='footerStripe'>

<!-- footer centered -->

<div id='footer'>© 2013 The Money Company &bull; Design: <a href='http://www.grafxtampa.com' target='_blank'>Grafx</a> &bull; Development: <a href='https://verswerks.com' target='_blank'>Fort Myers Web Design</a><br><br>
 *THE OPERATOR OF THIS WEB SITE IS NOT A LENDER, does not broker loans to lenders and does not make short term cash loans or credit decisions. This Web Site does not constitute an offer or solicitation to lend. This site will submit the information you provide to a lender. Providing your information on this Web Site does not guarantee that you will be approved for a short term cash loan. The operator of this Web Site is not an agent, representative or broker of any lender and does not endorse or charge you for any service or product. Not all lenders can provide up to $1,000. Cash transfer times may vary between lenders and may depend on your individual financial institution. In some circumstances faxing may be required. This service is not available in all states, and the states serviced by this Web Site may change from time to time and without notice. For details, questions or concerns regarding your short term cash loan, please contact your lender directly. Short term cash loans are meant to provide you with short term financing to solve immediate cash needs and should not be considered a long term solution. Residents of some states may not be eligible for a short term cash loan based upon lender requirements.
<br><br>
**Credit checks, consumer credit reports and other personal data may be obtained by some lenders from Experian, Equifax, Trans Union or through alternative providers.
</div>

<!-- end footer stripe -->
</div>

<!-- end body wrapper -->
</div>

<!-- modal background -->
<div id='modalBack'></div>

<!-- modal -->
<div id='modal'>

<!-- close modal button -->
<div id='closeModalBtn'><a href='#' class='closeModal'><img src='close-btn.png' alt='Close this Popup'></a></div>

<!-- padding around content -->
<div class='pad'>

<!-- green stripe with modal title -->
<div class='greenStripe'>
<div class='modalTitle' id='titleHowItWorks'>How It Works</div>
<div class='modalTitle' id='titleFAQs'>Frequently Asked Questions</div>
<div class='modalTitle' id='titleCustomerService'>Customer Service</div>
<div class='modalTitle' id='titleCodeLenderConduct'>Code of Lender Conduct</div>
<div class='modalTitle' id='titleLegal'>Legal</div>
</div>

<!-- padding around inner content -->
<div class='pad'>

<!-- START INNER CONTENT --!>

<!-- ////////////////////////// MODEL OVERLAYS /////////////////////// -->

<div class='modalInner' id='HowItWorks'>
<b>We’ll Match You With A Cash Lender!</b>

<br><br>
The Money Company matches you to a cash lender to get you the loan you need. We are NOT a lender. Our service is absolutely free and all loan terms are between the borrower and the lender.
<br><br>
After filling out the The Money Company’s application, The Money Company will direct you to a lender’s website. Upon reaching the lender’s site, you will be able to read and agree to the terms and conditions of the loan. Next, the lender will then be in touch with you to confirm your personal information and finalize the loan. They may contact you in a number of ways, including a telephone call, email, or text message, etc**. Once these steps are complete, you will be on your way to having cash deposited into your account.
<br><br>

1. Fill out The Money Company online application<br>
2. We will match you with a lender<br>
3. Finalize your loan via lenders conditions<br>
4. Cash deposited into your bank account<br>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='FAQs'>
<b>Q: Is there an application fee?										   </b>
<br>
A: No. The Money Company never charges applicants a fee to apply for a loan.
<br><br>
<b>Q: Does submitting an online application obligate me to take out a loan?</b>
<br>
A: No. Submitting an application with The Money Company only means you wish for one of our lenders to approve you for a loan and contact you to discuss the loan options. You may ask any questions, and withdraw your loan request if you choose. If you would like to proceed, just confirm your information and agree to loan terms from one of our lenders.
<br><br>
<b>Q: Will bad credit disqualify me from getting a loan?				   </b>
<br>
A: No. Many of our lenders do not perform traditional credit checks.  As a result, many people with “less than perfect” credit take advantage of short-term loans and cash advances everyday.
<br><br>
<b>Q: How much can I receive?											   </b>
<br>
A: The Money Company works with lenders nationwide.  Each lender has different amounts they will lend you based upon the information you provided in your application. You may request up to $1000, although the lender will decide the loan amount.
<br><br>
<b>Q: I have questions about my existing loan, where do I go?			   </b>
<br>
A: The Money Company is not a lender and does not make short-term cash loans or credit decisions. Furthermore, the operator of this site is not a representative of any lender.  All questions, concerns and details regarding your short-term cash loan can be answered directly by your lender.  Lender information should be available in your approval e-mail you received when applying for the loan, your bank statement or by contacting your primary financial institution directly.
<br><br>
<b>Q: Is qualifying easy?												   </b>
<br>
A: Yes. Most times you’ll qualify if you:
<br>
• Currently have a job (or receive regular income)<br>
• Make at least $800 per month<br>
• Are 18 years of age or older and a U.S. resident<br>
• Have a checking account<br>
<br>
Other requirements may apply.  If you have filed bankruptcy, bounced checks, have charge-offs or other credit problems; you may still qualify to get a short-term loan.
<br><br>
<b>Q: Can I get an extension?</b>
<br>
A: Lenders will often provide extensions; however, this is a decision made solely by your lender.  The Money Company is not a lender and cannot make this decision. Please contact your lender for details.
<br><br>
<b>Q: Why I’m receiving communication from The Money Company?</b>
<br>
A: You will receive communication from The Money Company containing special offers and promotional information. If you would like to remove your name from our communications list, please contact a service representative at The Money Company (hyperlink email address).

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='CustomerService'>
Thank you for your interest in contacting The Money Company. Our goal is to provide you with the best customer service in the industry.
<br><br>
Many of your questions may be answered in the How it Works or Frequently Asked Questions sections of our web site. Please also visit the "About Us" and "Resources" menus for fast answers to your important questions.
<br><br>
You can contact us at:
<br><br>
<b>xxxxxxxxxxxx</b>
<br><br>
You may also contact us by email at:
<br><br>
<b>xxxxxxxxxxxxx</b>
<br><br>
Or call us by phone using the number below:
<br><br>
<b>xxxxxxxxxxxxxx</b>
<br><br>
We review each customer inquiry received through our customer support channels and will do our best to respond to you in a timely manner.

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='CodeLenderConduct'>
<b>The Money Company Requires Lenders To Abide By The Following Guidelines:</b>
<br><br>
Lenders participating in The Money Company Network of Lenders and consumer support services are required to adhere to the following Lender Guidelines:
<br><br>
• Lenders shall not use your information to sell or market other products or services unless you give them permission to do so.
<br><br>
• Unless you give them permission and/or become delinquent in your loan repayments, Lenders shall not resell your information to any third-party, or otherwise use your information other than for the sole purpose of fulfilling the loan and/or communicating with you about your loan.
<br><br>
• Lenders shall provide a customer service phone number and shall be responsive and helpful in addressing your concerns. The lender shall attend to your questions, issues, and complaints in a reasonable and professional manner, within 3 business days of request.
<br><br>
• Lenders shall clearly and conspicuously present you with all relevant information about the terms and conditions of the loan before obtaining your consent, including, but not limited to:
<br><br>
- The amount of the loan<br>
- The term of the loan, including any renewal policies<br>
- Schedule of payments, including when funds will be withdrawn<br>
- Any fees or interest associated with  the loan<br>
- Consequences of late payment or non-payment
<br><br>
• Lenders shall not engage in harassing or abusive collections practices and agree to comply with any and all applicable federal and state collections practices laws and regulations.
<br><br>
• Lenders shall comply with the Online Lenders Alliance Best Practices.
<br><br>
The Money Company monitors lender practices for compliance with the above Guidelines. In the event that The Money Company determines that a lender is not acting in accordance with these Guidelines, that lender’s participation in the The Money Company Family of Lenders is subject to suspension and/or possible  termination.

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='Legal'>
<a href='#' class='legalBtn' data-which='privacyPolicy'>Privacy Policy</a> &bull;
<a href='#' class='legalBtn' data-which='termsOfWebsiteUse'>Terms of Website Use</a> &bull;
<a href='#' class='legalBtn' data-which='security'>Security</a><hr><br>

<div id='privacyPolicy' class='legalOption'>
<b>Privacy Policy</b>
<br><br>
<b>NOTICE: PRIVACY POLICY UPDATED, EFFECTIVE June 1, 2013</b>
<br><br>
<u>Your privacy is important to us:</u> To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used.
<br><br>
<u>Information We Collect:</u> This notice applies to all information collected or submitted on the themoneycompany.com website. Information collected includes: your name, street address, e-mail address, telephone number (home, work and mobile), date of birth, Social Security Number, financial account information, income information, employment information and other personal, financial, or demographic information.
<br><br>
<u>Use of Information:</u> We may also use your personal, demographic and profile data to improve our Website, for statistical analysis, for marketing. Information collected by us may be added to our databases and used for future use which includes: e-mails, telemarketing or direct mail.  If you choose to provide personal information, it will be shared with lenders, credit bureaus including lookup and reference, data enhancement, suppression and validation. Information collected by us may be added to our databases and used for future telemarketing, SMS text-messaging, e-mails, instant messaging, or postal mailings regarding site updates, new products and services, and/or loans placed online. By using this Website, you agree that you may be contacted in any manner even if your home and/or cell number is found on the national do-not-call or similar registry. We may also employ other companies to perform certain functions on our behalf such as analyzing data, and providing marketing analysis. These agents have protected/limited access to our users’ personal information.
<br><br>
By agreeing to this Privacy Policy or by using this Website, you authorize us to use your information to obtain other information about you from third-parties, such as your Social Security Number, where such information was incompletely or improperly filled out on our registration form. Such third-parties include, but are not limited to, consumer reporting agencies, consumer credit bureaus and other outside parties as permitted or required by applicable laws. Any and all information that we collect from you, and from such third-parties, may be used to determine your eligibility for a loan. or for other services, products or other offers. If you choose to provide information, such as your Social Security Number, we may use that information to determine your financial status. If you do not provide such information, we may also use other information that you provided for the purpose of verifying your eligibility for a loan or for any other programs, offer or services. Upon qualification, your ultimate loan-specific financial information will be stored and utilized by your applicable lender pursuant to the terms of that lender’s Privacy Policy.
<br><br>
You agree that by submitting your information at the Website, you agree to receive mobile marketing including, but not limited to, text-message based marketing (“SMS Messages”), from us. You further agree that based on your individual carrier and plan, you may incur charges associated with such SMS Messages and that you agree to be solely responsible for such charges. You represent that you are at least 18 years of age and the owner or authorized user of the wireless device on which messages will be received, and that you are authorized to approve the applicable charges. Should you hereafter choose to op-out of receiving SMS Messages from The Money Company, you may opt-out by texting “STOP” or “OPT-OUT” as specifically set forth in the communication. Notwithstanding that your mobile telephone number may be listed on state and/or federal do-not-call registries, we retain the right to contact you via SMS Messages. In addition, by registering and/or using the Website, you agree that such act constitutes an inquiry and/or application for purposes of the Amended Telemarketing Sales Rule (16 CFR §310 et seq.), as amended from time to time (the “Rule”).
<br><br>
Cookies: TheMoneyCompany.com may employ the use of cookies, web beacons or similar technologies to enhance and personalize your online experience and to enable TheMoneyCompany.com to recognize you as a previous visitor to the TheMoneyCompany.com Web Services.  A cookie is a small amount of data, which often includes an anonymous unique identifier that is sent to your browser from a website’s computer and stored on your computer’s hard drive.  You can adjust the settings on your browser to erase or block such cookies if you prefer.

</div>
<div id='termsOfWebsiteUse' class='legalOption'>
<b>Terms of Website Use</b>
<br><br>
</div>
<div id='security' class='legalOption'>
<b>Security</b>
<br><br>
</div>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='Timeout' style='text-align:center;'>
<h1>Inactivity Timeout</h1>
<p>You have been inactive for more than XX minutes.  For your protection all data will be cleared unless you wish to continue.</p>
<p>Do you wish to continue?</p>
<h2>[Yes] [No]</h2>
</div>

</div>

<!-- END INNER CONTENT -->

<!-- Space and horiztonal rule -->
<br><br>
<div class='centerText'><img src='hr.png' alt='horizontal rule'></div>

<!-- Modal menu items -->
<div class='centerText'>
<a href='#' class='showModal btn-green' data-which='HowItWorks'>How it works</a>
<a href='#' class='showModal btn-green' data-which='FAQs'>FAQ's</a>
<a href='#' class='showModal btn-green' data-which='CustomerService'>Customer Service</a>
<a href='#' class='showModal btn-green' data-which='CodeLenderConduct'>Code of Lender Conduct</a>
<a href='#' class='showModal btn-green' data-which='Legal'>Legal</a>
</div>
<!-- End inner padding -->
</div>
<!-- End modal padding -->
</div>

<!-- END MODAL -->

</div>
</body>

<script type="text/javascript" src="after.js"></script>

</html>
