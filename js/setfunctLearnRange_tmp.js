//------------------------------------------------
function memWord(beac) {
  beacon = beac;
   bookWord=document.getElementById('numberInTable').value ;
//alert(bookWord);
 // dLev = document.getElementById("dLevel").value;
  wLearn = document.getElementById("WordEdit").value;
     var url = "lib/setLearnRange.php?wLearn="+wLearn;
    
     
      request.open("GET", url, true);
      request.onreadystatechange = setLearnResponse;
      request.send(null);   
    
}

 function setLearnResponse() {

    if (request.readyState == 4){
 //       document.getElementById('tbn').style.display = 'none';
 //      alert(request.responseText); 
      if (request.responseText==0){document.getElementById('tbn').style.display = 'none';}
        moveUp(bookWord);    
    }
  } 
 //End ------------------------------------------
 //---------------------------------------------- 
  
function setLevel(nLev) {
    bookWord = document.getElementById('numberInTable').value ; 
  dLev = document.getElementById("dLevel").value;
  wLev = document.getElementById("WordEdit").value;
     var url = "lib/setLevel.php?nLev="+nLev+"&dLev="+dLev+"&wLev="+wLev;
    
     
      request.open("GET", url, true);
      request.onreadystatechange = setLevelResponse;
      request.send(null);   
    
}

 function setLevelResponse() {

    if (request.readyState == 4){
     nLev = request.responseText;
 //      fillTable('start'); 

 if ((nLev==0) || (nLev==100)){ memWord(); } 
 if (nLev==50){
 bookmark=document.getElementById('numberInTable').value;      
 document.getElementById("date"+bookmark).innerHTML =  dLev; 
     }   
 }
 }
 
 


 function seekTransResponse() {

    if (request.readyState == 4){
  var tagList = request.responseText.split("@(@");
  window.document.WordForm.TextAreaTranslate.value=tagList[1];
  window.document.WordForm.trnsc.value=tagList[0];
    }
  } 
 //End ѕоиск уже сущест. перевода или в словаре----------------------------------------

 function saveEdit(cha) {
   bookWord = document.getElementById('idSort').value ;   
 tr = window.document.WordForm.TextAreaTranslate.value;
 eWord = window.document.WordForm.WordEdit.value;
 
 oWord = document.getElementById(oriWord).value;
 tc = window.document.WordForm.trnsc.value;
 pth="lib/saveEdit.php";
 if (cha =="all"){pth="lib/saveEditA.php";}
 $.post(
  pth,
  {
    tr: tr,
    eWord: eWord,
    oWord: oWord,
    tc: tc 
  },
  saveEditResponse
);
}
 
 
 
 function saveEditResponse(data) {
//  alert(data);
 var tagList = data.split("@(@");

    var flag=tagList[0];
    var dtp=tagList[1];
    var pr=tagList[2];
  
        
  
  
  
    if (flag==0){
        
        document.getElementById("tc"+(bookWord)).style.color="black";
        document.getElementById("idS"+(bookWord)).style.background="white";
 
  TrnslArray[bookWord-1] = window.document.WordForm.TextAreaTranslate.value;
  TrnscArray[bookWord-1] = window.document.WordForm.trnsc.value;
  document.getElementById("tc"+bookWord).innerHTML = window.document.WordForm.WordEdit.value;
  document.getElementById("date"+bookWord).innerHTML=dtp;
    if(pr==50){  document.getElementById("tc"+(bookWord)).style.color="blue"; }
    if(pr==-1){
    document.getElementById("idS"+(bookWord)).style.background="black";
    document.getElementById("tc"+(bookWord)).style.color="black";
       }
     if(pr==100){document.getElementById("tc"+(bookWord)).style.color="red";}
 
    
   for (var k = 0; k < (NumberWords-bookWord); k++) {
//     alert("aaa");  
   f=parseInt(bookWord,10)+parseInt(k,10); fn=parseInt(bookWord,10)+parseInt(k,10)+1; 
 
   if(document.getElementById("tc"+fn).innerHTML==document.getElementById("tc"+bookWord).innerHTML)
    { moveUp(fn);exit(); }   
     }
   }
 
 
 if (flag==2){moveUp(bookWord);}
 
 }
 
 
 function delRestore(ch,cha) {
    
 bookWord = document.getElementById('idSort').value ;
  eWord = window.document.WordForm.WordEdit.value;
  pth="lib/delRestore.php";
  if (cha == "all"){pth="lib/delRestoreA.php";}
  $.get(
  pth,
  {
    ch: ch,
    eWord: eWord,
  },
  delRestoreResponse
);
   
}
 
 function delRestoreResponse(data) {
// alert(data);
 if ((document.getElementById('flagdel').checked == true) && (data==-1))
 {
 document.getElementById("idS"+(bookWord)).style.background="black";
 document.getElementById("tc"+(bookWord)).style.color="black";
 }
 if ((document.getElementById('flagdel').checked == false) && (data==-1)){moveUp(bookWord);}
 
 
 if ((document.getElementById('Done0').checked == true) && (data==1))
 {
 document.getElementById("idS"+(bookWord)).style.background="white";
 document.getElementById("tc"+(bookWord)).style.color="black";
 }
 if ((document.getElementById('Done0').checked == false) && (data==1)){moveUp(bookWord);}
 }
  
 
 
 function moveUp(i) {
  for (var k = 0; k < (NumberWords-i); k++) {
   f=parseInt(i,10)+parseInt(k,10); fn=parseInt(i,10)+parseInt(k,10)+1; 
  
   document.getElementById("tc"+f).innerHTML = document.getElementById("tc"+fn).innerHTML; 
   
   document.getElementById("idS"+f).innerHTML = document.getElementById("idS"+fn).innerHTML; 
   
   document.getElementById("date"+f).innerHTML = document.getElementById("date"+fn).innerHTML; 
  
   TrnslArray[f-1] = TrnslArray[fn-1];
   TrnscArray[f-1] = TrnscArray[fn-1];
   WOArray[f-1] = WOArray[fn-1];
  }

 eWord = document.getElementById("tc"+NumberWords).innerHTML;;

   pth="lib/popUpLearnRange.php";
 $.get(
  pth,
  {
    eWord: eWord
  },
  moveUpResponse
);

}

function moveUpResponse(data){
//echo $mvFlag."@(@".$mvW."@(@".$mvTrnsl."@(@".$mvTrnsc."@(@".$mvDate;
 
 var tagList = data.split("@(@");

    var mvWE=tagList[1];
    var mvID=tagList[0];
    var mvTrnsl=tagList[2];
    var mvTrnsc=tagList[3];
    var mvDate=tagList[4];
 
document.getElementById("NumberRow").innerHTML = document.getElementById("NumberRow").innerHTML -1;
 
    document.getElementById("tc"+(NumberWords)).innerHTML = mvWE;
    document.getElementById("idS"+(NumberWords)).innerHTML = mvID;
    document.getElementById("date"+(NumberWords)).innerHTML = mvDate;
    TrnslArray[NumberWords-1]= mvTrnsl;    
    TrnscArray[NumberWords-1]= mvTrnsc;    
//    WOArray[NumberWords-1] = mvWO;
showWord(bookWord);
}


function randWords(){
    
    
    
}

