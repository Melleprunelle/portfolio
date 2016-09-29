<!DOCTYPE html>
<html lang="en">
<?php include 'intro-liens.php'; ?>

    <div class="container-fluid">
        <!-- NAVBAR -->
        <?php include 'nav.php'; ?>
            <header id="startchange" class="container-fluid header page">
                <h1>POMODORO</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti mollitia, aperiam ad, placeat at eaque sequi voluptatem tempore unde ipsum, atque, soluta quidem doloremque quia tempora! Facere corporis facilis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio tempora eum accusantium totam doloremque similique officia veritatis ipsa! Vitae illo tempore molestiae adipisci, quos quasi facere eaque blanditiis sequi.</p>
                <div class="separator-header2"></div>
            </header>
            <!-- PROJET -->
            <a href="https://melleprunelle.github.io/jquerypomodoro.github.io/"><img class="img-responsive col-md-8 col-md-offset-2" src="img/img8.png" alt="">
            </a>
            <pre class="col-md-offset-2 col-md-8">
                    <code class="col-md-10 col-md-offset-1 col-xs-10">                    
/* ==================== */
/* ======= HTML ======= */
/* ==================== */   
                                    
&#139;!DOCTYPE html&#155;
&#139;html&#155;

&#139;head&#155;
    &#139;meta charset="UTF-8"&#155;
    &#139;title id="time-title"&#155;25:00&#139;/title&#155;
    &#139;link rel="stylesheet" href="css/bootstrap.min.css"&#155;
    &#139;link rel="stylesheet" href="css/master.css"&#155;
    &#139;link rel="icon" type="image/png" href="img/timer.png" /&#155;
    &#139;script src="js/jquery.js"&#155;&#139;/script&#155;

&#139;/head&#155;

&#139;body&#155;
    &#139;section id="theme"&#155;
        &#139;div class="theme-degrade" id="pink" data-degrade="degrade-pink"&#155;&#139;/div&#155;
        &#139;div class="theme-degrade" id="red" data-degrade="degrade-red"&#155;&#139;/div&#155;
        &#139;div class="theme-degrade" id="green" data-degrade="degrade-green"&#155;&#139;/div&#155;
        &#139;div class="theme-degrade" id="orange" data-degrade="degrade-orange"&#155;&#139;/div&#155;
        &#139;div class="theme-degrade" id="brown" data-degrade="degrade-brown"&#155;&#139;/div&#155;
        &#139;div class="theme-degrade" id="cyan" data-degrade="degrade-cyan"&#155;&#139;/div&#155;
        &#139;div class="theme-degrade" id="black" data-degrade="degrade-black"&#155;&#139;/div&#155;
    &#139;/section&#155;
    
    &#139;div class="container-fluid"&#155;
        &#139;div id="controls"&#155;
            &#139;p id="time" class="time"&#155;25:00&#139;/p&#155;
            &#139;button type="button" id="play" class="btn btn-default btn-lg" onclick="lancerMinuteur()"&#155;
                &#139;span class="glyphicon glyphicon-play" aria-hidden="true"&#155;&#139;/span&#155;
            &#139;/button&#155;
            &#139;button type="button" id="pause" class="btn btn-default btn-lg" onclick="stop()"&#155;
                &#139;span class="glyphicon glyphicon-pause" aria-hidden="true"&#155;&#139;/span&#155;
            &#139;/button&#155;
            &#139;button type="button" id="stop" class="btn btn-default btn-lg" onclick="remiseZero()"&#155;
                &#139;span class="glyphicon glyphicon-stop" aria-hidden="true"&#155;&#139;/span&#155;
            &#139;/button&#155;
        &#139;/div&#155;

        &#139;form&#155;
            &#139;div class="form-group col-md-offset-4 col-md-4"&#155;
                &#139;label for="task"&#155;&#139;/label&#155;
                &#139;input type="text" id="task" class="form-control center-block" value="Votre tâche..."&#155;
                &#139;button type="button" class="btn btn-success center-block"&#155;Success&#139;/button&#155;
            &#139;/div&#155;
        &#139;/form&#155;

        &#139;h5 class="text-center col-md-12"&#155;TÂCHES TERMINÉES :&#139;/h5&#155;
        &#139;ul id="done" class="list-group center-block"&#155;

        &#139;/ul&#155;
    &#139;/div&#155;
