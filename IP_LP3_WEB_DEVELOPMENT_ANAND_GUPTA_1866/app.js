const express = require("express");
const ejs = require("ejs");

const app = express();
app.use(express.static("public"));
app.set('view engine', 'ejs');

app.get("/", function(req,res){
  res.render('index');
})

app.get("/get-time", function(req,res){
  const day = new Date();
  const time = day.toLocaleString();
  res.send(time);
})

app.listen(3000, function(){
  console.log("I m working");
})
