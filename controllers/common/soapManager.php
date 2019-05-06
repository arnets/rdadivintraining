<?php
require_once "../lib/nusoap.php";

function getData($source,$destination) {
    if ($source == "Rwanda:Kigali-ville") {
        return join(",", array(
            "The WordPress Anthology",
            "PHP Master: Write Cutting Edge Code",
            "Build Your Own Website the Right Way"));
	}
	else {
            return "No products listed under that category";
	}
}

$server = new soap_server();
$server->register("getData");
$server->service($HTTP_RAW_POST_DATA);
?>