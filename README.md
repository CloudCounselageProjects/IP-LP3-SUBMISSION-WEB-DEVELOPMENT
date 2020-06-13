Q: Create a personal website using full-stack development which uses a REST API to tell system date and time by an API call.
The website should work on the localhost.

Date and Time is the website created by Dilip Jain using full-stack development which uses REST API.
The front-end of the website involves a index.html along with style.css and script.js for design and workflow (included in pubic folder).
The back-end of the website uses node.js (app.js) in order to create a local server @port 3000. It includes express, cors and body-parser.

Using the GET method (http methods), I create a JSON at link localhost:3000/time, which is retrieved by the front-end using Fetch API's default GET method. 
The response is parsed as JSON and showed on the webpage as a string.



Please follow all the steps.

SETUP:
1. Download and install NodeJS from https://nodejs.org/
2. After successful installation, you'll need to restart your computer.
3. To see if Node and npm is installed, open Command Prompt or Powershell or any such terminal and type: 

		a. node -v
		
		b. npm -v
		
This should print node and npm's version. Thus, the installation was successful.
If instead an error is printed stating it was "not recognized as an internal or external command", add node.exe and npm directories to your environment variable 'PATH'
4. Once done, place all the above files and folders altogether in a specific folder*.
	*This particular folder will be called as the root directory of the project.


HOW TO USE:
1. Search and open Node.js Command prompt on your computer. Make sure it is 'node.js command prompt' and not the command prompt.
2. Using command 'cd path', move to the root directory of our project.
3. To start the server, run node app.js command in the node terminal.
4. The terminal will show Server Started at port: 3000.
5. On your browser, search for localhost:3000
6. That's it.



NOTE: if index.html (in public directory) is viewed directly without starting the server, it won't be able to fetch the data from server (No Server exists). But it is 
capable of showing date and time without backend, simply using Date() object in JavaScript.

Thanks.
