 
   try {
      request = new XMLHttpRequest();
    } catch (trymicrosoft) {
      try {
        request = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (othermicrosoft) {
        try {
          request = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (failed) {
          request = false;
        }
      }
    }

    if (!request)
      alert("Error initializing XMLHttpRequest!"); 
      
      
   
 
 
  function check_exit() {
 
 var  url = "lib/stexit.php?ch=index";
 //   document.getElementById('Done0').checked
    
    
    request.open("GET", url, true);
    request.onreadystatechange = updatePageTo;
    request.send(null);
 
/*   
  pth="lib/fillTable.php";
$.ajax({
   type: "GET",
  url: pth,
       data: "ch="+ch+"&chval="+chval+"&wocurr="+woCurr+"&nit="+nit,
      async:true,
  success:  updatePageTo, 
 });
 */
   
  
  }




function updatePageTo(data) {alert("2");}
 