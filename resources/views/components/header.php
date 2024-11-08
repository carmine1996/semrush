<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- app.css -->
     <link rel="stylesheet" href="<?php echo ASSETS_PATH. 'app.css'; ?>">

     <link rel="icon" href="<?php echo MEDIA_PATH; ?>favicon.f8cd638f087a.ico">
</head>
<body>
    <header id="main-header">
        <div class="container">
            <div class="col-header-1">
                <div class="logo">
                    <img src="<?php echo MEDIA_PATH; ?>logo.png" alt="Logo Semrush">
                </div>
                <div class="navigation">
                    <nav>
                        <ul>
                            <li>
                                <a href="#f">Funzionalità</a>                                
                            </li>
                            <li>
                                <a href="#f">Prezzi</a>                                
                            </li>
                            <li>
                                <a href="#f">Risorse</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <h5>Blog</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat explicabo vel quasi asperiores minus, provident, deleniti temporibus nisi distinctio soluta.</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h5>Altra voce</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat explicabo vel quasi asperiores minus, provident, deleniti temporibus nisi distinctio soluta.</p>
                                        </a>
                                    </li>
                                </ul>                            
                            </li>
                            <li>
                                <a href="#f">Azienda</a>
                            </li>
                            <li>
                                <a href="#f">App Center <span class="new-item-menu">New</span></a>
                            </li>
                            <li>
                                <a href="#f">Enterprice  <svg fill="#000000" width="800px" height="800px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"> <rect id="Icons" x="-896" y="0" width="1280" height="800" style="fill:none;"/> <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g> <g id="H1"> </g> <g id="H2"> </g> <g id="H3"> </g> <g id="list-ul"> </g> <g id="hamburger-1"> </g> <g id="hamburger-2"> </g> <g id="list-ol"> </g> <g id="list-task"> </g> <g id="trash"> </g> <g id="vertical-menu"> </g> <g id="horizontal-menu"> </g> <g id="sidebar-2"> </g> <g id="Pen"> </g> <g id="Pen1" serif:id="Pen"> </g> <g id="clock"> </g> <g id="external-link"> <path d="M36.026,20.058l-21.092,0c-1.65,0 -2.989,1.339 -2.989,2.989l0,25.964c0,1.65 1.339,2.989 2.989,2.989l26.024,0c1.65,0 2.989,-1.339 2.989,-2.989l0,-20.953l3.999,0l0,21.948c0,3.308 -2.686,5.994 -5.995,5.995l-28.01,0c-3.309,0 -5.995,-2.687 -5.995,-5.995l0,-27.954c0,-3.309 2.686,-5.995 5.995,-5.995l22.085,0l0,4.001Z"/> <path d="M55.925,25.32l-4.005,0l0,-10.481l-27.894,27.893l-2.832,-2.832l27.895,-27.895l-10.484,0l0,-4.005l17.318,0l0.002,0.001l0,17.319Z"/> </g> <g id="hr"> </g> <g id="info"> </g> <g id="warning"> </g> <g id="plus-circle"> </g> <g id="minus-circle"> </g> <g id="vue"> </g> <g id="cog"> </g> <g id="logo"> </g> <g id="radio-check"> </g> <g id="eye-slash"> </g> <g id="eye"> </g> <g id="toggle-off"> </g> <g id="shredder"> </g> <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g> <g id="react"> </g> <g id="check-selected"> </g> <g id="turn-off"> </g> <g id="code-block"> </g> <g id="user"> </g> <g id="coffee-bean"> </g> <g id="coffee-beans"> <g id="coffee-bean1" serif:id="coffee-bean"> </g> </g> <g id="coffee-bean-filled"> </g> <g id="coffee-beans-filled"> <g id="coffee-bean2" serif:id="coffee-bean"> </g> </g> <g id="clipboard"> </g> <g id="clipboard-paste"> </g> <g id="clipboard-copy"> </g> <g id="Layer1"> </g> </g> </svg></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-header-2">
                <div class="langs">
                    <select name="lang" id="select-langs">
                        <option value="it">IT</option>
                        <option value="eng">EN</option>
                    </select>
                </div>
                <div class="cta">
                    <a href="" class="btn-login btn">Login</a>
                    <a href="" class="btn btn-iscriviti">Iscriviti</a>
                </div>
            </div>
        </div>
    </header>

    <main>