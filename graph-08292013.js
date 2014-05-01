$('.hidden').hide();
$('.show').click(function(){
	var which = $(this).attr('rel');
	$('.hidden.'+which).toggle();
	return false;
});

function show(div) {document.getElementById(div).style.display='inline';}
function hide(div) {document.getElementById(div).style.display='none';}
////////function resize(div) {document.getElementById(div).style.

// handles all form validation of required fields
// and moves to next part (show/hide)
// n = form part to validate
// w = which direction - (1) moving forward, (0) backward - only validates forward

function handle(n,w)
{
   if (n == 0)
   {
      hide('formpart2'); show('formpart1');
   }
   
   if (n == 1) // form part 1 entered
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         var fn = document.bigform.first_name.value;
         var ln = document.bigform.last_name.value;
         var e  = document.bigform.email.value;

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

      } // end if moving forward
      
      // hide/show next part
      hide('formpart1'); hide('formpart3'); show('formpart2'); hide('instantApproval');
      //setData('p2namespace', '<span class="title">' + field('first_name') + ' ' + field('last_name') + ' Personal Info</span>';
      //setData('p2namespace', '<ul class="checkmark"><li>' + field('first_name') + ' ' + field('last_name') + ' Personal Info</li></ul>');
      return false;
   }

   if (n == 2) // form part 2 entered
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         
      }
  
      // hide/show next part
      hide('formpart4'); hide('formpart2'); show('formpart3');
      //setData('p3namespace', '<ul class="checkmark"><li>Contact Info</li></ul>');
      return false;
   }

   if (n == 3)
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         
      }
      
      // hide/show next part
      hide('formpart5'); hide('formpart3'); show('formpart4');
      //setData('p4namespace', '<ul class="checkmark"><li>Home Info</li></ul>');
      return false;
   }

   if (n == 4)
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         
      }
  
      // hide/show next part
      hide('formpart6'); hide('formpart4'); show('formpart5');
      //setData('p5namespace', '<ul class="checkmark"><li>Employment</li></ul>');
      return false;
   }

   if (n == 5)
   {
      if (w == 1) // moving forward in the form
      {

/*
         // check for required fields
         var emp = document.bigform.employer.value;
         var eph = document.bigform.emp_phone.value;
         var jt  = document.bigform.job_title.value;

         if (emp == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Employer Name is required.</font>';
            document.bigform.employer.focus(); 
            document.getElementById('employer').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('employer').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (eph == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Employer Phone is required.</font>';
            document.bigform.emp_phone.focus(); 
            document.getElementById('emp_phone').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('emp_phone').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

         if (jt == "")
         {
            document.getElementById('errpart5').innerHTML = '<font color="#FF0000">Job Title is required.</font>';
            document.bigform.job_title.focus(); 
            document.getElementById('job_title').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('job_title').style.backgroundColor = 'white';
         document.getElementById('errpart5').innerHTML = '';

*/        
         
      } // end if moving forward in the form
  
      // hide/show next part
      hide('formpart7'); hide('formpart5'); show('formpart6');
      //setData('p6namespace', '<ul class="checkmark"><li>Your Income</li></ul>');
      return false;
   }

   if (n == 6) // moving forward in the form
   {
      if (w == 1) // moving forward in the form
      {

/*
         // check for required fields
         var ni  = document.bigform.net_income.value;
         var it  = document.bigform.income_type.value;
         var em  = document.bigform.employed_months.value;
         var pp  = document.bigform.pay_period.value;
         var pt  = document.bigform.pay_type.value;
         var lpd = document.bigform.last_pay_date.value;
         var npd = document.bigform.next_pay_date.value;
         var spd = document.bigform.second_pay_date.value;
         
         if (ni == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Net Income Monthly is required.</font>';
            document.bigform.net_income.focus(); 
            document.getElementById('net_income').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('net_income').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';         
                  
         if (it == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Please select Income Type.</font>';
            document.bigform.income_type.focus(); 
            document.getElementById('income_type').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('income_type').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';                 
 
          if (em == "")
          {
             document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Months Employed is required.</font>';
             document.bigform.employed_months.focus(); 
             document.getElementById('employed_months').style.backgroundColor = 'yellow';
             return false;
          }      
          document.getElementById('employed_months').style.backgroundColor = 'white';
          document.getElementById('errpart6').innerHTML = '';         
 
          if (pp == "")
          {
             document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Please select Pay Period.</font>';
             document.bigform.pay_period.focus(); 
             document.getElementById('pay_period').style.backgroundColor = 'yellow';
             return false;
          }      
          document.getElementById('pay_period').style.backgroundColor = 'white';
          document.getElementById('errpart6').innerHTML = '';         
 
         if (pt == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Please select Pay Type.</font>';
            document.bigform.pay_type.focus(); 
            document.getElementById('pay_type').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('pay_type').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';          
 
          if (lpd == "")
          {
             document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Last Pay Date is required.</font>';
             document.bigform.last_pay_date.focus(); 
             document.getElementById('last_pay_date').style.backgroundColor = 'yellow';
             return false;
          }      
          document.getElementById('last_pay_date').style.backgroundColor = 'white';
          document.getElementById('errpart6').innerHTML = '';         
 
         if (npd == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Next Pay Date is required.</font>';
            document.bigform.next_pay_date.focus(); 
            document.getElementById('next_pay_date').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('next_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';          
 
         if (spd == "")
         {
            document.getElementById('errpart6').innerHTML = '<font color="#FF0000">Second Pay Date is required.</font>';
            document.bigform.second_pay_date.focus(); 
            document.getElementById('second_pay_date').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('second_pay_date').style.backgroundColor = 'white';
         document.getElementById('errpart6').innerHTML = '';          

*/
         
      } // end if moving forward in the form
  
      // hide/show next part
      hide('formpart8'); hide('formpart6'); show('formpart7');
      //setData('p7namespace', '<ul class="checkmark"><li>Banking Info</li></ul>');
      return false;
   }

   if (n == 7) // moving forward in the form
   {
      if (w == 1) // moving forward in the form
      {

/*

         // check for required fields
         var bn = document.bigform.bank_name.value;
         var rn = document.bigform.routing_number.value;
         var an = document.bigform.acct_number.value;
         var at = document.bigform.account_type.value;

         if (bn == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Bank Name is required.</font>';
            document.bigform.bank_name.focus(); 
            document.getElementById('bank_name').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('bank_name').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';         

         if (rn == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Routing Number is required.</font>';
            document.bigform.routing_number.focus(); 
            document.getElementById('routing_number').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('routing_number').style.backgroundColor = 'white';
         document.getElementById('errpart7').innerHTML = '';  

         if (an == "")
         {
            document.getElementById('errpart7').innerHTML = '<font color="#FF0000">Account Number is required.</font>';
            document.bigform.acct_number.focus(); 
            document.getElementById('acct_number').style.backgroundColor = 'yellow';
            return false;
         }      
         document.getElementById('acct_number').style.backgroundColor = 'white';
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

*/
         
      } // end if moving forward in the form
  
      // hide/show next part
      hide('formpart9'); hide('formpart7'); show('formpart8');
      //setData('p8namespace', '<ul class="checkmark"><li>Personal Reference</li></ul>');
      return false;
   }

   if (n == 8) // moving forward in the form
   {
      if (w == 1) // moving forward in the form
      {
         // check for required fields
         
         
         
         
      } // end if moving forward in the form
  
      // hide/show next part
      hide('formpart8'); show('formpart9');
      //setData('p8namespace', '<ul class="checkmark"><li>Personal Reference</li></ul>');
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

 //######  #######  #####  #######    ####### ####### ######  #     # 
 //#     # #     # #     #    #       #       #     # #     # ##   ## 
 //#     # #     # #          #       #       #     # #     # # # # # 
 //######  #     #  #####     #       #####   #     # ######  #  #  # 
 //#       #     #       #    #       #       #     # #   #   #     # 
 //#       #     # #     #    #       #       #     # #    #  #     # 
 //#       #######  #####     #       #       ####### #     # #     # 

function post_form()
{
   hide('greenstripe');
   hide('phoneNumber');
   hide('formspace');
   hide('footerStripe');

   //show('modalBack');
   show('waitspace');
   show('output');
   setData('output', 'Storing Data...');
   setData('waitspace', '<img style="display: block; margin-left: auto; margin-right: auto;" src="/ajloader.gif" />');
   var o = '';

   // fix up a bunch of stuff

   bigform.elements['requested_amount'].value = 1000; // need to get if from the thing

   // create POST array
   var params = '';
   for (i = 0; i < document.bigform.elements.length; i++)
   {
      params = params + bigform.elements[i].name + "=" + bigform.elements[i].value + "&";
   }
   params = params + 'x=y';
   //addData('output',params);
   var http = new XMLHttpRequest();
   var response = '';

//  #####  ####### ####### ######  ####### 
// #     #    #    #     # #     # #       
// #          #    #     # #     # #       
//  #####     #    #     # ######  #####   
//       #    #    #     # #   #   #       
// #     #    #    #     # #    #  #       
//  #####     #    ####### #     # #######

   var url='http://themoneycompany.com/proxy.php?action=store';
   http.open("POST", url, true);
   http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   http.setRequestHeader("Content-length", params.length);
   http.setRequestHeader("Connection", "close");
   http.onreadystatechange = function()
   {
      if(http.readyState == 4 && http.status == 200)
      {
         response=http.responseText;
         addData('output',response);
         //setData('waitspace','<img src="/ajax-loader.gif" />');
         var http2 = new XMLHttpRequest();
         var response2='';

//  #####  ####### #######    #       ####### #     # ######  ####### ######  
// #     # #          #       #       #       ##    # #     # #       #     # 
// #       #          #       #       #       # #   # #     # #       #     # 
// #  #### #####      #       #       #####   #  #  # #     # #####   ######  
// #     # #          #       #       #       #   # # #     # #       #   #   
// #     # #          #       #       #       #    ## #     # #       #    #  
//  #####  #######    #       ####### ####### #     # ######  ####### #     # 

         addData('output', 'Locating Lender...');
         var url2 = 'http://themoneycompany.com/proxy.php?action=lend';
         http2.open("POST", url2, true);
         http2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         http2.setRequestHeader("Content-length", params.length);
         http2.setRequestHeader("Connection", "close");
         http2.onreadystatechange = function ()
         {
            if (http2.readyState == 4 && http2.status == 200)
            {
               console.log("zOK State=" + http.readyState + " Status=" + http2.status + " Text=" + http2.responseText);
               response2 = http2.responseText;
               addData('output', response2);
            }
            else
            {
               addData('output', "State=" + http2.readyState + " Status=" + http2.status + " Text=" + http2.responseText);
            }
         }

         http2.send(params);
         
      }
      else
      {
         addData('output', "Status=" + http.readyState + " Status=" + http.status + " Text=" + http.responseText);
      }
   }

   http.send(params);
   return false;
}


//    #          #    #    #     # 
//   # #         #   # #    #   #  
//  #   #        #  #   #    # #   
// #     #       # #     #    #    
// ####### #     # #######   # #   
// #     # #     # #     #  #   #  
// #     #  #####  #     # #     # 

function m_ajax(targetdiv)
{
   setData(targetdiv, '<img src="/front/modules/images/ajax-loader.gif"/>');
}

function m_ajax2(targetdiv)
{
   setData(targetdiv, '<img src="/front/modules/images/ajax-loader2.gif"/>');
}

function setData(targetdiv, dta)
{
   document.getElementById(targetdiv).innerHTML = dta;
}

function print(targetdiv, formfieldname)
{
   document.getElementById(targetdiv).innerHTML = field(formfieldname);
}

function field(formfieldname)
{
   return (document.forms['bigform'].elements[formfieldname].value);
}

function setDataIE8(targetdiv, dta)
{
   var newdiv = document.createElement("div");
   newdiv.innerHTML = dta;
   var container = document.getElementById(targetdiv);
   container.appendChild(newdiv);
}

function addData(targetdiv, dta)
{
   document.getElementById(targetdiv).innerHTML = document.getElementById(targetdiv).innerHTML + '<br>' + dta;
}

function readData(targetdiv)
{
   try
   {
      return (document.getElementById(targetdiv).innerHTML);
   }
   catch (err)
   {
      return ('');
   }
}

function m_refresh()
{
   var me = document.getElementById('mobi');
   me.src = me.src;
}

function getData(dataSource, targetdiv)
{
   var XMLHttpRequestObject = false;

   if (window.XMLHttpRequest)
   {
      XMLHttpRequestObject = new XMLHttpRequest();
   }
   else if (window.ActiveXObject)
   {
      XMLHttpRequestObject = new
      ActiveXObject("Microsoft.XMLHTTP");
   }

   if (XMLHttpRequestObject)
   {
      XMLHttpRequestObject.open("GET", dataSource, true);

      XMLHttpRequestObject.onreadystatechange = function ()
      {
         // only if XMLHttpRequestObject is "loaded"
         if (XMLHttpRequestObject.readyState == 4)
         {
            // only if "OK"
            if (XMLHttpRequestObject.status == 200)
            {
               results = XMLHttpRequestObject.responseText;
               document.getElementById(targetdiv).innerHTML = results;
            }
            else
            {
               document.getElementById(targetdiv).innerHTML = "AJAX error:n" + XMLHttpRequestObject.statusText;
            }
         }
      }

      XMLHttpRequestObject.send(null);
   }
}