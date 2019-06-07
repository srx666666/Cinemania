<!-- 
    ostavljanjeKomentaraSkripta.php - Serverska stranica koja belezi novu komentar korisnika u bazu
    @version 1.0
    @author Mina Racic 0360/2016
-->
<?php

    session_start();
    
    $user = $_SESSION['user'];
    $korisnickoIme = $user['KorisnickoIme'];
    $film = $_SESSION['film'];
    $idFilma = $film['IDFilma'];
    $nazivFilma = $film['Naziv'];
    
    $opisKomentara = $_POST['opisKomentara'];
    
    $connection = mysqli_connect("localhost", "root", "", "cinemania")
                or die("Konekcija nije uspesna!");
    $connection->set_charset('utf8');
    
    $sql = "INSERT INTO komentar(Opis, KorisnickoIme, IDFilma) VALUES ('$opisKomentara', '$korisnickoIme', $idFilma)";

    
    $rezultat = mysqli_query($connection, $sql)
        or die("Neuspesno izvrsavanje upita: ".$sql);
    
    mysqli_close($connection);
    
    header('Location:pregledFilma.php')
?>


