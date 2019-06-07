<!-- 
    ocenjivanjeFilmaSkripta.php - Serverska stranica koja belezi novu ocenu korisnika u bazu 
    @version 1.0
    @author Mina Racic 0360/2016
-->
<?php
    session_start();
    
    $korisnickoIme = $_SESSION['user']['KorisnickoIme'];
    $ocena = $_POST['star'];
    $film = $_SESSION['film'];
    $idFilma = $film['IDFilma'];
    
    $connection = mysqli_connect("localhost", "root", "", "cinemania");
    $connection->set_charset('utf8');
    
    mysqli_select_db($connection, "cinemania")
                or die("Ne postoji baza tog imena!");
    
    $sql = "SELECT * FROM ocena WHERE KorisnickoIme='$korisnickoIme' AND IDFilma='$idFilma'";
    
    $rezultat = mysqli_query($connection, $sql)
                    or die("Neuspesno izvrsavanje upita: ".$sql);
    
    if(mysqli_num_rows($rezultat) == 1){
        $red = mysqli_fetch_assoc($rezultat);
        $ocena = $red['Vrednost'];
        
        
        $_SESSION['ocenaKorisnika'] = $red['Vrednost'];
        $poruka = "Korisnik je vec oceni dati film ocenom " . $ocena . "/10"; 
        echo "<script type='text/javascript'>alert('$poruka'); window.location.href = 'pregledFilma.php'</script>";
        
    }
    else{
         $connection = mysqli_connect("localhost", "root", "", "cinemania")
                or die("Konekcija nije uspesna!");
        $connection->set_charset('utf8');
    
        $sql = "INSERT INTO ocena( IDFilma, Vrednost, KorisnickoIme) VALUES ($idFilma ,$ocena, '$korisnickoIme')";

        $rezultat = mysqli_query($connection, $sql)
            or die("Neuspesno izvrsavanje upita: ".$sql);
    
        header('Location:pregledFilma.php');
        mysqli_close($connection);
    }
?>

