<?php

$cont=$_POST['cont'];
$parola=$_POST['parola'];

if($cont=="admin" && $parola=="emanuel") {include('index_admin.htm');}
if($cont=="sofer" && $parola=="emanuel") {include('index_sofer.htm');}
if($cont!="sofer" && $parola!="emanuel" || $cont!="admin" && $parola!="emanuel" ){include('index_unsucces.htm');}

?>