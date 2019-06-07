<?php

		$username=$_POST['username'];
		$ime=$_POST['ime'];
		$prezime=$_POST['prezime'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$pol=$_POST['pol'][0];
		$datum=$_POST['datum'];
		$link = mysqli_connect("localhost", "root", "","cinemania");
		
		$sql = "SELECT * FROM RegistrovanKorisnik WHERE KorisnickoIme='$username'";
		$result = mysqli_query($link,$sql);
		$num_rows = mysqli_num_rows($result);
		$sql2 = "SELECT * FROM Administrator WHERE KorisnickoIme='$username'";
		$result2 = mysqli_query($link,$sql2);
		$num_rows2 = mysqli_num_rows($result2);
		if ($num_rows == 0 and $num_rows2==0) {
			$sql = "INSERT INTO RegistrovanKorisnik (KorisnickoIme,ime,prezime,email,sifra,pol,DatumRodjenja,bodoviVIP,bodoviPopust,VIPKorisnik) 
						  VALUES('$username', '$ime', '$prezime', '$email','$password','$pol','$datum',0,0,False) "; 
                        echo $sql;
				$result=mysqli_query($link,$sql);
				header('Location: logovanje.php');
		}
		else
		{
			$_POST['poruka']="Korisnicko ime je vec zauzeto";
			header('Location: Registracija.html');
		}
		// Close connection 
		mysqli_close($link); 
		
?>