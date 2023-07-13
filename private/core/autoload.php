<?php
/*

this file is add to core/app.php 
if not created this file app.php 
looks dirty overloaded

*/

require "config.php";
require("Database.php");
require "Controller.php";
require "Model.php";
require("app.php");

spl_autoload_register(function($class_name){
    require "../private/models/". ucfirst($class_name).".php";
});


?>