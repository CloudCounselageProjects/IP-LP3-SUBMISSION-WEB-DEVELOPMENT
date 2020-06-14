const express = require('express');
const bodyparser = require('body-parser');
const cors = require('cors');
const path = require('path');

const app = express();

//portnumber
const port = 3000;
var url='http://worldtimeapi.org/api/timezone/Asia/Kolkata.json';
//adding middleware
app.use(cors());

//adding body parser
app.use(bodyparser.json());

//static files
app.use(express.static(path.join(__dirname,'public')));

app.listen(port,()=>
{
	console.log("the server is running at port number",port);
});
module.exports = app;

app.use((req, res, next) => {
  res.setHeader("Access-Control-Allow-Origin", "*");
  res.setHeader(
    "Access-Control-Allow-Headers",
    "Origin, X-Requested-With, Content-Type, Accept"
  );
  res.setHeader(
    "Access-Control-Allow-Methods",
    "GET, POST, PATCH, DELETE, OPTIONS"
  );
  next();
});

app.get("/location", (req, res, next) => {
let date_ob = new Date();

// current date
// adjust 0 before single digit date
let date = ("0" + date_ob.getDate()).slice(-2);

// current month
let month = ("0" + (date_ob.getMonth() + 1)).slice(-2);

// current year
let year = date_ob.getFullYear();

// current hours
let hours = date_ob.getHours();

// current minutes
let minutes = date_ob.getMinutes();

// current seconds
let seconds = date_ob.getSeconds();

// prints date in YYYY-MM-DD format
console.log(year + "-" + month + "-" + date);

// prints date & time in YYYY-MM-DD HH:MM:SS format
console.log(year + "-" + month + "-" + date + " " + hours + ":" + minutes + ":" + seconds);

// prints time in HH:MM format
console.log(hours + ":" + minutes);
 const result = { date:date,month:month,year:year,hours:hours,minutes:minutes,seconds:seconds };
 var request = require('request');
 request(url, function(req,res,body)
 {
 var data = JSON.parse(body);
 console.log(data);
 });

res.status(200).json({  results: result});
});


module.exports = app;



