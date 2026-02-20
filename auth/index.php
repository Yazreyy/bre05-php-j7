<?php
session_start();
 require 'connexion.php';

 function routing():?string{
    if(isset ($_GET['route'])){
        return $_GET['route'];
    	} else {
        return NULL;
    }
}
 $route =routing();

 require 'layout.phtml';
 ?>