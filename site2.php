<?php

$ID='847952';      // changed to LeadFlash vendor id, pass, url
$Key='437861371';

$post_url   = "https://www.502011tr021731axxxsb.com/api/leadpost.aspx";
$test_url   = "https://www.502011tr021731axxxsb.com/api/leadpost.aspx?test_app=1";

$proxy_url  = "#";
$script_url = "http://ivr.metml.com/script.htm";

$ip      = $_SERVER['REMOTE_ADDR'];      // client ip address
$browser = $_SERVER['HTTP_USER_AGENT'];  // client browser info

$agent_name = "";
$agent_id   = "";

if(isset($_GET['id']))  $ID  = $_GET['id'];
if(isset($_GET['key'])) $Key = $_GET['key'];

$_SESSION['vender_id']   = $ID;
$_SESSION['vendor_pass'] = $Key;

if(isset($_GET['script']))      $script_url = $_GET['script'];
if(isset($_GET['agent_name']))  $agent_name = $_GET['agent_name'];
if(isset($_GET['agent_id']))    $agent_id   = $_GET['agent_id'];

$output='';

?>

<!DOCTYPE html>

<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->

<html><!--<![endif]-->

<head>

<meta charset="utf-8">

<title>Get up to $1,000 Cash as soon as tomorrow* | Instant Approval | The Money Company</title>

<meta name="author" content="Versatility Werks">

<!--

Design by Grafx - http://www.grafxtampa.com
HTML/CSS Conversion, jQuery, and PHP by Versatility Werks https://verswerks.com

TRY THESE VARIOUS SMALLER DEVICE WIDTH OPTIONS:
<meta name="viewport" content="width=device-width, user-scalable=false;">
<meta name="viewport" content="width=500, initial-scale=1.0">

-->

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" type='image/jpg' href="favicon.jpg">

<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="DatePicker.css">
		
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="custom.min.js"></script>
<script type="text/javascript" src="handle_form.js"></script>
<script type="text/javascript" src="post_form.js"></script>
<script type="text/javascript" src="DatePicker.js"></script>

<script language="Javascript">

function DisplayTimeout()
{
   $('#modalBack').show();
   $('#modal').show();
   $('.modalTitle').hide();
   $('.modalInner').hide();
   $('.legalOption').hide();
   $('.legalOption:first').show();
   $('#Timeout.modalInner').show();
   $('#titleTimeout').show();
}

function ClearAndClose()
{
   for (i = 0; i < document.bigform.elements.length; i++)
   {
      document.bigform.elements[i].value = "";
   }
   alert("The Window will now attempt to close");
   window.close();
}


</script>
	
</head>

<body>

<script language="Javascript">

//check for idle Timeout
//var idleSeconds = 300;

//$(function()
//{
//   var idleTimer;
//
//   function resetTimer()
//   {
//      clearTimeout(idleTimer);
//      idleTimer = setTimeout(DisplayTimeout, idleSeconds * 1000);
//   }
//
//   $(document.body).bind('mousemove,keydown,click',resetTimer);
//   resetTimer(); // Start the timer when the page loads
//
//});

</script>

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
<!-- <a href='#' class='showModal' data-which='Timeout'>timeout test</a> -->
<!-- <a href='javascript:FillData();' title='Fill Data'>Fill with Test Data</a> -->
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
<div id='greenstripe' class='greenStripe'> Please Enter Your Information Below </div>

<!-- /////////////////////// OUTPUT /////////////////// -->

<div class='output' id='output' style="display:none;" ></div>

<div id='waitspace' style="display:none; z-index:5; text-align:center;"></div>

<!-- ////////////////// FORM SPACE //////////////////// -->

<div id='formspace' style="padding: 5px";>

<form name='bigform' id='bigform' action='#' method='post' onsubmit="return post_form();">

<!-- ///////////////////// FORM PART 1 /////////////////////////// -->

<div name='formpart1' id='formpart1' style='display:inline;'>

<input type='hidden' name='ip_addr' id='ip_addr' value='<? echo $ip; ?>'>
<input type='hidden' name='browser_info' id='browser_info' value='<? echo $browser; ?>'>

<div id='errpart1'> &nbsp; </div>

