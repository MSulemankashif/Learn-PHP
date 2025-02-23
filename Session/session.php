<?php

session_start();

$_SESSION['username'] = "Suleman";
$_SESSION['password'] = '61400';

echo "Welcome to the session page <br>";
echo "You're logged in as ". $_SESSION['username'];