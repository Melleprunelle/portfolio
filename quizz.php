<!DOCTYPE html>
<html lang="en">
<?php include 'intro-liens.php'; ?>

    <div class="container-fluid">
        <!-- NAVBAR -->
        <?php include 'nav.php'; ?>
            <header id="startchange" class="container-fluid header page">
                <h1>QUIZZ JS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti mollitia, aperiam ad, placeat at eaque sequi voluptatem tempore unde ipsum, atque, soluta quidem doloremque quia tempora! Facere corporis facilis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio tempora eum accusantium totam doloremque similique officia veritatis ipsa! Vitae illo tempore molestiae adipisci, quos quasi facere eaque blanditiis sequi.</p>
                <div class="separator-header2"></div>
            </header>
            <!-- PROJET -->
            <a href="https://melleprunelle.github.io/js_quizz.github.io/"><img class="img-responsive col-md-8 col-md-offset-2" src="img/img5.png" alt="">
            </a>
            <pre class="col-md-offset-2 col-md-8">
                    <code class="col-md-10 col-md-offset-1 col-xs-10">                    
/* ==================== */
/* ======= HTML ======= */
/* ==================== */   
                                    
                    
&#139;!DOCTYPE html&#155;
&#139;html lang="fr"&#155;
&#139;head&#155;
    &#139;title&#155;Quizz&#139;/title&#155;
    &#139;meta charset="utf-8" author="Lise"&#155;
    &#139;!--Liens css--&#155;
    &#139;link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"&#155;
    &#139;link rel="stylesheet" type="text/css" href="css/style.css"&#155;
&#139;/head&#155;
&#139;body&#155;
&#139;div class="container-fluid"&#155;
&#139;h1 class="col-md-offset-2 col-md-5 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-5"&#155;Welcome my quizz&#139;/h3&#155;&#139;h1 id="score" class="col-md-2 col-xs-offset-2 col-xs-5 col-sm-2"&#155;0 / 10&#139;/h1&#155;
&#139;div class="separator col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;&#139;/div&#155;


    &#139;!--CSS des articles - 1 --&#155;
    &#139;article id="question1"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°1 : &#139;small class="text-uppercase"&#155;Au Moyen-Âge, comment appelait-on les villages fortifiés ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="faux reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="faux()"&#155;&#139;h4&#155;Tour&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="vrai reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="vrai()"&#155;&#139;h4&#155;Bastide&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="faux()"&#155;&#139;h4&#155;Château-fort&#139;/h4&#155;&#139;/div&#155;

        &#139;div id="sélection3" class="faux reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux()"&#155;&#139;h4&#155;Rempart&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-6 col-sm-3 col-sm-offset-6 col-xs-5 col-xs-offset-7" onclick="questionSuivante1()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 2 --&#155;
    &#139;article id="question2" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°2 : &#139;small class="text-uppercase"&#155;Dans quel film un couple en croisière va-t-il recueillir un naufragé qui va les terrifier ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="vrai1 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="vrai1()"&#155;&#139;h4&#155;Calme blanc&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux1 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux1()"&#155;&#139;h4&#155;Tempête en mer&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux1 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="faux1()"&#155;&#139;h4&#155;Le naufragé&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux1 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux1()"&#155;&#139;h4&#155;Les disparus&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente2()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante2()"&#155;Suivante&#139;/button&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 3 --&#155;
    &#139;article id="question3" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°3 : &#139;small class="text-uppercase"&#155;Quel acteur français avait le premier rôle dans le film de Luchino Visconti "Le Guépard" ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="faux2 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="faux2()"&#155;&#139;h4&#155;Jean-Paul Belmondo&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux2 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux2()"&#155;&#139;h4&#155;Claude Brasseur&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux2 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="faux2()"&#155;&#139;h4&#155;Jean Gabin&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="vrai2 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="vrai2()"&#155;&#139;h4&#155;Alain Delon&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente3()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante3()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 4 --&#155;
    &#139;article id="question4" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°4 : &#139;small class="text-uppercase"&#155;Quel film à succès a réuni sur les écrans Sean Connery et Christophe Lambert ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="vrai3 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="vrai3()"&#155;&#139;h4&#155;Highlander&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux3 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux3()"&#155;&#139;h4&#155;Greystoke&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux3 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="faux3()"&#155;&#139;h4&#155;Subway&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux3 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux3()"&#155;&#139;h4&#155;Mad Max&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente4()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante4()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 5 --&#155;
    &#139;article id="question5" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°5 : &#139;small class="text-uppercase"&#155;Comment appelle-t-on le fruit du plaqueminier ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="faux4 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="faux4()"&#155;&#139;h4&#155;Kakou&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux4 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux4()"&#155;&#139;h4&#155;Kacha&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="vrai4 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="vrai4()"&#155;&#139;h4&#155;Kaki&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux4 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux4()"&#155;&#139;h4&#155;Kali&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente5()"()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante5()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 6 --&#155;
    &#139;article id="question6" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°6 : &#139;small class="text-uppercase"&#155;Qui était le compagnon de saint Paul ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="faux5 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="faux5()"&#155;&#139;h4&#155;Saint-Matthieu&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux5 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux5()"&#155;&#139;h4&#155;Saint-Jean&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="vrai5 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="vrai5()"&#155;&#139;h4&#155;Saint-Luc&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux5 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux5()"&#155;&#139;h4&#155;Saint-Marc&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente6()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante6()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 7 --&#155;
    &#139;article id="question7" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°7 : &#139;small class="text-uppercase"&#155;Dans quel film John Travolta incarne-t-il un ange tombé du ciel ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="vrai6 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="vrai6()"&#155;&#139;h4&#155;Michael&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux6 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux6()"&#155;&#139;h4&#155;Johnny&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux6 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="faux6()"&#155;&#139;h4&#155;Jerry&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux6 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux6()"&#155;&#139;h4&#155;Sam&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente7()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante7()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 8 --&#155;
    &#139;article id="question8" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°8 : &#139;small class="text-uppercase"&#155;Quel titre de noblesse est immédiatement inférieur à celui de comte ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="faux7 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="faux7()"&#155;&#139;h4&#155;Archiduc&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux7 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux7()"&#155;&#139;h4&#155;Marquis&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="vrai7 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="vrai7()"&#155;&#139;h4&#155;Vicomte&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux7 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux7()"&#155;&#139;h4&#155;Duc&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5"onclick="questionPrecedente8()"()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante8()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 9 --&#155;
    &#139;article id="question9" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°9 : &#139;small class="text-uppercase"&#155;De quelle série de six films un champion de boxe est-il la vedette ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="faux8 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="faux8()"&#155;&#139;h4&#155;Ritchie&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="vrai8 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="vrai8()"&#155;&#139;h4&#155;Rocky&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux8 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="faux8()"&#155;&#139;h4&#155;Rambo&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux8 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux8()"&#155;&#139;h4&#155;Randy&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente9()"&#155;Précédente&#139;/button&#155;
        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2" onclick="questionSuivante9()"&#155;Suivante&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;


    &#139;!--CSS des articles - 10 --&#155;
    &#139;article id="question10" class="display-article"&#155;
        &#139;h3 class="text-uppercase col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8"&#155;Question n°10 : &#139;small class="text-uppercase"&#155;Quelle est la capitale de la Nouvelle-Zélande ?&#139;/small&#155;&#139;/h3&#155;

    &#139;div class="col-md-offset-2 col-md-8 col-xs-12 col-sm-offset-2 col-sm-8"&#155;

        &#139;div class="faux9 reponse text-center col-md-2 col-xs-12 col-sm-5" onclick="faux9()"&#155;&#139;h4&#155;Dublin&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux9 reponse text-center col-md-offset-1 col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux9()"&#155;&#139;h4&#155;Auckland&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="vrai9 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-5" onclick="vrai9()"&#155;&#139;h4&#155;Wellington&#139;/h4&#155;&#139;/div&#155;

        &#139;div class="faux9 reponse text-center col-md-offset-1 col-md-2 col-xs-12 col-sm-offset-1 col-sm-5" onclick="faux9()"&#155;&#139;h4&#155;Sydney&#139;/h4&#155;&#139;/div&#155;

        &#139;button type="button" class="btn btn-primary col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5" onclick="questionPrecedente10()"&#155;Précédente&#139;/button&#155;

    &#139;/div&#155;
    &#139;/article&#155;
