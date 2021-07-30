const htmlEditor = CodeMirror(document.querySelector(".editor .code .html"),{
	lineNumbers:true,
	tabSize:4,
	mode:"xml",
	lineWrapping:true,
	value:"<!--HTML--> \n",
	theme:"yonce",
	autoCloseTags: true,
	autoCloseBrackets:true,
	scrollbarStyle:"overlay"
});
const cssEditor = CodeMirror(document.querySelector(".editor .code .css"),{
	lineNumbers:true,
	tabSize:4,
	mode:"css",
	lineWrapping:true,
	value:"/*CSS*/ \n",
	theme:"yonce",
	autoCloseTags: true,
	autoCloseBrackets:true,
	scrollbarStyle:"overlay"
});
const jsEditor = CodeMirror(document.querySelector(".editor .code .js"),{
	lineNumbers:true,
	tabSize:4,
	mode:"javascript",
	lineWrapping:true,
	value:"// JavaScript \n",
	theme:"yonce",
	autoCloseTags: true,
	autoCloseBrackets:true,
	scrollbarStyle:"overlay"
});

function execute(){
	let htmlCode = htmlEditor.getValue();
	let cssCode = "<style>" + cssEditor.getValue() + "</style>";
	let jsCode = "<script>" + jsEditor.getValue() + "</script>";
	let outputWindow = document.querySelector("#output").contentWindow.document;
	outputWindow.open();
	outputWindow.write(htmlCode+cssCode+jsCode);
	outputWindow.close();
}