<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && array_key_exists('page', $_GET) && file_exists('./pages/' . $_GET['page'] . '.php') )
{
	require './pages/' . $_GET['page'] . '.php';
	die;
}

?>