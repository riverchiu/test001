<form>
<a href="test.php?action=insert,a="+>存入</a>
<a href="test.php">取消</a>
<br/>
<input type="text" id="lab1" value="user"/>
<br/>
<input type="text" name="lab2" value="10"/>
<br/>
<input type="text" name="lab3" value="20"/>
</form>
<?php
if(isset($_GET["action"]))
{
	if ($_GET["action"]=="insert")
	{
	echo $lab1;
	//$link = mysql_connect("127.0.0.1", "root", "");
	//mysql_select_db("test01_data", $link);
	//$result = mysql_query("INSERT INTO `person`(`name`, `age`, `num`) VALUES ('".lab1.value."',".lab2.value.",".lab3.value.")", $link);
	}
	
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
