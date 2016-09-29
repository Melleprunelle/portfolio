<!DOCTYPE html>
<html lang="en">
<?php include 'intro-liens.php'; ?>

    <div class="container-fluid">
        <!-- NAVBAR -->
        <?php include 'nav.php'; ?>
            <header id="startchange" class="container-fluid header page">
                <h1>123 VETO</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti mollitia, aperiam ad, placeat at eaque sequi voluptatem tempore unde ipsum, atque, soluta quidem doloremque quia tempora! Facere corporis facilis veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio tempora eum accusantium totam doloremque similique officia veritatis ipsa! Vitae illo tempore molestiae adipisci, quos quasi facere eaque blanditiis sequi.</p>
                <div class="separator-header2"></div>
            </header>
            <!-- PROJET -->
            <!--<a href="#">--><img class="img-responsive col-md-8 col-md-offset-2" src="img/img9.png" alt="">
            <!--</a>-->
            <pre class="col-md-offset-2 col-md-8">
                    <code class="col-md-10 col-md-offset-1 col-xs-10">                    
/* ==================== */
/* ======= HTML ======= */
/* ==================== */   
                                    
&#139;?php //fix bug header ?&#155;

    &#139;?php
/*
Template Name: conseils
*/
?&#155;


        &#139;!-- pour insérer le header --&#155;
        &#139;?php get_header(); ?&#155;

            &#139;div class="page conseils"&#155;
                &#139;?php get_sidebar(); ?&#155;

                    &#139;div class="content"&#155;
                       &#139;h2 class="bandeau bandeau-mt0"&#155;CONSEILS&#139;/h2&#155;
                       
                        &#139;section class="formeindex"&#155;

                            &#139;!-- ICONES --&#155;
                            &#139;div class="icone-generique"&#155;
                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_dent.php"); ?&#155;
                                    &#139;/div&#155;
                                    &#139;a href="#dents"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('dents')"&#155;Dents&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;

                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_eyecat.php"); ?&#155;
																		&#139;/div&#155;
                                    &#139;a href="#yeux"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('yeux')"&#155;Yeux / Oreilles&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;

                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_pelage.php"); ?&#155;
																		&#139;/div&#155;
                                    &#139;a href="#pelage"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('pelage')"&#155;Pelage&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;

                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_parasite.php"); ?&#155;
																		&#139;/div&#155;
                                    &#139;a href="#parasites"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('parasites')"&#155;Parasites&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;
                            &#139;/div&#155;

                            &#139;div class="icone-generique"&#155;
                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_vaccin_chien.php"); ?&#155;
																		&#139;/div&#155;
                                    &#139;a href="#vaccinChien"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('vaccinChien')"&#155;Vaccin Chien&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;

                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_vaccin_chat.php"); ?&#155;
																		&#139;/div&#155;
                                    &#139;a href="#vaccinChat"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('vaccinChat')"&#155;Vaccin Chat&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;

                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_barcode.php"); ?&#155;
																		&#139;/div&#155;
                                    &#139;a href="#identification"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('identification')"&#155;Identification&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;

                                &#139;div class="center-generique"&#155;
                                    &#139;div class="numero animation anim"&#155;
																		&#139;?php include("img/svg/conseil_svg/conseil_education.php"); ?&#155;
																		&#139;/div&#155;
                                    &#139;a href="#education"&#155;&#139;button class="bouton-generique" onclick="fiche_conseil('education')"&#155;Education&#139;/button&#155;&#139;/a&#155;
                                &#139;/div&#155;
                            &#139;/div&#155;
                        &#139;/section&#155;



                        &#139;section&#155;
                            &#139;!--AFFICHAGE DES ARTICLES--&#155;

                            &#139;!-- articles dents --&#155;
                            &#139;div class="uniform-article" id="dents"&#155;
                                &#139;?php query_posts('category_name=dents'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;

                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;

                            &#139;!-- articles yeux oreilles --&#155;
                            &#139;div class="uniform-article" id="yeux"&#155;
                                &#139;?php query_posts('category_name=yeux'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;

                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;

                            &#139;!-- articles pelage --&#155;
                            &#139;div class="uniform-article" id="pelage"&#155;
                                &#139;?php query_posts('category_name=pelage'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;

                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;

                            &#139;!-- articles parasites --&#155;
                            &#139;div class="uniform-article" id="parasites"&#155;
                                &#139;?php query_posts('category_name=parasites'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;

                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;

                            &#139;!-- articles vaccin chien --&#155;
                            &#139;div class="uniform-article" id="vaccinChien"&#155;
                                &#139;?php query_posts('category_name=vaccinChien'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;

                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;

                            &#139;!-- articles vaccin chat --&#155;
                            &#139;div class="uniform-article" id="vaccinChat"&#155;
                                &#139;?php query_posts('category_name=vaccinChat'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;

                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;

                            &#139;!-- articles identification --&#155;
                            &#139;div class="uniform-article" id="identification"&#155;
                                &#139;?php query_posts('category_name=identification'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;

                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;

                            &#139;!-- articles education --&#155;
                            &#139;div class="uniform-article" id="education"&#155;
                                &#139;?php query_posts('category_name=education'); ?&#155;
                                    &#139;?php if(have_posts()) : ?&#155;
                                        &#139;?php while(have_posts()) : the_post();?&#155;


                                            &#139;h2 title="&#139;?php the_title(); ?&#155;"&#155;&#139;?php the_title(); ?&#155;&#139;/h2&#155;
                                            &#139;div class="index-separator"&#155;&#139;/div&#155;
                                            &#139;div class="post" id="post-&#139;?php the_ID(); ?&#155;"&#155;
                                                &#139;div class="post_content alignement_article"&#155;
                                                    &#139;div class="imgPage"&#155;
                                                        &#139;?php the_post_thumbnail(array(250,250));?&#155;
                                                    &#139;/div&#155;
                                                    &#139;div class="contenu_article"&#155;
                                                        &#139;?php the_content(); ?&#155;
                                                    &#139;/div&#155;
                                                &#139;/div&#155;
                                            &#139;/div&#155;
                                            &#139;?php endwhile; ?&#155;
                                                &#139;?php endif; ?&#155;
                            &#139;/div&#155;
                        &#139;/section&#155;
                    &#139;/div&#155;
            &#139;/div&#155;
            
            &#139;script&#155;

