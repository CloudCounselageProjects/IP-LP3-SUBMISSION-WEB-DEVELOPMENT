var express=require("express");
var http=require("http");
var fs=require("fs");
var path=require("path");
var hostname="localhost";
var port=3000;
var app=express();
var fileUrl='';
app.use((req,res,next)=>{
	if (req.method=="GET") {
		// set destination file
		fileUrl="/index.html";
		// Gives full path of file
		let filePath=path.resolve("./public"+fileUrl);
		var fileExt=path.extname(filePath);
		res.statuscode=200;
		res.setHeader("Content-type","text/html");
		// read data from file and set in body of  response
		fs.createReadStream(filePath).pipe(res);
	}
	else{
		res.statuscode=404;
		res.setHeader("Content-type","text/html");
		res.end("<html><body><h1>error 404:The requested resource does't exist </h1></body></html>");
		return;
	}
});
var server=http.createServer(app);
server.listen(port,hostname,()=>{
	console.log(`server running at http://${hostname}:${port}`);
});