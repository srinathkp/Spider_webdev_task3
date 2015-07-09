
	var str;
  var err1,err2,err3,err4,err5,err6,err7,err8;



function isAlphakey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode

// if (charCode > 31 && ( charCode < 48 || charCode > 57))
if ((charCode > 96 && charCode < 123) || (charCode > 64 && charCode <91) || charCode == 46 || charCode==32 ||
  charCode==8)

      {  
      	
      	return true; 
      }
   else
   { 
    alert(charCode);
    return false;
}
}


function passcheck()
{
if(document.getElementById("pswd").value !="" && 
document.getElementById("pswd2").value != document.getElementById("pswd").value)
{

if(document.getElementById("pswd2").value!="")

{	
document.getElementById("error1").style.color="red";	
document.getElementById("error1").innerHTML="Passwords do not match";
err2=1;
}
else
{
	document.getElementById("error1").innerHTML="";
  
}
}
else if(document.getElementById("pswd").value=="")
{
	document.getElementById("error1").innerHTML="";
  
}
else
{
  
  document.getElementById("error1").innerHTML="";
}
}

function strength()
{

var z=document.getElementById("pswd").value;
var cnt1=0;
var cnt2=0;
var cnt3=0;
var i;
for(i=0;i<z.length;i++)
{
if(isUpperCase(z.charAt(i)))
{
cnt1++;
}

else if(isLowerCase(z.charAt(i)))
	cnt2++;
else
	cnt3++;
}
if(z.length >13 || (z.length >8 && cnt1 > 0 && cnt2 > 0 && cnt3 > 0))
{
	document.getElementById("strength").style.color="green";
	document.getElementById("strength").innerHTML="Very strong";
}

else if(z.length >10 || (z.length >6 && ((cnt1 > 0 && cnt2 > 0)||(cnt1>0 && cnt3>0) ||
	(cnt2>0 && cnt3>0))))
{
document.getElementById("strength").style.color="green";	
document.getElementById("strength").innerHTML="Strong";
}
else if(cnt1 >0 || cnt2 >0 || cnt3>0)
{

document.getElementById("strength").style.color="red";	
document.getElementById("strength").innerHTML="Weak";

}
else
{
	document.getElementById("strength").innerHTML="";
}



}

function isUpperCase(aCharacter)    
{    
    return (aCharacter >= 'A') && (aCharacter <= 'Z');
}


function isLowerCase(aCharacter)    
{    
    return (aCharacter >= 'a') && (aCharacter <= 'z');
}


function ajaxFunction()
{

  var ajaxRequest;  // The variable that makes Ajax possible!
  
  try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
  } catch (e){
    // Internet Explorer Browsers
    try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e){
        // Something went wrong
        alert("Your browser broke!");
        return false;
      }
    }
  }

  var username=document.getElementById('username').value;

  if(username.length<4)
  {
   document.getElementById('response').innerHTML="Too small!!";
  }

else
{


  ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4 && ajaxRequest.status==200){
     
       document.getElementById("response").innerHTML = ajaxRequest.responseText;
  //    
  }

}




}


  // var queryString = "username=" +username;
  

  ajaxRequest.open("GET", "usernamecheck/"+username, true);
    // ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// ajaxRequest.setRequestHeader("Content-length", queryString.length);
// ajaxRequest.setRequestHeader("Connection", "close");


  ajaxRequest.send(); 

}

<!-- 
//Browser Support Code