<table width='100%'>
<tr>
<td align='left'>Amount to Borrow</td>
<td align='left'><select name='requested_amount' id='requested_amount' style='width: 90px; font-family: Verdana; font-size: 16px; color: black;'>
<option value=''>Select</option>
<option value='300'>$300</option>
<option value='400'>$400</option>
<option value='500'>$500</option>
<option value='600'>$600</option>
<option value='700'>$700</option>
<option value='800'>$800</option>
<option value='900'>$900</option>
<option value='1000'>$1,000</option>
</select></td>
</tr>
<tr>
<td align='left'>First Name</td>  
<td align='left'><input type='text' placeholder='' name='first_name' id='first_name' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"  ></td> <!-- add to: onBlur="capitalize(this)" -->
</tr>
<tr>
<td align='left'>Middle Name</td>
<td align='left'><input type='text' placeholder='' name='mid_name' id='mid_name' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"   ></td>
</tr>
<tr>
<td align='left'>Last Name</td>
<td align='left'><input type='text' placeholder='' name='last_name' id='last_name' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"  ></td>
</tr>
<tr>
<td align='left'>Email Address</td>
<td align='left'><input type='text' placeholder='' name='email' id='email' value='' size='25' maxlength='255'></td>
</tr>
</table>

<!-- agreement -->

<p align='left'><input type='checkbox' class='checkbox' name='accepted_check' id='accepted_check'> By submitting your information, you agree to the terms of our <a href='#' class='showModal' data-which='Legal'>Privacy Policy</a>, <a href='#' class='showModal' data-which='Legal'>Terms of Web Site Use</a>, and special offers.</p>

<!-- get started button -->
<p align="center"><a href='#' onclick="return handle(1,1)";><img src='get-started.png' alt='Get Started' style='margin: 0px; border: 0px; padding: 0px;'></a><br><br>

<!-- learn more button -->
<a href='#' class='showModal btn-green' data-which='HowItWorks' style='margin-bottom: 15px;'>Learn More</a></p>

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
<td align='left'>Home Phone</td><td align='left'><input type='text' placeholder='(000)000-0000' name='primary_phone' id='primary_phone' value='' class="phone" maxlength="13"></td>
</tr>
<tr>
<td align='left'>Cell Phone</td><td align='left'><input type='text' placeholder='(000)000-0000' name='cell_phone' id='cell_phone' value='' class="phone" maxlength="13"></td>
</tr>
<tr>
<td align='left'>Other Phone</td><td align='left'><input type='text' placeholder='(000)000-0000' name='secondary_phone' id='secondary_phone' value='' class="phone" maxlength="13"></td>
</tr>
<tr>
<td align='left'>Best Time to Call</td><td align='left'><select name='best_time_to_call' id='best_time_to_call'>
<option value=''>Select</option>
<option value='M'>Morning</option>
<option value='A'>Afternoon</option>
<option value='E'>Evening</option>
</select></td>
</tr>
<tr>
<td align='left'>Best Number to Call</td><td align='left'><select name='best_phone' id='best_phone'>
<option value=''>Select</option>
<option value='H'>Home</option>
<option value='C'>Cell</option>
<option value='O'>Other</option>
</select></td>
</tr>

</table>

