<? ini_set('error_reporting', E_ALL ^ ~E_NOTICE ^ ~E_WARNING);
	include("./config.php");
	include("./function.php");
	$id=$_POST['id'];
	$reply=$_POST['reply'];
	mysql_query("update query set queryreply='$reply', querystatus='Answered' where queryid='$id'");

	header("location: ./queries.php?msg=Query Edited");
?>