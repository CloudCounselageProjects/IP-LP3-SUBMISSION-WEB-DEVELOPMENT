
function preview()
{
	
	var html_code = document.getElementById("html_code").value;
    var css_code = "<style>" + document.getElementById("css_code").value + "</style>";
    var js_code = "<scri" + "pt>" + document.getElementById("js_code").value + "</scri" + "pt>";
    var preview_frame = document.getElementById("preview-window").contentWindow.document;
    preview_frame.open();
    preview_frame.write(html_code + css_code + js_code);
    preview_frame.close();
} 


function cleariframe()
{
	var preview_frame = document.getElementById("preview-window").contentWindow.document;
    preview_frame.open();
    preview_frame.write("");
    preview_frame.close();
}

function clearCode()
{
    alert("This will clear all your source code!!");
	document.getElementById("html_code").value ="";
	document.getElementById("css_code").value = "";
	document.getElementById("js_code").value= "";
}
