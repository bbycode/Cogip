<?php
require_once('parametres.php');
//Inclusion du header
$entete = new headerController();
$currentPage = $entete->currentPage();
$entete->load();
//End header

//Menu
$menu = new menuController();
$menu->load();
//End menu
//contenu
$contenu = new contentController($currentPage);
$contenu->load($currentPage);
//End contenu
//Inclusion du footer
$piedPage = new footerController();
$piedPage->load();
//End footer
?>
