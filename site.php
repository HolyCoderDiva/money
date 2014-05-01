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

Site Design by Grafx - http://www.grafxtampa.com
Site programming by Philvaz, Stebnerific and Froglight

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
function FillData()
{
   document.bigform.first_name.value = "TestClient";
   document.bigform.mid_name.value = "X";
   document.bigform.last_name.value = "VendorTest";
   document.bigform.email.value = "philvaz@philvaz.com";
   document.bigform.primary_phone.value = "(727)191-9191";
   document.bigform.cell_phone.value = "(813)191-9191";
   document.bigform.secondary_phone.value = "(727)919-1919";
   document.bigform.best_phone.value = "H";
   document.bigform.best_time_to_call.value = "A";
   document.bigform.dob.value = "09/09/1991";
   var a=Math.RandomInteger(8000)+1000;
   document.bigform.ssn.value = "191-19-" + a.toString();
   document.bigform.drivers_lic.value = "P999-111-111-999";
   document.bigform.dlstate.value = "FL";
   document.bigform.mothers_maiden_name.value = "maiden";
   document.bigform.mothers_birth_city.value = "city";
   document.bigform.is_military.value = "N";
   document.bigform.address.value = "6910 11th Ave N";
   document.bigform.address_2.value = "191";
   document.bigform.city.value = "St Petersburg";
   document.bigform.state.value = "FL";
   document.bigform.zip.value = "33710";
   document.bigform.address_months.value = "5";
   document.bigform.rent_own.value = "R";
   document.bigform.income_type.value = "E";
   document.bigform.pay_type.value = "D";
   document.bigform.pay_period.value = "W";
   document.bigform.take_home_pay.value = "1111";
   document.bigform.next_pay_date.value = "10/15/2013";
   document.bigform.second_pay_date.value = "10/22/2013";
   document.bigform.net_income.value = "4444";
   document.bigform.employer.value = "Vaz Software LLC";
   document.bigform.emp_phone.value = "(727)919-9191";
   document.bigform.emp_phone_ext.value = "999";
   document.bigform.employed_months.value = "8";
   document.bigform.bank_name.value = "Achieva CU";
   document.bigform.bank_city.value = "St Petersburg";
   document.bigform.bank_state.value = "FL";
   document.bigform.account_type.value = "C";
   document.bigform.routing_number.value = randomRoutingNumber();
   document.bigform.acct_number.value = "000009191919";
   document.bigform.bank_months.value = "36";
   document.bigform.ref_fname.value = "Steve";
   document.bigform.ref_lname.value = "Jobs";
   document.bigform.ref_relation.value = "C";
   document.bigform.ref_phone.value = "(999)919-9191";
   document.bigform.requested_amount.value = "700";
   document.bigform.other_offers.value = "Y";
   document.bigform.accepted_check.checked = true;
}

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
var idleSeconds = 10;

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
<div id='greenstripe' class='greenStripe'>Please Enter Your Information Below<br/>Or Call Us At (800)577-1676</div>
<!-- /////////////////////// OUTPUT /////////////////// -->

<div id='waitspace' style="display:none; z-index:5; text-align:center;"></div>

<!-- ////////////////// FORM SPACE //////////////////// -->

<div id='formspace' style="padding: 5px";>

<form name='bigform' id='bigform' action='#' method='post' onsubmit="return post_form();">

<!-- ///////////////////// FORM PART 1 /////////////////////////// -->

<div name='formpart1' id='formpart1' style='display:inline;'>

<input type='hidden' name='ip_addr' id='ip_addr' value='<? echo $ip; ?>'>
<input type='hidden' name='browser_info' id='browser_info' value='<? echo $browser; ?>'>

<div id='errpart1' style='padding-left:25px;'> &nbsp; </div>

<table width='100%' class='ftable240'>

<!------------------------------------------------------------------------
<tr>
<td align='left'>Borrow Up To</td>
<td align='right'><select name='requested_amount' id='requested_amount' xstyle='width: 240px;' font-family: Verdana; font-size: 16px; color: black;'>
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
-------------------------------------------------------------------------->

<tr>
<td align='left'>First Name</td>
<td align='right'><input type='text' placeholder='' name='first_name' id='first_name' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"  ></td> <!-- add to: onBlur="capitalize(this)" -->
</tr>
<tr>
<td align='left'>Middle Name</td>
<td align='right'><input type='text' placeholder='' name='mid_name' id='mid_name' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"   ></td>
</tr>
<tr>
<td align='left'>Last Name</td>
<td align='right'><input type='text' placeholder='' name='last_name' id='last_name' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"  ></td>
</tr>
<tr>
<td align='left'>Email Address</td>
<td align='right'><input type='text' placeholder='' onblur='pingle(0);' name='email' id='email' value='' size='25' maxlength='255' ></td>
</tr>



<tr>
<td align='left'>Amount Requested</td>
<td align='right'><select name='requested_amount' id='requested_amount' xstyle='width: 240px;' font-family: Verdana; font-size: 16px; color: black;'>
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





</table>

<!-- agreement -->
<!--[if lte IE 8]>
<div style='float:left; padding-left:25px;padding-right:5px;'><input type='checkbox' style='margin-top:4px;' class='checkbox' name='accepted_check' id='accepted_check'></div>
<div style='text-align:justify;float:right;width:75%;padding-right:25px;'>
By submitting your information, you agree to the terms of our <a href='#' class='showModal' data-which='Legal'>Privacy Policy</a>, <a href='#' class='showModal' data-which='Legal'>Terms of Web Site Use</a>, and special offers.</p>
</div>
<![endif]-->
<!--[if gt IE 8]>
<div style='float:left; padding-left:25px;padding-right:5px;'><input type='checkbox' style='margin-top:4px;' class='checkbox' name='accepted_check' id='accepted_check'></div>
<div style='text-align:justify;float:right;width:78%;padding-right:25px;'>
By submitting your information, you agree to the terms of our <a href='#' class='showModal' data-which='Legal'>Privacy Policy</a>, <a href='#' class='showModal' data-which='Legal'>Terms of Web Site Use</a>, and special offers.</p>
</div>
<![endif]-->
<!--[if !IE]><-->
<div style='float:left; padding-left:25px;padding-right:5px;'><input type='checkbox' style='margin-top:4px;' class='checkbox' name='accepted_check' id='accepted_check'></div>
<div style='text-align:justify;float:right;width:83%;padding-right:25px;'>
By submitting your information, you agree to the terms of our <a href='#' class='showModal' data-which='Legal'>Privacy Policy</a>, <a href='#' class='showModal' data-which='Legal'>Terms of Web Site Use</a>, and special offers.</p>
</div>
<![endif]-->

<!-- get started button -->
<p align="center"><a href='#' onclick="return handle(1,1)";><img src='get-started.png' alt='Get Started' style='margin: 0px; border: 0px; padding: 0px;'></a><br><br>

