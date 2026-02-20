<?php
session_start();
require '../connexion.php';


$email = $_POST['email'];
$password = $_POST['password'];
$hash = $_POST['hash'];

$query = $db->prepare('SELECT * FROM users WHERE email = :email');
$parameters = [
    'email' => $email,
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

if(!$user){
    echo "Email incorrect";
}else{
    $isPasswordCorrect = password_verify($password, $user['password']);
    
    if($isPasswordCorrect === true){
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        header('Location: ../index.php?route=home');
    	} else {
        echo "le mot de passe est faux";
    }
}
?>
