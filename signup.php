<?php
include "dp.php";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']){


    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['PASSWORD']),PASSWORD_DEFAULT);

    $checkEmail =$db->prepare("SELECT email FROM user WGERE email=?");
    $checkEmail->execute([$email]);
    if($chechEmail->rowcount() > 0){
        echo json_encode(['status'=> 'error', 'message' => 'sorry this email is already taken']);
        
    } else {
        $Query = $db->prepare("INSERT INTO user (name, email, password) VALUES (?,?,?)");
        $Query->execute([$name, $email, $password]);
        if($Query){
            $_SESSION['created'] = "Your account has been created successfully";
            echo json_encode(['status' => 'success']);
        }
    }
}