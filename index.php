<html>
<head>
<title>Ajax Example</title>
<script language="Javascript">

function postRequest(strURL) 
{
	var xmlHttp;
    if (window.XMLHttpRequest) // Mozilla, Safari, ...
    { 
        var xmlHttp = new XMLHttpRequest();
		console.log("normal");
    } 
    else if (window.ActiveXObject) // IE 
    { 
         var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		 console.log("MS");
    }
    else
	{
		alert("your browser does not support AJAX");
		return;
	}
    xmlHttp.open('POST', strURL, true);
    xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlHttp.onreadystatechange = function() 
    {
        
        if (xmlHttp.readyState == 4) 
        {
            updatepage(xmlHttp.responseText);
        }
    }
    xmlHttp.send(strURL);
}
function updatepage(str)
{
    document.getElementById("result").innerHTML = 	"<font color='green' size='5'>" + str + "</font>";
}
function show()
{
    var div=document.getElementById("result");
	div.innerHTML = '<center>Loading...<br><img src="loader1.gif" /></center> ';
	var rnd = Math.random();
	var url="ajax.php?id="+rnd;
	postRequest(url);
}
</script>
</head>
<body>
<h1 align="center"><font color="#000080">Ajax Example</font></h1>
<form name="f1">

<p align="center">
	<font color="#000080">&nbsp;
		<input value="Load Country List" type="button" onclick='JavaScript:show()' name="showdate">
	</font>
</p>
<hr/>
<div id="result" align="justify"></div>
<hr/>
<h2 align="center">Result will be displayed Between these lines</h2>
<!--<center><img src="footer.jpg" height="200px" width="830px"/></center>-->
</form>
</body>
</html>
        