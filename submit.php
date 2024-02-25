<html>

</html>
<?php5
$conn=mysqli_connect("localhost","root","root","cit");
If($conn)
{
	echo"connect successfully";
	
}
else
{
	echo "not connected";
}
$a=$_POST['FN'];
echo $a;
$yy="insert into bank(Fname)values('$a')";
$yyy=mysqli_query($conn,$yy);
if($yyy)
{
	echo "sucess";
}
else
	echo"unsucess";

?>