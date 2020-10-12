// function SaveData() {

//       request = new asyncRequest()
//       request.open("POST", "/app/router/dataWithEditor", true)
//       request.setRequestHeader("Content-type",
//         "application/x-www-form-urlencoded")

//       request.onreadystatechange = function()
//       {

//         if (this.readyState == 4)
//         {
//           if (this.status == 200)
//           {
		
//             if (this.responseText != null)
//             {
// 				document.getElementById('modalWindow').innerHTML =
//                 this.responseText
//             }
//             else alert("Письмо не отправлено: нет ответа")
//           }
//           else
// 		  {
// 			  alert( "Письмо не отправлено: " + this.statusText);
// 		  } 			  
//         }
//       }

      // request.send(params)

//       function asyncRequest()
//       {
//         try
//         {
//           var request = new XMLHttpRequest()
//         }
//         catch(e1)
//         {
//           try
//           {
//             request = new ActiveXObject("Msxml2.XMLHTTP")
//           }
//           catch(e2)
//           {
//             try
//             {
//               request = new ActiveXObject("Microsoft.XMLHTTP")
//             }
//             catch(e3)
//             {
//               request = false
//             }
//           }
//         }
//         return request
//       }
//     return false
// }