&#139;/script&#155;



            &#139;!-- pour insérer le footer --&#155;
            &#139;?php get_footer(); ?&#155;

                    
/* ==================== */
/* ======== CSS ======= */
/* ==================== */

body:active {
    transform: rotate(180deg);
    transition: 2s;
}


/*========== GENERAL =========*/

.flexbox {
    display: flex;
    justify-content: space-around;
}

.flexwrap {
    display: flex;
    flex-wrap: wrap;
}


/* Le bleu : #263461 SVG DE L'ANCIEN BLEU 263461 
   Le orange : #F58900 */

html,
body {
    font-family: 'Open Sans', sans-serif;
}

body {
    margin: 0;
    padding: 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
}

h1 {
    margin: 0;
    padding: 0;
    font-size: 1.5em;
    text-transform: uppercase;
    color: #fff;
}

h2 {
    font-size: 2em;
}

h2.bandeau {
    height: 30px;
    line-height: 30px;
    /* margin-top: 60px;
    margin-bottom: 60px;*/
    color: #fff;
    font-weight: 700;
    background-color: #263461;
}

h2.bandeau-mt0 {
    margin-top: 0;
}

.index-separator {
    display: block;
    margin: 20px auto;
    width: 30%;
    height: 1px;
    background-color: #263461;
}

i {
    color: #F58900;
    text-align: center;
    margin: 0 auto;
    padding-bottom: 10px;
}

.bouton-generique {
    width: 100%;
    height: 40px;
    background-color: white;
    border: 1px solid darkgrey;
    font-family: "Open Sans", sans-serif;
    color: #F58900;
    cursor: pointer;
}

#section-generique {
    display: inline-flex;
    margin: 0 auto;
}

.vente-index {
    margin-bottom: 50px;
}

.button,
button,
a {
    cursor: pointer;
}


/*========== HEADER ==========*/

#header {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 400px;
    margin: 0;
    padding: 0;
    background-color: #263461;
    background-image: url(img/facade.JPG);
    background-size: cover;
    background-position: center center;
}

.header-corp {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 30px;
    background-color: rgba(4, 52, 89, 0.6);
}

#header h1 a {
    font-size: 2em;
    color: #fff;
    text-decoration: none;
}

#header h2 {
    border-bottom: 2px solid #fff;
    color: #eee;
    margin: 20px 0 0 0;
    padding: 0;
    font-size: 1.5em;
    font-weight: 700;
}

h2#description {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 2em;
    text-align: left;
}

h2.names {
    text-transform: capitalize;
}

#header p.horaires {
    width: 700px;
    margin: 0;
    color: #fff;
    font-size: 1em;
    font-weight: 700;
    line-height: 30px;
}

#header p.horaires .orange {
    color: #FFC731;
}

.logo-img {
    width: 150px;
    height: 150px;
    margin: 0 27px 0 0;
    background-image: url(img/logo-veto.svg);
    background-size: 220%;
    background-position: center center;
}

.info {}


/*======== NAVIGATION ========*/

#menu-deroulant {
    display: none;
}

.menu-top-container {
    height: 50px;
    border-bottom: 1px solid #263461;
}

.menuNav {
    display: flex;
    flex-direction: row;
    border-bottom: 1px solid #263461;
    justify-content: space-between;
    height: 50px;
}

.menu-top-container {
    height: 100%;
}

.menu-top-container ul {
    text-align: center;
    list-style: none;
    margin: 0;
}

.menu-top-container ul li {
    display: inline;
}

.menu-top-container ul li a {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    line-height: 50px;
    text-transform: uppercase;
    color: #263461;
    text-decoration: none;
    transition: .2s;
}

.menu-top-container ul li:hover a,
.current_page_item a {
    background-color: #263461;
    color: #fff!important;
    transition: .2s;
}

.site-logo {
    width: 120px;
    height: 50px;
    text-decoration: none;
    color: #263461;
    text-align: right;
    display: inline-block;
    background-image: url(img/logo-veto2.svg);
    background-size: contain;
    background-repeat: no-repeat;
}

.raisonSociale {
    padding-left: 27%;
    padding-top: 15px;
}

.raisonSociale:hover {
    color: white;
}

.linkAccueil {
    text-decoration: none;
    color: #263461;
    text-align: center;
}

.menuNav .fa {
    font-size: 1.5em;
    color: #263461;
    text-decoration: none;
    transition: .2s;
}

.icones {
    padding: 0 25px;
    height: 50px;
    line-height: 50px;
}

.menuNav .fa:hover {
    color: #F58900;
    transition: .2s;
}


/*========== SIDEBAR =========*/

.sidebar {
    background-image: url(img/aside-fond.png);
    width: 25%;
    color: #263461;
    text-transform: capitalize;
    font-size: 0.8em;
}

.sidebar h2 {
    font-size: 1.8em;
    padding-bottom: 0px;
    margin-top: 0px;
    margin-bottom: 10px;
}

.sidebar ul {
    text-decoration: none;
    list-style: none;
    text-align: center;
    padding: 15px;
}

.aside-separator {
    width: 80%;
    height: 1px;
    background-color: #abc;
    margin: 20px auto;
}

.sidebar .post_content img {
    width: 100%;
    height: auto;
}

.normal-button {
    margin-top: 15px;
    margin-bottom: 0px;
    background-color: blue;
    border: 0;
    width: 100%;
    height: 60px;
    background-color: #263461;
    font-family: "Open Sans", sans-serif;
    text-transform: capitalize;
    color: white;
    transition: .15s;
}

