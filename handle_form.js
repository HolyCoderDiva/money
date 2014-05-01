$('.hidden').hide();
$('.show').click(function()
{
   var which = $(this).attr('rel');
   $('.hidden.'+which).toggle();
   return false;
});

function show(div) {document.getElementById(div).style.display='inline';}
function hide(div) {document.getElementById(div).style.display='none';}

Math.RandomInteger = function(n) {
    var i = Math.random();
    var num = Math.floor(i * n + 1);
    return num;
};

// validate date for proper month, day, year
function valdate(xdate)
{
   var fulldate = xdate.split("/");
   var mm   = fulldate[0];
   var dd   = fulldate[1];
   var yyyy = fulldate[2];

   m = parseFloat(mm); d = parseFloat(dd); y = parseFloat(yyyy);

   if ((m < 1) || (m > 12)) return false;
   if ((d < 1) || (d > 31)) return false;
   if (y < 1900 || y > 2050) return false;

   // check if date is too future - later than today + 2 months

   // gets today for MM/DD/YYYY;
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth()+1;  mm = mm + 2; // add 60 days (2 months) to check future range

   var yyyy = today.getFullYear();

   if (mm > 12) { mm = mm - 12; yyyy = yyyy + 1; }

   if (dd < 10) { dd = '0' + dd; }
   if (mm < 10) { mm = '0' + mm; }
   var today60 = mm + '/' + dd + '/' + yyyy;

   // check date against future (today + 60 days)
   if  (Date.parse(xdate) > Date.parse(today60)) return false;

   return true;
}

// check if date2 > date1 for pay dates
function checkdate(d2,d1)
{
   if (Date.parse(d2) > Date.parse(d1)) return true;
   else return false;
}

// validate for proper bank aba or routing number
function valrouting(xaba)
{
   // check each digit using aba routing algorithm and calculate total
   n = 0;

   for (i = 0; i < xaba.length; i += 3)
   {
      n += parseInt(xaba.charAt(i),     10) * 3
        +  parseInt(xaba.charAt(i + 1), 10) * 7
        +  parseInt(xaba.charAt(i + 2), 10);
   }

   // If resulting sum is an even multiple of ten (but not zero),
   // the aba routing number is good as far as checksum is concerned

   if (n != 0 && n%10 == 0) return true;
   else return false;
}


// allows only numbers in textbox with onkeypress="return isNumber(event)"
function isNumber(evt)
{
   evt = (evt) ? evt : window.event;
   var c = (evt.which) ? evt.which : evt.keyCode;
   // allow arrows, backspace, delete, tab
   if (c == 37 || c == 38 || c == 39 || c == 40 || c == 46 || c == 8 || c == 9) return true;
   // numbers are 48 to 57 inclusive
   if (c < 48 || c > 57) return false;
   return true;
}

// allows only alphabetical in textbox with onkeypress="return isAlpha(event)"
function isAlpha(evt)
{
   evt = (evt) ? evt : window.event;
   var c = (evt.which) ? evt.which : evt.keyCode;
   // allow arrows, backspace, delete, tab
   if (c == 37 || c == 38 || c == 39 || c == 40 || c == 46 || c == 8 || c == 9) return true;
   // letters are A=65 to Z=90 and a=97 to z=122 inclusive
   if (c == 32 || c == 46) return true; // allow space and period
   if (c < 65 || c > 122) return false; // 65 to 122, includes a few other chars
   return true;
}

// capitalize first letter of text upon leaving (blur)
//function capitalize(text)
//{
//   value = text.value;
//   newValue = '';
//   value = value.split(' ');
//
//   for (var i = 0; i < value.length; i++)
//   {
//      newValue += value[i].substring(0,1).toUpperCase() + value[i].substring(1,value[i].length) + ' ';
//   }
//
//   text.value = newValue;
//}

