<?php

require_once("../modelo/log.php");
$obj=new admin;
$obj->Login($usu=$_POST['usu'],$cont=$_POST['con']);
?>