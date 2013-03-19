<?php
include_once("../includes/common.lib.php");
include_once("../includes/config.php");
if(!isLoggedIn()) { header("location: ../login.php"); exit;}

include('../templates/en/account/header.php');
include('../templates/en/account/index.php');


?>