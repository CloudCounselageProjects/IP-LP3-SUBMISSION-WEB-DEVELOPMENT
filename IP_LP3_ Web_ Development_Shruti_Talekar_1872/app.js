var bodyParser = require("body-parser"),
express        = require("express"), // Importing express module 
app            = express();          // Creating an express object 

const port = 3003;                  // Setting an port for this application 

const morgan   = require('morgan')

//APP Confign
app.use(morgan('combined'))
app.use(bodyParser.urlencoded({extended: true}));
app.use(express.static('./public'))

//RESTFUL Routes

app.get("/", (req,res) => {
   console.log("RESPONDING TO ROOT ROUTE")
})

// Starting server using listen function 
app.listen(port, function (err) { 
    if(err){ 
        console.log("Error while starting server"); 
    } 
    else{ 
        console.log("Server has been started at "+port); 
    } 
 }) 