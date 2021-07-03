

<?php

	$h_r=$_GET["h_r"];
	$spo2=$_GET["spo2"];
	$kg=$_GET["kg"];
    $temp=$_GET["temp"];
	$date = date("Y-m-d H:i:s");
    $time = time();
    $time_now=mktime(date('h')+5,date('i')+30,date('s'));
    $date = date('d-m-Y H:i', $time_now);
	include("dbconnect.php");
	//$conn=Connection();
	
	
   
    $insert2 = mysqli_query ($conn,"INSERT INTO photo(h_r,spo2,kg,temp) VALUES ('$h_r','$spo2','$kg','$temp')");
	





if(!$insert2)
{
echo " ERROR";
}
else
{
echo "Sucess";
}

?>