.normal-button:hover {
    background-color: #F58900;
    cursor: pointer;
    transition: .15s;
}

.sidebar .read-more {
    background: 0;
    border: 0;
    /*display: block;*/
    margin: 15px auto;
}

.sidebar .read-more {
    color: #263461;
    transition: .15s;
}

.sidebar .read-more:hover {
    color: #F58900;
    cursor: pointer;
    transition: .15s;
}

#priseRDV {
    width: 20%;
    height: 60px;
    border-radius: 0%;
    font-size: 20px;
    left: 0px;
    text-transform: uppercase;
    padding-top: 5px;
    padding-bottom: 5px;
    background-color: #F58900;
    border: 0px solid white;
    font-family: "Open Sans", sans-serif;
    color: white;
    position: absolute;
    cursor: pointer;
    z-index: 99;
}

#priseRDV p {
    font-size: 0.7em;
    text-transform: lowercase;
    margin-top: 0px;
    padding-bottom: 5px;
}

#birs_booking_box ul {
    list-style-type: none;
}

.birs_form_field.birs_appointment_location {
    display: none;
}

#content {
    border: 1px solid #abc;
    background-color: rgba(100, 200, 155, 0.1);
    padding: 10px;
}

#content h2 {
    padding-top: 10px;
    font-size: 1.5em;
}

#content a {
    color: #263461;
    font-size: 0.8em;
    text-decoration: none;
    text-transform: uppercase;
}

em {
    color: #F58900;
    font-weight: 600;
}

.sidebar .fa-map {
    padding: 3px;
}

.sidebar .fa-map:hover {
    color: #263461;
    transition: .2s;
}


/*========== EQUIPE ==========*/

.formeindex,
h2 {
    margin-bottom: 0px;
    color: #263461;
    text-align: center;
    font-family: "Open Sans", sans-serif;
    text-transform: uppercase;
    padding: 15px;
    font-weight: 500;
    font-size: 20px;
}

.formeindex p {
    font-size: 0.7em;
    text-align: center;
    background-color: white;
    padding-left: 15%;
    padding-right: 15%;
    padding: 20px;
    margin-top: 0px;
    opacity: 0.8;
}


/* --------- THE TEAM --------- */

#imgPage {
    margin-left: 10px;
}

#bandeau_presentation {
    margin-bottom: 20px;
}

.team-member {
    padding: 0 20px;
}

.docteurs {
    padding: 20px 0 0 0;
    display: flex;
    justify-content: space-around;
    margin-right: 10px;
    color: #333;
}

.docteurs h3 {
    font-size: 1.5em;
}

.docteurs p {
    font-size: .8em;
    cursor: default;
    padding-left: 15px;
    width: 240px;
}


/* ON GARDE L'ANCIEN CODE AVEC LE HOVER ON SAIT JAMAIS !!!! MERCI ! ;)
.docteur {
    width: 400px;
    height: 400px;
    margin: 20px 20px 0 20px;
    background-size: cover;
    background-repeat: no-repeat;
    cursor: default;
}

.docteur h3 {
    font-size: 2em;
    color: #fff;
}

.docteur h4 {
    width: 75%;
    text-align: center;
    font-size: 18px;
    color: #fff;
}

.docteur:first-child {
    margin-right: 0;
}

#docteur1 {
    background-image: url(img/dr-aurelie.jpg);
}

#docteur2 {
    background-image: url(img/dr-eric.jpg);
}

.docteur-present p {
    width: 90%;
    text-align: center;
    color: #fff;
    cursor: default;
}

.docteur .docteur-present {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    opacity: 0;
    transition: .3s;
}

.docteur:hover .docteur-present {
    background-color: #263461;
    opacity: .9;
    transition: .3s;
} [TEAM] ON GARDE L'ANCIEN CODE AVEC LE HOVER ON SAIT JAMAIS !!!! MERCI ! ;) */


/*========= SAVOIR-FAIRE =====*/

#bloc-medium-savoirfaire {
    margin: 100px 50px 0 50px;
    display: flex;
    height: 240px;
}

.bloc-small-savoirfaire {
    margin: 10px;
    padding: 0 20px;
    text-align: center;
    background-color: whitesmoke;
}

.bloc-small-savoirfaire p {
    text-align: center;
    font-size: .9em;
    overflow-y: auto;
    color: #222;
}

.bloc-small-savoirfaire a,
.bloc-small-savoirfaire a i {
    margin-top: 20px;
    text-transform: uppercase;
    text-decoration: none;
    color: #263461;
    font-size: .8em;
}

.bloc-small-savoirfaire a:hover,
.bloc-small-savoirfaire a:hover i {
    color: #F58900;
}

.fa-sf {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100px;
    height: 100px;
    margin: -50px auto 0 auto;
    font-size: 6em;
    text-align: center;
    border-radius: 200px;
    border: 2px solid #263461;
    background-color: #fff;
    transition: .4s;
    color: #263461;
}

.fa-sf:hover {
    color: #fff;
    background-color: #263461;
    transition: .4s;
    cursor: pointer;
}


/*========= CAROUSEL =========*/

/*modification du titre dans le nouveau carousel*/

.su-slider-slide-title {
    height: 60px;
    background-color: blue !important;
}

.su-carousel .su-carousel-next {
    background-color: blue !important;
    border-radius: 0 !important;
}

h2.bandeau.bandeau-carousel {
    margin-bottom: 0;
}


