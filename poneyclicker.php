<!DOCTYPE html>
<html lang="en">
<?php include 'intro-liens.php'; ?>

    <div class="container-fluid">
        <!-- NAVBAR -->
        <?php include 'nav.php'; ?>
            <header id="startchange" class="container-fluid header page">
                <h1>PONEY CLICKER</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti mollitia, aperiam ad, placeat at eaque sequi voluptatem tempore unde ipsum, atque, soluta quidem doloremque quia tempora! Facere corporis facilis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio tempora eum accusantium totam doloremque similique officia veritatis ipsa! Vitae illo tempore molestiae adipisci, quos quasi facere eaque blanditiis sequi.</p>
                <div class="separator-header2"></div>
            </header>
            <!-- PROJET -->
            <a href="https://melleprunelle.github.io/poneyclicker.github.io/"><img class="img-responsive col-md-8 col-md-offset-2" src="img/img6.png" alt="">
            </a>
            <pre class="col-md-offset-2 col-md-8">
                    <code class="col-md-10 col-md-offset-1 col-xs-10">                    
/* ==================== */
/* ======= HTML ======= */
/* ==================== */   
                                    
                    
&#139;!DOCTYPE html&#155;
&#139;html&#155;

&#139;head&#155;
    &#139;meta charset="utf-8" author="Lise et Nabil"&#155;
    &#139;title&#155;Poney Clicker&#139;/title&#155;
    &#139;!--Css--&#155;
    &#139;link rel="stylesheet" type="text/css" href="css/bootstrap.css" /&#155;
    &#139;link rel="stylesheet" href="css/style.css"&#155;
    &#139;!--Scripts--&#155;
    &#139;!--&#139;script src="js/jquery.js"&#155;&#139;/script&#155;
    &#139;script src="js/bootstrap.js"&#155;&#139;/script&#155;--&#155;
    &#139;script type="text/javascript" src="js/script.js"&#155;&#139;/script&#155;
&#139;/head&#155;

&#139;body&#155;
    &#139;section&#155;
        &#139;p id="score" class="text-center"&#155;0&#139;/p&#155;
        &#139;img id="bouton" class="center-block" src="elements/img/poney.png" alt="Super Cookie" onclick="clicker()"&#155;
    &#139;/section&#155;
    &#139;section&#155;
        &#139;button type="button" id="multiplicateur" class="btn btn-warning center-block" onclick="incrementer()"&#155;
            Multiplicateur x1&#139;/button&#155;
            &#139;p id="prix" class="text-center text-bouton "&#155;Prix du multiplicateur de click : 50&#139;/p&#155;
    &#139;/section&#155;
&#139;/body&#155;

&#139;/html&#155;

                    
/* ==================== */
/* ======= CSS ======== */
/* ==================== */

          
* {
    margin: 0px;
    box-sizing: border-box;
}


/*===============BASE===========)=====*/


body {
    background-image: url(../elements/img/fond_body.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
}

p {
    padding-bottom: 30px;
    font-size: 30px;
    color: deeppink;
}

section {
    margin-top: 60px;
}


/*===============IMAGES===============*/


img:hover {
    cursor: pointer;
}

img:active {
    width: 375px;
    height: 338px;
}

/*===============BOUTON===============*/


button {
    background-color: lightblue !important;
    border: 0px !important;
    color: steelblue!important;
}

.text-bouton {
    font-size: 15px;
    margin-top: 10px;
}
                    
                    
/* ==================== */
/* ======= JS ========= */
/* ==================== */
                    
                    
/*var score = 0;
var multi = 1;

function clicker() {
    score = score + multi;
    document.getElementById("score").innerHTML = score;
}*/

/*function incrementer() {
    if (score >= 5) {
        multi = multi * 2;
        document.getElementById("multiplicateur").innerHTML = "Multiplicateur x" + multi;
    }
    
    else {
        alert("Vous êtes trop pauvre !");
    }
}*/

/*function incrementer() {
    if (score >= 5) {
        multi = multi * 2;
        score = score - 5;
        document.getElementById("multiplicateur").innerHTML = "Multiplicateur x" + multi;
    }
    
    else {
        alert("Vous êtes trop pauvre !");
    }
}*/

/*function incrementer() {
    if (score >= 5 * multi) {
        multi = multi * 2;
        score = score - 5;
        document.getElementById("multiplicateur").innerHTML = "Multiplicateur x" + multi;
        document.getElementById("prix").innerHTML = "Prix du multiplicateur de click  : " + 5 * multi;
        document.getElementById("score").innerHTML = score;
    }
    
    else {
        alert("Vous êtes trop pauvre !");
    }
}*/




var score = 0;
var multi = 1;

/*fonction +1 en cliquant sur le cookie.
Cette fonction permet que mon poney prenne en compte
le résultat de mon multiplicateur quand je l'ai payé.*/

function clicker() {
    score = score + multi;
    document.getElementById("score").innerHTML = score;
    if (score == 200){
        setInterval(clicker, 1000);
    }
}

/*fonction +1 en cliquant sur le multiplicateur.
Cette fonction permet de faire en sorte que
mon mulitplicateur se multipli par lui même
si j'ai assez pour me le payer.
Soit 1x1 = 2 / 2 x 2 = 4 / 4 x 4 / etc*/

function incrementer() {
    var prix = 50 * multi;
    if (score >= prix) {
        multi = multi * 2;
        score = score - prix;
        document.getElementById("multiplicateur").innerHTML = "Multiplicateur x" + multi;
        document.getElementById("prix").innerHTML = "Prix du multiplicateur de click  : " + 50 * multi;
        document.getElementById("score").innerHTML = score;
    }
    
    else {
        alert("Vous êtes en état de pauvreté, arrêtez de depenser tous vos poneys !");
    }
}

                    </code>
                </pre>
    </div>
    <a href="#">
        <i class="fa fa-chevron-left fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>
    <a href="#">
        <i class="fa fa-chevron-right fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
        </div>
        </body>

</html>