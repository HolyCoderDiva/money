<?php
error_reporting(E_ALL);
$host = 'localhost'; $user = 'root'; $pass = 'mermaid'; $dbname = 'data';
@$db = new mysqli($host,$user,$pass,$dbname);

if(mysqli_connect_errno()) { die('Connection to database could not be established.'); }

if (!empty($_REQUEST['action'])) // do we have an action?
{
   if(!empty($_REQUEST['first_name'])) // no first name? something is wrong, abort!
   {
      // GET ALL FIELDS WHILE APPENDING TO PARAMETER STRING FOR REPOSTING
      // POST form array has all form data

      $sql                  = "SET ";  // initial sql params for db insert (form fields identical to db table)
      $params               = '';      // LeadFlash post params (field names when different must be replaced)

      // form part 1
      $first_name           = t('first_name');
      $mid_name             = t('mid_name');
      $last_name            = t('last_name');
      $email                = t('email');

      // form part 2
      $primary_phone        = t('primary_phone');
      $cell_phone           = t('cell_phone');
      $secondary_phone      = t('secondary_phone');
      $best_phone           = t('best_phone');
      $best_time_to_call    = t('best_time_to_call');

      // form part 3
      $dob                  = t('dob');
      $ssn                  = t('ssn');
      $drivers_lic          = t('drivers_lic');
      $dlstate              = t('dlstate');
      $mothers_maiden_name  = t('mothers_maiden_name');
      $mothers_birth_city   = t('mothers_birth_city');
      $is_military          = t('is_military');

      // form part 4
      $address              = t('address');
      $address_2            = t('address_2');
      $city                 = t('city');
      $state                = t('state');
      $zip                  = t('zip');
      $address_months       = t('address_months');
      $rent_own             = t('rent_own');

      // form part 5
      $income_type          = t('income_type');
      $pay_type             = t('pay_type');
      $pay_period           = t('pay_period');
      $take_home_pay        = t('take_home_pay'); // and remove $ and ,

      $next_pay_date        = t('next_pay_date');
      $second_pay_date      = t('second_pay_date');
      $net_income           = t('net_income');  // and remove $ and ,

      // form part 6
      $employer             = t('employer');
      $emp_phone            = t('emp_phone');
      $emp_phone_ext        = t('emp_phone_ext');
      $employed_months      = t('employed_months');

      // form part 7
      $bank_name            = t('bank_name');
      $bank_city            = t('bank_city');
      $bank_state           = t('bank_state');
      $account_type         = t('account_type');
      $routing_number       = t('routing_number');
      $acct_number          = t('acct_number');
      $bank_months          = t('bank_months');

      // form part 8
      $ref_fname            = t('ref_fname');
      $ref_lname            = t('ref_lname');
      $ref_relation         = t('ref_relation');
      $ref_phone            = t('ref_phone');

      $requested_amount     = t('requested_amount');

      $other_offers         = t('other_offers');

      $ip_addr              = t('ip_addr');
      $browser_info         = t('browser_info');

      $post_url             = "https://www.502011tr021731axxxsb.com/api/leadpost.aspx";
      $test_url             = "https://www.502011tr021731axxxsb.com/api/leadpost.aspx?test_app=1";

   } // end if first_name found

   else exit('Error: Missing First Name, all fields assumed blank!'); // abort!

   // check for action: STORE, UPDATE, or POST

   switch($_REQUEST['action'])
   {
   	  case 'ping':

      if (empty($_REQUEST['pid']))
	  	{
	      $sql = "INSERT INTO ping " . $sql;
$line = ">>>>> Start $ip_addr $first_name $last_name $email  " . date('Y-m-d H:i:s') . "<br/>";
file_put_contents('visitors.html', $line . PHP_EOL, FILE_APPEND);
		}
	   else
	    {
			$sql = "UPDATE ping " . $sql. ",phase=".$_REQUEST['phase'].",updated=NOW() WHERE id=".$_REQUEST['pid'];
$phase=$_REQUEST['phase'];
$line = "<i>Modal box ($phase) $ip_addr $first_name $last_name $email  " . date('Y-m-d H:i:s') . "</i><br/>";
file_put_contents('visitors.html', $line . PHP_EOL, FILE_APPEND);

		}
      $result = $db->query($sql);
      if ($db->error != '')
      {
		 FILE_PUT_CONTENTS('ping_error.log',"Error:\n$sql\n".$db->error."\n------------------------\n",FILE_APPEND);
         exit('err');
      }

      if (empty($_REQUEST['pid']))
	  	{
      	$newid = $db->insert_id;
	  	exit("$newid");
		}
	  else
	  	{
		exit('OK');
		}
	  break;


      case 'store':   //// STORE IN DB AND SEND TO LEAD FLASH

      $OpenFile = fopen("tmc_all.log", "a"); // append latest data to log file

      //print"<br>Attempting to store data....";
      //print"<br><br>final sql fields = " . $sql; // for testing

      $sql = "INSERT INTO sales " . $sql;
      $result = $db->query($sql);
      if ($db->error != '')
      {
         if ($OpenFile)
         {
            $FileData = $db->error . "\n";
            fwrite($OpenFile, $FileData);
         }
         exit('sql error - see log');
      }

      $newid = $db->insert_id;  // last inserted id, need for LeadFlash

      //print"<br><br>Successfully inserted. New ID = " . $newid . "<br>";  // for testing

      // add to beginning of params
      $predata = "vendor_id=847952&vendor_pass=437861371&lead_type_id=14&tag=1&test_app=0&auto_redirect=0&accepted_terms=1&is_live=1&";

      $params = $predata . $params;
      LFSwap(); // swap all TMC fields/values for LeadFlash

      //print"<br><br>final params sent to LeadFlash = " . $params; // for testing

	try {
      $c = curl_init($post_url);
      curl_setopt($c, CURLOPT_HEADER, 0);
      curl_setopt($c, CURLOPT_POST, 1);
      curl_setopt($c, CURLOPT_POSTFIELDS, $params);
      curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
      $response = curl_exec($c);
      curl_close($c);
	} catch (Exception $e) { exit('Problem: '.$e->getMessage());	}


	try {
	      if ($OpenFile)
		  {
		     $FileData = $response . "\n" . $params . "\n";
	         fwrite($OpenFile, $FileData);
	      }
	} catch (Exception $e) { exit('Caught exception: '.$e->getMessage());	}

      // handle response text for status: accepted, declined, or error

      //print"<br><br>returned response from LeadFlash = " . $response;

      $LF_Response = explode("|", $response);

      $LF_Status  = $LF_Response[0]; // LeadFlash status: accepted, declined, error
      $LF_Lid     = $LF_Response[1]; // LeadFlash Lead id
      $LF_Message = $LF_Response[2]; // Error message or http re-direct if accepted

      // WRITE TO DATABASE TABLE RESPONSE FROM LEADFLASH

      $sql = "UPDATE sales SET LF_Status='$LF_Status',LF_Lid='$LF_Lid',LF_Message='$LF_Message' WHERE id=$newid";
      $result = $db->query($sql);
      if ($db->error != '')
      {
         if ($OpenFile)
         {
            $FileData = "\n" . $db->error . "\n";
            fwrite($OpenFile, $FileData);
         }
         exit('sql error - see log');
      }

      // send Email mail(To,Subject,Body, optional From)
	  //mail($email,"Thank you from The Money Company!","Thank you for using The Money Company.\n\nFor any questions, call us (800) 577-1676", "From: Info@TheMoneyCompany.com");

	  //mail('3855550168@vtext.com', '', 'Testing');
      //mail("5558675309@txt.att.net", "", "Your package has arrived!", "From: David Walsh <david@davidwalsh.name>\r\n");

      //print"<br><br>Status: <b>" . $LF_Status . "</b>  Lid: <b>" . $LF_Lid . "</b>"; // for testing purposes


      // status accepted:
      if ($LF_Status == "accepted")
      {
         print"<h3>Your loan application has been accepted.</h3><h3>You will be contacted by a Lender shortly.</h3>";
         //print"<h3>Thank you for using The Money Company!</h3>";
         print"<p><a href='" . $LF_Message . "'><b>Click here for Lenders or we will forward you....</b></a></p>";
      }
      // status declined:
      if ($LF_Status == "declined")
      {
         print"<h3>We have declined your loan application.</h3>";
         print"<p>Reason: <b>" . $LF_Message . "</b></p>";
         print"<p><i>Please contact The Money Company or try your loan application again later.</i></p>";
      }

      // status error:
      if ($LF_Status == "error")
      {
         print"<h3>There was an error with your loan application.</h3>";
         print"<p>Reason: <b>" . $LF_Message . "</b></p>";
         print"<p><i>Please contact The Money Company or try your loan application again later.</i></p>";
      }

      exit();
      break;

      // case 'other':   /////////// OTHER ACTIONS HERE /////////////
      //
      // break;

      default:   // nothing

   } // end switch

} // end long if