/*.carousel-wp {
    height: 450px;
    padding: 0 !important;
}

.carousel-wp .su-carousel-slides .su-carousel-slide swiper-slide-duplicate > a {
    padding: 0;
}

.su-carousel .su-carousel-slide a {
    padding: 0 !imporant;
}

.su-carousel-responsive-yes .su-carousel-slide > a,
.su-carousel-responsive-yes .su-carousel-slide > img,
.su-carousel-responsive-yes .su-carousel-slide > a > img {
    border: 0;
    border-radius: 0;
    padding: 0;
}

.su-carousel-prev {}

#bloc-carousel .slides {
    padding-left: 0;
}

#bloc-carousel .slide-51 {
    width: 100%;
}

.carousel {
    display: block;
    position: relative;
    margin: -60px auto 50px auto;
    width: 100%;
    height: 450px;
    overflow: hidden;
}

.carousel-img {
    width: 100%;
    height: 450px;
    background-image: url(img/caroussel/Espace_Vente.JPG);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    transition: .4s;
    cursor: pointer;
}

.carousel h2 {
    width: 25%;
    position: absolute;
    top: 0;
    left: 0;
    margin: 30px 0 0 0;
    padding: 10px 50px 10px 10px;
    color: #fff;
    font-size: 2em;
    font-weight: 700;
    background-color: #263461;
    box-shadow: 0 0 15px #111;
    z-index: 2;
}

.carousel p {
    position: absolute;
    bottom: 0;
    right: 0;
    width: auto;
    height: 40px;
    text-align: right;
    line-height: 40px;
    margin: 0 0 50px 40px;
    padding: 0 20px 0 60px;
    color: #eee;
    font-weight: 700;
    background-color: rgba(0, 0, 0, .5);
    z-index: 2;
}

#bloc-carousel ul {
    bottom: 0;
    left: 25%;
    right: 25%;
    margin: 0px auto 10px auto;
    list-style: none;
    text-align: center;
}

#bloc-carousel ul li {
    display: inline-block;
    font-size: 0;
    width: 15px;
    margin: 0 2px;
    border: 0;
    border-radius: 60px;
    background-color: #EDEDED;
    box-shadow: 0 0 5px #444;
}

#bloc-carousel ul li:hover {
    background-color: #F58900;
}

#bloc-carousel button {
    top: 0;
    width: 200px;
    height: 100%;
    border: 0;
    cursor: pointer;
    transition: .5s;
    z-index: 10;
    color: chartreuse;
}

.bloc-carousel button:hover {
    transition: .5s;
}*/

.left-button-carou {
    left: 0;
    padding-right: 50px;
    opacity: .85;
    background: -moz-linear-gradient(left, rgba(237, 237, 237, 1) 0%, rgba(237, 237, 237, 1) 21%, rgba(237, 237, 237, 0) 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, rgba(237, 237, 237, 1) 0%, rgba(237, 237, 237, 1) 21%, rgba(237, 237, 237, 0) 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, rgba(237, 237, 237, 1) 0%, rgba(237, 237, 237, 1) 21%, rgba(237, 237, 237, 0) 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#00ededed', GradientType=1);
    /* IE6-9 */
}

#left-button-carou:hover {
    opacity: 1;
}

#right-button-carou {
    right: 0;
    padding-left: 50px;
    opacity: .85;
    background: -moz-linear-gradient(left, rgba(237, 237, 237, 0) 0%, rgba(237, 237, 237, 1) 79%, rgba(237, 237, 237, 1) 100%);
    /* FF3.6-15 */
    background: -webkit-linear-gradient(left, rgba(237, 237, 237, 0) 0%, rgba(237, 237, 237, 1) 79%, rgba(237, 237, 237, 1) 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, rgba(237, 237, 237, 0) 0%, rgba(237, 237, 237, 1) 79%, rgba(237, 237, 237, 1) 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00ededed', endColorstr='#ededed', GradientType=1);
    /* IE6-9 */
}

#right-button-carou:hover {
    opacity: 1;
}


/*#bloc-carousel button:hover {
    transition: .5s;
}*/


/*#left-button-carou {
/*    left: 0;
/*    padding-right: 50px;
/*    opacity: .85;
/*    background: -moz-linear-gradient(left, rgba(237, 237, 237, 1) 0%, rgba(237, 237, 237, 1) 21%, rgba(237, 237, 237, 0) 100%);
/*    /* FF3.6-15 */


/*    background: -webkit-linear-gradient(left, rgba(237, 237, 237, 1) 0%, rgba(237, 237, 237, 1) 21%, rgba(237, 237, 237, 0) 100%);
/*    /* Chrome10-25,Safari5.1-6 */


/*    background: linear-gradient(to right, rgba(237, 237, 237, 1) 0%, rgba(237, 237, 237, 1) 21%, rgba(237, 237, 237, 0) 100%);
/*    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */


/*    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#00ededed', GradientType=1);
/*    /* IE6-9 */


/*}
/*
/*#left-button-carou:hover {
/*    opacity: 1;
/*}
/*
/*#right-button-carou {
/*    right: 0;
/*    padding-left: 50px;
/*    opacity: .85;
/*    background: -moz-linear-gradient(left, rgba(237, 237, 237, 0) 0%, rgba(237, 237, 237, 1) 79%, rgba(237, 237, 237, 1) 100%);
/*    /* FF3.6-15 */


/*    background: -webkit-linear-gradient(left, rgba(237, 237, 237, 0) 0%, rgba(237, 237, 237, 1) 79%, rgba(237, 237, 237, 1) 100%);
/*    /* Chrome10-25,Safari5.1-6 */


/*    background: linear-gradient(to right, rgba(237, 237, 237, 0) 0%, rgba(237, 237, 237, 1) 79%, rgba(237, 237, 237, 1) 100%);
/*    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */


/*    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00ededed', endColorstr='#ededed', GradientType=1);
/*    /* IE6-9 */


/*}
/*
/*#right-button-carou:hover {
/*    opacity: 1;
/*}


/*========= PRESTATION / CONSEILS =======*/

/*.bloc {
    float: left;
    text-align: center;
}*/


#Capa_1 {
    padding-bottom: 10px;
    width: 60px;
    height: 60px;
}

#Capa_2 {
    width: 60px;
    height: 60px;
}

.exception-vente {
    /* margin-bottom: -25px;*/
    padding-bottom: 10px;
    width: 60px;
    height: 60px;
}

