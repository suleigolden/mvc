<?php

/**
 * Copyright 2018 Suleiman A. Mamman AKA-TheLastCodeBender  (email : suleimamman@gmail.com)
 *
 * See license.txt for full license information.
 */

spl_autoload_register(function($class) {
  $prefix = 'app\\';
  
  $length = strlen($prefix);
  
  $base_directory = __DIR__ . '/app/';
  
  if(strncmp($prefix, $class, $length) !== 0) {
    return;
  }
  
  $relative_class = substr($class, $length);
  
  $file = $base_directory . str_replace('\\', '/', $relative_class) . '.php';
  
  if(file_exists($file)) {
    require $file;
  }
});