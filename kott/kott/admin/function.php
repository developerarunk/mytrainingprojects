<?php
function sql_secure($data){
	global $conn;
	$test_data = mysqli_real_escape_string($conn, $data);
	return $test_data;
} 
?>