<!-- learn more button -->
<a href='#' class='showModal btn-green' data-which='HowItWorks' style='color: #4ca50c;margin-top:40px;margin-bottom: 5px;'>Learn More</a></p>

</div>

<!--formpart1-->

<!-- ////////////////// FORM PART 2 /////////////////// -->

<div name='formpart2' id='formpart2' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p2namespace' align='center'><span class="title">Contact Information</span></div>
</div>

<div id='errpart2' style='padding-left:25px;'> &nbsp; </div>

<table width='100%' class='ftable'>

<tr>
<td align='left'>Home Phone</td><td align='right'><input type='text' placeholder='(000)000-0000' name='primary_phone' id='primary_phone' value='' class="phone" maxlength="13" xstyle='width:187px;'></td>
</tr>
<tr>
<td align='left'>Cell Phone</td><td align='right'><input type='text' placeholder='(000)000-0000' name='cell_phone' id='cell_phone' value='' class="phone" maxlength="13" xstyle='width:187px;'></td>
</tr>
<tr>
<td align='left'>Other Phone</td><td align='right'><input type='text' placeholder='(000)000-0000' name='secondary_phone' id='secondary_phone' value='' class="phone" maxlength="13" xstyle='width:187px;'></td>
</tr>
<tr>
<td align='left'>Best Time to Call</td><td align='right'><select name='best_time_to_call' id='best_time_to_call' xstyle='width:197px;'>
<option value=''>Select</option>
<option value='M'>Morning</option>
<option value='A'>Afternoon</option>
<option value='E'>Evening</option>
</select></td>
</tr>
<tr>
<td align='left'>Best Number to Call</td><td align='right'><select name='best_phone' id='best_phone' xstyle='width:197px;'>
<option value=''>Select</option>
<option value='H'>Home</option>
<option value='C'>Cell</option>
<option value='O'>Other</option>
</select></td>
</tr>

</table>

