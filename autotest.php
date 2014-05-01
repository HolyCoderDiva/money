<?php

$ip      = $_SERVER['REMOTE_ADDR'];      // client ip address
$browser = $_SERVER['HTTP_USER_AGENT'];  // client browser info

$output='';

?>

<!DOCTYPE html>

<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->

<html><!--<![endif]-->

<head>

<meta charset="utf-8">

<title>Automated Testing for The Money Company multi-part form</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" type='image/jpg' href="favicon.jpg">

<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="DatePicker.css">
		
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="custom.min.js"></script>
<script type="text/javascript" src="test_form.js"></script>
<script type="text/javascript" src="DatePicker.js"></script>

<script language="Javascript">

function FillData()
{
   document.bigform.first_name.value = "PhilTest";  
   document.bigform.mid_name.value = "X";    
   document.bigform.last_name.value = "VazTest";   
   document.bigform.email.value = "philvaz@philvaz.com";
   document.bigform.primary_phone.value = "(727)191-9191";
   document.bigform.cell_phone.value = "(813)191-9191";
   document.bigform.secondary_phone.value = "(727)919-1919";
   document.bigform.best_phone.value = "H";
   document.bigform.best_time_to_call.value = "A";
   document.bigform.dob.value = "09/09/1991";
   document.bigform.ssn.value = "191-19-9191";
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
   document.bigform.address_months.value = "24";
   document.bigform.rent_own.value = "R";
   document.bigform.income_type.value = "S";
   document.bigform.pay_type.value = "D";
   document.bigform.pay_period.value = "W";
   document.bigform.take_home_pay.value = "1111";
   document.bigform.next_pay_date.value = "10/01/2013";
   document.bigform.second_pay_date.value = "10/15/2013";
   document.bigform.net_income.value = "4444";
   document.bigform.employer.value = "Vaz Software LLC";
   document.bigform.emp_phone.value = "(727)919-9191";
   document.bigform.emp_phone_ext.value = "999";
   document.bigform.employed_months.value = "8";
   document.bigform.bank_name.value = "Achieva CU";
   document.bigform.bank_city.value = "St Petersburg";
   document.bigform.bank_state.value = "FL";
   document.bigform.account_type.value = "C";
   document.bigform.routing_number.value = "263182312";
   document.bigform.acct_number.value = "000009191919";
   document.bigform.bank_months.value = "36";
   document.bigform.ref_fname.value = "Steve";
   document.bigform.ref_lname.value = "Jobs";
   document.bigform.ref_relation.value = "C";
   document.bigform.ref_phone.value = "(999)919-9191";
   document.bigform.requested_amount.value = "900";
   document.bigform.other_offers.value = "Y";

   document.bigform.accepted_check.checked = true;
      
   alert("Test Data now fills the form - you can go back and edit the form");
}

function ClearData()
{
   document.bigform.first_name.value = "";  
   document.bigform.mid_name.value = "";    
   document.bigform.last_name.value = "";   
   document.bigform.email.value = "";
   document.bigform.primary_phone.value = "";
   document.bigform.cell_phone.value = "";
   document.bigform.secondary_phone.value = "";
   document.bigform.best_phone.value = "";
   document.bigform.best_time_to_call.value = "";
   document.bigform.dob.value = "";
   document.bigform.ssn.value = "";
   document.bigform.drivers_lic.value = "";
   document.bigform.dlstate.value = "";
   document.bigform.mothers_maiden_name.value = "";
   document.bigform.mothers_birth_city.value = "";
   document.bigform.is_military.value = "";
   document.bigform.address.value = "";
   document.bigform.address_2.value = "";
   document.bigform.city.value = "";
   document.bigform.state.value = "";
   document.bigform.zip.value = "";
   document.bigform.address_months.value = "";
   document.bigform.rent_own.value = "";
   document.bigform.income_type.value = "";
   document.bigform.pay_type.value = "";
   document.bigform.pay_period.value = "";
   document.bigform.take_home_pay.value = "";
   document.bigform.next_pay_date.value = "";
   document.bigform.second_pay_date.value = "";
   document.bigform.net_income.value = "";
   document.bigform.employer.value = "";
   document.bigform.emp_phone.value = "";
   document.bigform.emp_phone_ext.value = "";
   document.bigform.employed_months.value = "";
   document.bigform.bank_name.value = "";
   document.bigform.bank_city.value = "";
   document.bigform.bank_state.value = "";
   document.bigform.account_type.value = "";
   document.bigform.routing_number.value = "";
   document.bigform.acct_number.value = "";
   document.bigform.bank_months.value = "";
   document.bigform.ref_fname.value = "";
   document.bigform.ref_lname.value = "";
   document.bigform.ref_relation.value = "";
   document.bigform.ref_phone.value = "";
   document.bigform.requested_amount.value = "";
   document.bigform.other_offers.value = "";

   document.bigform.accepted_check.checked = false;
      
   alert("Data is now cleared!");
}

