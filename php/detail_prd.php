<?php
include('../php_obj/autoload.php');
include('../vue/navbar.php');
$p = new Articles;
$pl = $p->liste($_GET['id']);
include('../vue/detail.php');

?>