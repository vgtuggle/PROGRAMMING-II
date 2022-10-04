<!DOCTYPE html PUBLIC >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php


$firstname='Bobby';
$location = 'Chicago';
$secondname= 'Jack';
$adjective = 'invisible';
$verb = 'read nonfiction';
$noun = 'stalker';
$occupation = 'mailman';

if ($_POST['firstname'] != NULL){$firstname = $_POST['firstname'];}
if ($_POST['location'] != NULL){$location = $_POST['location'];}
if ($_POST['secondname'] != NULL){$secondname= $_POST['secondname'];}
if ($_POST['adjective'] != NULL){$adjective = $_POST['adjective'];}
if ($_POST['verb'] != NULL){$verb = $_POST['verb'];}
if ($_POST['noun'] != NULL){$noun = $_POST['noun'];}
if ($_POST['occupation'] != NULL){$occupation = $_POST['occupation'];}

$firstname= ucwords($firstname);
$secondname= ucwords($secondname);


$title="The Story of $firstname";
echo "<title>$title</title>";
?>

<style type="text/css">
form {text-align: right;}
	
.madlibbox {       
	background: rgb(255,255,255);
	border-right: #25201A 1px solid;
	border-top: #25201A 1px solid;
	border-left: #25201A 1px solid;
	border-bottom: #25201A 1px solid;
	padding: 10px 10px 10px 10px;
	font-size: medium;
	margin: auto;
	width: 340px;
	font-family: Verdana, "Myriad Web", Syntax, sans-serif;	
        }  

body	{	
	padding: 0;
	border: 0;
	background: #7bb8bd;
	width:	auto;
	text-align: center;
	}		
	
h1 {padding: 10px; text-align: center; text-transform: uppercase;}
</style>
</head>
<body>
<div class = "content">
<?php
echo "<h1>$title</h1>";
?>

<div class = "madlibbox">
<?php

echo "There once was a $occupation named $firstname who lived in $location 
and liked to $verb and chat with the neighbor's $adjective $noun. This freaked out 
$firstname's best friend $secondname. The end.";

?>
</div>
</div></body></html>