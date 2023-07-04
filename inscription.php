<?php
function hashFunction($data){
    $hash = hash('sha256', $data);
    return $hash;
}
if(isset($_POST['btn_submit'])){
    $host = "localhost";//host
    $user = "root";//user
    $pass="";//password
    $db="Conexion_insciption";// nom de base de données

    $prenom= $_POST['prenom'];
    $nom= $_POST['nom'];
    $email= $_POST['email'];
    $password = $_POST['password2'];
    $password = hashFunction($password);//en utiliser HashFunction pour ne pas stocker le mot de passe en claire 
    $conn = mysqli_connect($host,$user,$pass,$db); 
    $insert = "insert into information values('$prenom', '$nom', '$email', '$password')";
    mysqli_query($conn,$insert);
    echo("Félicitations, votre compte a été créé");
}
?>
