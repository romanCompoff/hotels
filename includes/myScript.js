
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-616186699');


function gtag_report_conversion(url) {
  var callback = function () {
	  console.log('conversion');
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-616186699/AkvjCLXy4NoBEMuG6aUC',
      'event_callback': callback
  });
  return false;
}

function SaveZakaz(eventTag) {
	if(eventTag == 'A'){
		params = "phoneText=Исходящий Звонок"
	}else{
	
		params  = "phoneText="+document.all.phoneText.value;
		// params += "&messageText=" + document.all.messageText.value;
		params += "&recipientName=" + document.all.recipientName.value;
	}
		params += "&siteName=<?=$configs['siteName']?>";
 
      request = new asyncRequest()

      request.open("POST", "/app/router/sendToEMail", false)
      request.setRequestHeader("Content-type",
        "application/x-www-form-urlencoded")

      request.onreadystatechange = function()
      {

        if (this.readyState == 4)
        {
          if (this.status == 200)
          {
		
            if (this.responseText != null)
            {
				document.getElementById('modalWindow').innerHTML =
                this.responseText

            }
            else alert("Письмо не отправлено: нет ответа")
          }
          else
		  {
			  // if(this.statusText != ''){
			  alert( "Письмо не отправлено: " + this.statusText);
			  // }
		  } 			  
        }
      }

      request.send(params)

      function asyncRequest()
      {
        try
        {
          var request = new XMLHttpRequest()
        }
        catch(e1)
        {
          try
          {
            request = new ActiveXObject("Msxml2.XMLHTTP")
          }
          catch(e2)
          {
            try
            {
              request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch(e3)
            {
              request = false
            }
          }
        }
        return request
      }
}

var myPhone = document.getElementsByClassName('conversion'); 
  var obj;
[].forEach.call( myPhone, function(el) {
	el.onclick = () => toSend(el);
});

function toSend(el){

		SaveZakaz(el.tagName);
		gtag_report_conversion();
		
		return false;
   
}
