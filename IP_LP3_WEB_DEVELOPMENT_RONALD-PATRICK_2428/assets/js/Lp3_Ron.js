var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function()
 {
  if (this.readyState == 4 && this.status == 200)
    {
    var myObj = JSON.parse(this.responseText);
    var str=myObj.datetime;
    var date=str.slice(0,10);
    document.getElementById("date").innerHTML = date;
    var time=str.slice(11,19);
     document.getElementById("time").innerHTML = time;
    }
 };
xmlhttp.open("GET", "http://worldtimeapi.org/api/ip", true);
xmlhttp.send();