<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$ID='2167';
$Key='14Cs8kKz50';
if(isset($_GET['id'])) $ID=$_GET['id'];
if(isset($_GET['key'])) $Key=$_GET['key'];
//OE Campaign ID:  2141  Post Key:  SphZpCk2ucs
$post_url="http://rckstrtrk.com/d.ashx";
$test_url="http://rckstrtrk.com/d.ashx?ckm_test=1";
$proxy_url="#";
?>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<style type='text/css'>
input, textarea{
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	width: 220px;
	border: 1px solid #666666;
	color: #666;
	font-size: 120%;
	line-height: 120%;
	padding: 5px;
}
input:active, textarea:active{
	border: 1px solid #383a70;
}
</style>
<script type='text/javascript'>

function search()
	{
	var url="/proxy.php";
	var XMLHttpRequestObject = false;
	if (window.XMLHttpRequest)
		{
	  	XMLHttpRequestObject = new XMLHttpRequest();
		}
	else
		if (window.ActiveXObject)
			{
			XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
			}
	if(XMLHttpRequestObject)
		{
	  	XMLHttpRequestObject.open("GET", url, true);
	    XMLHttpRequestObject.onreadystatechange = function()
	    	{
	  		if (XMLHttpRequestObject.readyState == 4)
				{
	  			if (XMLHttpRequestObject.status == 200)
					{
	  				results = XMLHttpRequestObject.responseText;
					darr=results.split("\n");
					if (darr[0]!='SOF=SOD')
						{
						// maybe we'll have other data types like json or XML coming back
						alert('Invalid data returned from Proxy: ' + response);
						}
					else
						{
						for (i=3; i<darr.length-2; i++)
							{
							farr=darr[i].split("=");
							//if ($('#'+farr[0]).count()>0)
								document.getElementById(farr[0]).value=farr[1];
							//else
							//	alert(darr[i]+" not found");
							}
						}


	  				}
				else
					{
	  				alert("ahah error:n " + XMLHttpRequestObject.statusText);
	  				}
	  			}
	  		}
	  	XMLHttpRequestObject.send(null);
        }
	return(false);
	}
function wait_form()
	{
	document.getElementById('formspace').style.display = 'inline';
	document.getElementById('waitspace').style.display = 'none';
	}

