
    var i=0
    
    var bookWord=1;
    var FlagChangePage = "fcp";
//    var idSt = 0;
    var rIndex = 0;
    var rIndexB = 0;
    var idB = 0;
    var NumberWords = 20;
    var request = false;
    var idSortArray = new Array(NumberWords);
    var TrnslArray = new Array(NumberWords);
    var TrnscArray = new Array(NumberWords);
    var WOArray = new Array(NumberWords);
    
   
    
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
      
 
 
 
  function fillLearn(ch,chval) {
 //alert(ch);

if (ch!="start") {bookWord = document.getElementById('numberInTable').value;}
woCurr=document.getElementById('oriWord').value;
nit = document.getElementById('numberInTable').value; 
 var  url = "lib/fillLearn.php?ch="+ch+"&chval="+chval+"&wocurr="+woCurr+"&nit="+nit;
 //   document.getElementById('Done0').checked
    
    
    request.open("GET", url, true);
    request.onreadystatechange = updatePageTo;
    request.send(null);
    }




function updatePageTo() {
  
if (request.readyState == 4){
      
    var tagList = request.responseText.split("@(@");
//    alert(tagList[0]);
    var mvWE=tagList[1].split("{{~");
    var mvID=tagList[0].split("{{~");
    var mvTrnsl=tagList[2].split("{{~");
    var mvTrnsc=tagList[3].split("{{~");
    var mvDate=tagList[4].split("{{~");
    var mvPr=tagList[5].split("{{~");
    var mvWO=tagList[6].split("{{~");
alert(mvWO);
    
  
  if (parseInt(mvTrnsl[0].charAt(0), 10) == 0){ document.getElementById('PrevPage').disabled = true;
  document.getElementById('PrevIcon').style.display='none';
   document.getElementById('FirstIcon').style.display='none';
  }
   else{ document.getElementById('PrevPage').disabled = false;
   document.getElementById('PrevIcon').style.display='block';
   document.getElementById('FirstIcon').style.display='block';
   }
 
 
 if (parseInt(mvTrnsl[0].charAt(1), 10) == 0){ document.getElementById('NextPage').disabled = true;
 document.getElementById('NextIcon').style.display='none';
 document.getElementById('LastIcon').style.display='none';
 }
 else{ document.getElementById('NextPage').disabled = false;
 document.getElementById('NextIcon').style.display='block';
 document.getElementById('LastIcon').style.display='block';
   
   }     
    
 //    alert( mvPr[0]);
     
     

    
    
    document.getElementById("NumberRow").innerHTML = mvID[0];
    document.getElementById("CurrRow").innerHTML = mvWE[0];
    document.getElementById("FCurrN").value = mvWE[0];
      
     for (var k = 0; k < NumberWords; k++) {
//        document.getElementById('tc'+idSortArray[k]).value = 'aa';

        document.getElementById("tc"+(k+1)).innerHTML =" ";
        document.getElementById("tc"+(k+1)).style.color="black";
              
        document.getElementById("idS"+(k+1)).innerHTML = " ";
        document.getElementById("idS"+(k+1)).style.background="white";
        document.getElementById("date"+(k+1)).innerHTML = " ";
        TrnslArray[k]=" ";    
        TrnscArray[k]=" ";    
        WOArray[k] = " ";
          }

   //    for (var k = 0; k < mvID.length-1; k++)
     //   alert(mvID.length);
       for (var k = 0; k < mvID.length-1; k++) {
//    document.getElementById('tc'+idSortArray[k]).value = 'aa';

      if (mvWO[0]== mvWO[k+1]){bookWord=k+1;}

              document.getElementById("tc"+(k+1)).innerHTML = mvWE[k+1];
       if(mvPr[k+1]==50){
    document.getElementById("tc"+(k+1)).style.color="blue";
       }
       
       if(mvPr[k+1]==-1){
    document.getElementById("idS"+(k+1)).style.background="black";
    document.getElementById("tc"+(k+1)).style.color="black";
       }
       
       
       
      
       if(mvPr[k+1]==100){
           document.getElementById("tc"+(k+1)).style.color="red";
              }
    document.getElementById("idS"+(k+1)).innerHTML = mvID[k+1];
    document.getElementById("date"+(k+1)).innerHTML = mvDate[k+1];
    TrnslArray[k]= mvTrnsl[k+1];    
    TrnscArray[k]= mvTrnsc[k+1];    
    WOArray[k] = mvWO[k+1];
       }

if (FlagChangePage=='pp'){ showWord(NumberWords);FlagChangePage='fcp';exit();} 
if (FlagChangePage=='np'){ showWord(1);FlagChangePage='fcp';exit();} 
 
showWord(bookWord);

   



  }
// end request.readyState == 4;
}

 
 
 
 
 
      
 function showWord(id)
{
 //alert(id);  
if (id > NumberWords){FlagChangePage='np';fillLearn('NextPage'); exit();}
if (id < 1){FlagChangePage='pp'; fillLearn('PrevPage'); exit();} 
               
 tcN='tc'+id  ;
 //alert('befor');
 window.document.WordForm.numberInTable.value=id;
// alert('after');
document.getElementById("CurrRow").innerHTML = parseInt(document.getElementById("FCurrN").value, 10) + parseInt(id,10) - 1;
document.getElementById('oriWord').value = WOArray[(id-1)] ;
window.document.WordForm.TextAreaTranslate.value=TrnslArray[(id-1)].replace(/&gt;/gi,">");


window.document.WordForm.WordEdit.value=document.getElementById('tc'+id).innerHTML.replace("Р�","'");
window.document.WordForm.trnsc.value=TrnscArray[(id-1)];

document.getElementById("tbn").rows[(rIndex)].cells[1].style.background="white";
document.getElementById("tbn").rows[(rIndex)].cells[2].style.background="white";

document.getElementById("tbn").rows[(id-1)].cells[1].style.background="silver";
document.getElementById("tbn").rows[(id-1)].cells[2].style.background="silver";
//document.getElementById("tbn").rows[(th.rowIndex)].cells[3].style.background="silver";
rIndex=id-1;
//alert('end');
}
     
 
      
      
      
 
  
 
 
 
