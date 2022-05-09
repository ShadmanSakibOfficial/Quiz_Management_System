<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="quiz_game-main";

if(!$con= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("failed to connect!");
}