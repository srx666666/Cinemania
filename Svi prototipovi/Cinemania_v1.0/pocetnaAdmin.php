﻿<html>
    <title>Cinemania</title>
    <head>
        <!--<link rel="stylesheet" type="text/css" href="material.min.css">-->
        <link rel="stylesheet" type="text/css" href="p.css">
    </head>
    <body>

        <!-- Uses a transparent header that draws on top of the layout's background -->
        <div class="demo-layout-transparent mdl-layout ">
            <div class="mdl-layout  mdl-layout--fixed-drawer
                 mdl-layout--fixed-header">
                <header class="mdl-layout__header">


                    <div class="mdl-layout__header-row">

                        <!-- Title -->
                        <a href = "Pregled.html">
                            <img class="logo" src="logo.png">
                        </a>
                        <span class="mdl-layout-title"><font size='5'>&nbspPregled repertoara bioskopa na jednom mestu!</font></span>
                        <!-- Add spacer, to align navigation to the right -->
                        <div class="mdl-layout-spacer">

                        </div>
                        <!-- Navigation -->

                        <nav class="mdl-navigation">
                            <a class="mdl-navigation__link" href="prijava.html" >LogOut</a>

                        </nav>
                    </div>
                </header>

                <table height=100%, width=100%>
                    <tr >
                        <td bgcolor="white" valign='top' width='200px'>


                            <div class="vertical-menu">
                                <p><font size='6'>Administrator</font></p>
                                <a class="stavka" href="NoviFilm.html"><font size='5'>Dodavanje novih filmova</font></a>

                                <a  class="stavka" href="BrisanjeIzmena.html"><font 	size='5'>Izmena filma</font></a>


                                <a  class="stavka" href="Vip.html"><font size='5'>Promovisanje clanova u VIP clanove</font></a>
                            </div>



                        </td>
                        <td>
                            <main class="mdl-layout__content">
                                <table width='60%' align='center'> 
                                    <tr><td bgcolor='	white' >

                                            <h2><a href="pregledFilma.php?nazivFilma=<?php echo $row['Naziv'] ?>" target="blank">Aladin i leteći ćilim</a></h2>
                                            <hr >
                                            <p></p>



                                            <table> 
                                                <tr>
                                                    <td width='25%'>
                                                        <img src='aladin.png' width='100%' align='center'>
                                                    </td>
                                                    <td width='25%'>
                                                        <p>Hodja fra Pjort</p>
                                                        <p>animirani, fantazija | 81 min</p>
                                                        <p><span class="gray-font italic">Početak prikazivanja filma:</span> 24.01.2019</p>                                        <a href="#" class="like-link" data-main-id="159845" style="display: none">
                                                            <span class="reminder-label">Zapamti film</span>
                                                            <span class="remove-label">Izbrišite iz podsetnika</span>
                                                        </a></td>

                                                    <td >

                                                        <div class="span6">

                                                            <p><span class="italic gray-font">Kratak sadržaj:</span> <b>SINHRONIZOVANO!</B><BR>Aladin živi u Pjortu, malom pustom selu u Bulgislavu, zajedno sa majkom, ocem i kozom Rajkom. </p><p><span class="italic gray-font">Glumci:</span> Peđa Damnjanović, Miomira Dragićević, Marko Dolaš, Alek Rodić, Ana Mirović, Ognjen Drenjanin, Jovana Cavnić, Đorđe Simić, Milan Zoričić, Simona Ćirović, Ivan Ivanov, Zoran Stojić </p>        </div>
                                                    </td>
                                                </tr>  

                                            </table>
                                        </td></tr>
                                    <tr><td><br><br><br></td></tr>
                                    <tr>
                                        <td bgcolor='white' >
                                            <h2><a href="//www.cineplexx.rs/movie/ledena-potera/">Ledena potera</a></h2>
                                            <hr >
                                            <table> 
                                                <tr>
                                                    <td width='25%'>
                                                        <img src='led.png' width='100%' align='center'>
                                                    </td>
                                                    <td width='25%'>
                                                        <p></p>
                                                        <div class="starBoxSmall three-lines">
                                                            <div class="rating-wrapper" style="display: none">
                                                                <div class="numberStars"></div>
                                                                <div class="stars-wrapper">
                                                                    <img src="https://img.cineplexx.rs/static/images/stars_gray.png" alt="stars"/>
                                                                    <div class="stars-color"></div>
                                                                </div>
                                                            </div>

                                                            <p>Cold Pursuit</p>
                                                            <p>akcija, drama, triler | 118 min</p>
                                                            <p><span class="gray-font italic">Početak prikazivanja filma:</span> 21.02.2019</p>                                        <a href="#" class="like-link" data-main-id="160163" style="display: none">
                                                                <span class="reminder-label">Zapamti film</span>
                                                                <span class="remove-label">Izbrišite iz podsetnika</span>
                                                            </a></td>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <td>
                                                        <div class="span6">
                                                            <p><span class="italic gray-font">Kratak sadržaj:</span> Lajam Nison je glavna zvezda napetog trilera koji je zasnovan na mračnom skandinavskom trileru iz 2014. godine pod nazivom "In Order of Disappearance".</p><p><span class="italic gray-font">Glumci:</span>  Liam Neeson, Emmy Rossum, Laura Dern</p>  
                                                    </td></tr></table>

                                        </td>
                                    </tr>
                                    <tr><td><br><br><br></td></tr>
                                    <tr>
                                        <td bgcolor='white' >
                                            <h2><a href="//www.cineplexx.rs/movie/boemska-rapsodija/">Boemska rapsodija</a></h2>
                                            <p></p>
                                            <hr >
                                            <table> 
                                                <tr>
                                                    <td width='25%'>
                                                        <img src='boem.png' width='100%' align='center'>
                                                    </td>

                                                <div class="starBoxSmall three-lines">
                                                    <div class="rating-wrapper" style="display: none">
                                                        <div class="numberStars"></div>
                                                        <div class="stars-wrapper">
                                                            <img src="https://img.cineplexx.rs/static/images/stars_gray.png" alt="stars"/>
                                                            <div class="stars-color"></div>
                                                        </div>
                                                    </div>
                                                    <td width='25%'>
                                                        <p>Bohemian Rhapsody</p>
                                                        <p>drama, biografski, mjuzikl | 134 min</p>
                                                        <p><span class="gray-font italic">Početak prikazivanja filma:</span> 01.11.2018</p>                                        <a href="#" class="like-link" data-main-id="155163" style="display: none">
                                                            <span class="reminder-label">Zapamti film</span>
                                                            <span class="remove-label">Izbrišite iz podsetnika</span>
                                                        </a></td>
                                                </div>
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