&#139;/body&#155;
&#139;script src="js/script.js"&#155;&#139;/script&#155;

&#139;/html&#155;

                    
/* ==================== */
/* ======= CSS ======== */
/* ==================== */

          
body {
    background: radial-gradient(ellipse at center, rgba(255,173,217,1) 0%, rgba(212,0,39,1) 100%);
}

h1 {
    color: whitesmoke;
    text-shadow: 0px 2px 2px black;
}

h5 {
    margin-top: 20px;
    margin-bottom: 20px;
    color: whitesmoke;
    text-shadow: 0px 2px 2px black;
}

li {
    color: dimgrey;
    opacity: 0.8;
    border: none;
}

form div {
    display: flex;
}

.container {
    width: 400px;
    margin: 0 auto;
}

#controls {
    text-align: center;
    margin-top: 35px;
    ;
}

.time {
    font-weight: bold;
    margin-top: 20px;
    margin-bottom: 0px;
    color: whitesmoke;
    font-size: 20vh;
    text-shadow: 0px 3px 5px black;
    opacity: 0.9;
}

.btn-lg {
    background-color: whitesmoke;
    border: none;
    box-shadow: 0px 4px 5px black;
    opacity: 0.9;
}

.btn-lg:active {
    background-color: whitesmoke;
    border: none;
    box-shadow: 0px 1px 1px black;
}

.center-block {
    max-width: 40%;
}

.glyphicon {
    color: darkcyan;
}

.list-group-item {
    border: none;
    background-color: whitesmoke;
    text-decoration: line-through;
    max-width: 25%;
}

ul {
    height: 150px;
    overflow: auto;
    background-color: whitesmoke;
    box-shadow: 0px 4px 5px black;
    opacity: 0.8;
    border-radius: 3px;
}

li {
    max-width: 100%;
}

.list-group {
    padding-left:1px;
}

#task {
    border: none;
    opacity: 0.8;
    width: 250px;
    height: 30px;
    margin-top: 30px;
    margin-right: 0px;
    border-radius: 0%;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.btn-success {
    background-color: darkcyan;
    border: none;
    margin-top: 30px;
    margin-left: 0px;
    height: 30px;
    border-radius: 0%;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

section {
    display: flex;
    flex: auto;
}

/*============== THEMES =============*/

.theme-degrade {
    height: 10px;
    width: 10px;
    border-radius: 100%;
    margin: 10px;
    box-shadow: 0px 2px 2px black;
}

#pink {
    background: radial-gradient(ellipse at center, rgba(255,173,217,1) 0%, rgba(212,0,39,1) 100%);
}

.degrade-pink {
    background: radial-gradient(ellipse at center, rgba(255,173,217,1) 0%, rgba(212,0,39,1) 100%);
}

#red {
    background: radial-gradient(ellipse at center, rgba(255,120,152,1) 0%, rgba(109,0,25,1) 100%);
}

.degrade-red {
    background: radial-gradient(ellipse at center, rgba(255,120,152,1) 0%, rgba(109,0,25,1) 100%);
}

#green {
    background: radial-gradient(ellipse at center, rgba(219,237,116,1) 0%, rgba(95,110,10,1) 100%);
}

.degrade-green {
    background: radial-gradient(ellipse at center, rgba(219,237,116,1) 0%, rgba(95,110,10,1) 100%);
}

#black {
    background: radial-gradient(ellipse at center, rgba(140,140,140,1) 0%, rgba(19,19,19,1) 100%);;
}

.degrade-black {
     background: radial-gradient(ellipse at center, rgba(140,140,140,1) 0%, rgba(19,19,19,1) 100%);
}

#orange {
    background: radial-gradient(ellipse at center, rgba(250,194,130,1) 0%, rgba(255,94,0,1) 100%);
}

