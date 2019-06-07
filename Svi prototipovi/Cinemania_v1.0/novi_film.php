<?php
    $ime=$_POST["ime"];
    $opis=$_POST["opis"];
    $trajanje=$_POST["trajanje"];
    $zanr=$_POST["zanr"];
    $glumci=$_POST["glumci"];
    $reziser=$_POST["reziser"];
    $scenarista=$_POST["scenarista"];
    $datumPrikazivanja = $_POST['datumPrikazivanja'];
    $sinhronizacija=$_POST["sinhronizacija"];
    $img=$_POST["slika"];
    $trailer=$_POST["trailer"];
    $link = mysqli_connect("localhost", "root", "","cinemania");
    $sql="SELECT MAX(IDFilma) as res FROM Film";
    $result=mysqli_query($link,$sql);
    $row = $result->fetch_assoc();
    if ($row["res"]==null)
            $id=1;
    else
    {
            $id=$row["res"]+1;
    }
    $sql = "INSERT INTO Film (naziv,zanr,DuzinaTrajanja,DatumPrikazivanja, glumci,reziser,opis,ImgSrc,IDFilma,Scenarista,Sinhronizacija,OcenaKorisnika,TrailerSrc) 
                              VALUES('$ime','$zanr',$trajanje, '$datumPrikazivanja', '$glumci','$reziser','$opis','$img',$id,'$scenarista','$sinhronizacija',0,'$trailer') "; 
    $result=mysqli_query($link,$sql);
    echo $sql;
    header('Location: NoviFilm.php');
?>
