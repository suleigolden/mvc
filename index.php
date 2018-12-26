<?php
/**
 * Copyright 2018 Suleiman A. Mamman AKA-TheLastCodeBender  (email : suleimamman@gmail.com)
 *
 * See license.txt for full license information.
 */
 
require 'bootstrap.php';
use app\controller\RouteController;


//creating an object of Controller_pages Class
$route = new RouteController();

//Get the new page to view and send it to set_New_pages method if the page exist else view the home page. 
if(isset($_GET['/'])){
	$Newpage = $_GET['/'];
	$route->set_New_pages($Newpage);
}else{
	$route->HomePage();
}