<!--<br><br>-->

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(0,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center' valign='middle'> <img src='gray0.png'><img src='gray1.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(2,1);" class="btn-orange right" style="margin-bottom: 15px;color:#fff">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart2-->

<!-- /////////////////////// FORM PART 3 ////////////////////////// -->

<div name='formpart3' id='formpart3' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p3namespace' align='center'><span class="title">Your Information</span></div>
</div>

<div id='errpart3' style='padding-left:25px;'> &nbsp; </div>

<table width='100%' class='ftable'>

<tr>
<td align='left'>Birth Date</td><td align='right'><input type='text' placeholder='mm/dd/yyyy' name='dob' id='dob' value='' class='date' size='10' maxlength='10' xstyle='width:190px;'></td>
</tr>

<tr>
<td align='left'>Social Security Number</td><td align='right'><input type='text' placeholder='000-00-0000' name='ssn' id='ssn' value='' class="ssn" size='20' maxlength='11' xstyle='width:190px;'></td>
</tr>
<tr>
<td align='left'>Drivers License Number</td><td align='right'><input type='text' placeholder='' name='drivers_lic' id='drivers_lic' value='' size='20' maxlength='25' xstyle='width:190px;'></td>
</tr>
<tr>
<td align='left'>Driver License State</td><td align='right'><select name='dlstate' id='dlstate' xstyle='width:199px;'>
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
<td align='left'>Mother's Maiden Name</td><td align='right'><input type='text' xstyle='width:190px;' placeholder='' name='mothers_maiden_name' id='mothers_maiden_name' value='' size='20' maxlength='25' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>OR Mother's Birth City</td><td align='right'><input type='text' xstyle='width:190px;' placeholder='' name='mothers_birth_city' id='mothers_birth_city' value='' size='20' maxlength='25' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>Active/Reserve Military?</td><td align='right'><select name='is_military' id='is_military' xstyle='width:199px;'>
<!--option value=''>Select</option-->
<option selected value='N'>No</option>   <!-- send 0 or 1 to LF -->
<option value='Y'>Yes</option>
</select></td>
</tr>

</table>

<!--<br><br>-->

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(1,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center' valign='middle'> <img src='gray0.png'><img src='gray0.png'><img src='gray1.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(3,1);" class="btn-orange right" style="margin-bottom: 15px;color:#fff;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart3-->

<!-- ////////////////////// FORM PART 4 ////////////////////// -->

<div name='formpart4' id='formpart4' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p4namespace' align='center'><span class="title">Home Information</span></div>
</div>

<div id='errpart4' style='padding-left:25px;'> &nbsp; </div>

<table width='100%' class='ftable'>

<tr>
<td align='left'>Street Address</td><td align='right'><input type='text' xstyle='width:230px;' placeholder='' name='address' id='address' value='' size='15' maxlength='255'></td>
</tr>

<tr>
<td align='left'>Unit/Apt</td><td align='right'><input type='text' xstyle='width:230px;' placeholder='Apt' name='address_2' id='address_2' value='' size='15' maxlength='15'></td>
</tr>

<tr>
<td align='left'>City</td><td align='right'><input type='text' xstyle='width:230px;' placeholder='' name='city' id='city' value='' size='15' maxlength='255' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>State</td><td align='right'><select name='state' id='state' xstyle='width:240px;'>
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
<td align='left'>Zip</td><td align='right'><input type='text' xstyle='width:230px;' placeholder='' name='zip' id='zip' class='zip' value='' size='5' maxlength='15'></td>
</tr>

<tr>
<td align='left'>How Long at Residence</td><td align='right'><select name='address_months' id='address_months' xstyle='width:240px;'>
<option value=''></option>
<option value='5'>Less than 6 Months</option>
<option value='11'>Less than 1 Year</option>
<option value='18'>1-2 Years</option>
<option value='25'>Over 2 Years</option>
</select></td>
</tr>

<tr>
<td align='left'>Do you rent or own?</td><td align='right'><select name='rent_own' id='rent_own' xstyle='width:240px;'>
<option value=''></option>
<option value='R'>Rent Home</option>
<option value='O'>Own Home</option>
</select></td>
</tr>

</table>

<!--<br><br>-->

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(2,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center' valign='middle'> <img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray1.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(4,1);" class="btn-orange right" style="margin-bottom: 15px;color:#fff;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart4-->

<!-- /////////////////// FORM PART 5 ///////////////// -->

<div name='formpart5' id='formpart5' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p5namespace' align='center'><span class="title">Income Information</span></div>
</div>

<div id='errpart5' style='padding-left:25px;'> &nbsp; </div>

<table width='100%' class='ftable'>

<tr>
<td align='left'>Are You Employed?</td><td align='right'><select name='income_type' id='income_type' xstyle='width:185px;'>
<option value=''></option>
<option value='E'>Yes</option> <!-- pass either EMPLOYMENT or BENEFITS to LF -->
<option value='U'>No</option>
</select></td>
</tr>

<tr>
<td align='left'>Pay Type</td><td align='right'><select name='pay_type' id='pay_type' xstyle='width:185px;'>
<option value=''></option>
<option value='D'>Direct Deposit</option>
<option value='C'>Payroll/Check</option>
</select></td>
</tr>

<tr>
<td align='left'>Pay Period</td><td align='right'><select name='pay_period' id='pay_period' xstyle='width:185px;'>
<option value=''></option>
<option value='W'>Weekly</option>        <!-- pass WEEKLY     to LF -->
<option value='B'>Bi-Weekly</option>     <!-- pass BIWEEKLY   to LF -->
<option value='T'>Twice Monthly</option> <!-- pass TWICEMONTH to LF -->
<option value='M'>Monthly</option>       <!-- pass MONTHLY    to LF -->
</select></td>
</tr>

<tr>
<td align='left'>Take Home Pay (per period)</td><td align='right'><input type='text' xstyle='width:175px;' placeholder='$' name='take_home_pay' id='take_home_pay' value='' size='10' maxlength='10' onkeypress="return isNumber(event)"></td>
</tr>

<tr>
<td align='left'>Next Paydate</td> <!-- pass YYYY-MM-DD to LF for Next and Second Date -->
<td align='right'>
<a href="javascript:void(0);" onclick="displayDatePicker('next_pay_date', this);"><img border="0" src="calendar.png" alt="Calendar" align="middle" width="15" height="15"></a>
<input type='text' placeholder='mm/dd/yyyy' class='date' name='next_pay_date' id='next_pay_date' value='' size='10' maxlength='25' xstyle='width:155px;'>
</td>
</tr>
<tr>
<td align='left'>Second Paydate</td>
<td align='right'>
<a href="javascript:void(0);" onclick="displayDatePicker('second_pay_date', this);"><img border="0" src="calendar.png" alt="Calendar" align="middle" width="15" height="15"></a>
<input type='text' placeholder='mm/dd/yyyy' class='date' name='second_pay_date' id='second_pay_date' value='' size='10' maxlength='25' xstyle='width:155px;'>
</td>
</tr>

<tr>
<td align='left'>Net Income Monthly</td><td align='right'><input type='text' xstyle='width:175px;' placeholder='$' name='net_income' id='net_income' value='' size='10' maxlength='10' onkeypress="return isNumber(event)"></td>
</tr>

</table>

<!--<br>-->

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(3,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center' valign='middle'> <img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray1.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(5,1);" class="btn-orange right" style="margin-bottom: 15px;color:#fff;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart5-->

<!-- //////////////////////// FORM PART 6 ///////////////////////// -->

<div name='formpart6' id='formpart6' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p6namespace' align='center'><span class="title">Employment Information</span></div>
</div>

<div id='errpart6' style='padding-left:25px;'> &nbsp; </div>

<table width="100%" class='ftable'>

<tr>
<td align='left'>Your Employer</td><td align='right'><input type='text' placeholder='' name='employer' id='employer' value='' size='20' maxlength='255' xstyle='width:245px;'></td>
</tr>

<tr>
<td align='left'>Employer Phone</td><td align='right'><input type='text' xstyle='width:160px;' placeholder='(000)000-0000' name='emp_phone' id='emp_phone' value='' class="phone" size='15' maxlength='13'></td>
</tr>

<tr>
<td align='left'>Extension</td><td align='right'><input type='text' placeholder='Ext' name='emp_phone_ext' id='emp_phone_ext' value='' size='5' maxlength='15' onkeypress="return isNumber(event)"></td>
</tr>


<tr>
<td align='left'>Months Employed</td><td align='right'><input type='text'  xstyle='width:245px;'placeholder='' name='employed_months' id='employed_months' value='' size='10' maxlength='5' onkeypress="return isNumber(event)"></td>
</tr>


</table>

<!--<br><br>-->

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(4,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center' valign='middle'> <img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray1.png'><img src='gray0.png'><img src='gray0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(6,1);" class="btn-orange right" style="margin-bottom: 15px;color:#fff;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart6-->

<!-- //////////////////////// FORM PART 7 //////////////////////// -->

<div name='formpart7' id='formpart7' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p7namespace' align='center'><span class="title">Banking Information</span></div>
</div>

<div id='errpart7' style='padding-left:25px;'> &nbsp; </div>

<table width='100%' class='ftable'>

<tr>
<td align='left'>Your Bank Name</td><td align='right'><input type='text' xstyle='width:215px;' placeholder='' name='bank_name' id='bank_name' value='' size='25' maxlength='25'></td>
</tr>

<tr>
<td align='left'>Bank City</td><td align='right'><input type='text' xstyle='width:215px;' placeholder='' name='bank_city' id='bank_city' value='' size='25' maxlength='25' onkeypress="return isAlpha(event)"></td>
</tr>

<tr>
<td align='left'>Bank State</td><td align='right'><select name='bank_state' id='bank_state' xstyle='width:225px;'>
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
<td align='left'>Account Type</td><td align='right'><select name='account_type' id='account_type' xstyle='width:225px;'>
<!--option value=''>Select</option-->
<option value='C' selected='selected'>Checking Account</option>  <!-- pass CHECKING to LF -->
<option value='S'>Savings Account</option>   <!-- pass SAVINGS  to LF -->
</select></td>
</tr>

<tr>
<td align='left'>Routing Number</td><td align='right'><input type='text' xstyle='width:215px;' placeholder='' name='routing_number' id='routing_number' value='' class="rtn" size='25' maxlength='25'></td>
</tr>

<tr>
<td align='left'>Account Number</td><td align='right'><input type='text' xstyle='width:215px;' placeholder='' name='acct_number' id='acct_number' value='' size='25' maxlength='25' onkeypress="return isNumber(event)"></td>
</tr>

<tr>
<td colspan='2' align='center'> How long have you had this account?</td>
</tr>

<tr>
<td align='left'>Number of Months</td><td align='right'><input type='text' xstyle='width:215px;' placeholder='' name='bank_months' id='bank_months' value='' size='5' maxlength='5' onkeypress="return isNumber(event)"></td>
</tr>

</table>

<!--<br><br>-->

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(5,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center' valign='middle'> <img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray1.png'><img src='gray0.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(7,1);" class="btn-orange right" style="margin-bottom: 15px;color:#fff;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart7-->

<!-- ////////////////////////// FORM PART 8 ///////////////////////// -->

<div name='formpart8' id='formpart8' style='display:none;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p8namespace' align='center'><span class="title">Personal Reference</span></div>
</div>

<div id='errpart8' style='padding-left:25px;'> &nbsp; </div>

<table width='100%' class='ftable'>
<tr>
<td align='left'>Reference First Name</td><td align='right'><input type='text' xstyle='width:195px;' placeholder='' name='ref_fname' id='ref_fname' value='' size='20' maxlength='255' onkeypress="return isAlpha(event)"></td>
</tr>
<tr>
<td align='left'>Reference Last Name</td><td align='right'><input type='text' xstyle='width:195px;' placeholder='' name='ref_lname' id='ref_lname' value='' size='20' maxlength='255' onkeypress="return isAlpha(event)"></td>
</tr>
<tr>
<td align='left'>Reference Relationship</td><td align='right'><select name='ref_relation' id='ref_relation' xstyle='width:205px;'>
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
<td align='left'>Reference Phone</td><td align='right'><input type='text' xstyle='width:195px;' placeholder='(000)000-0000' name='ref_phone' id='ref_phone' value='' class="phone" size='15' maxlength='13'></td>
</tr>
</table>

<!--<br><br><br>-->

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left' valign='top'><a href="#" onclick="return handle(6,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center' valign='middle'> <img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray0.png'><img src='gray1.png'> </td>
<td align='right' valign='top'><a href="#" onclick="return handle(8,1);" class="btn-orange right" style="margin-bottom: 15px;color:#fff;">Continue &#187;</a></td>
</tr>
</table>

</div>

<!--formpart8-->

<!-- ///////////////////////////// FORM PART 9 ////////////////////////// -->

<div name='formpart9' id='formpart9' style='display:none;'>

<div class='formRow mobileExtraPad'>
<div id='p9namespace'></div>
</div>
<table style="padding-left:25px;padding-right:25px;height:320px"><tr><td>
<p><b>Thank you for applying with The Money Company&trade;</b></p>

<p>Would you like to receive other offers from us? <select name='other_offers' id='other_offers'>
<option value='Y' selected='selected'>Yes</option>
<option value='N'>No</option>
</select></p>

<p>Upon submitting your information:</p>

<p>(1) We are going to utilize your mother's maiden name or birth city as your e-signature to authorize The Money Company&trade; and a lender to contact you via land and mobile telephone, SMS text, email and U.S. Mail.</p>
<p>(2) You are confirming that all of the information you provided today is accurate and you are requesting that we submit your information to our network of lenders.</p>
<p><i>Press 'Back' if you need to change anything.</i></p>
<p><i>Press Submit below to send your data to Lenders.</i></p>
</td><tr></table>

<!-- next prev buttons -->
<table width='100%'>
<tr>
<td align='left'><a href="#" onclick="return handle(7,0);" class="btn-gray left" style="margin-bottom: 15px;color:#fff;">&#171; Back</a></td>
<td align='center'> &nbsp; &nbsp; </td>
<td align='right' valign='top'><a href="#" onclick="post_form();" class="btn-orange right" style="margin-bottom: 15px;color:#fff;">Submit &#187;</a></td>
<!--td align='right'><input type='submit' name='submit' value='SUBMIT' class='btn-green' xstyle='width: 250px;'></td-->
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
<!--b>Questions?</b> <span class='grayText'>Call us 24/7 at:</span><br><span style='font-size: 32pt;' class='greenText'>800-577-1676</span-->
</div>

<!-- end body center -->
</div>

<!-- footer stripe across full width -->
<div id='footerStripe'>

<!-- footer center -->
<div id='footer'>&copy; 2013 The Money Company&trade;


 <p align='left'>
 *THE OPERATOR OF THIS WEB SITE IS NOT A DIRECT LENDER, does not broker loans to lenders and does not make short term cash loans or credit decisions. This Web Site does not constitute an offer or solicitation to lend. This site will submit the information you provide to a group of lenders. Most lenders fund the next business day. Providing your information on this Web Site does not guarantee that you will be approved for a short term cash loan. Not all lenders can provide $1,000 and not all applicants will be approved for their requested loan amounts. Loan terms, conditions and policies vary by lender, state and applicant qualifications. Late or missed loan payments may be subject to increased fees and interest rates. Loan extensions and renewals may not be offered by all lenders. Residents of some states may not be eligible for a short term cash loan based on lender requirements and compliance with state laws.
 </p>
<p align='left'>
 Loan repayment periods vary by lender and state. Lenders may use collection services for non-payment of loans. For details, questions or concerns regarding your short term cash loan, please contact your lender directly. Residents of some states may not be eligible for a short term cash loan based upon lender requirements. Credit checks, consumer credit reports and other personal data may be obtained by some lenders from Experian, Equifax, Trans Union or through alternative providers.
 </p>
 <p align='left'>
 Short-term cash loans are meant to provide you with short-term financing to solve immediate or temporary cash needs only and should not be considered or intended as a long-term financial solution.
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
<div class='modalTitle' id='titleCustomerService'>Contact Us</div>
<div class='modalTitle' id='titleCodeLenderConduct'>Code of Lender Conduct</div>
<div class='modalTitle' id='titleLegal'>Legal</div>
</div>

<!-- padding around inner content -->
<div class='pad'>

<!-- START INNER CONTENT --!>

<!-- ////////////////////////// MODEL OVERLAYS /////////////////////// -->

<div class='modalInner' id='HowItWorks'>
The Money Company&trade; attempts to match you with a cash lender to get you the short term cash loan you need. We are NOT a lender. Our service is absolutely free and all loan terms are between the borrower and the lender.
<br><br>
After you provide The Money Company&trade; with your information we'll immediately share it with a group of lenders. If a lender is interested in considering you for a loan we will direct you to said lender's web site. Upon reaching the lender's site, you will be able to read and agree to the terms and conditions of the loan.
<br><br>
Next, the lender will be in touch with you to confirm your personal information and finalize the loan. They may contact you in a number of ways, including a telephone call, email, fax or text messages. Once these steps are complete, you will be on your way to having cash deposited into your account!
<br><br>
1. Fill out The Money CompanyTM online application<br>
2. We will attempt to match you with a lender<br>
3. Finalize your loan with lender<br>
4. Cash deposited into your bank account<br>
<br><br>
It's that simple!
</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='FAQs'>
<b>Q: Is there an application fee?<br/>
</b>Q: No. The Money Company&trade; never charges applicants a fee to apply for a loan.<br/>
<br/>
<b>Q: Does submitting an online application obligate me to take out a loan?<br/>
</b>Q: No. Submitting an application with The Money Company&trade; only means you wish for one of our lenders to approve you for a loan and contact you to discuss the loan(s) details. You may ask any questions and withdraw your loan request if you choose. If you would like to proceed, just confirm your information and agree to loan terms from one of our lenders.<br/>
<br/>
<b>Q: Will bad credit disqualify me from getting a loan?<br/>
</b>Q: No. Many of our lenders do not perform traditional credit checks. As a result, many people with "less than perfect" credit take advantage of short-term loans and cash advances everyday!<br/>
<br/>
<b>Q: How much can I receive?<br/>
</b>Q: The Money Company&trade; works with lenders nationwide. Each lender has different amounts they will lend you based upon the information you provided in your application. You may request up to $1000, although the lender(s) will decide the loan amount.<br/>
<br/>
<b>Q: I have questions about my existing loan, where do I go?<br/>
</b>Q: The Money Company&trade; is not a lender and does not make short-term cash loans or credit decisions. Furthermore, the operator of this site is not a representative of any lender. All questions, concerns and details regarding your short-term cash loan can be answered directly by your lender. Lender information should be available in your approval e-mail you received when applying for the loan, your bank statement or by contacting your primary financial institution directly.<br/>
<br/>
<b>Q: Is qualifying easy?<br/>
</b>Q: Yes. Most times you'll qualify if you:<br/>
- Currently have a job (or receive regular income)<br/>
- Make at least $800 per month<br/>
- Are 18 years of age or older and a U.S. resident<br/>
- Have a checking account<br/>
<br/>
Other requirements may apply. If you have filed bankruptcy, bounced checks, have charge-offs or other credit problems; you may still qualify to get a short-term loan.<br/>
<br/>
<b>Q: Can I get an extension?<br/>
</b>Q: Lenders will often provide extensions; however, this is a decision made solely by your lender. The Money Company&trade; is not a lender and cannot make this decision. Please contact your lender for details.<br/>
<br/>
<b>Q: Why am I receiving communication from The Money Company&trade;?<br/>
</b>Q: You will receive communication from The Money Company&trade; containing special offers and promotional information. If you would like to remove your name from our communications list, please contact a service representative at The Money Company&trade;.<br/>
<br/>
<b>Q: I haven't received an email response about my loan? What do I do?<br/>
</b>Q: Sometimes email can land in your "Junk Email" or "Spam" folder - check there first to see if you've received an email from your lender. If you can't find it there, you can email us at customerservice@themoneycompany.com and we will try to respond as quickly as possible.<br/>
<br/>
<b>Q: I am self-employed. Can I still get a loan?<br/>
</b>Q: You may still qualify if you're self-employed. If you make at least $800 a month, and meet other lender requirements, you may be able to get a loan. Other conditions may apply and will vary from lender to lender. When we ask for your Employer information in our form, please give us the legal name of your corporate entity and the main phone number of the business.<br/>
<br/>
<b>Q: Why do you need my employer's phone number? Are you going to contact my employer?<br/>
</b>Q: Because we are not a lender, we won't contact your employer. Remember, our form is asking for the main number of your employer, so make sure you are providing the correct one. Every lender is different; however, to verify your employment, some lenders may call your employer at the number you provide.<br/>
<br/>
<b>Q: How soon do I get my money?<br/>
</b>Q: Typically, if you're approved and you accept the loan offer, you may be able to get the money deposited directly in as little as 24 hours. It's very similar to depositing a check at the bank in that the funds need time to clear. If you're approved on a business day, weekend, or holiday, that may also make a difference in how long it will take for you to get your money.<br/>
<br/>
<b>Q: Why do you need my banking information before I am approved?<br/>
</b>Q: Lenders need to make sure they can make a direct deposit into a valid bank account if you accept a loan offer. Applying at themoneycompany.com is totally free, which means you won't be charged with an application fee.<br/>
<br/>
<b>Q: Can I get a loan if I have a savings account? What if I get paid with a prepaid debit card?<br/>
</b>Q: While qualifications can vary from lender to lender, most lenders will require that you have a valid checking account so they can deposit the funds directly. Unfortunately, lenders can't deposit directly into a pre-paid debit card.<br/>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='CustomerService'>
Contact US:<br/>
<br/>
Thank you for your interest in contacting The Money Company&trade;. Our goal is to provide you with the best customer service in the industry. Many of your questions may be answered in the "How it Works" or "Frequently Asked Questions" which you can access via the "Learn More" button on the Home Page.<br/>
<br/>
A.) You can contact us via telephone Monday through Friday 8:00 AM - 6:00 PM Eastern at:<br/>
800-577-1676<br/>
<br/>
<br/>
B.) You may also contact us by email at:<br/>
CustomerService@TheMoneyCompany.com<br/>
<br/>
<br/>
C.) Or, you may write to us at:<br/>
The Money Company&trade;<br/>
P.O. Box 18035<br/>
Clearwater, Florida 33762<br/>
</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='CodeLenderConduct'>
<b>The Money Company&trade; Requires Lenders To Abide By The Following Guidelines:</b><br/>
<br/>
Lenders participating in The Money Company&trade; Network of Lenders and consumer support services are required to adhere to the following Lender Guidelines:<br/>
<br/>
- Lenders shall not use your information to sell or market other products or services unless you give them permission to do so.<br/>
<br/>
- Unless you give them permission and/or become delinquent in your loan repayments, Lenders shall not resell your information to any third-party, or otherwise use your information other than for the sole purpose of fulfilling the loan and/or communicating with you about your loan.<br/>
<br/>
- Lenders shall provide a customer service phone number and shall be responsive and helpful in addressing your concerns. The lender shall attend to your questions, issues, and complaints in a reasonable and professional manner, within 3 business days of request.<br/>
<br/>
- Lenders shall clearly and conspicuously present you with all relevant information about the terms and conditions of the loan before obtaining your consent, including, but not limited to:<br/>
<br/>
- The amount of the loan<br/>
- The term of the loan, including any renewal policies<br/>
- Schedule of payments, including when funds will be withdrawn<br/>
- Any fees or interest associated with the loan<br/>
- Consequences of late payment or non-payment<br/>
<br/>
- Lenders shall not engage in harassing or abusive collections practices and agree to comply with any and all applicable Federal and State collections practices laws and regulations.<br/>
<br/>
- Lenders shall comply with the Online Lenders Alliance Best Practices.<br/>
<br/>
The Money Company&trade; monitors lender practices for compliance with the above guidelines. In the event that The Money Company&trade; determines that a lender is not acting in accordance with these guidelines said lenders participation with The Money Company&trade; is subject to suspension and/or termination. Please contact The Money Company&trade; Customer Service to report any violation of the above.<br/>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='Legal'>
<a href='#' class='legalBtn' data-which='privacyPolicy'>Privacy Policy</a> &bull;
<a href='#' class='legalBtn' data-which='termsOfWebsiteUse'>Terms of Website Use</a><!-- &bull;
a href='#' class='legalBtn' data-which='security'>Security</a--><hr><br>

<div id='privacyPolicy' class='legalOption'>
<b>Privacy Policy (updated October 9, 2013)</b><br/>
<br/>
<u>Your privacy is important to us:</u> To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used.<br/>
<br/>
<u>Information We Collect:</u> This notice applies to all information collected or submitted on the themoneycompany.com website. Information collected includes: your name, street address, e-mail address, telephone number (home, work and mobile), date of birth, Social Security Number, financial account information, income information, employment information and other personal, financial, or demographic information.<br/>
<br/>
<u>Use of Information:</u> By agreeing to this Privacy Policy or by using this website, you authorize The Money Company&trade; to share the information you provided with short term lenders who will use your information to obtain other information about you from third-parties, such as your Social Security Number, where such information was incompletely or improperly filled out on our registration form. Such third-parties include, but are not limited to, consumer reporting agencies, consumer credit bureaus and other outside parties as permitted or required by applicable laws. Said information may be used to determine your eligibility for a short term loan. If you choose to provide information, such as your Social Security Number it may be used to determine your financial status. Upon qualification, your ultimate loan-specific financial information will be stored and utilized by your applicable lender pursuant to the terms of that lender's Privacy Policy.<br/>
<br/>Information collected by us may be added to our databases and used for future instant messaging, telemarketing, SMS text-messaging, e-mails or postal mailings regarding site updates, new products and services, upcoming events and/or status of orders and/or loans placed online. By using this website, you agree that you may be contacted in any manner contemplated in this section even if your number is found on a do-not-call registry or similar registry. We may also employ other companies and individuals to perform certain functions on our behalf. Examples include sending direct and electronic mail, removing duplicate information from customer lists, analyzing data, and providing marketing analysis. These agents have access to our users' personal information as needed to perform their functions for our sites, but may not be used for their own marketing purposes.  In addition, we may also disclose your personal information as required by law, such as to comply with a subpoena, or similar legal process.<br/>
<br/>You agree that by submitting your information at the website, you agree to receive mobile marketing including, but not limited to, text-message based marketing ("SMS Messages"), from us. You further agree that based on your individual carrier and plan, you may incur charges associated with such SMS Messages and that you agree to be solely responsible for such charges. You represent that you are at least 18 years of age and the owner or authorized user of the wireless device on which messages will be received, and that you are authorized to approve the applicable charges. Should you hereafter choose to opt-out of receiving SMS Messages from the individual sender, you may opt-out by texting "STOP" or "OPT-OUT" as specifically set forth in the communication. Notwithstanding that your mobile telephone number may be listed on state and/or federal do-not-call registries, we retain the right to contact you via SMS Messages. In addition, by registering and/or using the website, you agree that such act constitutes an inquiry and/or application for purposes of the Amended Telemarketing Sales Rule (16 CFR 310 et seq.), as amended from time to time (the "Rule"). Notwithstanding that your telephone number may be listed at the Federal Trade Commission's Do-Not-Call List, we retain the right to contact you via telemarketing in accordance with the Rule.<br/>
<br/>We may also use your personal, demographic and profile data to improve our website, for statistical analysis, for marketing and promotional purposes, and for editorial or feedback purposes. Information collected by us may be added to our databases and used for future e-mails, telemarketing or postal mailings regarding site updates, new products and services, upcoming events, and/or status of orders placed online. See "Your Opt-Out Rights" below.<br/>
<br/><u>Electronic Disclosure:</u> By submitting your information via the Internet, you agree to receive certain notifications, disclosures and/or documents electronically. This Consent to Electronic Disclosures applies to the information you are providing on this Site and any other communications we or any third party lender may provide to you. By submitting your information you agree to receive all such notifications, disclosures and/or documents from us or any third party lender in electronic form or online in accordance with this document. You may withdraw your consent prior to submitting your information by exiting the website or by closing your browser. However, you will not be able to submit your information if you withdraw your consent by exiting the website or closing your browser. Following the submission of your information, you may be able to withdraw your consent to future electronic disclosures from a third party lender by contacting the lender directly, but due to rules regarding the timing of delivery of disclosures that need to be made to you, you acknowledge that an opt-out notice may not be received and acted upon by such third party lender prior to such disclosures being delivered to you electronically. We do not process opt-out communications for third party lenders, and each third party lender establishes its own rules regarding opting out of future electronic communications and disclosures.<br/>
<br/>All notifications, disclosures and/or documents that we or any third party lender provide to you in electronic format will be provided either (i) via e-mail; (ii) by access to a secure customer service website which will be provided to you in an e-mail notice sent to you when the documents are available; (iii) by posting on this Site or the lender's site; (iv) by SMS text messaging to your mobile device; or (v) by posting on a website designated for that purpose. All notifications, disclosures and/or documents provided in electronic or paper format from us or any third party lender to you will be considered "in writing," and you should print a copy for your records. You may obtain any notifications, disclosures and/or documents in paper form without charge from us by printing them yourself from our website or the appropriate third party lender's website when available. To access, view and retain the notifications, disclosures, and/or documents available to you in electronic form, you must have Internet access, sufficient electronic storage capacity, an e-mail account with an Internet service provider e-mail software.<br/>
<br/>You agree and intend the federal Electronic Signatures in Global and National Commerce Act to apply to (i) your consent to receive notifications, disclosures and/or documents in electronic form; (ii) the information you provide, and (iii) our and/or any third party lenders' ability to conduct business with you by electronic means.<br/>
<br/>By completing and submitting your information, you (i) agree to provide us with an accurate and complete e-mail address and other required information requested on this Site; (ii) confirm your consent to receive notifications, disclosures and/or documents from us and any third party lender in electronic format; (iii) affirmatively demonstrate your ability to access the notifications, disclosures and/or documents in electronic form; (iv) confirm that you have provided a current e-mail address at which electronic notifications, documents and/or disclosures can be sent to you; (v) acknowledge that you have read and reviewed the terms contained in this Electronic Disclosure section; and (vi) agree to the terms contained in this Electronic Disclosure section.<br/>
<br/>We and any third party lender, reserve the right, in our sole discretion, to discontinue electronic provision of notifications and/or documents. You will be provided with notice of any such termination or change as required by law.<br/>
<br/>To facilitate electronic commerce, to reduce the expense of records storage, and to obtain the benefits of faster access to records, you acknowledge and agree that all records may be stored electronically; and that neither we nor any third party lender will retain and have no obligation to retain any original or electronic documents for any period of time beyond the regulatory requirements. This applies to all notifications, disclosures and/or documentation. You further acknowledge and understand that all original and electronic notification, disclosures and/or documentation will be routinely destroyed, but not before the period of time designated by regulatory requirements. Records may be stored electronically via imaging, scanning, filming or other technology used for the storage of documentation via internal processes or third-party processors that we or any third party lender approve for these services. You agree that such storage shall be secure, and further agree that such records shall for all purposes be recognized and admissible in evidence or otherwise to prove the agreements, rights and obligations of the parties pursuant to any such records. We will retain your information for as long as needed to provide you services. If you wish to request that we no longer use your information to provide you services please contact us at customerservice@themoneycompany.com. We will retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.<br/>
<br/><u>Third Party Sites:</u> Please be advised that in certain circumstances, we act as a limited agent for the actual third party lender or seller of the products and/or services available at or through the website. In these circumstances: (a) you will be redirected to the applicable third party lender's or seller's website after you have submitted your information; (b) we will collect and send your personal information to the respective third party lender or seller in connection with completing your application or purchase from the third party lenders or seller, as applicable; and (c) your application or purchase will subject you to the third party lender's or seller's privacy policy, as applicable. We do not endorse, nor are we responsible for the accuracy of the privacy policies and/or terms and conditions of each of the third party lenders or sellers that may advertise at the website. The entities that advertise and/or place banner ads at the website, including but not limited to these third party lenders and sellers, are independent third parties and are not affiliated with us. In addition, our website contains links to other third party websites and note that their privacy policy will govern the collection and use practices while on their website.<br/>
<br/><u>Display Advertising:</u> Our site has implemented Google Analytics features based on Display Advertising such as Remarketing and Google Display Network Impression Reporting. You can opt-out of Google Analytics for Display Advertising and customize Google Display Network ads using the Ads Settings at www.google.com. We use Remarketing with Google Analytics to advertise online. Third-party vendors, including Google, show our ads on sites across the Internet. We and our third-party vendors, including Google, use first-party cookies (such as the Google Analytics cookie) and third-party cookies (such as the DoubleClick cookie) together to inform, optimize, and serve ads based on someone's past visits to our website and to report how our ad impressions, other uses of ad services, and interactions with these ad impressions and ad services are related to visits to our site.<br/>
<br/><u>Your Opt-Out Rights:</u> You may opt-out of receiving communications from us and or our third-party associates by not submitting your information. During registration and/or when you submit personally identifiable information to us at the website, you have opted-in to request that we share your personal information with third party lenders to receive marketing communications for the specific purposes of receiving offers that you have applied for on our website. When contacted by any of these companies, you should notify them directly of your choices regarding their use and sharing of your information. To opt-out from receiving any additional email communications regarding this website, please send your request in writing via email to customerservice@themoneycompany.com<br/>
<br/><u>Access to Personally Identifiable Information:</u> We will retain your information for as long as your account is active or as needed to provide you services. If your personally identifiable information changes, if you wish to cancel your account or if you no longer desire our service, you may resubmit your request for information or services or request we no longer use the information previously collected by contacting us at customerservice@themoneycompany.com We will respond to your request for access within 30 days.  The foregoing notwithstanding, we will retain your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.<br/>
<br/><u>Our Commitment to Children's Privacy:</u> Protecting the privacy of children is especially important. For this reason, we never collect or maintain personal information at our website from those whom we know are under the age of 18 years old. In the event that information is inadvertently collected from children, it will not knowingly be used for any marketing or promotional purposes whatsoever, either inside or outside of our website. If we obtain actual knowledge that such information has been collected, that information will be immediately deleted from our database. The information and services provided by us or our affiliates, sponsors, and advertisers are not intended to be viewed by persons under 18 years old.<br/>
<br/><u>Changes in this Privacy Statement:</u> We may update this privacy statement to reflect changes to our information practices. If we make any material changes we will notify you by email, SMS Messages or by means of a notice on our websites prior to the change becoming effective. We encourage you to periodically review this page for the latest information on our privacy practices.<br/>
</div>


<div id='termsOfWebsiteUse' class='legalOption'>
Welcome to themoneycompany.com (the "Company") Web Site (the "Site")! Your access to and use of the Site is subject to the Terms of Website Use set forth in this Agreement.<br/>

Terms of Website Use<br/>
<br/><b>PLEASE READ THIS AGREEMENT CAREFULLY BEFORE ACCESSING THE SITE.</b><br/>
<br/>BY USING THE SITE, YOU WILL BE ACKNOWLEDGING THAT YOU HAVE READ THIS AGREEMENT AND AGREED WITHOUT LIMITATION OR QUALIFICATION, TO BE LEGALLY BOUND BY THIS AGREEMENT AND THE TERMS OF THE themoneycompany.com PRIVACY POLICY.<br/>
<br/>IF YOU DO NOT WISH TO BE BOUND BY THESE Terms of Website Use, YOU MAY NOT ACCESS OR USE THE SITE.<br/>
<br/>THE COMPANY MAY, FROM TIME TO TIME, MAKE CHANGES OR ADDITIONS TO THIS AGREEMENT, AND YOUR CONTINUED USE OF THE SITE AFTER THE COMPANY MAKES SUCH CHANGES OR ADDITIONS WILL SIGNIFY THAT YOU AGREE TO SUCH CHANGES OR ADDITIONS. YOU SHOULD THEREFORE PERIODICALLY VISIT THIS PAGE TO REVIEW THE THEN CURRENT Terms of Website Use.<br/>
<ul>
<br/><u>Authorized uses.</u> The Company, authorizes you to use this Site and to display its content but solely for your own personal noncommercial use. Any other use is strictly prohibited. You agree not to reproduce, duplicate, copy, sell, resell or exploit for any commercial purposes, any material at the Site, use of the Site, or access to the Site. By using this Site you acknowledge that you have read and understood the terms of the themoneycompany.com PRIVACY POLICY and agree to said terms.<br/>
<br/><u>Proprietary Rights.</u> Everything that appears on the Site is protected under the copyright laws of the United States and other countries and may not be used except as provided in these Terms of Website Use. The Company neither represents nor warrants that your use of materials displayed at the Site will not infringe rights of third parties.<br/>
<br/><u>Inaccuracies at the Site.</u> While the Company uses reasonable efforts to include accurate and up to date information at the Site, the Company makes no warranties or representations as to the Site's accuracy. The Company disclaims any and all liability for the accuracy, completeness, or correctness of such information.<br/>
<br/><u>Security at the Site.</u> While the Company uses reasonable efforts to safeguard the security of the Site, there can be no guaranty that such safeguards will successfully prevent unauthorized alterations in the content or functionality of the Site. The Company assumes no liability or responsibility for any unauthorized alterations in the content or functionality of the Site.<br/>
<br/><u>Disclaimer of Warranties.</u> Neither the Company nor any other party involved in creating, producing, or delivering the Site makes any representations about the suitability of the content of this Site for any purpose, nor that your use of the Site will be uninterrupted or error-free. EVERYTHING ON THIS SITE IS PROVIDED TO YOU "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT. Please note that some jurisdictions may not allow the exclusions of implied warranties, so some of the above exclusions may not apply to you. Check your local laws for any restrictions or limitations regarding the exclusion of implied warranties.<br/>
<br/><u>Limitation of Liabilities.</u> Neither the Company nor any other party involved in creating, producing, or delivering the Site assumes any responsibility, and shall not be liable for, any damages to, or viruses that may infect, your computer equipment or other property on account of your access to, use of, or browsing in the Site or your downloading of any materials, data, text, images, video, or audio from this Site. Your use of and browsing in the Site are at your risk. NO SUCH PARTY SHALL BE LIABLE FOR ANY INCIDENTAL, CONSEQUENTIAL, SPECIAL, INDIRECT, OR PUNITIVE DAMAGES ARISING OUT OF YOUR ACCESS TO, OR USE OF, THE SITE. IN NO EVENT SHALL THE COMPANYS TOTAL LIABILITY TO YOU FOR ALL DAMAGES, LOSSES, AND CAUSES OF ACTION WHETHER IN CONTRACT, WARRANTY, TORT (INCLUDING, BUT NOT LIMITED TO, NEGLIGENCE), STRICT LIABILITY OR OTHERWISE, EXCEED THE AMOUNT PAID BY YOU, IF ANY, FOR ACCESSING THIS SITE.<br/>
<br/><u>Content Submitted or Made Available for Inclusion at the Site.</u> Any unsolicited communication or material that you transmit to the Site by electronic mail or otherwise, including any data, questions, comments, suggestions, or the like is, and will be treated as, non-confidential and non-proprietary. Any unsolicited communication or material that you transmit or post may be used by the Company or its affiliates for any purpose, including, but not limited to, reproduction, disclosure, transmission, publication, broadcasting, distribution or posting. Furthermore, the Company will be free to use any ideas, concepts, know-how, or techniques contained in any unsolicited communication or material that you send to the Site for any purpose whatsoever including, but not limited to developing, manufacturing and marketing products using such information.<br/>
<br/><u>Images of People or Places.</u> Images of people or places displayed on the Site are either the property of, or used with permission by, the Company. Any unauthorized use of the images may violate copyright laws, trademark laws, the laws of privacy and publicity, and communications regulations and statutes.<br/>
<br/><u>Trademark Information.</u> The trademarks, logos, and service marks (collectively the "Trademarks") displayed on the Site, are registered and unregistered Trademarks of the Company and others. Nothing contained on the Site should be construed as granting, by implication, estoppel, or otherwise, any license or right to use any Trademark displayed on the Site without the written permission of the Company or such third party that may own the Trademarks displayed on the Site. Your use of the Trademarks displayed on the Site, or any other content on the Site, except as provided in these Terms of Website Use, is strictly prohibited. You are also advised the Company will aggressively enforce its intellectual property rights to the fullest extent of the law, including the seeking of criminal prosecution.<br/>
<br/><u>Links.</u> The Company has not reviewed any sites that may be linked to the Site and is not responsible for the content of any off-site pages or any other sites linked to the Site. Your linking to any other off-site pages or other sites is at your own risk.<br/>
<br/><u>Conduct of Site Visitors.</u> Although the Company may from time to time monitor or review postings, transmissions, and the like on the Site, the Company is under no obligation to do so and assumes no responsibility or liability arising from the content of any such locations nor for any error, defamation, libel, slander, omission, falsehood, obscenity, pornography, profanity, danger, or inaccuracy contained in any information within such locations on the Site. You are prohibited from posting or transmitting any unlawful, threatening, libelous, defamatory, obscene, scandalous, inflammatory, pornographic, or profane material or any material that could constitute or encourage conduct that would be considered a criminal offense, give rise to civil liability, or otherwise violate any law. The Company retains the right to remove any such posting and will fully cooperate with any law enforcement authorities or court order requesting or directing the Company to disclose the identity of anyone posting any such information or materials.<br/>
<br/><u>Dealings with Advertisers.</u> Your correspondence or business dealings with, or participation in promotions of, advertisers found on or through the Site, including payment and delivery of related goods or services, and any other terms, conditions, warranties or representations associated with such dealings, are solely between you and such advertiser. You agree that the Company shall not be responsible or liable for any loss or damage of any sort incurred as the result of any such dealings or as the result of the presence of such advertisers on the Site.<br/>
<br/><u>Notices.</u> The Company may give notice to its users by means of a general notice on this Site, electronic mail to a user's e-mail address on its records, or by written communication sent by first class mail to a user's address on its records.<br/>
<br/><u>International Use.</u> None of the products or underlying information or technology available at this Site may be downloaded or otherwise exported (i) into (or to a national or resident of) Cuba, Iraq, Iran, Libya, North Korea, Sudan, Syria, or any other country to which the United States has embargoed goods; or (ii) to anyone on the United Stated Treasury Department's list of Specially Designated Nationals or the U.S. Commerce Department's Table of Deny Orders. By downloading from, or using the Site, you represent and warrant that you are not located in, under the control of, or a national or resident of any such country or on any such list. You further agree to indemnify the Company against any all costs, liabilities, losses or expenses arising from, or relating to, any asserted violation by you of any of the laws and administrative regulations of the United States relating to the control of exports of commodities and technical data.<br/>
<br/><u>Monitoring, Copying, Altering or Interfering With the Site. </u>You agree that you will not use any robot, spider, Web crawler, screen scraper, automated query program or other automatic device or manual process to monitor or copy our web pages or the content contained herein without our prior expressed written permission. You agree that you will not use any device, software or routine to interfere or attempt to interfere with the proper working of the Site. You agree that you will not take any action that imposes an unreasonable or disproportionately large load on our infrastructure. You agree that you will not copy, reproduce, alter, modify, create derivative works, or publicly display any content from our Web site without the prior expressed written permission of the Company or the appropriate third party.<br/>
<br/><u>General Information.</u> These Terms of Website Use shall be governed by and construed in accordance with the laws of the home state of themoneycompany.com, without giving effect to any principles of conflicts of law. You agree that any action at law or in equity arising out of or relating to these Terms of Website Use shall be filed only in the state or federal courts located in home state of themoneycompany.com, and you hereby consent and submit to the personal jurisdiction of such courts for the purposes of litigating any such action. If any provisions of these Terms of Website Use shall be unlawful, void, or for any reason unenforceable, then the provision shall be deemed severable from these Terms of Website Use and shall not affect the validity and enforceability of any remaining provisions. Our failure to act with respect to a breach by you or others does not waive our right to act with respect to subsequent or similar breaches. This Agreement sets forth the entire understanding and agreement between us with respect to the subject matter hereof.<br/>
</ul>
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
<a href='#' class='showModal btn-green' style='color: #4ca50c;' data-which='HowItWorks'>How it works</a>
<a href='#' class='showModal btn-green' style='color: #4ca50c;' data-which='FAQs'>FAQ's</a>
<a href='#' class='showModal btn-green' style='color: #4ca50c;' data-which='CustomerService'>Contact Us</a>
<a href='#' class='showModal btn-green' style='color: #4ca50c;' data-which='CodeLenderConduct'>Code of Lender Conduct</a>
<a href='#' class='showModal btn-green' style='color: #4ca50c;' data-which='Legal'>Legal</a>
</div>
<!-- End inner padding -->
</div>
<!-- End modal padding -->
</div>

<!-- END MODAL -->

</div>
<div class='output' id='output' style="display:none;" ></div>
</body>

<script type="text/javascript" src="after.js"></script>
<script>
//FillData();
</script>

<div id='test-controls' name='test-controls'>
<!-- <a href='#' class='showModal' data-which='Timeout'>timeout test</a> -->
<a href='javascript:FillData();' title='Fill Data'>Fill</a>
<br/>
-
<br/>
<a href="#" onclick="post_form();" >Post</a>
<br/>
-
<br/>
<div id='ping'>?</div>
</div>

</html>