else  //// NO ACTION SENT
{
   print"No Action.";

   // TEST DATA CAN GO HERE

}

// t($f) builds BLANK or REQUEST parameter if it exists, adds to global $params string for posting
function mtf_num($ph){
	$temp= filter_var($ph,FILTER_SANITIZE_NUMBER_INT);
	$temp= str_replace('-','',$temp);
	$temp= str_replace('(','',$temp);
	$temp= str_replace(')','',$temp);
	$temp= str_replace(' ','',$temp);
	$temp= str_replace('+','',$temp);
	return ($temp);
}
function t($f)
{
   global $sql;
   global $params;
   global $db;

   // return cleaned up POST data for $f or blank

   if (empty($_REQUEST[$f])) return('');
   else
   {
      $p = $_REQUEST[$f]; // add some security here for data $p

      //if ($f == "first_name") $p = "TestClient";  // ONLY FOR TESTING WITH LEADFLASH
      //if ($f == "last_name")  $p = "VendorTest";  // ONLY FOR TESTING WITH LEADFLASH

      // remove $ and , from dollar amounts
      if (($f == "take_home_pay") OR ($f == "net_income")) $p = preg_replace('/[\$,]/', '', $p);
	  $sql .= "$f='" . $db->real_escape_string($p) . "'";
      if ($f != "browser_info") $sql .= ",";

      // store phone (xxx)xxx-xxxx as xxxxxxxxxx
      if ((substr($p,0,1) == "(") AND (substr($p,4,1) == ")")) $p = substr($p,1,3) . substr($p,5,3) . substr($p,9,4);

      $params .=  $f . '=' . $p . '&'; // for post to LeadFlash

      return($p);
   }

} // end of function t


