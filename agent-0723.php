<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$ID='2167';
$Key='14Cs8kKz50';
$script_url="http://ivr.metml.com/script.htm";
$agent_name="";
$agent_id="";
//
//Things you can pass in the URL
//
if(isset($_GET['id'])) $ID=$_GET['id'];
if(isset($_GET['key'])) $Key=$_GET['key'];
if(isset($_GET['script'])) $script_url=$_GET['script'];
if(isset($_GET['agent_name'])) $agent_name=$_GET['agent_name'];
if(isset($_GET['agent_id'])) $Key=$_GET['agent_id'];
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
function addInput(divName, html){
  if (readData('div_'+divName) != '')
  	{
	setData('div_'+divName,'');
	var newdiv = document.createElement('div');
  	newdiv.innerHTML = html;
  	document.getElementById('div_'+divName).appendChild(newdiv);
	}
}
function replaceText(oldText, newText, node){
try
	{
	  node = node || document.body;
	  var childs = node.childNodes, i = 0;

	  while(node = childs[i]){
		if (node.nodeType == Node.TEXT_NODE){
		  node.textContent = node.textContent.replace(oldText, newText);
		} else {
		  replaceText(oldText, newText, node);
		}
		i++;
	  }
	}
catch(err)
	{
	var txt="There was an error on this page.\n\n";
  	txt+="Error description: " + err.message + "\n\n";
	txt+="Click OK to continue.\n\n";
	//alert(txt);
	}
}
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
	  				alert("AJAX error:n " + XMLHttpRequestObject.statusText);
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


// Toggle between form view and script view and move over data

function show_script() {
	document.getElementById('formspace').style.display = 'none';
	document.getElementById('waitspace').style.display = 'none';
	document.getElementById('infospace').style.display = 'none';
	for(i=0;i<document.bigform.elements.length; i++)
		{
		// IF the element exists in the OTHER form, set it
		//scriptform.element[bigform.elements[i].name]=bigform.elements[i].value;

		}
	document.getElementById('scriptspace').style.display = 'inline';
}
function show_form() {
	document.getElementById('scriptspace').style.display = 'none';
	document.getElementById('waitspace').style.display = 'none';
	document.getElementById('infospace').style.display = 'none';
	for(i=0;i<document.scriptform.elements.length; i++)
		{
		// IF the element exists in the OTHER form, set it
		//bigform.element[bigform.elements[i].name]=bigform.elements[i].value;

		}
	document.getElementById('formspace').style.display = 'inline';
}
function show_info() {
	document.getElementById('scriptspace').style.display = 'none';
	document.getElementById('waitspace').style.display = 'none';
	document.getElementById('infospace').style.display = 'inline';
	document.getElementById('formspace').style.display = 'none';
}

