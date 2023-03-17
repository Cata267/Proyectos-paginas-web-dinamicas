<?php
if (isset($_post['submit'])) {

    $user = $_post['user'];
    $pass = $_post['pass'];
    $userDB = "pedro@mail.com";
    $passDB = "123";

    if (isset($_post['user'])) {
        
        if ($user=== $userDB) {
            header("location: ../home.php");
        }
    
        else {
            echo '<script language="javascript">alert("Error en Datos");</script>';
        }
    } 
}