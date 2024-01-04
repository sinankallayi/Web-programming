<html>
<body>
<center><h1>ELECTRICITY BILL</h1></center>
<hr width=350>
<pre>
<form method="post" action="#">
Consumer id :    <input type="number" name="id"><br><br>
Name :           <input type="text" name="name"><br><br>
Units consumed : <input type="number" name="units"><br><br>
     <input type="reset" value="Reset">    <input type="submit" value="Submit"><br><br>
<hr color="green">
</pre>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST["id"];
$name=$_POST["name"];
$units=$_POST["units"];
echo"<h3> KSEB </h3>";
echo"consumer id:".$id."<br>";
echo"consumer name:".$name."<br>";
echo"Units consumed:".$units."<br>";
if($units<100)
{
$amt=$units*3;
}
elseif($units>100 && $units<=200)
{
$amt=$units*4;
}
elseif($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*5;
}
echo"<h4> Total Amount : Rs.".($amt)."</h4><br>";
}
?>
</body>
</html>
