<?php
//Getting Seconds,Minutes,Hours from Database and converting each of them to seconds

//Declaring Global Variables for Use
global $total_duration_sec;
global $total_duration_min_sum;
global $total_duration_hour_sum;

//Data Input for Hour
class total_duration_func_hour extends RecursiveIteratorIterator{}
try {
	 global $total_duration_sec;
    $stmt = $conn->prepare("SELECT TIME_FORMAT(duration, '%H') FROM $t2 WHERE $mod='$mod_val'"); 
	$stmt->execute();

     // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new total_duration_func_hour(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$total_duration_raw_hour) {$total_duration_hour_sum += $total_duration_raw_hour;}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
	$total_duration_hour =$total_duration_hour_sum * 3600;


//Data Input for Minutes
class total_duration_func_min extends RecursiveIteratorIterator{}
try {
	 global $total_duration_sec;
    $stmt = $conn->prepare("SELECT TIME_FORMAT(duration, '%i') FROM $t2 WHERE $mod='$mod_val'"); 
	$stmt->execute();

     // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new total_duration_func_min(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$total_duration_raw_min) {$total_duration_min_sum += $total_duration_raw_min;}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
	$total_duration_min =$total_duration_min_sum * 60;


//Data Input for Seconds
class total_duration_func_sec extends RecursiveIteratorIterator{}
try {
    $stmt = $conn->prepare("SELECT TIME_FORMAT(duration, '%s') FROM $t2 WHERE $mod='$mod_val'"); 
	$stmt->execute();

     // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new total_duration_func_sec(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$total_duration_raw_sec) {$total_duration_sec += $total_duration_raw_sec;}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
	
//Adding All the Three (Hours,Minutes,Seconds) in the form of seconds
	$total_duration_in_sec = $total_duration_hour+$total_duration_min+$total_duration_sec;

//Running if Hours are Present
if($total_duration_hour_sum>0)
{

	//Converting Seconds back to Respective (Hours:Minutes:Seconds) and throwing output to $total_duration
	$H = floor($total_duration_in_sec / 3600);
	$i = ($total_duration_in_sec / 60) % 60;
	$s = $total_duration_in_sec % 60;
	
	//$total_duration Output Collector
	ob_start(); //Start output buffer
	echo sprintf("%02d:%02d:%02d", $H, $i, $s);
	$total_duration = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer

}

//Running if Hours aren't Present
if($total_duration_hour_sum<=0)
{
	//Converting Seconds back to Respective (Minutes:Seconds) and throwing output to $total_duration
	$i = ($total_duration_in_sec / 60) % 60;
	$s = $total_duration_in_sec % 60;
	
	//$total_duration Output Collector
	ob_start(); //Start output buffer
	echo sprintf("%02d:%02d", $i, $s);
	$total_duration_raw = ob_get_contents(); //Grab output
	ob_end_clean(); //Discard output buffer
}
if($total_duration_raw == "00:00"){unset($total_duration);} else {$total_duration = $total_duration_raw;}

?>