function post_form()
	{
	document.getElementById('formspace').style.display = 'none';
	document.getElementById('waitspace').style.display = 'inline';
	document.getElementById('infospace').style.display = 'none';
	document.getElementById('scriptspace').style.display = 'none';
	setData('output','<img src="/ajax-loader.gif" /><br/>Storing Data...');
	var o='';

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
<a href='#' class='show' rel='search'>Toggle Customer Lookup</a>
| <span style="cursor:hand;" onclick="show_script();">Show Script</span>
| <span style="cursor:hand;" onclick="show_form();">Show Form</span>
| <span style="cursor:hand;" onclick="show_info();">Show Info</span> <br>
<div class="hidden search">
<form action="#" onsubmit="return search();"><input type="text" name="find" id="find"><input type="submit" name="submit" value="Search"></form>
</div><div id='output'></div>
<?
$jini=''; // Javascript initializing code to create fields in script
$xtxt=''; // temp var to build $jini
$field_list='';
showform($ID,$Key,$proxy_url);///////////////////////////////////////////////////////////// test url
function xecho($txt)
	{
	global $xtxt;
	$xtxt.=$txt;
	echo str_replace('script_','',$txt);
	}
function xflush($fld)
	{
	global $jini;
	global $xtxt;
	$jini.="addInput(\"$fld\",\"$xtxt\");";
	$xtxt='';
	}

function field($field_name,$is_required,$field_type,$max_length,$description)
        {
		global $field_list;
		$field_list.="$field_name,$is_required,$field_type,$description\n";
		if ($field_type=='date') $field_type='text';
        // make non-required fields collapsed
        // add descriptions, choices, yesno, zip, phone style inputs
        @$value=$_SESSION[$field_name];
        if($field_type != 'hidden'){
		if ($field_type!='yesno')
			{
			xecho ($description);
	        if($is_required)
				{
		        xecho(" <span style='color: red;'>*</span>");
		        }
		        xecho("<br>");
			}
        }
		if($field_type == 'textarea'){
			xecho("<textarea name='script_$field_name' id='script_$field_name'");
			if($is_required){
				xecho(" required='required'");
			}
			xecho(">$value</textarea><br>");
		}
		elseif(strpos($field_type,'|') !== false)
			{
			xecho("<select name='script_$field_name' id='script_$field_name'>");
			$oarr=explode('|',$field_type);
			foreach($oarr as $option)
				{
				xecho("<option value='$option'>$option</option>");
				}
			xecho("</select><br/>");
			}
		elseif($field_type == 'yesno')
			{
			//if (empty($value)) $checked=''; else $checked='checked';
			//xecho("<input style='width:40px;' type='checkbox' $checked name='script_$field_name' id='script_$field_name'> $description<br/>");
			{
			xecho("<select name='script_$field_name' id='script_$field_name'>");
			//xecho("<option selected>--</option>");
			xecho("<option value='1'>Yes</option>");
			xecho("<option value='zero!'>No</option>");
			xecho("</select> $description<br/>");
			}
			}
		elseif($field_type == 'hidden')
			{
            xecho("<input type='hidden' name='script_$field_name' id='script_$field_name' value='$value'>");
        	}
        else{
            xecho("<input type='$field_type'");
            if($is_required)
				{
				xecho(" required='required'");
				}
            xecho(" name='script_$field_name' id='script_$field_name' value='$value'><br/>");
        	}
		xflush($field_name);
        }
function showform($id,$key,$url) {
global $script_url;
$_SESSION['ckm_campaign_id']=$id;
$_SESSION['ckm_key']=$key;
echo "<div id='waitspace' style=\"display:none;\"><span style=\"cursor:hand;\" onclick=\"wait_form();\">Restore Form</span></div>";

echo "<div id='scriptspace' style=\"display:none;\"><form name='scriptform' id='scriptform'>";

$script=file_get_contents($script_url);
$script=str_replace('[[','<div id="div_',$script);
$script=str_replace(']]','">#DATA</div>',$script);
echo $script;
echo "</form></div>";

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
<div id='infospace' style="display:none;"><h1>About This Form</h1>
The "Script View" url is currently: <a href="<?php echo $script_url; ?>"><?php echo $script_url; ?></a><br/>
Campaign ID is "<?php echo $ID; ?>" Campaign KEY is "<?php echo $Key; ?>"<br/>
Agent ID "<?php echo $agent_id; ?>" Agent Name "<?php echo $agent_name; ?>"<br/>
The "POST" url is currently: <a href="<?php echo $post_url; ?>"><?php echo $post_url; ?></a><br/>
The "TEST" url is currently: <a href="<?php echo $test_url; ?>"><?php echo $test_url; ?></a><br/>
The "PROXY" url is currently: <a href="<?php echo $proxy_url; ?>"><?php echo $proxy_url; ?></a><br/>
<h3>Current Form Fields are as follows</h3>
<textarea style="width:800px;" rows="20"><?php echo $field_list; ?></textarea>
<br/>
You can pass the following querystring parameters
<p/>
'id' - The campaign ID assigned by Lead Star</br>
'key' - The campaign Key assigned by Lead Star</br>
'script' - the URL to the HTML script containing field embed codes [[field_name]]</br>
'agent_name' - The Agent's Full Name</br>
'agent_id' - The Agent's system ID</br>
<p/>
<h3>Creating and Updating the Script View</h3>
For the Script View, create a Word document that contains your script, and locate the data entry fields wherever
you want them to appear using a "short code" that looks like [[field_name]].  Include only one instance of each
field.  You do not need to have every field accounted for in the script, however if you leave out a required
field, you will not be able to submit the form while in Script View.
<p/>
When you toggle between Form and Script view, you should see that anything entered in one view is automatically
updated in the other. You can submit the form in either mode.
<p/>
Any fields that contain invalid data, or any required fields that are not filled in will prevent the form from
being submitted, and the field itself will be highlighed.  Some fields may offer special instructions or reasons
why they are being flagged as invalid.
</div>
<script type='text/javascript'>
<?php echo $jini; ?>

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
	try
		{
	return(document.getElementById(targetdiv).innerHTML);
		}
	catch(err)
		{
		return('');
		}
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
		  document.getElementById(targetdiv).innerHTML="AJAX error:n" +
		  XMLHttpRequestObject.statusText;
		  }
		  }
		  }

          XMLHttpRequestObject.send(null);
        }
      }
</script>
</body></html>