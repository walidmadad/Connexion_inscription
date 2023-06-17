<?php
function hashFunction($data){
    $hash = hash('sha256', $data);
    return $hash;
}
if(isset($_POST['btn_connexion'])){
    $host = "localhost";
    $user = "root";
    $pass=""
    $db="Conexion_insciption";
    $conn = mysqli_connect($host,$user,$pass,$db);
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password = hashFunction($password);
    $sql = "SELECT COUNT(*) as count FROM information WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if ($row['count']>0) 
    {                      
        echo "welcome";
    }
    else {
    echo "Erreur d'autentification<br>";
    echo "<a href='connexion.html'>Réessayer</a>";
    }
}