&#139;/section&#155;

&#139;/div&#155;
&#139;/body&#155;

&#139;!--Scrip--&#155;
    &#139;script src="js/jquery.js"&#155;&#139;/script&#155;
    &#139;script src="js/bootstrap.js"&#155;&#139;/script&#155;
    &#139;script src="js/reponse.js"&#155;&#139;/script&#155;
    &#139;script src="js/changementquestion.js"&#155;&#139;/script&#155;

&#139;/html&#155;

                    
/* ==================== */
/* ======= CSS ======== */
/* ==================== */

 body {
	background-image: url(../img/body.png);
}
	
h1, h3 {
	margin-top: 75px;
	color: #0269C2;
	padding: 0px !important;

}

#score {
    margin-top: 75px;
}

h4 {
	color: #0269C2;
	margin-top: 75px;
	transform: translateY(-50%);
}

section {
	height: 50px;
}

button {
	margin-bottom: 50px !important;
}

.reponse {
     height: 150px;
     margin-top: 30px;
     margin-bottom: 50px;
     border: 1px solid rgba(2, 105, 194, 0.4);
     border-radius: 5%;
     background-color: white;
}

.reponse:hover {
	background-color: rgba(2, 105, 194, 0.1);
	cursor: pointer;
}

.separator {
	border-top: 1px solid #333333;
	margin-top: 10px;
}

