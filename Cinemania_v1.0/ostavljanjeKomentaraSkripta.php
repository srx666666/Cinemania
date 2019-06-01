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
    
//    $conn = new PDO("mysql:host=localhost;dbname=cinemania;charset=UTF-8", 'root');
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//    VALUES ('John', 'Doe', 'john@example.com')";
//    // use exec() because no results are returned
//    $conn->exec($sql);
//    echo "New record created successfully";
?>


