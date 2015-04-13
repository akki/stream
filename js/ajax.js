
// var server = "stream.channeli.in";

openWin("https://youtube.com");
closeWin();
function openWin(site)
{
myWindow=window.open("song.php?site=" + site); //,"_blank",'');
myWindow.blur();
myWindow.focus();
}

function closeWin()
{
  myWindow.close();
}

function refresh()
{
  $.ajax({
    url: "./player.php",
    datatype: 'html',
    success: function(data)
    {
      if(data!="")
      {
        closeWin();
         openWin(data);
        data="";
      }
      setTimeout(refresh, 4000); // you could choose not to continue on failure...
    }
  });
}

