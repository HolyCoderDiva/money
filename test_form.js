// test all Big Form elements to Database and LeadFlash

function test_form()
{
   hide('greenstripe');    
   hide('formspace');    

   show('output'); 
   setData('output', '<p>Please wait as we search our Lenders....</p>');
   addData('output', '<p><img src="ajloader.gif" /></p>');
   
   //setTimeout(function()
   //{
   //   // nothing, just wait
   //}, 5000);

   // create POST array
   var params = '';

   /////////////////////////////////////////////////////////////////////////////////////////////

   // special check for blank employer for LeadFlash (required if no employ or benefits)
   if (document.bigform.employer.value  == "") document.bigform.employer.value="BENEFITS";
   if (document.bigform.emp_phone.value == "") document.bigform.emp_phone.value="(999)999-9999";

   if (document.bigform.primary_phone.value == "") document.bigform.primary_phone.value = document.bigform.cell_phone.value; 
   if (document.bigform.primary_phone.value == "") document.bigform.primary_phone.value = document.bigform.secondary_phone.value;   

   if (document.bigform.ref_fname.value == "") // if first name blank, blank the rest for LF
   {
      document.bigform.ref_lname.value    = "";
      document.bigform.ref_relation.value = "";
      document.bigform.ref_phone.value    = "";
   }
            
   if (document.bigform.ref_fname.value != "") // if first name not blank, put in right format, and fill rest
   {
      document.bigform.ref_fname.value =             document.bigform.ref_fname.value + " " + document.bigform.ref_lname.value;
      if (document.bigform.ref_relation.value == "") document.bigform.ref_relation.value = "O"; // other
      if (document.bigform.ref_phone.value == "")    document.bigform.ref_phone.value = "(999)999-9999"; // fill phone
   }

   /////////////////////////////////////////////////////////////////////////////////////////////
   
   // get all form params   
   for (i = 0; i < document.bigform.elements.length; i++)
   {
      params = params + bigform.elements[i].name + "=" + bigform.elements[i].value + "&";
   }
   params=params + 'x=y'; // tack on end
   
   alert("params = " + params);

   // AJAX Store Form data to Database, and send params to Lead Flash

   var http = new XMLHttpRequest();
   var response = '';
   var url='proxytest.php?action=store';
   
   http.open("POST", url, true);
   http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   http.setRequestHeader("Content-length", params.length);
   http.setRequestHeader("Connection", "close");
   
   http.onreadystatechange = function()
   {
      if(http.readyState == 4 && http.status == 200)
      {
         response=http.responseText;
         setData('output','Your data has been successfully sent to Lenders....' + response);
         n = response.indexOf("='",0); // find begin of URL
         
         if (n > 0) // n > 0 we have URL (accepted), if < 0 no URL (error/declined)
         {
            n = n + 2;  // adjust for two chars
            m = response.indexOf("'>",0); // find end of URL
            m = m - 1; // adjust for one char
            
            LF_URL = response.substr(n,(m-n)+1);    // parse response for 'url' between quote marks
            
            addData('output','<p><img src="ajloader.gif" /></p>');

            alert("forwarding to URL = " + LF_URL);

            //setTimeout(function() // wait 10 seconds and then forward to Lenders
            //{
               //window.location.href=LF_URL;
            //
            //}, 10000);

         } // end if
         
      }   
      else
      {
         // nothing
         

      }  

   }

   http.send(params);
   return false;
}


/////// AJAX Misc functions ///////

function setData(targetdiv, text)
{
   document.getElementById(targetdiv).innerHTML = text;
}

function addData(targetdiv, text)
{
   document.getElementById(targetdiv).innerHTML = document.getElementById(targetdiv).innerHTML + '<br>' + text;
}

/////// BELOW NOT USED ///////

function setDataIE8(targetdiv, text)
{
   var newdiv = document.createElement("div");
   newdiv.innerHTML = text;
   var container = document.getElementById(targetdiv);
   container.appendChild(newdiv);
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

} // end function getData


function m_refresh()
{
   var me = document.getElementById('mobi');
   me.src = me.src;
}

function m_ajax(targetdiv)
{
   setData(targetdiv, '<img src="/ajloader.gif"/>');
}

function m_ajax2(targetdiv)
{
   setData(targetdiv, '<img src="/ajloader.gif"/>');
}

function print(targetdiv, formfieldname)
{
   document.getElementById(targetdiv).innerHTML = field(formfieldname);
}

function field(formfieldname)
{
   return (document.forms['bigform'].elements[formfieldname].value);
}
