<?php
    $username=$_POST["korisnik"];
    $username=substr($username,10);
    $conn = mysqli_connect("localhost","root","","cinemania");
    $sql = "UPDATE RegistrovanKorisnik SET vipkorisnik=2 WHERE KorisnickoIme='$username'";
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location: Vip.php');
?>