.btnPre {
    height: 40px;
    background-color: white;
    border: 1px solid darkgrey;
    font-family: "Open Sans", sans-serif;
    cursor: pointer;
}

.btnPre a {
    color: #F58900;
    text-decoration: none;
}


/*========= PAGE =============*/

.center-generique {
    width: 147px;
    text-align: center;
    padding: 10px;
    display: inline-block;
}

.icone-generique {
    width: 85%;
    text-align: center;
    /*display: block;
    margin: 0 auto;*/
    margin-top: 25px;
    display: flex;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
}

.uniform-article {
    width: 85%;
    margin: auto;
}

.uniforme-article h2 {
    margin-top: 20px;
    margin-bottom: 0px;
    color: #263461;
    text-align: center;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
    text-transform: uppercase;
    padding: 15px;
    font-weight: 500;
    font-size: 1.3em;
}

.alignement_article {
    display: inline-flex;
    margin-top: 20px;
}

.imgPage img {
    margin-top: 0px;
    border-radius: 100%;
    height: 200px;
    width: 200px;
}

.contenu_article p {
    padding-left: 30px;
    font-size: 15px;
    color: #222;
}

#consultation,
#dents,
#medicament {
    display: block;
}

#imagerie,
#analyse,
#chirurgie,
#hospitalisation,
#nac,
#yeux,
#pelage,
#parasites,
#vaccinChien,
#vaccinChat,
#identification,
#education,
#alimentation,
#index {
    display: none;
}

.prestation a , .conseils a {
    transition: 4s;
}


/*========== VENTE ===========*/

.vente {
    text-align: left;
    width: 90%;
    display: block;
    margin: 0 auto;
    margin-bottom: 75px;
    margin-top: 20px;
    ;
}

.vente svg {
    margin-bottom: -25px;
    padding-left: 25%;
    padding-right: 20px;
    padding-top: 20px;
    cursor: pointer;
}

.icone-vente {
    width: 50px;
    height: 50px;
}

.vente section {
    display: block;
}

.separation {
    border-bottom: 1px solid #F58900;
}

.vente div {
    margin: 0 auto;
}

.vente i {
    padding: 20px;
    cursor: pointer;
    padding-left: 25%;
}

.vente h3 {
    display: inline-block;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-size: 1em;
    cursor: pointer;
    padding-bottom: 20px;
}

.direction-vente {
    padding-left: 20px !important;
}

.vente p {
    color: #222;
    font-family: "Open Sans", sans-serif;
    font-size: 15px;
    text-transform: none;
    text-align: left;
}

#article-croquettes,
#article-vermifuges,
#article-shampoings,
#article-brosses,
#article-colliers {
    display: none;
}


/*========= CONTACT =========*/

.center-element-contact {
    display: block;
    margin: 0 auto;
    width: 75%;
}

.contact {
    height: 750px;
    display: flex;
}

.contact label {
    font-size: 1em;
    color: #222;
}

.contact input {
    margin-top: 5px;
    padding-left: 0px;
    height: 40px;
    width: 35vw;
    border: 1px solid #a9a9a9;
    background-color: white;
}

.contact textarea {
    margin-top: 5px;
    width: 35vw;
    border: 1px solid #a9a9a9;
    border-radius: 0%;
    height: 150px;
}

.contact h2 {
    text-align: left;
    margin-bottom: 0px;
    padding: 0px;
    display: inline-block;
}

.contact i {
    font-size: 1.5em;
    margin-left: 10px;
}

.contact p {
    font-size: 0.9em;
    white-space: pre-line;
    color: #222;
}

.localisation {
    width: 50%;
    display: inline-block;
    border-bottom: 2px solid white;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact h2 {
    text-align: left;
    margin-bottom: 0px;
    padding: 0px;
    display: inline-block;
}

.contact i {
    font-size: 1.5em;
    margin-left: 10px;
}

.contact p {
    font-size: 0.9em;
    white-space: pre-line;
    color: #222;
}

.wpcf7-submit:hover {
    background-color: #F58900;
    color: white;
}

.formulaire {
    width: 50%;
    display: inline-block;
    float: left;
    vertical-align: top;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 2px solid white;
    background-image: url(img/aside-fond.png);
}

iframe {
    width: 100%;
    margin-top: 20px;
}


/*======== PRISE RDV===========*/

.priseRDV-form {
    margin-top: 40px;
}

.priseRDV-form p {
    color: #444;
    padding-bottom: 40px;
}

.priseRDV-form h2 {
    text-align: center;
}

.select-RDV {
    width: 50%;
}

.select-RDV span {
    color: #222;
}

#birs_appointment_form .birs_field_content,
#birs_appointment_form .birs_form_field select {
    max-width: 100% !important;
}

#birs_appointment_form .ui-datepicker {
    border-radius: 0px !important;
}

.hasDatepicker {
    background-color: white;
}

.button {
    margin-left: 5px;
    width: 99% !important;
    margin-bottom: 50px;
}

.button:hover {
    color: white;
}

#birs_appointment_form .birs_section {
    border-bottom: 1px solid #263461 !important;
}

.select-RDV input {
    margin-top: 5px;
    height: 40px;
    width: 75%;
    border: 1px solid #a9a9a9;
    background-color: white;
}

.select-RDV select {
    margin-top: 5px;
    height: 40px;
    width: 100%;
    border: 1px solid #a9a9a9;
    background-color: white;
    border-radius: 0px;
}

.select-RDV label {
    font-weight: normal !important;
    font-size: 1em !important;
    color: #222 !important;
    font-family: "Open Sans", sans-serif !important;
}

.select-RDV textarea {
    margin-top: 5px;
    height: 40px;
    width: 100%;
    border: 1px solid #a9a9a9;
    background-color: white;
}

.center-RDV {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background-image: url(img/aside-fond.png);
}

.select-RDV label {
    font-size: 1em;
    color: #222;
    font-weight: 400;
}

