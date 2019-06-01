<?php session_start();
    $sala=$_POST["sala"];
    $vreme=$_POST["vreme"];
    $film=$_SESSION["film"];
    $link=mysqli_connect("localhost","root","","Cinemania");
    $sql="INSERT INTO Projekcija (IDSale,Termin,IDFilma) 
                      VALUES('$sala', '$vreme','$film') "; 
    mysqli_query($link,$sql);

    mysqli_close($link);
    header('Location: termin.php');
?>