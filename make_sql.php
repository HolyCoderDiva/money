<?php
function form_input($field_name,$is_required,$field_type,$max_length,$description)
	{
	return("`$field_name` VARCHAR($max_length) NOT NULL DEFAULT '\\'\\'' comment '$description'\n");
	}

echo ("CREATE TABLE `test` (\n");

$o=form_input('ckm_campaign_id','Yes','hidden','','Assigned by RockStarAN.com for each campaign');
$o.=form_input('ckm_key','Yes','hidden','','Password assigned by RockStarAN.com for each campaign');
$o.=form_input('ckm_subid','No','text','50','Optional tracking parameter');
$o.=form_input('first_name','Yes','text','25','First Name');
$o.=form_input('last_name','Yes','text','25','Last Name');
$o.=form_input('address','Yes','text','40','Address');
$o.=form_input('city','Yes','text','39','City');
$o.=form_input('zip','Yes','zip','8','Zip');
$o.=form_input('email','Yes','text','60','Email Address');
$o.=form_input('secondary_phone','Yes','phone','12','Secondary Phone');
$o.=form_input('primary_phone','No','phone','12','Primary Phone');
$o.=form_input('cell_phone','No','phone','12','Cell Phone');
$o.=form_input('contact_time','No','M|A|E','1','Contact Time');
$o.=form_input('ip_address','Yes','text','15','IP Address');
$o.=form_input('country','No','Country Abv (e.g. US|MX)','2','Country');
$o.=form_input('dob','Yes','date','','Birthdate');
$o.=form_input('ssn','Yes','text','','Social Security Number');
$o.=form_input('drivers_lic','Yes','text','21','Drivers License Number');
$o.=form_input('employer','Yes','text','100','Employer');
$o.=form_input('net_income','Yes','number','','Net Income');
$o.=form_input('income_type','Yes','E|D|S|U|P|O','','Income Type');
$o.=form_input('employed_months','Yes','number','','Employed Months');
$o.=form_input('pay_period','Yes','W|B|S|M','','Pay Period');
$o.=form_input('pay_type','Yes','D|P','','Pay Type');
$o.=form_input('bank_name','Yes','text','50','Bank Name');
$o.=form_input('routing_number','Yes','text','9','Routing Number');
$o.=form_input('acct_number','Yes','text','17','Account Number');
$o.=form_input('is_military','Yes','yesno','','Is Military');
$o.=form_input('requested_amount','Yes','number','','Requested Amount');
$o.=form_input('gender','No','M|F','','Gender');
$o.=form_input('dlstate','Yes','text','2','Driver License State');
$o.=form_input('address_2','No','text','100','Address 2');
$o.=form_input('address_months','Yes','number','','Address Months');
$o.=form_input('address_years','No','number','','Address Years');
$o.=form_input('rent_own','Yes','R|O','','Rent Own');
$o.=form_input('is_citizen','No','yesno','','Is Citizen');
$o.=form_input('other_offers','No','yesno','','Other Offers');
$o.=form_input('emp_years','No','number','','Employed Years');
$o.=form_input('emp_address','No','text','300','Employer Address');
$o.=form_input('emp_address_2','No','text','100','Employer Address 2');
$o.=form_input('emp_city','No','text','50','Employer City');
$o.=form_input('emp_state','No','text','2','Employer State');
$o.=form_input('emp_zip','No','text','10','Employer_Zip');
$o.=form_input('emp_phone','Yes','text','13','Employer Phone');
$o.=form_input('emp_phone_ext','No','number','','Employer Phone Ext');
$o.=form_input('emp_fax','No','text','13','Employer Fax');
$o.=form_input('super_phone','No','text','13','Supervisor Phone');
$o.=form_input('super_name','No','text','100','Supervisor Name');
$o.=form_input('super_phone_ext','No','number','','Supervisor Phone Ext');
$o.=form_input('hire_date','No','date','','Hire Date');
$o.=form_input('emp_type','No','P|F','','Employed Type');
$o.=form_input('job_title','Yes','text','100','Job Title');
$o.=form_input('workshift','No','O|T|S|F','','Workshift');
$o.=form_input('gross_income','No','number','','Gross Monthly Income');
$o.=form_input('last_pay_date','Yes','date','','Last Paydate');
$o.=form_input('next_pay_date','Yes','date','','Next Paydate');
$o.=form_input('second_pay_date','Yes','date','','Second Paydate');
$o.=form_input('account_holder','No','text','100','Account Holder');
$o.=form_input('bank_phone','No','text','13','Bank Phone');
$o.=form_input('account_type','Yes','C|S','','Account Type');
$o.=form_input('bank_months','Yes','number','','Bank Months');
$o.=form_input('bank_years','No','number','','Bank Years');
$o.=form_input('outstand_amt','No','number','','Outstanding Amount');
$o.=form_input('active_checking','No','text','','Active Checking');
$o.=form_input('ref_fname','No','text','50','Reference First Name');
$o.=form_input('ref_lname','No','text','50','Reference Last Name');
$o.=form_input('ref_relation','No','S|L|P|C|F|B|G|R|I|O','','Reference Relation');
$o.=form_input('ref_phone','No','text','13','Reference Phone');
$o.=form_input('store_key','No','text','36','Store Key');
$o.=form_input('ref_url','Yes','text','300','Referring URL');
$o.=form_input('tier_key','No','text','64','Tier Key');
$o.=form_input('aff_id','No','text','30','Affiliate ID');
$o.=form_input('sub_id','No','text','30','Sub ID');
$o.=form_input('test','No','yesno','','Test');
$o.=form_input('cell_phone2','Yes','text','13','CellPhone2');
$o.=form_input('primary_phone2','Yes','text','13','HomePhone2');
$o.=form_input('state','No','text','','State');
$o.=form_input('timeatbank','No','text','','Time at Bank');
$o.=form_input('timeatresidence','No','text','','Time at Residence');
$o.=form_input('best_time_to_call','No','A|M|E','','Best Time to Call');
$o.=form_input('requestedduedate','No','text','20','Requested Due Date');
$o.=form_input('effectivedate','No','text','20','Effective Date');
$o.=form_input('roundedrequestamount','No','text','6','Requested Amount rounded');
$o.=form_input('ach','No','text','','1495ach');
$o.=form_input('optin','No','text','','Optin program');

echo $o;

echo (')');
echo ('COLLATE=\'latin1_swedish_ci\'\n');
echo ('ENGINE=InnoDB;\n');

?>
