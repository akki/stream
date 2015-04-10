var server = "172.25.55.156";

openWin("https://youtube.com");
closeWin();
function openWin(site)
{
myWindow=window.open("song.php?site=" + site); //,"_blank",'');
// myWindow.blur();
myWindow.focus();
// myWindow.focus();
//myWindow.document.write("<p>This is 'myWindow'</p>");
}

function closeWin()
{
myWindow.close();
}

function refresh()
{
  //  alert("hello");
  $.ajax({
    url: "/stream/player.php",
  datatype: 'html',
    success: function(data){
    if(data!="")
    {
      console.log(data);
      closeWin();
    openWin(data);
    data="";
      }
      console.log("data");
//      closeWin();
      setTimeout(refresh, 4000); // you could choose not to continue on failure...
    //open();
//    alert("hoya");
    },
  
 
  });
 }

// $(document).ready(function() {
//    run the first time; all subsequent calls will take care of themselves
//     setTimeout(refresh, 8);
//   });

