<?php
// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);
include '../libs/myClasses/SearchClass.php';
$form_data = json_decode(file_get_contents("php://input"));
$search_query = $form_data->search_query;
$search_query2 = $form_data->search_query2;
$obj = new Search();
$obj->searching($search_query, $search_query2);
?>