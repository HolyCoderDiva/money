<?php
$host = 'localhost'; $user = 'a0014046'; $pass = 'mermaid5!';
$dbname = 'data';
@ $db = new mysqli($host,$user,$pass,$dbname);
if(mysqli_connect_errno()){ die('The connection to the database could not be established.'); }
if (!empty($_REQUEST['action']))
	{
//
// GRAB EVERY POSSIBLE FIELD (or '') WHILST ALSO APPENDING IT TO A GIANT PARAMETER STRING ($params) FOR REPOSTING
//
	if(!empty($_REQUEST['ckm_campaign_id'])) // The POST array has form data
		{
		$dyno="SET ";
		$params='';
		$ckm_campaign_id=t('ckm_campaign_id');
		$ckm_key=t('ckm_key');
		$ip_address=t('ip_address');
		$first_name=t('first_name');
		$last_name=t('last_name');
		$gender=t('gender');
		$dob=t('dob');
		$is_citizen=t('is_citizen');
		$is_military=t('is_military');
		$ssn=t('ssn');
		$drivers_lic=t('drivers_lic');
		$dlstate=t('dlstate');
		$email=t('email');
		$primary_phone=t('primary_phone');
		$primary_phone2=t('primary_phone2');
		$secondary_phone=t('secondary_phone');
		$cell_phone=t('cell_phone');
		$cell_phone2=t('cell_phone2');
		$best_time_to_call=t('best_time_to_call');
		$contact_time=t('contact_time');
		$address=t('address');
		$address_2=t('address_2');
		$city=t('city');
		$state=t('state');
		$zip=t('zip');
		$country=t('country');
		$timeatresidence=t('timeatresidence');
		$address_months=t('address_months');
		$address_years=t('address_years');
		$rent_own=t('rent_own');
		$employer=t('employer');
		$emp_years=t('emp_years');
		$emp_address=t('emp_address');
		$emp_address_2=t('emp_address_2');
		$emp_city=t('emp_city');
		$emp_state=t('emp_state');
		$emp_zip=t('emp_zip');
		$emp_phone=t('emp_phone');
		$emp_phone_ext=t('emp_phone_ext');
		$emp_fax=t('emp_fax');
		$super_phone=t('super_phone');
		$super_name=t('super_name');
		$super_phone_ext=t('super_phone_ext');
		$hire_date=t('hire_date');
		$emp_type=t('emp_type');
		$job_title=t('job_title');
		$workshift=t('workshift');
		$gross_income=t('gross_income');
		$net_income=t('net_income');
		$income_type=t('income_type');
		$employed_months=t('employed_months');
		$pay_period=t('pay_period');
		$pay_type=t('pay_type');
		$last_pay_date=t('last_pay_date');
		$next_pay_date=t('next_pay_date');
		$second_pay_date=t('second_pay_date');
		$requested_amount=t('requested_amount');
		$roundedrequestamount=t('roundedrequestamount');
		$requestedduedate=t('requestedduedate');
		$bank_name=t('bank_name');
		$bank_phone=t('bank_phone');
		$account_holder=t('account_holder');
		$routing_number=t('routing_number');
		$acct_number=t('acct_number');
		$account_type=t('account_type');
		$bank_months=t('bank_months');
		$bank_years=t('bank_years');
		$timeatbank=t('timeatbank');
		$active_checking=t('active_checking');
		$outstand_amt=t('outstand_amt');
		$ref_fname=t('ref_fname');
		$ref_lname=t('ref_lname');
		$ref_relation=fix_ref_relation('ref_relation');
		$ref_phone=t('ref_phone');
		$other_offers=t('other_offers');
		$store_key=t('store_key');
		$ref_url=t('ref_url');
		$tier_key=t('tier_key');
		$aff_id=t('aff_id');
		$sub_id=t('sub_id');
		$test=t('test');
		$effectivedate=t('effectivedate');
		$ach=t('ach');
		$optin=t('optin');
		}
		else exit('Proxy: Missing Campaign ID!');
	switch($_REQUEST['action'])
		{
		case 'store':
//  #####  ####### ####### ######  ####### 
// #     #    #    #     # #     # #       
// #          #    #     # #     # #       
//  #####     #    #     # ######  #####   
//       #    #    #     # #   #   #       
// #     #    #    #     # #    #  #       
//  #####     #    ####### #     # ####### 
			$dyno="INSERT INTO sales ".$dyno."`lender`=0";
			$result = $db->query($dyno);
			if ($db->error != '') exit($db->error);
			echo 'Data ID#  '.$db->insert_id;
			//echo $dyno;
			break;
// #     # ######  ######     #    ####### #######    ######  ######  
// #     # #     # #     #   # #      #    #          #     # #     # 
// #     # #     # #     #  #   #     #    #          #     # #     # 
// #     # ######  #     # #     #    #    #####      #     # ######  
// #     # #       #     # #######    #    #          #     # #     # 
// #     # #       #     # #     #    #    #          #     # #     # 
//  #####  #       ######  #     #    #    #######    ######  ######  
		case 'update':
			$dyno="UPDATE sales ".$dyno."updated=now() where id=".t('id');
			$result = $db->query($dyno);
			if ($db->error != '') exit($db->error);
			$result=$db->query( "SELECT * FROM sales WHERE id=".t('id')." LIMIT 1");
			if ($result->num_rows != 1)
				exit('');
			else
				exit(json_encode($result->fetch_object()));
			break;
//  #####  ####### #######    #       ####### #     # ######  ####### ######  
// #     # #          #       #       #       ##    # #     # #       #     # 
// #       #          #       #       #       # #   # #     # #       #     # 
// #  #### #####      #       #       #####   #  #  # #     # #####   ######  
// #     # #          #       #       #       #   # # #     # #       #   #   
// #     # #          #       #       #       #    ## #     # #       #    #  
//  #####  #######    #       ####### ####### #     # ######  ####### #     
		case 'lend':
			$post_url="http://rckstrtrk.com/d.ashx";
			$test_url="http://rckstrtrk.com/d.ashx?ckm_test=1";
			$ch = curl_init( $test_url );
			curl_setopt( $ch, CURLOPT_POST, 1);
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
			curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt( $ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec( $ch );
			file_put_contents('/var/www/money/last.txt',"$response\n---\n$params\n");
			exit($response);

		default:

		}

	}
else {
// ####### #######  #####  #######    ######     #    #######    #    
//    #    #       #     #    #       #     #   # #      #      # #   
//    #    #       #          #       #     #  #   #     #     #   #  
//    #    #####    #####     #       #     # #     #    #    #     # 
//    #    #             #    #       #     # #######    #    ####### 
//    #    #       #     #    #       #     # #     #    #    #     # 
//    #    #######  #####     #       ######  #     #    #    #     #?>
SOF=SOD
ckm_campaign_id=2143
ckm_key=SphZpCk2ucs
ip_address=test
first_name=Joe
last_name=Shmoe
gender=M
dob=08/17/1965
is_citizen=1
is_military=zero!
ssn=123-45-6789
drivers_lic=S222-33-444-555-0
dlstate=FL
email=me@metml.com
primary_phone=7277762530
primary_phone2=7275311383
secondary_phone=7275311383
cell_phone=7274887778
cell_phone2=7275311383
best_time_to_call=E
contact_time=E
address=123 Sesame St
address_2=
city=Largo
state=FL
zip=33333
country=US
timeatresidence=
address_months=6
address_years=10
rent_own=R
employer=United Nations
emp_years=10
emp_address=42nd St
emp_address_2=1st Ave
emp_city=New York
emp_state=NY
emp_zip=10017
emp_phone=(212) 963-8687
emp_phone_ext=
emp_fax=
super_phone=
super_name=
super_phone_ext=
hire_date=
emp_type=F
job_title=Project Manager
workshift=O
gross_income=
net_income=99999
income_type=E
employed_months=6
pay_period=W
pay_type=D
last_pay_date=06/30/2013
next_pay_date=07/15/2013
second_pay_date=07/30/2013
requested_amount=1000
roundedrequestamount=1000
requestedduedate=08/15/2013
bank_name=Fred's Bank
bank_phone=212-555-1212
account_holder=Joe Schmoe
routing_number=000000204
acct_number=99999999
account_type=C
bank_months=6
bank_years=10
timeatbank=?
active_checking=?
outstand_amt=0
ref_fname=Walter
ref_lname=Schmoe
ref_relation=P
ref_phone=7276428768
other_offers=
store_key=
ref_url=http://themoneycompany.com
tier_key=
aff_id=
sub_id=
test=n
effectivedate=8/12/2013
ach=?
optin=?
EOF=EOD
<?
}
// t($f) builds BLANK or REQUEST parameter if it exists, and adds it to a global $params string for posting
function t($f)
	{
	global $dyno;
	global $params;
	global $db;
	// return cleaned up POST data for $f or blank
	if (empty($_REQUEST[$f]))
		return('');
	else
		{

		$dyno.="$f='".$db->real_escape_string($_REQUEST[$f])."',";
		$params.=$f.'='.r($_REQUEST[$f]).'&'; // for call to lender
		return($_REQUEST[$f]);
		}
	}
// stupid form won't submit a 0
function r($t)
	{
	$t=str_replace('zero!','0',$t);
	$t=str_replace('Rent Home','R',$t);
	$t=str_replace('Own Home','R',$t);
	$t=str_replace('Direct Deposit','D',$t);
	$t=str_replace('Payroll/Paycheck','P',$t);
	$t=str_replace('Part Time','P',$t);
	$t=str_replace('Full Time','F',$t);
	$t=str_replace('Employment','E',$t);
	$t=str_replace('Disability','D',$t);
	$t=str_replace('S.S.I.','S',$t);
	$t=str_replace('Unemployment','U',$t);
	$t=str_replace('Poo?','P',$t);
	$t=str_replace('Other','O',$t);
	$t=str_replace('Weekly','W',$t);
	$t=str_replace('Bi-Weekly','B',$t);
	$t=str_replace('Semi-Monthly','S',$t);
	$t=str_replace('Monthly','M',$t);
	$t=str_replace('Checking Account','C',$t);
	$t=str_replace('Savings Account','S',$t);
//also Afternoon|Morning|Evening
	return($t);
	}
function fix_ref_relation($t)
	{
	$t=sr($t,'S', 'Spouse');
	$t=sr($t,'L', 'Sibling');
	$t=sr($t,'P', 'Parent');
	$t=sr($t,'C', 'Co-Worker');
	$t=sr($t,'F', 'Friend');
	$t=sr($t,'B', 'Boyfriend');
	$t=sr($t,'G', 'Girlfriend');
	$t=sr($t,'R', 'Brother');
	$t=sr($t,'I', 'Sister');
	$t=sr($t,'O', 'Other');
	return($t);
	}
function sr($txt,$rw,$sf)
	{ return(str_replace($sf,$rw,$txt)); }

?>