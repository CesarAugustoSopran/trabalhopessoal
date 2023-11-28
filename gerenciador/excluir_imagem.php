<?php 
header('Content-Type: text/html; charset=utf-8');

unlink('img/'.$_GET['arquivo']);
header("location: ".$_GET['pagina'].".php");
?>