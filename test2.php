<?php


if(isset($_POST["text_name"])!="" && $_POST["text_name"]!="")
{
	//echo $_POST["text_name"].$_POST["text_age"].$_POST["text_num"];
	if(isset($_POST["btn_save"]))
	{	if($_POST["text_age"]=="" || $_POST["text_num"]=="")
		{
			echo "data have null";
			include "test2.htm";
			return;
		}
		$link = mysql_connect("127.0.0.1", "root", "");
		mysql_select_db("test01_data", $link);
		$result = mysql_query("INSERT INTO `person`(`name`, `age`, `num`) VALUES ('".$_POST["text_name"]."',".$_POST["text_age"].",".$_POST["text_num"].")", $link);
	}
	else if(isset($_POST["btn_delete"]))
	{
		$link = mysql_connect("127.0.0.1", "root", "");
		mysql_select_db("test01_data", $link);
		$result = mysql_query("DELETE FROM `person` WHERE `name` ='".$_POST["text_name"]."'", $link);
	}
	
	
	
}
else
{
	if(!isset($_POST["btn_show"]))
	{
		echo "data have null ";
		include "test2.htm";
		return;
	}
	
}
require "main.php";
$link = mysql_connect("127.0.0.1", "root", "");
mysql_select_db("test01_data", $link);
$result = mysql_query("SELECT * FROM person", $link);
$array1 = array();
$array2 = array();
$array3 = array();
$array_all=array();
while ($row = mysql_fetch_array($result)) 
{
	array_push($array1,$row["name"]);
	array_push($array2,$row["age"]);
	array_push($array3,$row["num"]);
	//array_push($array1,array($row["name"],$row["age"],$row["num"]));
	/*echo "<br>NAME=".$row["name"]."<br>";
	echo "AGE=".$row["age"]."<br>";
	echo "NUM=".$row["num"]."<br>";*/
}

/*$PageName = "title"; 
include "test3.htm"; */
$_POST["text_name"]=null;
$_POST["text_age"]=null;
$_POST["text_num"]=null;
$tpl->assign("array1", $array1);
$tpl->assign("array2", $array2);
$tpl->assign("array3", $array3);
/*for($i=0;i<$array1.count;$i++)
{
	
}*/

$tpl->display("test3.htm");
?>
<!--
<form action="test2.htm" method="post">
<input type="submit" value="back"/>
</form>-->