
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
     

       document.getElementById("search").style.display="none";
       document.getElementById("sortedbyname").style.display="none";
       document.getElementById("response").style.display="block";

       document.getElementById("response").innerHTML = ajaxRequest.responseText;
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


function sortbyrank()
{
  document.getElementById('search').style.display="block";
  document.getElementById('sortedbyname').style.display="none";
  document.getElementById("response").style.display="none";
    document.getElementById("graphSpace2").style.display="none";
    document.getElementById("graphSpace1").style.display="block";

document.getElementById("graph2").style.display="none";
document.getElementById("graph1").style.display="block";
  document.getElementById('ran').style.backgroundColor="#ff8855";
  document.getElementById('nam').style.backgroundColor="#0088AA";
}



function sortbyname()
{

    document.getElementById("graphSpace2").style.display="block";
    document.getElementById("graphSpace1").style.display="none";
  document.getElementById('search').style.display="none";
  document.getElementById('sortedbyname').style.display="block";
  document.getElementById("response").style.display="none";
  document.getElementById('nam').style.backgroundColor="#ff8855";
  document.getElementById('ran').style.backgroundColor="#0088AA";
  
  
document.getElementById("graph2").style.display="block";
document.getElementById("graph1").style.display="none";
}