var pung=0; // set when we pingle
var pid=''; // ping id
function pingle(n)
	{

	if (pung==2) return;
	if ((pid=='') && (pung==1)) // we must have failed to pingle, so don't do it any more
		{
		pung=2;
		return;
		}

	if (pung==0)
		{
		pung=1;
		}

	if (pid=='')
		{
		// GET A PID (and post initial info)
		fname=document.bigform.elements['first_name'].value;
		lname=document.bigform.elements['last_name'].value;
		email=document.bigform.elements['email'].value;
		if ((fname=='') || (lname=='') || (email==''))
			{
			// Something hasn't been filled in, don't pingle
			// (on the chance that pingling is bypassed in phase 0, phase 1 will catch it and create the PID)
			pung=0;
			return;
			}
		var params='';
		for (i = 0; i < document.bigform.elements.length; i++)
		   {
		   if (bigform.elements[i].value != '') {
		      params = params + bigform.elements[i].name + "=" + bigform.elements[i].value + "&";
			  }
		   }
		params=params + 'phase=' + n.toString; // tack on end
		var http = new XMLHttpRequest();
		var response = '';
		var url='proxy.php?action=ping';

		http.open("POST", url, true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.setRequestHeader("Content-length", params.length);
		http.setRequestHeader("Connection", "close");

		http.onreadystatechange = function()
			{
			if(http.readyState == 4 && http.status == 200)
				{
				response=http.responseText;
				setData('ping',response);
				pid=response;
				}
			else
				{
				//alert(http.statusText);
				}
			}
		http.send(params);
		}

	else
		{
		// HAVE A PID
		fname=document.bigform.elements['first_name'].value;
		lname=document.bigform.elements['last_name'].value;
		email=document.bigform.elements['email'].value;
		if ((fname=='') || (lname=='') || (email==''))
			{
			// Something hasn't been filled in, don't pingle
			// (on the chance that pingling is bypassed in phase 0, phase 1 will catch it and create the PID)
			pung=0;
			return;
			}
		var params='';
		for (i = 0; i < document.bigform.elements.length; i++)
		   {
		   if (bigform.elements[i].value != '')
		   	{
	      	params = params + bigform.elements[i].name + "=" + bigform.elements[i].value + "&";
		  	}
		   }
		params=params + 'phase=' + n.toString() + '&pid=' + pid // tack on end
		var http = new XMLHttpRequest();
		var response = '';
		var url='proxy.php?action=ping';

		http.open("POST", url, true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.setRequestHeader("Content-length", params.length);
		http.setRequestHeader("Connection", "close");

		http.onreadystatechange = function()
			{
			if(http.readyState == 4 && http.status == 200)
				{
				response=http.responseText;
				setData('ping',response);
				}
			else
				{
				//alert(http.statusText);
				}
			}
		http.send(params);
		}




	}


///////////////////////////////////////////////////////////////////////////////////////
// handles all form validation of required fields
// and moves to next part (show/hide)
// n = form part to validate
// w = which direction - (1) moving forward, (0) backward - only validates forward
//////////////////////////////////////////////////////////////////////////////////////

function handle(n,w)
{
	hide('output');
   if (n == 0)
   {
      hide('formpart2'); show('formpart1');
   }


	pingle(n); // update our ping table with more data as they fill in the form

   if (n == 1) // form part 1 entered
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         var ra = document.bigform.requested_amount.value;
         var fn = document.bigform.first_name.value;
         var ln = document.bigform.last_name.value;
         var e  = document.bigform.email.value;
         var c  = document.bigform.accepted_check.checked;

         if (ra == "")
         {
            document.getElementById('errpart1').innerHTML = '<font color="#FF0000">Requested Amount is required.</font>';
            document.bigform.requested_amount.focus();
            document.getElementById('requested_amount').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('requested_amount').style.backgroundColor = 'white';
         document.getElementById('errpart1').innerHTML = '';

         if (fn == "")
         {
            document.getElementById('errpart1').innerHTML = '<font color="#FF0000">First Name is required.</font>';
            document.bigform.first_name.focus();
            document.getElementById('first_name').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('first_name').style.backgroundColor = 'white';
         document.getElementById('errpart1').innerHTML = '';

         if (ln == "")
         {
            document.getElementById('errpart1').innerHTML = '<font color="#FF0000">Last Name is required.</font>';
            document.bigform.last_name.focus();
            document.getElementById('last_name').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('last_name').style.backgroundColor = 'white';
         document.getElementById('errpart1').innerHTML = '';

         if (e == "")
         {
            document.getElementById('errpart1').innerHTML = '<font color="#FF0000">A valid Email address is required.</font>';
            document.bigform.email.focus();
            document.getElementById('email').style.backgroundColor = 'yellow';
            return false;
         }

         if ((e.indexOf(".") <= 0) || (e.indexOf("@") <= 0))
         {
            document.getElementById('errpart1').innerHTML = '<font color="#FF0000">That does not appear to be a valid Email.</font>';
            document.bigform.email.focus();
            document.getElementById('email').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('email').style.backgroundColor = 'white';
         document.getElementById('errpart1').innerHTML = '';

         if (c == "")
         {
            document.getElementById('errpart1').innerHTML = '<font color="#FF0000">You must accept the Privacy Policy and Terms.</font>';
            document.bigform.accepted_check.focus();
            document.getElementById('accepted_check').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('accepted_check').style.backgroundColor = 'white';
         document.getElementById('errpart1').innerHTML = '';

      } // end if moving forward

      // hide/show next part
      hide('formpart1'); hide('formpart3'); show('formpart2'); hide('instantApproval');

      return false;
   }

   if (n == 2) // form part 2 entered
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         var pp = document.bigform.primary_phone.value;
         var cp = document.bigform.cell_phone.value;
         var sp = document.bigform.secondary_phone.value;
         var bt = document.bigform.best_time_to_call.value;
         var bn = document.bigform.best_phone.value;

         if ((pp == "") && (cp == "") && (sp == ""))
         {
            document.getElementById('errpart2').innerHTML = '<font color="#FF0000">At least one phone number is required.</font>';
            document.bigform.primary_phone.focus();
            document.getElementById('primary_phone').style.backgroundColor = 'yellow';
            document.getElementById('cell_phone').style.backgroundColor = 'yellow';
            document.getElementById('secondary_phone').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('primary_phone').style.backgroundColor = 'white';
         document.getElementById('cell_phone').style.backgroundColor = 'white';
         document.getElementById('secondary_phone').style.backgroundColor = 'white';
         document.getElementById('errpart2').innerHTML = '';

         if (bt == "")
         {
            document.getElementById('errpart2').innerHTML = '<font color="#FF0000">Please select Best Time to call.</font>';
            document.bigform.best_time_to_call.focus();
            document.getElementById('best_time_to_call').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('best_time_to_call').style.backgroundColor = 'white';
         document.getElementById('errpart2').innerHTML = '';

         if (bn == "")
         {
            document.getElementById('errpart2').innerHTML = '<font color="#FF0000">Please select Best Phone to call.</font>';
            document.bigform.best_phone.focus();
            document.getElementById('best_phone').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('best_phone').style.backgroundColor = 'white';
         document.getElementById('errpart2').innerHTML = '';

         if (((bn == "H") && (pp == "")) || ((bn == "C") && (cp == "")) || ((bn == "O") && (sp == "")))
         {
            document.getElementById('errpart2').innerHTML = '<font color="#FF0000">Best Phone does not match phone number.</font>';
            document.bigform.best_phone.focus();
            document.getElementById('best_phone').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('best_phone').style.backgroundColor = 'white';
         document.getElementById('errpart2').innerHTML = '';


      }

      // hide/show next part
      hide('formpart4'); hide('formpart2'); show('formpart3');

      return false;
   }

   if (n == 3) // form part 3 entered
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         var dob  = document.bigform.dob.value;
         var ssn  = document.bigform.ssn.value;
         var dl   = document.bigform.drivers_lic.value;
         var st   = document.bigform.dlstate.value;
         var mm   = document.bigform.mothers_maiden_name.value;
         var mb   = document.bigform.mothers_birth_city.value;
         var mil  = document.bigform.is_military.value;

         if ((dob == "") || (dob.length < 10))
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Date of Birth is required in mm/dd/yyyy format.</font>';
            document.bigform.dob.focus();
            document.getElementById('dob').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('dob').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';

         if (valdate(dob) == false)
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Date of Birth is out of range for month, day or year.</font>';
            document.bigform.dob.focus();
            document.getElementById('dob').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('dob').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';


         // gets age from dob

         var today = new Date();
         var birthDate = new Date(dob);
         var age = today.getFullYear() - birthDate.getFullYear();
         var m = today.getMonth() - birthDate.getMonth();
         if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) age--;

         if (age < 18)
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Must be at least 18 years of age.</font>';
            document.bigform.dob.focus();
            document.getElementById('dob').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('dob').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';


         if ((ssn == "") || (ssn.length < 11))
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Social Security Number is required in ###-##-#### format.</font>';
            document.bigform.ssn.focus();
            document.getElementById('ssn').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('ssn').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';

         if ((dl == "") || (dl.length < 5))
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Drivers License is required.</font>';
            document.bigform.drivers_lic.focus();
            document.getElementById('drivers_lic').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('drivers_lic').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';

         if (st == "")
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Drivers License State is required.</font>';
            document.bigform.dlstate.focus();
            document.getElementById('dlstate').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('dlstate').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';

         if ((mm == "") && (mb == ""))
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Mother Maiden Name OR Mother Birth City is required.</font>';
            document.bigform.mothers_maiden_name.focus();
            document.getElementById('mothers_maiden_name').style.backgroundColor = 'yellow';
            document.getElementById('mothers_birth_city').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('mothers_maiden_name').style.backgroundColor = 'white';
         document.getElementById('mothers_birth_city').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';

         if (mil == "")
         {
            document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Please select if you are active Military.</font>';
            document.bigform.is_military.focus();
            document.getElementById('is_military').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('is_military').style.backgroundColor = 'white';
         document.getElementById('errpart3').innerHTML = '';

         if (mil == "Y")
         {
	     document.getElementById('errpart3').innerHTML = '<font color="#FF0000">Active Military do not qualify for a short-term Loan on this site.</font>';
            //alert("Active Military do not qualify for a short-term Loan on this site.");
            return false;
         }

      }

      // hide/show next part
      hide('formpart5'); hide('formpart3'); show('formpart4');

      return false;
   }

   if (n == 4)
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields

         var addr = document.bigform.address.value;
         var city = document.bigform.city.value;
         var st   = document.bigform.state.value;
         var zip  = document.bigform.zip.value;
         var am   = document.bigform.address_months.value;
         var ro   = document.bigform.rent_own.value;

         if (addr == "")
         {
            document.getElementById('errpart4').innerHTML = '<font color="#FF0000">Street Address is required.</font>';
            document.bigform.address.focus();
            document.getElementById('address').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('address').style.backgroundColor = 'white';
         document.getElementById('errpart4').innerHTML = '';

         if (city == "")
         {
            document.getElementById('errpart4').innerHTML = '<font color="#FF0000">City name is required.</font>';
            document.bigform.city.focus();
            document.getElementById('city').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('city').style.backgroundColor = 'white';
         document.getElementById('errpart4').innerHTML = '';

         if (st == "")
         {
            document.getElementById('errpart4').innerHTML = '<font color="#FF0000">State is required.</font>';
            document.bigform.state.focus();
            document.getElementById('state').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('state').style.backgroundColor = 'white';
         document.getElementById('errpart4').innerHTML = '';

         if (zip == "")
         {
            document.getElementById('errpart4').innerHTML = '<font color="#FF0000">Zip Code is required.</font>';
            document.bigform.zip.focus();
            document.getElementById('zip').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('zip').style.backgroundColor = 'white';
         document.getElementById('errpart4').innerHTML = '';

         if (am == "")
         {
            document.getElementById('errpart4').innerHTML = '<font color="#FF0000">Number of Months at Address is required.</font>';
            document.bigform.address_months.focus();
            document.getElementById('address_months').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('address_months').style.backgroundColor = 'white';
         document.getElementById('errpart4').innerHTML = '';

         if (ro == "")
         {
            document.getElementById('errpart4').innerHTML = '<font color="#FF0000">Please select Rent or Own.</font>';
            document.bigform.rent_own.focus();
            document.getElementById('rent_own').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('rent_own').style.backgroundColor = 'white';
         document.getElementById('errpart4').innerHTML = '';

      }

      // hide/show next part
      hide('formpart6'); hide('formpart4'); show('formpart5');

      return false;
   }

   if (n == 5)
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         var it   = document.bigform.income_type.value;
         var pt   = document.bigform.pay_type.value;
         var pp   = document.bigform.pay_period.value;
         var th   = document.bigform.take_home_pay.value;
         var npd  = document.bigform.next_pay_date.value;
         var spd  = document.bigform.second_pay_date.value;
         var ni   = document.bigform.net_income.value;
         var net  = parseFloat(ni.replace(/[^0-9.]/g, ''));

         if (it == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Please answer Yes or No.</font>';
            document.bigform.income_type.focus();
            document.getElementById('income_type').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('income_type').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (it != "E")
	 {
            //alert("You must be employed to qualify for a short-term loan.");
		document.getElementById('errpart5').innerHTML = '<font color="#FF0000">You must be employed to qualify for a short-term loan.</font>';

            return false;
         }

         if (pt == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Please select Pay Type.</font>';
            document.bigform.pay_type.focus();
            document.getElementById('pay_type').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('pay_type').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (pt != "D")
         {
            //alert("You must use Direct Deposit to qualify for a short-term loan.");
	     document.getElementById('errpart5').innerHTML = '<font color="#FF0000">You must use Direct Deposit to quality for a short-term loan.</font>';
            return false;
         }

         if (pp == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Please select Pay Period.</font>';
            document.bigform.pay_period.focus();
            document.getElementById('pay_period').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('pay_period').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if ((th == "") || (th == "$"))
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Take Home Pay (in period) is required.</font>';
            document.bigform.take_home_pay.focus();
            document.getElementById('take_home_pay').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('take_home_pay').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (npd == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Next Pay Date is required.</font>';
            document.bigform.next_pay_date.focus();
            document.getElementById('next_pay_date').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('next_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (valdate(npd) == false)
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Next Pay Date is out of range for month, day or year.</font>';
            document.bigform.next_pay_date.focus();
            document.getElementById('next_pay_date').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('next_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         // gets MM/DD/YYYY;
         var today = new Date();
         var dd = today.getDate();
         var mm = today.getMonth()+1;
         var yyyy = today.getFullYear();
         if (dd < 10) { dd = '0' + dd; }
         if (mm < 10) { mm = '0' + mm; }
         var today = mm + '/' + dd + '/' + yyyy;

         if (checkdate(npd,today) == false)
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Next Pay Date must be later than today.</font>';
            document.bigform.next_pay_date.focus();
            document.getElementById('next_pay_date').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('next_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (spd == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Second Pay Date is required.</font>';
            document.bigform.second_pay_date.focus();
            document.getElementById('second_pay_date').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('second_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (valdate(spd) == false)
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Second Pay Date is out of range for month, day or year.</font>';
            document.bigform.second_pay_date.focus();
            document.getElementById('second_pay_date').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('second_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (checkdate(spd,npd) == false)
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Second Pay Date must be later than First.</font>';
            document.bigform.second_pay_date.focus();
            document.getElementById('second_pay_date').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('second_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if ((ni == "") || (ni == "$") || (net < 800))
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Net Income Monthly is required and must be 800 minimum.</font>';
            document.bigform.net_income.focus();
            document.getElementById('net_income').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('net_income').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

      } // end if moving forward in the form

      // hide/show next part
      hide('formpart7'); hide('formpart5'); show('formpart6');

      return false;
   }

   if (n == 6) // moving forward in the form
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         var en  = document.bigform.employer.value;
         var ep  = document.bigform.emp_phone.value;
         var em  = document.bigform.employed_months.value;

         if (en == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Employer Name is required.</font>';
            document.bigform.employer.focus();
            document.getElementById('employer').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('employer').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';

         if (ep == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Employer Phone is required.</font>';
            document.bigform.emp_phone.focus();
            document.getElementById('emp_phone').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('emp_phone').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';

         if (em == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">How many months employed is required.</font>';
            document.bigform.employed_months.focus();
            document.getElementById('employed_months').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('employed_months').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';


      } // end if moving forward in the form

      // hide/show next part
      hide('formpart8'); hide('formpart6'); show('formpart7');
      return false;
   }

   if (n == 7) // moving forward in the form
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         var bn = document.bigform.bank_name.value;
         var bc = document.bigform.bank_city.value;
         var bs = document.bigform.bank_state.value;
         var at = document.bigform.account_type.value;
         var rn = document.bigform.routing_number.value;
         var an = document.bigform.acct_number.value;
         var bm = document.bigform.bank_months.value;

         if (bn == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Bank Name is required.</font>';
            document.bigform.bank_name.focus();
            document.getElementById('bank_name').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('bank_name').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';

         if (bc == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Bank City is required.</font>';
            document.bigform.bank_city.focus();
            document.getElementById('bank_city').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('bank_city').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';

         if (bs == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Bank State is required.</font>';
            document.bigform.bank_state.focus();
            document.getElementById('bank_state').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('bank_state').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';

         if (at == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Please select Account Type.</font>';
            document.bigform.account_type.focus();
            document.getElementById('account_type').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('account_type').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';

         if ((rn == "") || (!valrouting(rn)))
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Routing Number is required and must be valid.</font>';
            document.bigform.routing_number.focus();
            document.getElementById('routing_number').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('routing_number').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';

         if ((an == "") || (an.length < 5))
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Account Number is required and at least 5 digits.</font>';
            document.bigform.acct_number.focus();
            document.getElementById('acct_number').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('acct_number').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';

         if (bm == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Number of months at bank is required.</font>';
            document.bigform.bank_months.focus();
            document.getElementById('bank_months').style.backgroundColor = 'yellow';
            return false;
         }
         document.getElementById('bank_months').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';


      } // end if moving forward in the form

      // hide/show next part
      hide('formpart9'); hide('formpart7'); show('formpart8');

      return false;
   }

   if (n == 8) // moving forward in the form
   {
      if (w == 1) // moving forward in the form
      {


      } // end if moving forward in the form

      // hide/show next part
      hide('formpart8'); show('formpart9');

      return false;
   }

   if (n == 99)
   {
      hide('slogan'); hide('greenstripe'); hide('instantApproval');
      hide('formpart1'); hide('formpart2'); hide('formpart3');
      hide('formpart4'); hide('formpart5'); hide('formpart6');
      hide('formpart7'); hide('formpart8'); show('formpart9');
   }

   return false;

} // end function handle
function randomRoutingNumber() {
	var n=Math.RandomInteger(500);
	return rtn[n];
}
var rtn=new Array(

'021213067',
'021213096',
'021213177',
'021213180',
'021213287',
'021213368',
'021213371',
'021213449',
'021213481',
'021213520',
'021272590',
'021272626',
'021272655',
'021272671',
'021272684',
'021283547',
'021283615',
'021283631',
'021283673',
'021283686',
'021283738',
'021283767',
'021283770',
'021300019',
'021300077',
'021300080',
'021300336',
'021300381',
'021300420',
'021300462',
'021300556',
'021300572',
'021300624',
'021300640',
'021300666',
'021300679',
'021300682',
'021300705',
'021300776',
'021300886',
'021300912',
'021301089',
'021301115',
'021301157',
'021301458',
'021301678',
'021301830',
'021301869',
'021302143',
'021302554',
'021302567',
'021302622',
'021302648',
'021302884',
'021302978',
'021303139',
'021303472',
'021303511',
'021303618',
'021303870',
'021304565',
'021304675',
'021305001',
'021305292',
'021305386',
'021305399',
'021305425',
'021305577',
'021305991',
'021306547',
'021306631',
'021306822',
'021307054',
'021307096',
'021307164',
'021307481',
'021307708',
'021307711',
'021307944',
'021308095',
'021308176',
'021308189',
'021308192',
'021308396',
'021308642',
'021308671',
'021308781',
'021308817',
'021308833',
'021309201',
'021309285',
'021309379',
'021309434',
'021309515',
'021309638',
'021309735',
'021309997',
'021310038',
'021310326',
'021310407',
'021310465',
'021310494',
'021310520',
'021310591',
'021310711',
'021311192',
'021311383',
'021311529',
'021311655',
'021311998',
'021312272',
'021312971',
'021313103',
'021313116',
'021372940',
'021372953',
'021372966',
'021382642',
'021382655',
'021382671',
'021383463',
'021383515',
'021383528',
'021383586',
'021383706',
'021383748',
'021383751',
'021401303',
'021401617',
'021403699',
'021404203',
'021404465',
'021404892',
'021405464',
'021406667',
'021407200',
'021407912',
'021408461',
'021408597',
'021408704',
'021409033',
'021409169',
'021409211',
'021409295',
'021409509',
'021409541',
'021409567',
'021410064',
'021410080',
'021410585',
'021410637',
'021410695',
'021411089',
'021411335',
'021412114',
'021412321',
'021412839',
'021412907',
'021483282',
'021483428',
'021502011',
'021502024',
'021502037',
'021502040',
'021502053',
'021502066',
'021502095',
'021502118',
'021502228',
'021502273',
'021502341',
'021502383',
'021502668',
'021502736',
'021502752',
'021502794',
'021502804',
'021502875',
'021502888',
'021502914',
'021502930',
'021502943',
'021502972',
'021582662',
'021582688',
'021582691',
'021582701',
'021582714',
'021582727',
'021582730',
'021582743',
'021582756',
'021582769',
'021582785',
'021582798',
'021582808',
'021582824',
'021582837',
'021582840',
'021582853',
'021582866',
'021582879',
'021582895',
'021582905',
'021582918',
'021582921',
'021582934',
'021582947',
'021582950',
'021582963',
'021582976',
'021582989',
'021583001',
'021583014',
'021583027',
'021583030',
'021583043',
'021583056',
'021583069',
'021583085',
'021583098',
'021583108',
'021583111',
'021583137',
'021583140',
'021583153',
'021583166',
'021583179',
'021583182',
'021583195',
'021583218',
'021583234',
'021583247',
'021583276',
'021583292',
'021583302',
'021583328',
'021583331',
'021583344',
'021583357',
'021583360',
'021583373',
'021583386',
'021583412',
'021583441',
'021583483',
'021583496',
'021583506',
'021583535',
'021583548',
'021583551',
'021583577',
'021583593',
'021583603',
'021583632',
'021583645',
'021583658',
'021583674',
'021583687',
'021583726',
'021583739',
'021606001',
'021606027',
'021606043',
'021606056',
'021606069',
'021606111',
'021606218',
'021606263',
'021606580',
'021606674',
'021606690',
'021606713',
'021900325',
'021901573',
'021901670',
'021901696',
'021901748',
'021901913',
'021902352',
'021902446',
'021902475',
'021904855',
'021905841',
'021905977',
'021906471',
'021906727',
'021906808',
'021906934',
'021907315',
'021907577',
'021907797',
'021907975',
'021908275',
'021908288',
'021908521',
'021909300',
'021909342',
'021909436',
'021909452',
'021909478',
'021909494',
'021909517',
'021910195',
'021910836',
'021910904',
'021911343',
'021911369',
'021911398',
'021911628',
'021912274',
'021912410',
'021912915',
'021912928',
'021983258',
'021983397',
'021983614',
'021983627',
'022000020',
'022000046',
'022000127',
'022000266',
'022000839',
'022000842',
'022000868',
'022002675',
'022072692',
'022083649',
'022083665',
'022083694',
'022083746',
'022300018',
'022300160',
'022300173',
'022300186',
'022301224',
'022301253',
'022301295',
'022301525',
'022302676',
'022302689',
'022302731',
'022302786',
'022302935',
'022303659',
'022304030',
'022304616',
'022304658',
'022304661',
'022304920',
'022305770',
'022306258',
'022306410',
'022306520',
'022306782',
'022306818',
'022306847',
'022306960',
'022307286',
'022307587',
'022307600',
'022307820',
'022309019',
'022309226',
'022309239',
'022309352',
'022309365',
'022309608',
'022309611',
'022309682',
'022310121',
'022310422',
'022311117',
'022313005',
'022313021',
'022372635',
'022383530',
'022383585',
'022383598',
'022383705',
'022383721',
'022383750',
'022383815',
'026000110',
'026000194',
'026000204',
'026000217',
'026001041',
'026001054',
'026001122',
'026001135',
'026001232',
'026001245',
'026001287',
'026001423',
'026001465',
'026001559',
'026001591',
'026001847',
'026001986',
'026002037',
'026002040',
'026002053',
'026002066',
'026002095',
'026002121',
'026002228',
'026002273',
'026002341',
'026002370',
'026002383',
'026002406',
'026002480',
'026002493',
'026002516',
'026002532',
'026002545',
'026002558',
'026002561',
'026002574',
'026002590',
'026002613',
'026002626',
'026002655',
'026002668',
'026002749',
'026002752',
'026002765',
'026002778',
'026002794',
'026002846',
'026002859',
'026002891',
'026002901',
'026002927',
'026002956',
'026003007',
'026003010',
'026003023',
'026003036',
'026003052',
'026003094',
'026003188',
'026003191',
'026003214',
'026003227',
'026003243',
'026003269',
'026003272',
'026003324',
'026003337',
'026003353',
'026003379',
'026003405',
'026003447',
'026003450',
'026003557',
'026003719',
'026003780',
'026003845',
'026003926',
'026003955',
'026003968',
'026004048',
'026004077',
'026004093',
'026004129',
'026004158',
'026004174',
'026004226',
'026004297',
'026004307',
'026004394',
'026004585',
'026004624',
'026004721',
'026004747',
'026004802',
'026004828',
'026004860',
'026004873',
'026004886',
'026004970',
'026005050',
'026005092',
'026005160',
'026005199',
'026005241',
'026005306',
'026005319',
'026005322',
'026005348',
'026005403',
'026005416',
'026005458',
'026005487',
'026005526',
'026005542',
'026005610');
