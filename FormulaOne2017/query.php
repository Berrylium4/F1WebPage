<?php 
	$query = $_GET['query'] ;
	if ($query == "driverstanding")
	{
		header("Location: querypages/driverstanding.php");
	}
	else if ($query == "constructorstanding")
	{
		header("Location: querypages/constructorstanding.php");
	}
	else if ($query == "raceresults")
	{
		header("Location: querypages/raceresult.php");
	}
	else if ($query == "fastestlaps")
	{
		header("Location: querypages/fastestlaps.php");
	}
	else if ($query == "trackinfo")
	{
		header("Location: querypages/trackinfo.php");
	}
?>
