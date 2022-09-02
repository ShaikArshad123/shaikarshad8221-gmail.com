<?php
include "db.php";

if(isset($_POST['email']) && isset($_POST['passwrd'])){
    $email = trim($_POST['emal'])
    $password = trim($_POST['password'])
    $Query = $db->prepare("SELECT * FORM user WHERE email = ?");
$Query-> $db->execute([$email]);
if($Query->rowCount() > 0){
$row - $Query->fetch(PDO::FETCH_OBJ);
$dbpassword = $row->password;
if(password_verify($password, $dbpassword)){
    echo json_encode([' status' => 'success']);
} else {
    echo json_encode([' status' => 'passwordError', 'message' =>
    'Your email is wrong']);
}

}
} else {
    echo json_encode([' status' => 'emailError', 'message' =>
    'Your email is wrong']);

}
}