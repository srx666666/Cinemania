<!-- 
    logovanjeSkripta.php - Serverska stranica koja loguje novog korisnika
    @version 1.0
    @author Mina Racic 0360/2016
-->
<?php
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = "";
                
        if($username == ""){
            $message = "Popunite polje username ";
        }
        else{
            $_SESSION['username'] = $username;
        }
        if($password == ""){
            if($message)
                $message = $message . "i password";
            else
                $message = "Popunite polje password";
        }
        else{
            $_SESSION['password'] = $password;
        }

        if($message != ""){

            $_SESSION['message'] = $message;
        }

        if($username == "" || $password == ""){
            header("Location:logovanje.php");
        }
        else{
            $connection = mysqli_connect("localhost", "root", "")
                or die("Konekcija nije uspesna!");
        
            mysqli_select_db($connection, "cinemania")
                or die("Ne postoji baza tog imena!");
        
            $sql = "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$username'";
      
        
            $rezultat = mysqli_query($connection, $sql)
                    or die("Neuspesno izvrsavanje upita: ".$sql);

               
            if(mysqli_num_rows($rezultat)==1){
                $sql = "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$username' AND Sifra='$password'";
                $rezultat = mysqli_query($connection, $sql)
                    or die("Neuspesno izvrsavanje upita: ".$sql);
               
                if(mysqli_num_rows($rezultat)==1){
                    $_SESSION['user'] = mysqli_fetch_assoc($rezultat);
                    $vipKorisnik = $_SESSION['user']['VIPKorisnik'];
                    if($vipKorisnik == 1){
                        mysqli_close($connection);
                        header('Location:index.php');
                    }
                    else{
                        $sql = "SELECT * FROM administrator WHERE KorisnickoIme='$username'";
                        $rezultat = mysqli_query($connection, $sql)
                            or die("Neuspesno izvrsavanje upita: ".$sql);
                        
                        if(mysqli_num_rows($rezultat)==1){
                            $_SESSION['isAdmin'] = $username;
                             mysqli_close($connection);
                            header("Location:index.php");
                        }
                        else{
                            mysqli_close($connection);
                            header("Location:index.php");
                        }
                    }
                   
                }
                else{
                    $error = "Nije dobra sifra";
                    $_SESSION['message'] = $error;
                    mysqli_close($connection);
                    header("Location:logovanje.php");
            }
               
            }else{
                $error = "Ne postoji korisnik!";
                $_SESSION['message'] = $error;
                mysqli_close($connection);
                header("Location:logovanje.php");
            }
            
            
        }

    
?>
