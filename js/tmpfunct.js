function overm1(th) 
{   
  //  x.currentStyle
 objtt = document.getElementById("tbn").rows[(th.rowIndex)].cells[0];
 //window.document.WordForm.idSort.value = getStyle(objtt, 'background-color');

 //   alert (getStyle (objtt, 'background'));
    if    (getStyle(objtt, 'background-color') == "white")
    {

    document.getElementById("tbn").rows[(th.rowIndex)].cells[0].style.background="#E1F4FF";
    document.getElementById("tbn").rows[(th.rowIndex)].cells[1].style.background= "#E1F4FF";
    document.getElementById("tbn").rows[(th.rowIndex)].cells[2].style.background="#E1F4FF";
    
    }
}
function outm1(th) 
{
  objtt = document.getElementById("tbn").rows[(th.rowIndex)].cells[0];
  window.document.WordForm.idSort.value = getStyle(objtt, 'background-color');
   if    (getStyle(objtt, 'background-color') == "#e1f4ff")
    {
        document.getElementById("tbn").rows[(th.rowIndex)].cells[1].style.background="white";
        document.getElementById("tbn").rows[(th.rowIndex)].cells[2].style.background="white";
        document.getElementById("tbn").rows[(th.rowIndex)].cells[0].style.background="white";
      

    }

}


  
 function aaa() 
{
//    if    (document.getElementById('Done0').checked
   
        
     
alert(document.getElementById('Done0').checked);
}
 

function overm111(th) 
{

    if    (document.getElementById("tbn").rows[(th.rowIndex)].cells[0].style.background == "white")
    {

    document.getElementById("tbn").rows[(th.rowIndex)].cells[0].style.background="whitesmoke";
    
    document.getElementById("tbn").rows[(th.rowIndex)].cells[1].style.background="whitesmoke";
    document.getElementById("tbn").rows[(th.rowIndex)].cells[2].style.background="whitesmoke";
    
    }
}
function outm111(th) 
{

   if    (document.getElementById("tbn").rows[(th.rowIndex)].cells[0].style.background == "whitesmoke")
    {
        document.getElementById("tbn").rows[(th.rowIndex)].cells[1].style.background="white";
        document.getElementById("tbn").rows[(th.rowIndex)].cells[2].style.background="white";
        document.getElementById("tbn").rows[(th.rowIndex)].cells[0].style.background="white";
//        document.getElementById("tbn").rows[(th.rowIndex)].cells[4].style.background="white"; 
 //       document.getElementById("tbn").rows[(th.rowIndex)].cells[5].style.background="white";
        

    }
//alert("Server is done!");
}
    
    
    
 //Don't work bookmarks with this function   
  

function getStyle(x,styleProp)
        {
            if (x.currentStyle)
                var y = x.currentStyle[styleProp];
            else if (window.getComputedStyle)
                var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
            return y;
        }

  


// END Don't work bookmarks with this function
 
 