.display-article {
	display: none;
}
                    
                    
/* ==================== */
/* ======= JS ========= */
/* ==================== */
                    
    /*  ==== Je suis désolée, je sais que mon code n'est pas optimal,
    je n'ai pas encore saisie le principe des paramètres :S :S* ==== */

	score = 0;

	//------------------------------------------------------
	//Question 1
	//Pour les mauvaises réponse.
	function faux() {
	    var erreur = document.getElementsByClassName("faux");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai() {
	    var reponse = document.getElementsByClassName("vrai");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
        
	}



	//------------------------------------------------------
	//Question 2
	//Pour les mauvaises réponse.
	function faux1() {
	    var erreur = document.getElementsByClassName("faux1");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai1");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai1() {
	    var reponse = document.getElementsByClassName("vrai1");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}



	//------------------------------------------------------
	//Question 3
	//Pour les mauvaises réponse.
	function faux2() {
	    var erreur = document.getElementsByClassName("faux2");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai2");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai2() {
	    var reponse = document.getElementsByClassName("vrai2");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}



	//------------------------------------------------------
	//Question 4
	//Pour les mauvaises réponse.
	function faux3() {
	    var erreur = document.getElementsByClassName("faux3");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai3");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai3() {
	    var reponse = document.getElementsByClassName("vrai3");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}



	//------------------------------------------------------
	//Question 5
	//Pour les mauvaises réponse.
	function faux4() {
	    var erreur = document.getElementsByClassName("faux4");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai4");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai4() {
	    var reponse = document.getElementsByClassName("vrai4");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}



	//------------------------------------------------------
	//Question 6
	//Pour les mauvaises réponse.
	function faux5() {
	    var erreur = document.getElementsByClassName("faux5");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai5");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai5() {
	    var reponse = document.getElementsByClassName("vrai5");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}



	//------------------------------------------------------
	//Question 7
	//Pour les mauvaises réponse.
	function faux6() {
	    var erreur = document.getElementsByClassName("faux6");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai6");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai6() {
	    var reponse = document.getElementsByClassName("vrai6");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}



	//------------------------------------------------------
	//Question 8
	//Pour les mauvaises réponse.
	function faux7() {
	    var erreur = document.getElementsByClassName("faux7");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai7");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai7() {
	    var reponse = document.getElementsByClassName("vrai7");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}




	//Question 9
	//Pour les mauvaises réponse.
	function faux8() {
	    var erreur = document.getElementsByClassName("faux8");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai8");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	    }
	}

	//Pour la bonne réponse.
	function vrai8() {
	    var reponse = document.getElementsByClassName("vrai8");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
        document.getElementById("score").innerHTML = score + " / 10";
	}




	//Question 10
	//Pour les mauvaises réponse.
	function faux9() {
	    var erreur = document.getElementsByClassName("faux9");
	    var i;
	    for (i = 0; i < erreur.length; i++) {
	        //changement de couleur en rouge quand la réponse est fausse.
	        erreur[i].style.backgroundColor = "rgba(255,184,184,0.5)";
	        //devoile la bonne réponse en vert.
	        var reponse = document.getElementsByClassName("vrai9");
	        reponse[0].style.backgroundColor = "rgba(51,255,51,0.4)";
	        //permet une transition plus douce.
	        erreur[i].style.transitionDuration = "2s";
	        reponse[0].style.transitionDuration = "2s";
	        document.getElementById("score").innerHTML = score + " / 10";
	    }
	}

	//Pour la bonne réponse.
	function vrai9() {
	    var reponse = document.getElementsByClassName("vrai9");
	    //changement de couleur en vert quand la réponse est vrai.
	    reponse[0].style.backgroundColor = "rgba(51,255,51,0.3)";
	    //permet une transition plus douce.
	    reponse[0].style.transitionDuration = "2s";
	    score++;
	    document.getElementById("score").innerHTML = score + " / 10";
	}
	
	               
//Afficher question suivante.

	function questionSuivante1() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="block";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante2() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="block";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante3() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="block";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante4() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="block";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante5() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="block";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante6() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="block";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante7() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="block";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante8() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="block";
		document.getElementById("question10").style.display="none";
	}

	function questionSuivante9() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="block";
	}



	//------------------------------------------------------
	//Afficher question précédente.
	function questionPrecedente2() {
		document.getElementById("question1").style.display="block";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente3() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="block";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente4() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="block";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente5() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="block";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente6() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="block";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente7() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="block";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente8() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="block";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente9() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="block";
		document.getElementById("question9").style.display="none";
		document.getElementById("question10").style.display="none";
	}

	function questionPrecedente10() {
		document.getElementById("question1").style.display="none";
		document.getElementById("question2").style.display="none";
		document.getElementById("question3").style.display="none";
		document.getElementById("question4").style.display="none";
		document.getElementById("question5").style.display="none";
		document.getElementById("question6").style.display="none";
		document.getElementById("question7").style.display="none";
		document.getElementById("question8").style.display="none";
		document.getElementById("question9").style.display="block";
		document.getElementById("question10").style.display="none";
	}                    


                    </code>
                </pre>
    </div>
    <a href="pomodoro.php">
        <i class="fa fa-chevron-left fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>
    <a href="anagramme.php">
        <i class="fa fa-chevron-right fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
        </div>
        </body>

</html>