.degrade-orange {
     background: radial-gradient(ellipse at center, rgba(250,194,130,1) 0%, rgba(255,94,0,1) 100%);
}

#cyan {
    background: radial-gradient(ellipse at center, rgba(111,252,203,1) 0%, rgba(0,41,107,1) 100%);
}

.degrade-cyan {
     background: radial-gradient(ellipse at center, rgba(111,252,203,1) 0%, rgba(0,41,107,1) 100%);
}

#brown {
    background: radial-gradient(ellipse at center, rgba(241,231,103,1) 0%, rgba(87,58,12,1) 100%);
}

.degrade-brown {
     background: radial-gradient(ellipse at center, rgba(241,231,103,1) 0%, rgba(87,58,12,1) 100%);
}
                    

/* ==================== */
/* ======= JS= ======== */
/* ==================== */
                    

 //---------- Variables ----------

    var temps = 25;
    var modePause = false;
    var secInMin = 60;
    var minuteurMin;
    var minuteurSec;
    var stopper;
    var replay;
    var alarm = new Audio("mp3/gong.mp3");
    var nbPause = 0;

    //---------- Fonction démarrage du minuteur ----------

    $("#play").click(function lancerMinuteur() {
        if (!minuteurSec) {
            minuteurMin = temps;
            minuteurSec = 0;
            stopper = setInterval(decrementerSec, 1000);
        } else {
            stopper = setInterval(decrementerSec, 1000);
        }

        $("#play").prop("disabled", true);
        $("#pause").prop("disabled", false);
        $("#stop").prop("disabled", false);

    });

    function interface() {
        $("#time").html(minuteurMin + ":" + minuteurSec);
        $("#time-title").html(minuteurMin + ":" + minuteurSec);
        if (minuteurMin == 0 && minuteurSec == 0) {
            $("#time").html("5" + ":" + "00");
            $("#time-title").html("5" + ":" + "00");
        }
    }

    function decrementerSec() {
        if (minuteurSec == 0 && minuteurMin != 0) {
            minuteurSec = 59;
            minuteurMin--;
        } else if (minuteurMin == 0 && minuteurSec == 0) {  
            nbPause++;
            if (nbPause <= 4) {
                alarm.play();
                minuteurSec = 59;
                minuteurMin = 4;
                modePause = false;
            }
            else {
                alarm.play();
                minuteurSec = 59;
                minuteurMin = 19;
                modePause = true;
            }
        } else {
            minuteurSec--;
        }

        interface();
    }

    //---------- Fonction mettre sur pause ----------

    function stop() {
        if ($("#play").prop("disabled") == true) {
            replay = clearInterval(stopper);
            $("#play").prop("disabled", false);
            $("#pause").prop("disabled", true);
            $("#stop").prop("disabled", false);
        }
    }

    //---------- Fonction remise à zero ----------

    function remiseZero() {
        if ($("#play").prop("disabled") == false || true) {
            clearInterval(stopper);
            minuteurMin = temps;
            minuteurSec = 0;
            $("#time").html("25" + ":" + "00");
            $("#time-title").html("25" + ":" + "00");
            $("#play").prop("disabled", false);
            $("#pause").prop("disabled", false);
            $("#stop").prop("disabled", true);
        }
    }

    //---------- Tâche à accomplir ----------

    $('.btn-success').click(function () {
        $('#done').prepend("<li class='list-group-item'><s>" + $('#task').val() + "</s></li>");
        $('#task').val("");
    });

    //---------- Thèmes ----------

    $('.theme').click(function changeBodyColor() {
        var color = $(this).attr('data-color');
        $("body").css({
            "background-color": color,
            "transition-duration": "1s"
        });
    });

    $('.theme-degrade').click(function changeBodyColorDegrade() {
        var degrade = $(this).attr('data-degrade');
        $("body").attr("class","");
        $("body").addClass(degrade);
});

                    </code>
                </pre>
    </div>
    <a href="123veto.php">
        <i class="fa fa-chevron-left fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>
    <a href="quizz.php">
        <i class="fa fa-chevron-right fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
        </div>
        </body>

</html>