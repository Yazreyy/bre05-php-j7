<?php

$password = $_POST['password'];
$hash = $_POST['hash'];
echo password_hash("marlonn", PASSWORD_DEFAULT);

$isPasswordCorrect = password_verify($password, $hash);



if($isPasswordCorrect === true){
    echo "le mot de passe est bon";
	} else {
    echo "le mot de passe est faux";
}
?>