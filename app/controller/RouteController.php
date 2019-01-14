<?php
/**
 * Copyright 2018 Suleiman A. Mamman AKA-TheLastCodeBender  (email : suleimamman@gmail.com)
 *
 * See license.txt for full license information.
 */

namespace app\controller;


class RouteController {
//Function to Navigate to Home page 
public function HomePage(){
    //include_once("view/home.php");
    $this -> CheckpageNotFound("view/home.php");
}
//Function to Navigate to user define page
public function set_New_pages($page){ 
  
 $page = strtok($page, '?');
 $this -> CheckpageNotFound("view/".$page.".php");      
 }
//function to check if page exist
private function CheckpageNotFound($page){
  $not_found = "404notfound";
if(!file_exists($page)){
        return include_once("view/".$not_found.".php");
      } else {
        return include_once($page);
      }
 }

}

