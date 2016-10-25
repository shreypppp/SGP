<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<h1>Register<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','shrey','Qt9pasHZ2aDpa9MV') or die(mysql_error());
 mysql_select_db('mysql') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
$sql="INSERT INTO login(name,password) VALUES('$name','$pwd')";
$result=mysql_query($sql);
if($result){
   echo"You registered Successfully.!!";
   echo "<a href='login.php'>Back to main page</a>";
}
else{
echo"Not registered.!";
}


}


?>
</body>
</html>