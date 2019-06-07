<!-- 
    logOut.php - Serverska stranica za log out korisnika
    @version 1.0
    @author Mina Racic 0360/2016
-->
<?php
    session_start();
    session_destroy();
    $_SESSION = [];
    header('Location:index.php');
?>