<br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(0,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center' valign='middle'> <img src='green0.png'><img src='green1.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(2,1);" class="btn-green right" style="margin-bottom: 15px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart2-->

<!-- /////////////////////// FORM PART 3 ////////////////////////// -->

<div name='formpart3' id='formpart3' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p3namespace' align='center'><span class="title">Personal Info</span></div>
</div>

<div id='errpart3'> &nbsp; </div>

<table width='100%'>

<tr>
<td align='left'>Birth Date</td><td> <input type='text' placeholder='mm/dd/yyyy' name='dob' id='dob' value='' class='date' size='10' maxlength='10'></td>
</tr>

<tr>
<td align='left'>Social Security Number</td><td align='left'><input type='text' placeholder='000-00-0000' name='ssn' id='ssn' value='' class="ssn" size='20' maxlength='11'></td>
</tr>
<tr>
<td align='left'>Drivers License Number</td><td align='left'><input type='text' placeholder='' name='drivers_lic' id='drivers_lic' value='' size='20' maxlength='25'></td>
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
<option value="FL" >Florida</option>
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

<tr>
<td align='left'>Mother's Maiden Name</td><td align='left'><input type='text' placeholder='' name='mothers_maiden_name' id='mothers_maiden_name' value='' size='20' maxlength='25' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>OR Mother's Birth City</td><td align='left'><input type='text' placeholder='' name='mothers_birth_city' id='mothers_birth_city' value='' size='20' maxlength='25' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>Active/Reserve Military?</td><td align='left'><select name='is_military' id='is_military'>
<option value=''>Select</option>
<option value='N'>No</option>   <!-- send 0 or 1 to LF -->
<option value='Y'>Yes</option>
</select></td>
</tr>

</table>

<br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(1,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center' valign='middle'> <img src='green0.png'><img src='green0.png'><img src='green1.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(3,1);" class="btn-green right" style="margin-bottom: 15px;">Continue &#187;</a></td>
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
<td align='left'>Street Address</td><td align='left'><input type='text' placeholder='' name='address' id='address' value='' size='15' maxlength='255'> &nbsp; <input type='text' placeholder='Apt' name='address_2' id='address_2' value='' size='3' maxlength='15'></td>
</tr>

<tr>
<td align='left'>City</td><td align='left'><input type='text' placeholder='' name='city' id='city' value='' size='15' maxlength='255' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>State</td><td align='left'><select name='state' id='state'>
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
<option value="FL" >Florida</option>
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

<tr>
<td align='left'>Zip</td><td align='left'><input type='text' placeholder='' name='zip' id='zip' class='zip' value='' size='5' maxlength='15'></td>
</tr>

<tr>
<td align='left'>How Long at Residence</td><td align='left'><select name='address_months' id='address_months'>
<option value=''>Select</option>
<option value='5'>Less than 6 Months</option>
<option value='11'>Less than 1 Year</option>
<option value='18'>1-2 Years</option>
<option value='25'>Over 2 Years</option>
</select></td>
</tr>

<tr>
<td align='left'>Do you rent or own?</td><td align='left'><select name='rent_own' id='rent_own'>
<option value=''>Select</option>
<option value='R'>Rent Home</option>
<option value='O'>Own Home</option>
</select></td>
</tr>

</table>

<br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(2,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center' valign='middle'> <img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green1.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(4,1);" class="btn-green right" style="margin-bottom: 15px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart4-->

<!-- /////////////////// FORM PART 5 ///////////////// -->

<div name='formpart5' id='formpart5' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p5namespace' align='center'><span class="title">Your Income</span></div>
</div>

<div id='errpart5'> &nbsp; </div>

<table width='100%'>

<tr>
<td align='left'>Are You Employed?</td><td align='left'><select name='income_type' id='income_type' style='width:115px;'>
<option value=''>Select</option>
<option value='E'>Yes</option> <!-- pass either EMPLOYMENT or BENEFITS to LF -->
<option value='U'>No</option>
</select></td>
</tr>

<tr>
<td align='left'>Pay Type</td><td align='left'><select name='pay_type' id='pay_type' style='width:115px;'>
<option value=''>Select</option>
<option value='D'>Direct Deposit</option>
<option value='C'>Payroll/Check</option>
</select></td>
</tr>

<tr>
<td align='left'>Pay Period</td><td align='left'><select name='pay_period' id='pay_period' style='width:115px;'>
<option value=''>Select</option>
<option value='W'>Weekly</option>        <!-- pass WEEKLY     to LF -->
<option value='B'>Bi-Weekly</option>     <!-- pass BIWEEKLY   to LF -->
<option value='T'>Twice Monthly</option> <!-- pass TWICEMONTH to LF -->
<option value='M'>Monthly</option>       <!-- pass MONTHLY    to LF -->
</select></td>
</tr>

<tr>
<td align='left'>Take Home Pay (per period)</td><td align='left'><input type='text' placeholder='$' name='take_home_pay' id='take_home_pay' value='' size='10' maxlength='10' onkeypress="return isNumber(event)"></td>
</tr>

<tr>
<td align='left'>Next Paydate</td> <!-- pass YYYY-MM-DD to LF for Next and Second Date -->
<td align='left'><input type='text' placeholder='mm/dd/yyyy' class='date' name='next_pay_date' id='next_pay_date' value='' size='10' maxlength='25'>
<a href="javascript:void(0);" onclick="displayDatePicker('next_pay_date', this);"><img border="0" src="calendar.png" alt="Calendar" align="middle" width="15" height="15"></a></td>
</tr>
<tr>
<td align='left'>Second Paydate</td>
<td align='left'><input type='text' placeholder='mm/dd/yyyy' class='date' name='second_pay_date' id='second_pay_date' value='' size='10' maxlength='25'>
<a href="javascript:void(0);" onclick="displayDatePicker('second_pay_date', this);"><img border="0" src="calendar.png" alt="Calendar" align="middle" width="15" height="15"></a></td>
</tr>

<tr>
<td align='left'>Net Income Monthly</td><td align='left'><input type='text' placeholder='$' name='net_income' id='net_income' value='' size='10' maxlength='10' onkeypress="return isNumber(event)"></td>
</tr>

</table>

<br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(3,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center' valign='middle'> <img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green1.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(5,1);" class="btn-green right" style="margin-bottom: 15px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart5-->

<!-- //////////////////////// FORM PART 6 ///////////////////////// -->

<div name='formpart6' id='formpart6' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p6namespace' align='center'><span class="title">Employment</span></div>
</div>

<div id='errpart6'> &nbsp; </div>

<table width="100%">

<tr>
<td align='left'>Your Employer</td><td align='left'><input type='text' placeholder='' name='employer' id='employer' value='' size='20' maxlength='255'></td>
</tr>

<tr>
<td align='left'>Employer Phone</td><td align='left'><input type='text' placeholder='(000)000-0000' name='emp_phone' id='emp_phone' value='' class="phone" size='15' maxlength='13'> <input type='text' placeholder='Ext' name='emp_phone_ext' id='emp_phone_ext' value='' size='5' maxlength='15' onkeypress="return isNumber(event)"></td>
</tr>

<tr>
<td align='left'>Months Employed</td><td align='left'><input type='text' placeholder='' name='employed_months' id='employed_months' value='' size='10' maxlength='5' onkeypress="return isNumber(event)"></td>
</tr>


</table>

<br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(4,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center' valign='middle'> <img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green1.png'><img src='green0.png'><img src='green0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(6,1);" class="btn-green right" style="margin-bottom: 15px;">Continue &#187;</a></td>
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
<td align='left'>Your Bank Name</td><td align='left'><input type='text' placeholder='' name='bank_name' id='bank_name' value='' size='25' maxlength='25'></td>
</tr>

<tr>
<td align='left'>Bank City</td><td align='left'><input type='text' placeholder='' name='bank_city' id='bank_city' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>Bank State</td><td align='left'><select name='bank_state' id='bank_state'>
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
<option value="FL" >Florida</option>
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

<tr>
<td align='left'>Account Type</td><td align='left'><select name='account_type' id='account_type'>
<option value=''>Select</option>
<option value='C'>Checking Account</option>  <!-- pass CHECKING to LF -->
<option value='S'>Savings Account</option>   <!-- pass SAVINGS  to LF -->
</select></td>
</tr>

<tr>
<td align='left'>Routing Number</td><td align='left'><input type='text' placeholder='' name='routing_number' id='routing_number' value='' class="rtn" size='25' maxlength='25'></td>
</tr>

<tr>
<td align='left'>Account Number</td><td align='left'><input type='text' placeholder='' name='acct_number' id='acct_number' value='' size='25' maxlength='25' onkeypress="return isNumber(event)"></td>
</tr>

<tr>
<td colspan='2' align='center'> How long have you had this account? </td>
</tr>

<tr>
<td align='left'> &nbsp; &nbsp; <label for='bank_months'>Number of Months</label></td><td align='left'><input type='text' placeholder='' name='bank_months' id='bank_months' value='' size='5' maxlength='5' onkeypress="return isNumber(event)"></td>
</tr>

</table>

<br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(5,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center' valign='middle'> <img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green1.png'><img src='green0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(7,1);" class="btn-green right" style="margin-bottom: 15px;">Continue &#187;</a></td>
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
<td align='left'>Reference First Name</td><td align='left'><input type='text' placeholder='' name='ref_fname' id='ref_fname' value='' size='20' maxlength='255' onkeypress="return isAlpha(event)"></td>
</tr>
<tr>
<td align='left'>Reference Last Name</td><td align='left'><input type='text' placeholder='' name='ref_lname' id='ref_lname' value='' size='20' maxlength='255' onkeypress="return isAlpha(event)"></td>
</tr>
<tr>
<td align='left'>Reference Relationship</td><td align='left'><select name='ref_relation' id='ref_relation'>
<option value=''>Select</option>
<option value='S'>Spouse</option>     <!-- pass full name to LF -->
<option value='L'>Sibling</option>
<option value='P'>Parent</option>
<option value='C'>Co-Worker</option>
<option value='F'>Friend</option>
<option value='B'>Boyfriend</option>
<option value='G'>Girlfriend</option>
<option value='R'>Brother</option>
<option value='T'>Sister</option>
<option value='O'>Other</option>
</select></td>
</tr>
<tr>
<td align='left'>Reference Phone</td><td align='left'><input type='text' placeholder='(000)000-0000' name='ref_phone' id='ref_phone' value='' class="phone" size='15' maxlength='13'></td>
</tr>
</table>

<br><br><br>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(6,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center' valign='middle'> <img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green0.png'><img src='green1.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(8,1);" class="btn-green right" style="margin-bottom: 15px;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart8-->

<!-- ///////////////////////////// FORM PART 9 ////////////////////////// -->

<div name='formpart9' id='formpart9' style='display:none;'>

<div class='formRow mobileExtraPad'>
<div id='p9namespace'></div>
</div>

<p><b>Thank you for applying with The Money Company!</b></p>

<p>Would you like to receive other offers from us? <select name='other_offers' id='other_offers'>
<option value='Y'>Yes</option>
<option value='N'>No</option>
</select></p>

<p>Upon submitting your information:</p>

<p>(1) We are going to utilize your mother's maiden name or birth city as your e-signature to authorize The Money Company and a lender to contact you via land and mobile telephone, SMS text, email and US Mail.</p>

<p>(2) You are confirming that all of the information you provided today is accurate and you are requesting that we submit your information to our network of lenders.</p>

<p><i>Press Previous if you need to change anything.</i></p>

<p><i>Press Submit below to send your data to Lenders.</i></p>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left'><a href="#" onclick="return handle(7,0);" class="btn-green left" style="margin-bottom: 15px;">&#171; Previous</a></td>
<td align='center'> &nbsp; &nbsp; </td>
<td align='right'><input type='submit' name='submit' value='SUBMIT' class='btn-green' style='width: 250px;'></td>
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
<b>Questions?</b> <span class='grayText'>Call us 24/7 at:</span><br><span style='font-size: 32pt;' class='greenText'>800-577-1676</span>
</div>

<!-- end body center -->
</div>

<!-- footer stripe across full width -->
<div id='footerStripe'>

<!-- footer center -->
<div id='footer'>&copy; 2013 The Money Company &bull; Design: <a href='http://www.grafxtampa.com' target='_blank'>Grafx</a> &bull; Development: <a href='https://verswerks.com' target='_blank'>Fort Myers Web Design</a>

 <p align='left'>
 *THE OPERATOR OF THIS WEB SITE IS NOT A DIRECT LENDER, does not broker loans to lenders and does not make short term cash loans or credit decisions. This Web Site does not constitute an offer or solicitation to lend. This site will submit the information you provide to a lender. Most lenders fund the next business day. Providing your information on this Web Site does not guarantee that you will be approved for a short term cash loan.
 </p>
<p align='left'>
 Loan terms, conditions and policies vary by lender, state and applicant qualifications. Late or missed loan payments may be subject to increased fees and interest rates. Loan extensions and renewals may not be offered by all lenders. Not all lending partners offer $1,000 and not all applicants will be approved for their requested loan amounts. Residents of Arizona, Arkansas, Georgia, North Dakota, Oregon and West Virginia are not eligible to apply for loans through this site. Loan repayment periods vary by lender and state. Lenders may use collection services for non-payment of loans. For details, questions or concerns regarding your short term cash loan, please contact your lender directly.
 </p>
 <p align='left'>
 Short-term cash loans are meant to provide you with short-term financing to solve immediate or temporary cash needs only and should not be considered or intended as a long-term financial solution. Residents of some states may not be eligible for a short term cash loan based upon lender requirements.
 </p>
 <p align='left'>
 Credit checks, consumer credit reports and other personal data may be obtained by some lenders from Experian, Equifax, Trans Union or through alternative providers.
 </p>
   
<!-- end footer center -->
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
<div id='closeModalBtn'><a href='#' class='closeModal' title='Close'><img border='0' src='close-btn.png' alt='Close'></a></div>

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
<b>We'll Match You With A Cash Lender!</b>

<br><br>
The Money Company matches you to a cash lender to get you the loan you need. We are NOT a lender. Our service is absolutely free and all loan terms are between the borrower and the lender.
<br><br>
After filling out the The Money Company's application, The Money Company will direct you to a lender's website. Upon reaching the lender's site, you will be able to read and agree to the terms and conditions of the loan. Next, the lender will then be in touch with you to confirm your personal information and finalize the loan. They may contact you in a number of ways, including a telephone call, email, or text message, etc. Once these steps are complete, you will be on your way to having cash deposited into your account.
<br><br>

1. Fill out The Money Company online application<br>
2. We will match you with a lender<br>
3. Finalize your loan via lenders conditions<br>
4. Cash deposited into your bank account<br>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='FAQs'>
<b>Q: Is there an application fee?</b>
<br>
A: No. The Money Company never charges applicants a fee to apply for a loan.
<br><br>
<b>Q: Does submitting an online application obligate me to take out a loan?</b>
<br>
A: No. Submitting an application with The Money Company only means you wish for one of our lenders to approve you for a loan and contact you to discuss the loan options. You may ask any questions, and withdraw your loan request if you choose. If you would like to proceed, just confirm your information and agree to loan terms from one of our lenders.
<br><br>
<b>Q: Will bad credit disqualify me from getting a loan?</b>
<br>
A: No. Many of our lenders do not perform traditional credit checks.  As a result, many people with "less than perfect" credit take advantage of short-term loans and cash advances everyday.
<br><br>
<b>Q: How much can I receive?</b>
<br>
A: The Money Company works with lenders nationwide. Each lender has different amounts they will lend you based upon the information you provided in your application. You may request up to $1000, although the lender will decide the loan amount.
<br><br>
<b>Q: I have questions about my existing loan, where do I go?</b>
<br>
A: The Money Company is not a lender and does not make short-term cash loans or credit decisions. Furthermore, the operator of this site is not a representative of any lender. All questions, concerns and details regarding your short-term cash loan can be answered directly by your lender.  Lender information should be available in your approval e-mail you received when applying for the loan, your bank statement or by contacting your primary financial institution directly.
<br><br>
<b>Q: Is qualifying easy?</b>
<br>
A: Yes. Most times you'll qualify if you:
<br>
- Currently have a job (or receive regular income)<br>
- Make at least $800 per month<br>
- Are 18 years of age or older and a U.S. resident<br>
- Have a checking account<br>
<br>
Other requirements may apply. If you have filed bankruptcy, bounced checks, have charge-offs or other credit problems; you may still qualify to get a short-term loan.
<br><br>
<b>Q: Can I get an extension?</b>
<br>
A: Lenders will often provide extensions; however, this is a decision made solely by your lender.  The Money Company is not a lender and cannot make this decision. Please contact your lender for details.
<br><br>
<b>Q: Why I'm receiving communication from The Money Company?</b>
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
<b>xxxxxxxxxxxxxxxxxxxx</b>
<br><br>
You may also contact us by email at:
<br><br>
<b>xxxxxx@xxxxxxx.com</b>
<br><br>
Or call us by phone using the number below:
<br><br>
<b>(800) 577-1676</b>
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
- Lenders shall not use your information to sell or market other products or services unless you give them permission to do so.
<br><br>
- Unless you give them permission and/or become delinquent in your loan repayments, Lenders shall not resell your information to any third-party, or otherwise use your information other than for the sole purpose of fulfilling the loan and/or communicating with you about your loan.
<br><br>
- Lenders shall provide a customer service phone number and shall be responsive and helpful in addressing your concerns. The lender shall attend to your questions, issues, and complaints in a reasonable and professional manner, within 3 business days of request.
<br><br>
- Lenders shall clearly and conspicuously present you with all relevant information about the terms and conditions of the loan before obtaining your consent, including, but not limited to:
<br><br>
- The amount of the loan<br>
- The term of the loan, including any renewal policies<br>
- Schedule of payments, including when funds will be withdrawn<br>
- Any fees or interest associated with  the loan<br>
- Consequences of late payment or non-payment
<br><br>
- Lenders shall not engage in harassing or abusive collections practices and agree to comply with any and all applicable federal and state collections practices laws and regulations.
<br><br>
- Lenders shall comply with the Online Lenders Alliance Best Practices.
<br><br>
The Money Company monitors lender practices for compliance with the above Guidelines. In the event that The Money Company determines that a lender is not acting in accordance with these Guidelines, that lender's participation in the The Money Company Family of Lenders is subject to suspension and/or possible  termination.

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
<u>Use of Information:</u> We may also use your personal, demographic and profile data to improve our Website, for statistical analysis, for marketing. Information collected by us may be added to our databases and used for future use which includes: e-mails, telemarketing or direct mail.  If you choose to provide personal information, it will be shared with lenders, credit bureaus including lookup and reference, data enhancement, suppression and validation. Information collected by us may be added to our databases and used for future telemarketing, SMS text-messaging, e-mails, instant messaging, or postal mailings regarding site updates, new products and services, and/or loans placed online. By using this Website, you agree that you may be contacted in any manner even if your home and/or cell number is found on the national do-not-call or similar registry. We may also employ other companies to perform certain functions on our behalf such as analyzing data, and providing marketing analysis. These agents have protected/limited access to our users' personal information.
<br><br>
By agreeing to this Privacy Policy or by using this Website, you authorize us to use your information to obtain other information about you from third-parties, such as your Social Security Number, where such information was incompletely or improperly filled out on our registration form. Such third-parties include, but are not limited to, consumer reporting agencies, consumer credit bureaus and other outside parties as permitted or required by applicable laws. Any and all information that we collect from you, and from such third-parties, may be used to determine your eligibility for a loan. or for other services, products or other offers. If you choose to provide information, such as your Social Security Number, we may use that information to determine your financial status. If you do not provide such information, we may also use other information that you provided for the purpose of verifying your eligibility for a loan or for any other programs, offer or services. Upon qualification, your ultimate loan-specific financial information will be stored and utilized by your applicable lender pursuant to the terms of that lender's Privacy Policy.
<br><br>
You agree that by submitting your information at the Website, you agree to receive mobile marketing including, but not limited to, text-message based marketing ("SMS Messages"), from us. You further agree that based on your individual carrier and plan, you may incur charges associated with such SMS Messages and that you agree to be solely responsible for such charges. You represent that you are at least 18 years of age and the owner or authorized user of the wireless device on which messages will be received, and that you are authorized to approve the applicable charges. Should you hereafter choose to op-out of receiving SMS Messages from The Money Company, you may opt-out by texting "STOP" or "OPT-OUT" as specifically set forth in the communication. Notwithstanding that your mobile telephone number may be listed on state and/or federal do-not-call registries, we retain the right to contact you via SMS Messages. In addition, by registering and/or using the Website, you agree that such act constitutes an inquiry and/or application for purposes of the Amended Telemarketing Sales Rule (16 CFR 310 et seq.), as amended from time to time (the "Rule").
<br><br>
Cookies: TheMoneyCompany.com may employ the use of cookies, web beacons or similar technologies to enhance and personalize your online experience and to enable TheMoneyCompany.com to recognize you as a previous visitor to the TheMoneyCompany.com Web Services. A cookie is a small amount of data, which often includes an anonymous unique identifier that is sent to your browser from a website's computer and stored on your computer's hard drive.  You can adjust the settings on your browser to erase or block such cookies if you prefer.

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
<p>You have been inactive for more than 5 minutes.  For your protection all data will be cleared unless you wish to continue.</p>
<p>Do you wish to continue?</p>
<h2>[<a href='#' class='closeModal' title='Continue'>Yes, Continue</a>] [<a href='javascript:ClearAndClose();' title='Close'>No, Close Window</a>]</h2>
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
