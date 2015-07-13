
function search()
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

if(username.length >=1)
{
  ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4 && ajaxRequest.status==200){
     
       document.getElementById("search").innerHTML = ajaxRequest.responseText;
  //    
  }

}






  // var queryString = "username=" +username;
  

  ajaxRequest.open("GET", "usernamesearch/"+username, true);
    // ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// ajaxRequest.setRequestHeader("Content-length", queryString.length);
// ajaxRequest.setRequestHeader("Connection", "close");


  ajaxRequest.send(); 
}
}