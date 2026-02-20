<?php
session_start();

if(isset($_POST['pseudo'])){
$pseudo = $_POST['pseudo'];
$_SESSION ['pseudo'] = $pseudo;
}
?>
