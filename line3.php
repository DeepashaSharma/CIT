<?php


$ar=array(1,2,3,4);
for($i=0;$i<4;$i++)
{
	echo$ar[$i];
}
echo "<h2> this is an example of h2 tag</h2>";

$a=array('a','B',"chitrang");
foreach($a as $char)
{
	echo $char;
}
$a=2;
switch(2)
{
case 1 : echo"one";
break;
case 2 : echo"two";
break;
default : echo "default";
}
echo"<br>";
echo "<br>";
function msg()
{
	echo "hello world";
	
}
msg();

?>