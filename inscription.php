<?php
function hashFunction($data){
    $hash = hash('sha256', $data);
    return $hash;
}
if(isset($_POST['btn_submit'])){
    $host = "localhost";
    $user = "root";
    $pass="";
    $db="Conexion_insciption";

    $prenom= $_POST['prenom'];
    $nom= $_POST['nom'];
    $email= $_POST['email'];
    $password = $_POST['password2'];
    $password = hashFunction($password);
    $conn = mysqli_connect($host,$user,$pass,$db);
    $insert = "insert into information values('$prenom', '$nom', '$email', '$password')";
    mysqli_query($conn,$insert);
    echo("Félicitations, votre compte a été créé");
}
?>