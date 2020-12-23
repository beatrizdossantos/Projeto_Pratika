<?php

	header('Content-Type: text/html; charset=utf-8');

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "dbpratika";

	$connection = new MySQLi("$host", "$usuario", "$senha", "$banco");

	$connection-> set_charset("utf8");

?>