function post_form()
	{
	document.getElementById('formspace').style.display = 'none';
	document.getElementById('waitspace').style.display = 'inline';
	setData('output','<img src="/ajax-loader.gif" /><br/>Storing Data...');
	var o='';
	for(i=0;i<document.bigform.elements.length; i++)
		{
		//
		// validate form
		//
		//bigform.elements[i].value='1';
		//o=o+bigform.elements[i].name+",";
		}

	// create POST array
	var params='';
	for(i=0; i<document.bigform.elements.length; i++)
		{
		params = params + bigform.elements[i].name + "=" + bigform.elements[i].value + "&";
		}
	params=params+'x=y';
	var http = new XMLHttpRequest();
	var response='';
	var url='http://themoneycompany.com/proxy.php?action=store';
	http.open("POST", url, true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.onreadystatechange = function()
		{
		if(http.readyState == 4 && http.status == 200)
			{
			//console.log("OK State=" + http.readyState + " Status=" + http.status + " Text=" + http.responseText);
			response=http.responseText;
			//setData('output',response);
			//alert('foo');
			setData('output','<img src="/ajax-loader.gif" /><br/>Locating Lender...');



			var http2 = new XMLHttpRequest();
			var response2='';
			var url2='http://themoneycompany.com/proxy.php?action=lend';
			http2.open("POST", url2, true);
			http2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http2.setRequestHeader("Content-length", params.length);
			http2.setRequestHeader("Connection", "close");
			http2.onreadystatechange = function()
				{
				if(http2.readyState == 4 && http2.status == 200)
					{
					console.log("OK State=" + http.readyState + " Status=" + http2.status + " Text=" + http2.responseText);
					response2=http2.responseText;
					setData('output',response2);


					}
				else
					{
					setData('output',"xError State=" + http2.readyState + " Status=" + http2.status + " Text=" + http2.responseText);
					}
				}

			http2.send(params);



			}
		else
			{
			setData('output',"Error State=" + http.readyState + " Status=" + http.status + " Text=" + http.responseText);
			}
		}

	http.send(params);
	return false;
}



</script>
</head>
<body>
<a href='#' class='show' rel='search'>Toggle Customer Lookup</a><br>
<div class="hidden search">
<form action="#" onsubmit="return search();"><input type="text" name="find" id="find"><input type="submit" name="submit" value="Search"></form>
</div><div id='output'></div>
<?
showform($ID,$Key,$proxy_url);///////////////////////////////////////////////////////////// test url
function field($field_name,$is_required,$field_type,$max_length,$description)
        {
		if ($field_type=='date') $field_type='text';
        // make non-required fields collapsed
        // add descriptions, choices, yesno, zip, phone style inputs
        @$value=$_SESSION[$field_name];
        if($field_type != 'hidden'){
		if ($field_type!='yesno')
			{
			echo $description;
	        if($is_required)
				{
		        echo " <span style='color: red;'>*</span>";
		        }
		        echo "<br>";
			}
        }
		if($field_type == 'textarea'){
			echo "<textarea name='$field_name' id='$field_name'";
			if($is_required){
				echo " required='required'";
			}
			echo ">$value</textarea><br>";
		}
		elseif(strpos($field_type,'|') !== false)
			{
			echo "<select name='$field_name' id='$field_name'>";
			$oarr=explode('|',$field_type);
			foreach($oarr as $option)
				{
				echo "<option value='$option'>$option</option>";
				}
			echo "</select><br/>";
			}
		elseif($field_type == 'yesno')
			{
			//if (empty($value)) $checked=''; else $checked='checked';
			//echo "<input style='width:40px;' type='checkbox' $checked name='$field_name' id='$field_name'> $description<br/>";
			{
			echo "<select name='$field_name' id='$field_name'>";
			//echo "<option selected>--</option>";
			echo "<option value='1'>Yes</option>";
			echo "<option value='zero!'>No</option>";
			echo "</select> $description<br/>";
			}
			}
		elseif($field_type == 'hidden')
			{
            echo "<input type='hidden' name='$field_name' id='$field_name' value='$value'>";
        	}
        else{
            echo "<input type='$field_type'";
            if($is_required)
				{
				echo " required='required'";
				}
            echo " name='$field_name' id='$field_name' value='$value'><br/>";
        	}
        }
function showform($id,$key,$url) {
$_SESSION['ckm_campaign_id']=$id;
$_SESSION['ckm_key']=$key;
echo "<div id='waitspace' style=\"display:none;\"><span style=\"cursor:hand;\" onclick=\"wait_form();\">Restore Form</span></div>";
echo "<div id='formspace'><form name='bigform' id='bigform' action='$url' method='post' onsubmit=\"return post_form();\">";
field('ckm_campaign_id',true,'hidden','','Assigned by RockStarAN.com for each campaign');
field('ckm_key',true,'hidden','','Password assigned by RockStarAN.com for each campaign');
field('ip_address',true,'hidden','15','IP Address');

//field('ckm_subid',false,'text','50','Optional tracking parameter');

echo "<div style='float: left; width: 250px;'>";
echo "<h3>Personal Info</h3>";
field('first_name',true,'text','25','First Name');
field('last_name',true,'text','25','Last Name');
field('gender',false,'M|F','','Gender');
field('dob',true,'date','','Birthdate');
field('is_citizen',false,'yesno','','Is a Citizen');
field('is_military',true,'yesno','','Is Military');
field('ssn',true,'text','','Social Security Number');
field('drivers_lic',true,'text','21','Drivers License Number');
field('dlstate',true,'text','2','Driver License State');
echo "</div>";

echo "<div style='float: left; width: 250px;'>";
echo "<h3>Contact Info</h3>";
field('email',true,'text','60','Email Address');
field('primary_phone',false,'phone','12','Primary Phone');
field('primary_phone2',true,'text','13','Primary Phone 2');
field('secondary_phone',true,'phone','12','Secondary Phone');
field('cell_phone',false,'phone','12','Cell Phone');
field('cell_phone2',false,'text','13','Cell Phone 2');
field('best_time_to_call',false,'A|M|E','','Best Time to Call');
field('contact_time',false,'M|A|E','1','Contact Time');
echo "</div>";

echo "<div style='float: left; width: 250px;'>";
echo "<h3>Home Info</h3>";
field('address',true,'text','40','Address');
field('address_2',false,'text','100','Address 2');
field('city',true,'text','39','City');
field('state',false,'text','','State');
field('zip',true,'zip','8','Zip');
field('country',false,'Country Abv (e.g. US, MX)','2','Country');
field('timeatresidence',false,'hidden','','Time at Residence');
field('address_months',true,'number','','Address Months');
field('address_years',false,'number','','Address Years');
field('rent_own',true,'R|O','','Rent/Own (R|O)');
echo "</div>";

echo "<div style='float: left; width: 250px;'>";
echo "<h3>Professional Info</h3>";
field('employer',true,'text','100','Employer');
echo "<br><a href='#' class='show' rel='employer'>Toggle Optional Employer Details</a><br><br>
<div class='hidden employer'>";
field('emp_years',false,'number','','Employed Years');
field('emp_address',false,'text','300','Employer Address');
field('emp_address_2',false,'text','100','Employer Address 2');
field('emp_city',false,'text','50','Employer City');
field('emp_state',false,'text','2','Employer State');
field('emp_zip',false,'text','10','Employer_Zip');
echo "</div>";
field('emp_phone',true,'text','13','Employer Phone');
echo "<div class='hidden employer'>";
field('emp_phone_ext',false,'number','','Employer Phone Ext');
field('emp_fax',false,'text','13','Employer Fax');
field('super_phone',false,'text','13','Supervisor Phone');
field('super_name',false,'text','100','Supervisor Name');
field('super_phone_ext',false,'number','','Supervisor Phone Ext');
field('hire_date',false,'date','','Hire Date');
field('emp_type',false,'P|F','','Employed Type');
echo "</div>";
field('job_title',true,'text','100','Job Title');
echo "<div class='hidden employer'>";
field('workshift',false,'O|T|S|F','','Workshift');
field('gross_income',false,'number','','Gross Monthly Income');
echo "</div>";
field('net_income',true,'number','','Net Income');
field('income_type',true,'E|D|S|U|P|O','','Income Type');
field('employed_months',true,'number','','Employed Months');
field('pay_period',true,'W|B|S|M','','Pay Period');
field('pay_type',true,'D|P','','Pay Type');
field('last_pay_date',true,'date','','Last Paydate');
field('next_pay_date',true,'date','','Next Paydate');
field('second_pay_date',true,'date','','Second Paydate');
echo "</div>";

echo "<div style='float: left; width: 250px;'>";
echo "<h3>Financial Info</h3>";
field('requested_amount',true,'number','','Requested Amount');
field('roundedrequestamount',false,'text','6','Requested Amount rounded');
field('requestedduedate',false,'text','20','Requested Due Date');

field('bank_name',true,'text','50','Bank Name');
field('bank_phone',false,'text','13','Bank Phone');
field('account_holder',false,'text','100','Account Holder');
field('routing_number',true,'text','9','Routing Number');
field('acct_number',true,'text','17','Account Number');
field('account_type',true,'C|S','','Account Type');
field('bank_months',true,'number','','Bank Months');
field('bank_years',false,'number','','Bank Years');
field('timeatbank',false,'false','','Time at Bank');
field('active_checking',false,'text','','Active Checking');
field('outstand_amt',false,'number','','Outstanding Amount');
echo "</div>";

echo "<div style='float: left; width: 250px;'>";
echo "<h3>Reference Info</h3>";
echo "<br><a href='#' class='show' rel='reference'>Toggle Optional Reference</a><br><br>
<div class='hidden reference'>";
field('ref_fname',false,'text','50','Reference First Name');
field('ref_lname',false,'text','50','Reference Last Name');
field('ref_relation',false,'S|L|P|C|F|B|G|R|I|O','','Reference Relation (?)');
field('ref_phone',false,'text','13','Reference Phone');
echo "</div>";
echo "</div>";

echo "<div style='float: left; width: 250px;'>";
echo "<h3>Misc Info</h3>";
field('other_offers',false,'yesno','','Other Offers');
field('store_key',false,'text','36','Store Key');
field('ref_url',true,'text','300','Referring URL');
field('tier_key',false,'text','64','Tier Key');
field('aff_id',false,'text','30','Affiliate ID');
field('sub_id',false,'text','30','Sub ID');
field('test',false,'yesno','','Test');
field('effectivedate',false,'text','20','Effective Date');
field('ach',false,'text','','1495ach');
field('optin',false,'text','','Optin program');

echo "<br><input type='submit' name='submit' value='Submit' style='background-color: blue; color: white;'>";
echo "</div></div>";
}
?>
<script type='text/javascript'>
$('.hidden').hide();
$('.show').click(function(){
	var which = $(this).attr('rel');
	$('.hidden.'+which).toggle();
	return false;
});
function m_ajax(targetdiv)
	{
	setData(targetdiv,'<img src="/front/modules/images/ajax-loader.gif"/>');
	}
function m_ajax2(targetdiv)
	{
	setData(targetdiv,'<img src="/front/modules/images/ajax-loader2.gif"/>');
	}

function setData(targetdiv,dta)
	{
    document.getElementById(targetdiv).innerHTML = dta;
	}
function setDataIE8(targetdiv,dta)
	{
	var newdiv = document.createElement("div");
	newdiv.innerHTML = dta;
	var container = document.getElementById(targetdiv);
	container.appendChild(newdiv);
	}
function addData(targetdiv,dta)
	{
        document.getElementById(targetdiv).innerHTML = dta+'<br>'+document.getElementById(targetdiv).innerHTML;
	}
function readData(targetdiv)
	{
	return(document.getElementById(targetdiv).innerHTML);
	}

function m_refresh() {
	var me=document.getElementById('mobi');me.src=me.src;
	}
function getData(dataSource,targetdiv)
      {
        var XMLHttpRequestObject = false;

        if (window.XMLHttpRequest) {
          XMLHttpRequestObject = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
          XMLHttpRequestObject = new
            ActiveXObject("Microsoft.XMLHTTP");
        }

        if(XMLHttpRequestObject) {
          XMLHttpRequestObject.open("GET", dataSource, true);

          XMLHttpRequestObject.onreadystatechange = function()
          {
		  // only if XMLHttpRequestObject is "loaded"
		  if (XMLHttpRequestObject.readyState == 4) {
		  // only if "OK"
		  if (XMLHttpRequestObject.status == 200) {
		  results = XMLHttpRequestObject.responseText;
		  document.getElementById(targetdiv).innerHTML = results;
		  } else {
		  document.getElementById(targetdiv).innerHTML="ahah error:n" +
		  XMLHttpRequestObject.statusText;
		  }
		  }
		  }

          XMLHttpRequestObject.send(null);
        }
      }
</script>
</body></html>