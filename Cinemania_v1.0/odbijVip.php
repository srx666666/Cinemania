<?php
    $username=$_POST["korisnik"];
    $username=substr($username,6);
    $conn = mysqli_connect("localhost","root","","cinemania");
    $sql = "UPDATE RegistrovanKorisnik SET vipkorisnik=0 WHERE KorisnickoIme='$username'";
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location: Vip.php');
?>