var express = require('express');
var router = express.Router();



/* GET users listing. */
router.get('/', function(req, res, next) {
  var dt = new Date();
  var year = dt.getYear();
    if(year < 1000){
      year +=1900
    }
    var day = dt.getDay();
    var month = dt.getMonth();
    var daym = dt.getDate();
    var dayarray = new Array("Sun,","Mon,","Tue,","Wed,","Thu,","Fri,","Sat,");
    var montharray = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
  
    var currentTime = new Date();
    var h = currentTime.getHours();
    var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
      if(h == 24){
        h = 0;
      } else if (h > 12){
        h = h - 0;
      }  
  
      if(h < 10){
        h = "0" + h;
      }
  
      if(m < 10){
        m = "0" + m;
      }
      if(s < 10){
        s = "0" + s;
      }
  
      var date_obj = "" +dayarray[day]+ " " +daym+ " " +montharray[month]+ " " + year+ " | " +h+ ":" +m+ ":" +s;
  
    res.send(date_obj);
})

module.exports = router;
