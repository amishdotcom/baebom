<?php
$servername = "localhost";
$username = "cyberadmin";
$password = "hui#9uJi@iu*9i";
$dbname = "baebom_old";

//Setting up the Database Tables Names
$t1 = "h0";//Table for Albums
$t2 = "h1";//Table for Tracks
$t3 = "cid_data";//Creator ID Data Table
$t4 = "cid_pragma";//Creator ID Pragma Table
$t5 = "sm";//Table For Search Meta

//Opening the Database Connection
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//Setting up the Database Charset to UTF-8
	$conn->query('SET NAMES utf8');
?>