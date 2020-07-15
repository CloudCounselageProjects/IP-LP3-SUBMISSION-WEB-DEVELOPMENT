const express = require("express");
const bodyparser = require("body-parser");
const app = express();
const cors = require("cors");
const path = require("path");
const fs = require("fs");

app.use(express.static(__dirname + "/public"));
app.use(bodyparser.json());
app.use(bodyparser.urlencoded({ extended: true }));
app.use(cors());
app.get("/", function (req, res) {
  let now = new Date(Date.now()).toLocaleString();
  res.json(now);
});
app.listen(5050, function () {
  console.log("server is running on port 5050");
});
