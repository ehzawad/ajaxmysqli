<?php


$conn=mysqli_connect("localhost","lara","cosmos", "world") or die("can't connect");

// @mysql_select_db("world",$conn);

///write new query here

$result=mysqli_query($conn, "SELECT Code,Name,SurfaceArea FROM country");

$dis_string="<br>";

while($res=mysqli_fetch_array($result)) {

		$dis_string.="<tr><td>".$res['Name']."</td><td>".$res['Code']."</td><td>".$res['SurfaceArea']."</td></tr>";

		//$dis_string.="<br>";



	}

//sleep(5);

echo "<center><h1>Ajax Results/response from an XMLHTTP request</h1>";

//echo "this is an ajax example<br />";

echo "<table border='1px'><tr><th>Country Name</th><th>Country Code</th><th>Surface Area</th></tr>" .$dis_string."</table>";

echo "<center><img src='ajax.jpg'/></center>";



?>
