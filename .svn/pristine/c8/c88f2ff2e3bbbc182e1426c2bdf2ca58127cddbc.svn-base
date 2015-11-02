<?php

$data = "First Name: " . $_POST['firstName'] . "\n";
$data = $data . "Last Name: " . $_POST['lastName'] . "\n";
$data = $data . "E-mail: " . $_POST['email'] . "\n";
$data = $data . "Phone: " . $_POST['phone'] . "\n";
$data = $data . "Address: " . $_POST['address'] . "\n";
$data = $data . "Project Description: " .$_POST['project'] . "\n";


echo(mail("larry.m.puccio@gmail.com", "New Customer from the site!", $data));

//returns true or false to test front end ajax scripts.



$result =  true;



$return = Array(



    "result" => $result



);


echo json_encode($return);

?>