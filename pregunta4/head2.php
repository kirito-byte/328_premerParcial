
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            echo "<link rel='stylesheet' href='./css/style.css'>";
        ?>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
</head>
<header>
    <div id="titulo">   
        <h1>
            F.C.P.N.
        </h1>
    </div>
    <div id="nav_menu">
            <div id="navega">
                <nav>
                    <div class="navicon">
                        N
                    </div>
                    <a href='logout.php?' onclick=<?php /*$userSession->closeSession()*/?>;>Cerrar sesión</a>
                </nav>
            </div>
            <div class="cat" id="c">
                <a href="">Matematica</a> 
                <a href="">Fisica</a>
                <a href="">Quimica</a>
                <a href="javascript:void(0);" class="icon" onclick="miFun()">
                    <i><ion-icon name="ellipsis-vertical-outline"></ion-icon></i>
                </a>
            </div>
            <script>
                function miFun() {
                  var x = document.getElementById("c");
                  if (x.className === "cat") {
                    x.className += " responsive";
                  } else {
                    x.className = "cat";
                  }
                }
            </script>
        </div>
</header>
<main>