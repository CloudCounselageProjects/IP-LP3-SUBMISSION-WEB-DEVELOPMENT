var http= require("http");
var express= require("express");
var path= require("path");
var fs= require("fs");
var app= express();

var fileUrl= '/index.html';

var server=http.createServer(app);

app.use((req,res)=>{
	if (req.method=="GET") {
		
		
		let indexFile =path.resolve("./Tejas"+fileUrl);
		var fileExt=path.extname(indexFile);
		res.statuscode=200;
		res.setHeader("Content-type","text/html");
		fs.createReadStream(indexFile).pipe(res);

	}
	else{
		res.statuscode=404;
		res.setHeader("Content-type","text/html");
		res.end("<html><body><h1>error 404: Page Not Found :( </h1></body></html>");
		return;
	}
});


server.listen(8000,()=>{
	console.log(" Your server is running at http://localhost:8000");
});