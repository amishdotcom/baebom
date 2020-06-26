<?php

//Websites Major Variables
$site_name = "baebom";
$site_root = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$current_page_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$cdn = "http://cybertronics.org.in/cdn";
$custom_site_root = "https://www.baebom.com";

?>