</script>
	
</head>

<body>

<script language="Javascript">

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
<a href='javascript:FillData();'  title='Fill Data'>Fill with Random Test Data</a><br><br>
<a href='javascript:ClearData();' title='Clear Data'>Clear all Data</a><br><br>
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

<form name='bigform' id='bigform' action='#' method='post' onsubmit="return test_form();">

<!-- ///////////////////// FORM PART 1 /////////////////////////// -->

<div name='formpart1' id='formpart1' style='display:block;'>  <!-- or inline -->

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
<p align="center">

<!-- learn more button -->
</p>

</div>

<!--formpart1-->

<!-- ////////////////// FORM PART 2 /////////////////// -->

<div name='formpart2' id='formpart2' style='display:block;' align='center'>

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


</div>

<!--formpart2-->

<!-- /////////////////////// FORM PART 3 ////////////////////////// -->

<div name='formpart3' id='formpart3' style='display:block;' align='center'>

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


</div>

<!--formpart3-->

<!-- ////////////////////// FORM PART 4 ////////////////////// -->

<div name='formpart4' id='formpart4' style='display:block;' align='center'>

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

</div>

<!--formpart4-->

<!-- /////////////////// FORM PART 5 ///////////////// -->

<div name='formpart5' id='formpart5' style='display:block;' align='center'>

<div class='formRow mobileExtraPad'>
<div id='p5namespace' align='center'><span class="title">Your Income</span></div>
</div>

<div id='errpart5'> &nbsp; </div>

<table width='100%'>

<tr>
<td align='left'>Income Type</td><td align='left'><select name='income_type' id='income_type' style='width:115px;'>
<option value=''>Select</option>
<option value='E'>Employment</option> <!-- pass either EMPLOYMENT or BENEFITS to LF -->
<option value='D'>Disability</option>
<option value='S'>S.S.I.</option>
<option value='U'>Unemployment</option>
<option value='O'>Other</option>
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


</div>

<!--formpart5-->

<!-- //////////////////////// FORM PART 6 ///////////////////////// -->

<div name='formpart6' id='formpart6' style='display:block;' align='center'>

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

</div>

<!--formpart6-->

<!-- //////////////////////// FORM PART 7 //////////////////////// -->

<div name='formpart7' id='formpart7' style='display:block;' align='center'>

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


</div>

<!--formpart7-->

<!-- ////////////////////////// FORM PART 8 ///////////////////////// -->

<div name='formpart8' id='formpart8' style='display:block;' align='center'>

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

</div>

<!--formpart8-->

<!-- ///////////////////////////// FORM PART 9 ////////////////////////// -->

<div name='formpart9' id='formpart9' style='display:block;'>

<div class='formRow mobileExtraPad'>
<div id='p9namespace'></div>
</div>

<p><b>Thank you for applying with The Money Company!</b></p>

<p>Would you like to receive other offers from us? <select name='other_offers' id='other_offers'>
<option value='Y'>Yes</option>
<option value='N'>No</option>
</select></p>

<p><i>Press Submit below to perform tests with LeadFlash....check file tmc_test.log when done.....</i></p>

<!-- next prev buttons -->

<p align='center'><input type='submit' name='submit' value='SUBMIT' class='btn-green' style='width: 250px;'></p>

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
<div id='footer'>&copy; 2013 The Money Company &bull; Testing Automated Form</a>

   
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

</div>

<!-- padding around inner content -->
<div class='pad'>

<!-- START INNER CONTENT --!>

<!-- ////////////////////////// MODEL OVERLAYS /////////////////////// -->

<div class='modalInner' id='HowItWorks'>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='FAQs'>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='CustomerService'>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='CodeLenderConduct'>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='Legal'>

<div id='privacyPolicy' class='legalOption'>


</div>
<div id='termsOfWebsiteUse' class='legalOption'>

</div>
<div id='security' class='legalOption'>

</div>

</div>

<!-- END INNER CONTENT -->

<!-- START INNER CONTENT -->

<div class='modalInner' id='Timeout' style='text-align:center;'>

</div>

<!-- END INNER CONTENT -->

<!-- Space and horiztonal rule -->
<br><br>
<div class='centerText'><img src='hr.png' alt='horizontal rule'></div>

<!-- Modal menu items -->
<div class='centerText'>

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
