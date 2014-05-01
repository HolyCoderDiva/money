$('.hidden').hide();
$('.show').click(function(){
	var which = $(this).attr('rel');
	$('.hidden.'+which).toggle();
	return false;
});
function show(div) {document.getElementById(div).style.display='inline';}
function hide(div) {document.getElementById(div).style.display='none';}
////////function resize(div) {document.getElementById(div).style.
// #     #    #    #     # ######  #       #######    ####### ####### ######  #     # 
// #     #   # #   ##    # #     # #       #          #       #     # #     # ##   ## 
// #     #  #   #  # #   # #     # #       #          #       #     # #     # # # # # 
// ####### #     # #  #  # #     # #       #####      #####   #     # ######  #  #  # 
// #     # ####### #   # # #     # #       #          #       #     # #   #   #     # 
// #     # #     # #    ## #     # #       #          #       #     # #    #  #     # 
// #     # #     # #     # ######  ####### #######    #       ####### #     # #     # 
function handle(n)
	{
	switch(n+'')
		{
		case '0': // return to front
			//show('greenstripe');
			//show('instantApproval');
			hide('formpart2');
			show('formpart1');
			break;
		case '1': 
			hide('formpart1');
			hide('formpart3');
			show('formpart2');
			hide('instantApproval');
			setData('p2namespace','<ul class="checkmark"><li>'+field('first_name')+' '+field('last_name')+' Personal Info</li></ul>');
			break;
		case '2': 
			hide('formpart4');
			hide('formpart2');
			show('formpart3');
			setData('p3namespace','<ul class="checkmark"><li>Contact Info</li></ul>');
			break;
		case '3': 
			hide('formpart5');
			hide('formpart3');
			//hide('slogan');
			show('formpart4');
					
			setData('p4namespace','<ul class="checkmark"><li>Home Info</li></ul>');
			break;
		case '4': 
			hide('formpart6');
			hide('formpart4');
			show('formpart5');
			setData('p5namespace','<ul class="checkmark"><li>Employment</li></ul>');
			break;
		case '5': 
			hide('formpart7');
			hide('formpart5');
			show('formpart6');
			setData('p6namespace','<ul class="checkmark"><li>Your Income</li></ul>');
			break;

		case '6': 
			hide('formpart8');
			hide('formpart6');
			show('formpart7');
			setData('p7namespace','<ul class="checkmark"><li>Banking Info</li></ul>');
			break;
		case '7': 
			hide('formpart9');
			hide('formpart7');
			show('formpart8');
			setData('p8namespace','<ul class="checkmark"><li>Personal Reference</li></ul>');
			break;
		case '8': 
			hide('formpart8');
			show('formpart9');
			setData('p8namespace','<ul class="checkmark"><li>Personal Reference</li></ul>');
			break;

		case '99': 
			hide('slogan');
			hide('greenstripe');
			hide('instantApproval');
			hide('formpart1');
			hide('formpart2');
			hide('formpart3');
			hide('formpart4');
			hide('formpart5');
			hide('formpart6');
			hide('formpart7');
			hide('formpart8');
			show('formpart9');
			break;
		}
	return (false);
	}
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
	setData('output','Storing Data...');
	setData('waitspace','<img style="display: block; margin-left: auto; margin-right: auto;" src="/ajloader.gif" />');
	var o='';

// fix up a bunch of stuff

	bigform.elements['requested_amount'].value=1000; // need to get if from the thing
	


	// create POST array
	var params='';
	for(i=0; i<document.bigform.elements.length; i++)
		{
		params = params + bigform.elements[i].name + "=" + bigform.elements[i].value + "&";
		}
	params=params+'x=y';
	//addData('output',params);
	var http = new XMLHttpRequest();
	var response='';
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
			addData('output','Locating Lender...');
			var url2='http://themoneycompany.com/proxy.php?action=lend';
			http2.open("POST", url2, true);
			http2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			http2.setRequestHeader("Content-length", params.length);
			http2.setRequestHeader("Connection", "close");
			http2.onreadystatechange = function()
				{
				if(http2.readyState == 4 && http2.status == 200)
					{
					console.log("zOK State=" + http.readyState + " Status=" + http2.status + " Text=" + http2.responseText);
					response2=http2.responseText;
					addData('output',response2);
					}
				else
					{
					addData('output',"State=" + http2.readyState + " Status=" + http2.status + " Text=" + http2.responseText);
					}
				}
			http2.send(params);
			}
		else
			{
			addData('output',"Status=" + http.readyState + " Status=" + http.status + " Text=" + http.responseText);
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
function print(targetdiv,formfieldname)
	{
    document.getElementById(targetdiv).innerHTML = field(formfieldname);
	}
function field(formfieldname)
	{
	return (document.forms['bigform'].elements[formfieldname].value);
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
        document.getElementById(targetdiv).innerHTML = document.getElementById(targetdiv).innerHTML+'<br>'+dta;
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
