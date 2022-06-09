<?php
// News Lister 
// Copyright (c) All Rights Reserved, NetArt Media 2003-2021
// Check https://www.netartmedia.net/newslister for demos and information
// Released under the MIT license
?><?php
define("IN_LOGIN_SCRIPT","1");
error_reporting(0);
session_start();
require("../include/SiteManager.class.php");
$website = new SiteManager();
$website->LoadSettings();
$website->LoadTemplate();
$website->SetPage("login");
$website->Render();
?>