.screen-reader-response {
    display: none;
    margin-bottom: -12vh;
}

.wpcf7-not-valid-tip {
    margin: 0 0 0 35vh;
    color: red;
}

.wpcf7-validation-errors {
    color: red;
    margin: 0 14vh;
}

.RDV {
    width: 100%;
    height: 100%;
}


/*========== FOOTER ==========*/

#footer {
    font-size: 0.8em;
    background: #263461;
    color: white;
    width: 100%;
    margin-bottom: -2vh;
    /* margin-top: 100px;*/
}

#footer p,
#footer a {
    color: white;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    text-decoration: none;
    padding-top: 8px;
    padding-bottom: 8px;
    margin-bottom: 0;
    margin-top: 0px;
}

#footer a:hover {
    color: #F58900;
}

.close {
    border: none;
    top: 85vh;
    margin-left: 1vh;
}

.modal {
    display: none;
}

.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
}

.overlay:target {
    visibility: visible;
    opacity: 1;
    z-index: 5;
}

.popup {
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 0px;
    width: 75%;
    height: 85%;
    position: relative;
    transition: all 5s ease-in-out;
    text-align: center;
}

#popup1 a {
    color: #333;
}

.popup .close {
    position: absolute;
    top: 0px;
    right: 20px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
}

.popup-txt {
    display: block;
    margin: 0 auto;
    width: 75%;
}

.popup .popup-txt {
    max-height: 100%;
    overflow: auto;
    color: #333;
}

#popup1 p {
    color: #333;
}

.contenu_mentions {}

@media screen and (max-width: 700px) {
    .box {
        width: 70%;
    }
    .popup {
        width: 70%;
    }
}


/* ====================================================================
*/

.page {
    font-size: 0;
}

.sidebar {
    margin: 0;
    font-size: 12px;
    display: inline-block;
    width: 20%;
}

.sidebar-became-a-section {
    display: block;
    width: 75%;
    margin: 0 auto;
}

.content {
    margin: 0;
    display: inline-block;
    font-size: 14px;
    width: 80%;
    vertical-align: top;
}

.contenu_article {
    font-size: .8em;
}


/* ===== PAGE NEWSLETTER ===== */

#newsletter {
    width: 85%;
    margin: 0 auto 100px auto;
}

.actu-on-newsletter {
    display: inline-block;
    padding: 5px 25px 50px 25px;
    vertical-align: top;
    margin-bottom: 50px;
    border: 1px solid blue;
    font-size: 0.9em;
    background: white;
}

#newsletter h2 {
    width: 25%;
    margin: 0 auto 25px auto;
    padding-bottom: 15px;
    border-bottom: 1px solid #263461;
}

#newsletter h2 a {
    color: #263461;
    text-decoration: none;
}

.news-img img {
    width: 250px;
    height: 250px;
    border-radius: 500px;
    margin-right: 25px;
}

.news-img {
    display: inline-block;
}

.news-p {
    position: relative;
    width: 70%;
    float: right;
    min-height: 250px;
    display: inline-block;
    vertical-align: top;
}

#newsletter .read-more {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 150px;
    text-transform: uppercase;
    transition: .3s;
}

#newsletter .read-more:hover {
    background-color: #F58900;
    cursor: pointer;
    transition: .3s;
}


/* --- page actualité --- */

.body-news {
    padding-top: 25px;
    background-image: url(img/aside-fond.png);
    display: flex;
    justify-content: space-between;
}

.bloc-news {
    width: 25%;
    margin: 0px auto;
    margin-top: 75px;
    margin-bottom: 100px;
    background-color: #fff;
    box-shadow: 0 0 13px lightgrey;
    display: inline-block;
    vertical-align: top;
}

.bloc-news h2 {
    width: 100%;
    height: 50px;
    line-height: 50px;
    padding: 0;
    margin: 0;
    font-weight: 700;
    color: #fff;
    border: 0;
    background-color: #263461;
}

.bloc-news-content img {
    width: 100%;
    height: auto;
}

.bloc-news-content p {
    color: #222;
    font-family: "Open Sans", sans-serif;
    font-size: 15px;
    text-transform: none;
    text-align: left;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 10px;
}

.bloc-news-content .normal-button {
    display: block;
    margin: 35px auto;
    width: 50px;
    height: 50px;
    font-size: 2em;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 100%;
}

.bloc-news-content a {
    text-decoration: none;
}


/*============================*/


/*====== SINGLE ARTICLE ======*/


/*============================*/

.fond-single {
    background-image: url(img/aside-fond.png);
    width: 100%;
    margin-top: 0px;
}

.single-article {
    width: 50%;
    display: block;
    margin: 0 auto;
    padding-top: 100px;
    padding-bottom: 100px;
}

.single-article img {
    border-radius: 0px;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 13px lightgrey;
}

.content-single button {
    background-color: #263461;
    color: white;
    text-decoration: none;
    border: 0px;
    border-radius: 0px;
    height: 40px;
    margin-left: 35px;
    margin-bottom: 50px;
    text-transform: uppercase;
}

.content-single button:hover {
    background-color: #f58900;
    color: white;
}

.content-single {
    background-color: white;
    width: 100%;
    display: block;
    margin: 0 auto;
    padding-top: 0px;
    margin-top: 0px;
    box-shadow: 0 0 13px lightgrey;
}

.content-single p {
    padding-left: 35px;
    padding-right: 35px;
    padding-top: 20px;
    padding-bottom: 20px;
    margin: 0px;
    color: #222;
    font-family: "Open Sans", sans-serif;
    font-size: 15px;
    text-transform: none;
    text-align: left;
}


/* ==================== */


/* ===== ANIMATION ==== */


/* ==================== */

.numero {
    display: inline-block;
    transform: translateZ(0.1px);
}

.animation {
    animation-fill-mode: both;
    animation-duration: 1s;
}

