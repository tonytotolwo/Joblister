 <?php
//start session
  session_start();

// config file
 require_once 'config.php';

 //include Helpers
 require_once 'Helpers/system_helper.php';


 //Autoloader  
 function __autoload($class_name){
  require_once 'lib/'.$class_name. '.php';
 }
 


 