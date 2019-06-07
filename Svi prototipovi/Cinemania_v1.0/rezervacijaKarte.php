<?php
		session_start();
		$taken=array();
		$slova=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N");
		$brojevi=array("1","2","3","4","5","6","7","8","9","10");
		foreach($_POST as $key => $value)
		{
			if ($key!="popust")
				array_push($taken,$key);
		}
		$link=mysqli_connect("localhost", "root", "", "cinemania");
		$flag=0;
		foreach ($taken as $Sediste)
		{
			$flag=1;
				$KorisnickoIme=$_SESSION["user"]["KorisnickoIme"];
				$IDP = $_SESSION['idProjekcije'];
				$Cena=$_SESSION["Cena"];
				
				$sql="Insert into karta (KorisnickoIme,IDProjekcije,Cena,BrojSedista) values ('$KorisnickoIme',$IDP,$Cena,'$Sediste')";
				$result=mysqli_query($link,$sql);
				$result= mysqli_query($link, "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$KorisnickoIme'"); 
				$row=$result->fetch_assoc();
				$vipbodovi=$row['BodoviVIP'];
				$popustbodovi=$row['BodoviPopust'];
				$vipbodovi=$vipbodovi+10;
				$popustbodovi=$popustbodovi+10;
				mysqli_query($link, "UPDATE registrovankorisnik SET BodoviPopust = '$popustbodovi' WHERE KorisnickoIme='$KorisnickoIme'"); 
				mysqli_query($link, "UPDATE registrovankorisnik SET BodoviVIP = '$vipbodovi' WHERE KorisnickoIme='$KorisnickoIme'"); 
				if ($vipbodovi>1000)
				{
					mysqli_query($link, "UPDATE registrovankorisnik SET VIPKorisnik = 1 WHERE KorisnickoIme='$KorisnickoIme'"); 
				}
		}
		if (isset($_POST["popust"])==true )
		{
			$_SESSION["popust"]=true;
			$_SESSION["id_karte"]=$taken[0];
			header('Location: Popust.php');
		}
		else
			$_SESSION["popust"]=false;
		if ($flag==1)
		{
		 $message="Cestitamo! Rezervisali ste karte!";
		}
		else
			$message="Niste rezervisali nijedno sediste!";
		 echo "<script type='text/javascript'>alert('$message');</script>";
				  
		//header('Location: index.php');
	mysqli_close($link);
?>
	