@-webkit-keyframes anim {
    0% {
        transform: scale(0) rotate(-180deg);
        opacity: 0;
    }
    50% {
        transform: scale(1) rotate(0deg);
        opacity: 1;
    }
    70% {
        transform: scale(1) rotate(0deg);
    }
    100% {
        transform: scale(0.8) rotate(0deg);
    }
}

@-moz-keyframes anim {
    0% {
        transform: scale(0) rotate(-180deg);
        opacity: 0;
    }
    50% {
        transform: scale(1) rotate(0deg);
        opacity: 1;
    }
    70% {
        transform: scale(1) rotate(0deg);
    }
    100% {
        transform: scale(0.8) rotate(0deg);
    }
}

@-o-keyframes anim {
    0% {
        transform: scale(0) rotate(-180deg);
        opacity: 0;
    }
    50% {
        transform: scale(1) rotate(0deg);
        opacity: 1;
    }
    70% {
        transform: scale(1) rotate(0deg);
    }
    100% {
        transform: scale(0.8) rotate(0deg);
    }
}

@keyframes anim {
    0% {
        transform: scale(0) rotate(-180deg);
        opacity: 0;
    }
    50% {
        transform: scale(1) rotate(0deg);
        opacity: 1;
    }
    70% {
        transform: scale(1) rotate(0deg);
    }
    100% {
        transform: scale(0.8) rotate(0deg);
    }
}

.anim {
    backface-visibility: visible !important;
    animation-name: anim;
    cursor: default;
}


/* ========== [ RESPONSIVE ] ========== */

@media (max-width: 1300px) {
    .menu-top-container ul li a {
        font-size: .7em;
    }
}

@media (max-width: 1085px) {
    .menuNav {
        position: relative;
        display: block;
        height: 100px;
    }
    .menu-top-container {
        display: block;
        border: 0;
    }
    .icones {
        position: absolute;
        top: 0;
        right: 0;
    }
    .logo-img {
        display: none;
    }
    /* supression de la sidebar */
    .sidebar {
        display: none;
    }
    /* le contenu prend toute la largeur */
    .content {
        margin-top: 60px;
        width: 100%;
    }
    /* bouton prise de RDV */
    #priseRDV {
        display: block;
        width: 100%;
    }
    /* présentation de l'équipe */
    .team-member {
        border-bottom: 1px solid #999;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }
    :last-child.team-member {
        border: 0;
        margin-bottom: 0;
    }
    .docteurs {
        display: block;
        width: 100%;
    }
    .docteurs h3 {
        margin: 0 0 0 10px;
        text-align: left;
    }
    .docteurs .contenu_article p {
        width: 90%;
        padding: 0;
        margin: 0 auto;
        text-align: center;
    }
    /* ======= Small newslettes ======== */
    #newsletter {
        width: 90%;
        display: block;
        margin: 0 auto;
    }
    .actu-on-newsletter {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 5px 25px 50px 25px;
        margin-bottom: 60px;
        border-bottom: 1px solid #aaa;
        text-align: center;
        font-size: 0.9em;
    }
    #newsletter h2 {
        width: 50%;
        margin: 0 auto 25px auto;
        padding-bottom: 0;
        padding-bottom: 15px;
        border-bottom: 1px solid #263461;
    }
    .news-img img {
        width: 200px;
        height: 200px;
        border-radius: 500px;
        margin: 0px;
    }
    .bouton-envoyer-effacer {
        width: 75%;
        display: block;
        margin: 0 auto;
    }
}

@media (min-width: 871px) {
    .smart-menu {
        display: none;
    }
    #menu-deroulant {
        display: none;
    }
}

@media (max-width: 871px) {
    .menuNav {
        display: flex;
        justify-content: space-between;
        height: 50px;
    }
    .menu-top-container {
        display: none;
    }
    #menu-deroulant .menu-top-container {
        display: block;
        width: 100%;
        background-color: #fff;
    }
    #menu-deroulant .menu-top-container ul {
        padding: 0;
    }
    #menu-deroulant .menu-top-container ul li {
        display: block;
        width: 100%;
        background-color: #fff;
    }
    #menu-deroulant .menu-top-container ul li a {
        width: 100%;
        padding: 0;
    }
    .icones {
        position: relative;
    }
    .smart-menu {
        display: flex;
        align-items: center;
        width: 50px;
        height: 50px;
        padding: 5px 0 0 0;
        text-align: center;
    }
    #header {
        height: 320px;
    }
    .header-corp {
        width: 100%;
        padding: 25px 0;
    }
    .header-corp h1,
    .header-corp h2#description {
        font-size: 8px;
        display: inline-block;
    }
    .header-corp h2#description {
        font-size: 16px;
    }
    #header h2 {
        border-bottom: 0;
        font-size: 18px;
    }
    p.horaires {
        text-align: center;
    }
    /* NOTRE SAVOIR-FAIRE */
    #bloc-medium-savoirfaire,
    .bloc-small-savoirfaire {
        margin: 0;
    }
    #bloc-medium-savoirfaire {
        padding-top: 30px;
    }
    /* ======= Small newslettes ======== */
    #newsletter {
        width: 90%;
        display: block;
        margin: 0 auto;
    }
    .actu-on-newsletter {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 5px 25px 50px 25px;
        margin-bottom: 50px;
        border-bottom: 1px solid #aaa;
        text-align: center;
        font-size: 0.9em;
    }
    #newsletter h2 {
        width: 50%;
        margin: 0 auto 25px auto;
        padding-bottom: 0;
        padding-bottom: 15px;
        border-bottom: 1px solid #263461;
    }
    .news-img img {
        width: 200px;
        height: 200px;
        border-radius: 500px;
        margin: 0px;
    }
    /* ======= Prestations ========== */
    
    .smart-indication {
        display: none;
    }
    .icone-generique {
        margin-top: 0px;
        width: 100%;
        display: inline-block;
    }
    .uniform-article {
        margin-bottom: 0px;
    }
    .center-generique {
        display: inline-block;
    }
    .alignement_article {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .contenu_article p {
        padding-left: 0px;
        padding-top: 20px;
        text-align: center;
    }
    /* ======PRISE RDV ======= */
    .priseRDV-form {
        margin-top: 40px;
        width: 100%;
        margin-left: 0;
    }
    .priseRDV-form input {
        width: 85%;
    }
    .option {
        width: 85%;
    }
    .priseRDV-form textarea {
        width: 85%;
    }
    .bouton-envoyer-effacer {
        width: 75%;
        display: block;
        margin: 0 auto;
    }
    /* ======= Contact ========== */
    .contact {
        display: inline;
    }
    .contact input {
        width: 100%;
    }
    .contact textarea {
        width: 100%;
    }
    .formulaire,
    .localisation {
        display: block;
        float: none;
        width: 100%;
    }
    .localisation {
        margin-bottom: 50px;
    }
    .team-member {
        border: 0;
    }
    /*====== SINGLE ARTICLE ======*/
    .single-article {
        width: 75%;
        display: block;
        margin: 0 auto;
        padding-top: 100px;
        padding-bottom: 100px;
    }
    .body-news {
        display: block;
        padding-top: 25px;
        background-image: url(img/aside-fond.png);
    }
    .bloc-news {
        width: 90%;
        display: block;
        margin: 0 auto;
        margin: 0px auto;
        margin-top: 20px;
        margin-bottom: 50px;
        background-color: #fff;
        box-shadow: 0 0 13px lightgrey;
        vertical-align: top;
    }
    .imgPage img {
        margin-top: 30px;
    }
}

