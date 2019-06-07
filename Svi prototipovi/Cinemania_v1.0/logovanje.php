<!-- 
    logovanje.php - Pocetna stranica za log in korisnika
    @version 1.0
    @author Mina Racic 0360/2016
-->
<?php
    session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Prijava na sajt</title>
    </head>

    <body background = "filmTrack1.jpg" background-size="0.3">
        
        <header class="w3-container w3-red" >
            <a href = 'index.php'><img src  = "logo.png" width="250"></a>
        </header>

        <p align = "center">
                <div class="w3-container w3-balck" align = "center">
                        <h1><b>Prijava</b></h1>
                              
                    <form class="w3-container" name = 'logInForm' method = 'POST' action = 'logovanjeSkripta.php'>
                        <div align = "center">
                            <div class = 'w3-text w3-text-red'>
                            <?php 
                                if(isset($_SESSION['message'])){
                                    echo $_SESSION['message'];
//                                    session_destroy();
                                }
                            ?>
                            </div>
                            
                                <label class="w3-text" ><b>Username</b></label>
                                <input class="w3-input w3-border w3-white" type="text" style="width:23%" name = 'username'
                                       value = '<?php 
                                       if(isset($_SESSION['username'])){
                                           echo $_SESSION['username'];
                                       }
                                       ?>'>                                       
                                
                                <label class="w3-text" ><b>Password</b></label>
                                <input class="w3-input w3-border w3-white" type="password" name = 'password' style="width:23%">
                                <p align = "center" >
                                    <button class="w3-btn w3-red">Prijavi se</button>
                                </p>
                        </div>
                    </form>

                </div>
            </p>
        </p>

    </body>
</html>