// replace/change params fields and values for LeadFlash data

function LFSwap()
{
   global $params;

   $params = str_replace("email=","Email=",$params);
   $params = str_replace("primary_phone=","phone_home=",$params);
   $params = str_replace("cell_phone=","phone_cell=",$params);
   $params = str_replace("dob=","birth_date=",$params);
   $params = str_replace("ssn=","social_security=",$params);
   $params = str_replace("drivers_lic=","drivers_license=",$params);
   $params = str_replace("dlstate=","drivers_license_st=",$params);
   $params = str_replace("is_military=N","is_military=0",$params);
   $params = str_replace("is_military=Y","is_military=1",$params);
   $params = str_replace("address=","street_addr1=",$params);
   $params = str_replace("address_2=","street_addr2=",$params);
   $params = str_replace("rent_own=O","own_home=1",$params);
   $params = str_replace("rent_own=R","own_home=0",$params);
   $params = str_replace("income_type=E","income_type=EMPLOYMENT",$params);
   $params = str_replace("income_type=U","income_type=BENEFITS",$params);
   $params = str_replace("pay_type=D","direct_deposit=1",$params);
   $params = str_replace("pay_type=C","direct_deposit=0",$params);
   $params = str_replace("pay_period=W","pay_frequency=WEEKLY",$params);
   $params = str_replace("pay_period=B","pay_frequency=BIWEEKLY",$params);
   $params = str_replace("pay_period=T","pay_frequency=TWICEMONTH",$params);
   $params = str_replace("pay_period=M","pay_frequency=MONTHLY",$params);
   $params = str_replace("next_pay_date=","pay_day1=",$params);
   $params = str_replace("second_pay_date=","pay_day2=",$params);
   $params = str_replace("net_income=","income_monthly=",$params);
   $params = str_replace("employer=","employer_name=",$params);
   $params = str_replace("emp_phone=","phone_work=",$params);
   $params = str_replace("emp_phone_ext=","phone_work_ext=",$params);
   $params = str_replace("account_type=C","bank_account_type=CHECKING",$params);
   $params = str_replace("account_type=S","bank_account_type=SAVINGS",$params);
   $params = str_replace("routing_number=","bank_aba=",$params);
   $params = str_replace("acct_number=","bank_account=",$params);
   $params = str_replace("bank_months=","months_at_bank=",$params);
   $params = str_replace("address_months=","months_at_address=",$params);
   $params = str_replace("employed_months=","months_employed=",$params);
   $params = str_replace("ref_fname=","ref_name_01=",$params);
   $params = str_replace("ref_relation=S","ref_relation_01=RELATIVE",$params);
   $params = str_replace("ref_relation=L","ref_relation_01=RELATIVE",$params);
   $params = str_replace("ref_relation=P","ref_relation_01=RELATIVE",$params);
   $params = str_replace("ref_relation=C","ref_relation_01=EMPLOYER",$params);
   $params = str_replace("ref_relation=F","ref_relation_01=FRIEND",$params);
   $params = str_replace("ref_relation=B","ref_relation_01=FRIEND",$params);
   $params = str_replace("ref_relation=G","ref_relation_01=FRIEND",$params);
   $params = str_replace("ref_relation=R","ref_relation_01=RELATIVE",$params);
   $params = str_replace("ref_relation=T","ref_relation_01=RELATIVE",$params);
   $params = str_replace("ref_relation=O","ref_relation_01=OTHER",$params);
   $params = str_replace("ref_phone=","ref_phone_01=",$params);
   $params = str_replace("ip_addr=","client_ip_address=",$params);

   // swap all dates mm/dd/yyyy to yyyy-mm-dd

   // birth_date=mm/dd/yyyy to birth_date=yyyy-mm-dd
   $n = strpos($params, "birth_date=");
   $odate = substr($params, $n+11, 10);
   $ndate = date('Y-m-d', strtotime($odate));
   $params = str_replace($odate,$ndate,$params);

   // pay_day1=mm/dd/yyyy to pay_day1=yyyy-mm-dd
   $n = strpos($params, "pay_day1=");
   $odate = substr($params, $n+9, 10);
   $ndate = date('Y-m-d', strtotime($odate));
   $params = str_replace($odate,$ndate,$params);

   // pay_day2=mm/dd/yyyy to pay_day2=yyyy-mm-dd
   $n = strpos($params, "pay_day2=");
   $odate = substr($params, $n+9, 10);
   $ndate = date('Y-m-d', strtotime($odate));
   $params = str_replace($odate,$ndate,$params);


} // end of function LFSwap

// Twilio SMS text message
/*
function sendSMS($to, $msg)
{
   global $twilio, $site_info;
   require_once('twilio-php-master/Services/Twilio.php');
   $accountSid = 'ACcc03003cd0fd0ddefc33e27eaa90edd3';
   $authToken  = '2644c0f2ac6a96d001377ec8fb1d306f';
   $client = new Services_Twilio($twilio['accountSID'], $twilio['authToken']);
   $from = $twilio['fromNumber'];
   $client->account->sms_messages->create($from, $to, $msg);
}
*/

?>
