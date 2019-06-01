<?php
    session_start();
?>
<html>
    <head>
        <!-- Material Design Lite -->

        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link rel="stylesheet" type="text/css" href="p.css">
    </head>
    
    <body>

        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">

                
                <!--treba da se promeni-->
                <a href = "pocetna.html" >
                    <img class="logo" src="logo.png">
                </a>
                <span class="mdl-layout-title"><font size='5'>&nbspPregled repertoara bioskopa na jednom mestu!</font></span>
                <div class="mdl-layout-spacer">

                </div>

                <nav class="mdl-navigation" >
                    <a>Izloguj se</a>
                </nav>
            </div>
        </header>

        <table height=100%, width=100%>
            <tr>
                <td bgcolor="white" valign='top' width='200px'>
                    <div class="vertical-menu">
                        <p><h3>
                            <?php
                                if(isset($_SESSION['user'])){
                                    $row = $_SESSION['user'];
                                    echo '<i>Korisnik: </i>';
                                    echo $row['KorisnickoIme'] . '<br>';
                                    echo '<i>Ime: </i>';
                                    echo $row['Ime'] . '<br>';
                                    echo '<i>Prezime: </i>';
                                    echo $row['Prezime'] . '<br>';
                                     echo '<i>Datum rodjenja: </i><br>';
                                    echo $row['DatumRodjenja'];
                                }
                                else{
                                    echo "Ovo je moj grad!";
                                }
                            ?>
                        </h3></p>
                        <a class="stavka" href=""><font size='5'>Preporuci&nbspmi&nbspFilm</font></a>
                        <a  class="stavka" href="prijava_greske.html" target="_blank" onClick="window.open('prijava_greske.html', 'prijavigresku', 'resizable,height=600,width=800'); return false;">
                            <font size='5'>Prijavi gresku</font></a>

                    </div>

                </td>
                
                <td>
                    <main class="mdl-layout__content">
                        <table width='60%' align='center'> 
                            <tr>
                                <td bgcolor = 'white' >
                                <h2><a href="film.html" target="blank">Aladin i leteći ćilim</a></h2>
                                    <hr>

                                    <table> 
                                        <tr>
                                            <td width='25%'>
                                                <img src='slike/Aladin.png' width='100%' align='center'>
                                            </td>
                                            <td width='25%'>
                                                <p>Hodja fra Pjort</p>
                                                <p>animirani, fantazija | 81 min</p>
                                                <p><span class="gray-font italic">Početak prikazivanja filma:</span> 24.01.2019</p>                                        <a href="#" class="like-link" data-main-id="159845" style="display: none">
                                                    <span class="reminder-label">Zapamti film</span>
                                                    <span class="remove-label">Izbrišite iz podsetnika</span>
                                                </a>
                                            </td>

                                            <td>

                                                <div class="span6">

                                                    <p><span class="italic gray-font">Kratak sadržaj:</span> <b>SINHRONIZOVANO!</B><BR>Aladin živi u Pjortu, malom pustom selu u Bulgislavu, zajedno sa majkom, ocem i kozom Rajkom. </p><p><span class="italic gray-font">Glumci:</span> Peđa Damnjanović, Miomira Dragićević, Marko Dolaš, Alek Rodić, Ana Mirović, Ognjen Drenjanin, Jovana Cavnić, Đorđe Simić, Milan Zoričić, Simona Ćirović, Ivan Ivanov, Zoran Stojić </p>        </div>
                                            </td>
                                        </tr>  
                                    </table>
                                    
                                </td>
                            </tr>
                            <tr><td><br><br><br></td></tr>
                            <tr>
                                <td bgcolor='white' >
                                    <h2><a href="">Ledena potera</a></h2>
                                    <hr>
                                    <table> 
                                        <tr>
                                            <td width='25%'>
                                                <img src='slike/cold.jpg' width='100%' align='center'>
                                            </td>
                                            <td width='25%'>
                                                <p></p>
                                                <p>Cold Pursuit</p>
                                                <p>akcija, drama, triler | 118 min</p>
                                                <p><span class="gray-font italic">Početak prikazivanja filma:</span> 21.02.2019</p>                                        <a href="#" class="like-link" data-main-id="160163" style="display: none">
                                                    <span class="reminder-label">Zapamti film</span>
                                                    <span class="remove-label">Izbrišite iz podsetnika</span>
                                                </a></td>


                                            <td>
                                                <div class="span6">
                                                    <p><span class="italic gray-font">Kratak sadržaj:</span> Lajam Nison je glavna zvezda napetog trilera koji je zasnovan na mračnom skandinavskom trileru iz 2014. godine pod nazivom "In Order of Disappearance".</p><p><span class="italic gray-font">Glumci:</span>  Liam Neeson, Emmy Rossum, Laura Dern</p>  
                                            </td></tr></table>

                                </td>
                            </tr>
                            <tr><td><br><br><br></td></tr>
                            <tr>
                                <td bgcolor='white' >
                                    <h2><a href="">Boemska rapsodija</a></h2>
                                    <p></p>
                                    <hr >
                                    <table> 
                                        <tr>
                                            <td width='25%'>
                                                <img src='slike/Boemska.png' width='100%' align='center'>
                                            </td>


                                            <td width='25%'>
                                                <p>Bohemian Rhapsody</p>
                                                <p>drama, biografski, mjuzikl | 134 min</p>
                                                <p><span class="gray-font italic">Početak prikazivanja filma:</span> 01.11.2018</p>                                        <a href="#" class="like-link" data-main-id="155163" style="display: none">
                                                    <span class="reminder-label">Zapamti film</span>
                                                    <span class="remove-label">Izbrišite iz podsetnika</span>
                                                </a></td>

                                            </div>
                                            </div>
                                        <div class="span6">
                                            <td>
                                                <p><span class="italic gray-font">Kratak sadržaj:</span> Priča o nastanku legendarne britanske rok grupe Queen i njenom frontmenu Frediju Merkjuriju.</p><p><span class="italic gray-font">Glumci:</span> Rami Malek, Ben Hardy, Gwilym Lee, Joe Mazzello, Lucy Boynton</p> 
                                            </td></tr></table>
                                </td>
                            </tr> 
                            </div></table>
                    </main>
                    </div>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>