@media (max-width: 540px) {
    /* HEADER BANNIERE */
    .header-corp {
        width: 100%;
        height: 100%;
        padding: 0;
        text-align: center;
    }
    .header-corp .info {
        width: 90%;
        height: 100%;
    }
    .info {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }
    #header p.horaires {
        width: 100%;
        margin: 0 auto;
        font-size: .8em;
    }
    /* NOTRE SAVOIR-FAIRE */
    #bloc-large-savoirfaire {
        height: 100%;
    }
    #bloc-medium-savoirfaire,
    .bloc-small-savoirfaire {
        padding: 0;
        height: 100%;
    }
    #bloc-medium-savoirfaire {
        padding-top: 30px;
    }
    .bloc-small-savoirfaire p {
        padding: 5px;
    }
    /* TEAM */
    .team-member {
        padding: 0;
    }
    /* ------ */
    .icone-generique {
        margin-top: 0px;
        width: 100%;
        display: inline-block;
    }
    .uniform-article {
        margin-bottom: 0px;
    }
    .center-generique {
        display: inline-block;
    }
    .alignement_article {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .contenu_article p {
        padding-top: 20px;
        text-align: center;
    }
    .prestation svg {
        display: none;
    }
    .vente svg {
        display: none;
    }
    .conseils svg {
        display: none;
    }
    .contenu_article p {
        padding: 0px;
    }
    .vente h3 {
        font-size: 0.75em;
    }
    .uniform-article h2 {
        margin-top: 0px;
    }
    /* ======= Contact ========== */
    .contact {
        display: inline;
    }
    .formulaire,
    .localisation {
        display: block;
        float: none;
        width: 100%;
    }
    /* carousel */
    #bloc-carousel {
        display: none;
    }
    /* icone 1 2 3 V */
    .fa-sf {
        margin: -20px auto 0 auto;
        width: 50px;
        height: 50px;
        font-size: 2em;
    }
    .bloc-small-savoirfaire p {
        padding: 0;
    }
    .select-RDV {
        width: 100%;
    }
    /*====== SINGLE ARTICLE ======*/
    .single-article {
        width: 100%;
        display: block;
        margin: 0 auto;
        padding-top: 0px;
        padding-bottom: 100px;
    }
    .single-article img {
        box-shadow: 0 0 0px lightgrey;
    }
    .body-news {
        display: block;
        padding-top: 25px;
        background-image: url(img/aside-fond.png);
    }
    .bloc-news {
        width: 90%;
        display: block;
        margin: 0 auto;
        margin: 0px auto;
        margin-top: 20px;
        margin-bottom: 50px;
        background-color: #fff;
        box-shadow: 0 0 13px lightgrey;
        vertical-align: top;
    }
    .imgPage img {
        margin-top: 30px;
    }
}

@media (max-width: 375px) {
    .smart-indication {
        display: block;
    }
    
    h2.bandeau {
        margin-top: 0px;
        margin-bottom: 0px;
    }
    /* icone 1 2 3 V */
    .fa-sf {
        margin: -20px auto 0 auto;
        width: 40px;
        height: 40px;
        font-size: 2em;
    }
    /* ======= Contact ========== */
    .contact {
        display: inline;
    }
    .formulaire,
    .localisation {
        display: block;
        float: none;
        width: 100%;
    }
    /*====== SINGLE ARTICLE ======*/
    .single-article {
        width: 100%;
        display: block;
        margin: 0 auto;
        padding-top: 0px;
        padding-bottom: 100px;
    }
    .single-article img {
        box-shadow: 0 0 0px lightgrey;
    }
    .body-news {
        display: block;
        padding-top: 25px;
        background-image: url(img/aside-fond.png);
    }
    .bloc-news {
        width: 90%;
        display: block;
        margin: 0 auto;
        margin: 0px auto;
        margin-top: 20px;
        margin-bottom: 50px;
        background-color: #fff;
        box-shadow: 0 0 13px lightgrey;
        vertical-align: top;
    }
    
    .imgPage img {
        margin-top: 30px;
    }
}

                    </code>
                </pre>
    </div>
    <a href="poledance.php">
        <i class="fa fa-chevron-left fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>
    <a href="pomodoro.php">
        <i class="fa fa-chevron-right fa-2x col-md-6 col-sm-6 col-xs-6" aria-hidden="true"></i></a>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
        </div>
        </body>

</html>