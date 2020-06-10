const express = require('express');
const dt = require('./mymodule.js')
const joi = require('joi');
const path = require('path');

const app = express();
app.use(express.static(__dirname + '/h'));
	app.get('/',(req,res)=>{
		res.send('Welcome');
		res.sendFile(path.join(__dirname+'/h/index.html'));
		
	})
	//app.listen( 'port' , () => console.log('listening on port ${port}...'));//
app.get( '/date' ,(req, res) => {
	
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write("The date and time is currently: " + dt.myDateTime());
   res.end();
})
app.listen(3000);
