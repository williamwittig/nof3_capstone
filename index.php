<?php
// 2/7/2023
// Entry Point of the Advise-IT website
// Initializes the Fat-Free Framework and defines the routing
// interfaces with the controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Start Session
session_start();

// Create Instance of DataLayer
$datalayer = new DataLayer();


// Create Instance of Controller
$con = new Controller($f3);
