<form action="test.php" method="post">
輸入:<br/>
<input type="text" name="text_name"/><br/>
<input type="text" name="text_age"/><br/>
<input type="text" name="text_num"/><br/>
<input type="submit" value="clickme"/>
</form>
<?php
if(isset($_POST["text_name"]))
<<<<<<< HEAD
{//
=======
{
//又增加
>>>>>>> branch1031110-1
	//echo $_POST["text_name"].$_POST["text_age"].$_POST["text_num"];
	$link = mysql_connect("127.0.0.1", "root", "");
	mysql_select_db("test01_data", $link);
	$result = mysql_query("INSERT INTO `person`(`name`, `age`, `num`) VALUES ('".$_POST["text_name"]."',".$_POST["text_age"].",".$_POST["text_num"].")", $link);
	$_POST["text_name"]=null;
	$_POST["text_age"]=null;
	$_POST["text_num"]=null;
}

$link = mysql_connect("127.0.0.1", "root", "");
mysql_select_db("test01_data", $link);
$result = mysql_query("SELECT * FROM person", $link);
while ($row = mysql_fetch_array($result)) 
{
	echo "<br>NAME=".$row["name"]."<br>";
	echo "AGE=".$row["age"]."<br>";
	echo "NUM=".$row["num"]."<br>";
}
?>
