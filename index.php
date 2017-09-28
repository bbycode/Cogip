<?php
require_once('config.php');
//Header insertion
require_once(CONTROLLER. "HeaderController.php");
$headerview = new HeaderController();
$headerview->load();
//Nav insertion
require_once(CONTROLLER. "MenuController.php");
$navview = new MenuController();
$navview->load();
//Footer insertion
require_once(CONTROLLER. "FooterController.php");
$footerview = new FooterController();
$footerview->load();
?>
