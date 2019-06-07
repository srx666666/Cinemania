<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        
        // put your code here
         session_start();
         if(isset($_SESSION['popust'])){
             
  
      $con = mysqli_connect("localhost","root","","cinemania");
        $con->set_charset('utf8');
       $username=$_SESSION['user']['KorisnickoIme']; 
       
        $vip = mysqli_query($con, "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$username'"); 
        $result=$vip->fetch_assoc();
        if($result['VIPKorisnik']!=2){ 
              $message=" Niste VIP Korisnik! Nastavite da gledate filmove kod nas i sakupljajte poene!";
                echo "<script type='text/javascript'>alert('$message');</script>";
             header("Location:index.php");
              die();
        }
        $bodovi= mysqli_query($con, "SELECT * FROM registrovankorisnik WHERE KorisnickoIme='$username'"); 
        $result1=$bodovi->fetch_assoc();
       
       if(  $result1['BodoviPopust']<200)  {
                $message=" Nemate dovoljno poena za popust! Nastavite da gledate filmove kod nas i sakupljajte poene!";
                echo "<script type='text/javascript'>alert('$message');</script>";}
            
              else if ($result1['BodoviPopust']>200&&$result1['BodoviPopust']<500){
				  $stari_bodovi=$result1['BodoviPopust'];
				  $novi_bodovi= $stari_bodovi-200;
                 mysqli_query($con, "UPDATE registrovankorisnik SET BodoviPopust = '$novi_bodovi' WHERE KorisnickoIme='$username'"); 
                  $id_karte=$_SESSION['id_karte'];
                  $cena_stara=mysqli_query($con, "SELECT * FROM karta WHERE BrojSedista='$id_karte'"); 
				
                    $result2=$cena_stara->fetch_assoc();
                  $nova_cena=(int)((float)$result2['Cena']*0.8);
                   mysqli_query($con, "UPDATE karta SET Cena = '$nova_cena' WHERE BrojSedista='$id_karte'"); 
				 
                  $message="Ostvarili ste 20% popusta na cenu karte!";
                echo "<script type='text/javascript'>alert('$message');</script>";}
                  
              else{ 
			   $stari_bodovi=$result1['BodoviPopust'];
				  $novi_bodovi= $stari_bodovi-500;
			  mysqli_query($con, "UPDATE registrovankorisnik SET BodoviPopust = '$novi_bodovi' WHERE KorisnickoIme='$username'"); 
                  $id_karte=$_SESSION['id_karte'];
                  $cena_stara=mysqli_query($con, "SELECT * FROM karta WHERE BrojSedista='$id_karte'"); 
				
                    $result2=$cena_stara->fetch_assoc();
                  $nova_cena=(int)((float)$result2['Cena']*0.7);
                   mysqli_query($con, "UPDATE karta SET Cena = '$nova_cena' WHERE BrojSedista='$id_karte'"); 
				 
                  $message="Ostvarili ste 30% popusta na cenu karte!";
                echo "<script type='text/javascript'>alert('$message');</script>";
				  
				  
                  ;
                  
                  
              }
          
        
        
         }
        ?>
    </body>
</html>
