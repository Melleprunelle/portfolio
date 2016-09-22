<!DOCTYPE html>
<html lang="en">

<?php include 'intro-liens.php'; ?>
    <div class="container-fluid">
        <!-- NAVBAR -->
        <?php include 'nav.php'; ?>
            <!-- HEADER -->
            <header id="startchange" class="container-fluid header page">
    <h1>CONTACT</h1>
    <p>N'hésitez pas à me contacter pour toutes demandes d'informations sur vos envies ou vos projets.</p>
    <div class="separator-header2"></div>
</header>
                <!-- FORMULAIRE -->
                <form class="row" action="email.php" method="post">
                    <div class="form-group col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
                        <label for="usr">Nom Prénom :</label>
                        <input type="text" class="form-control" id="usr" placeholder="Nom et prénom" name="idendite" maxlength="50"> </div>
                    <div class="form-group col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
                        <label for="email">E-mail :</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" maxlength="50"> </div>
                    <div class="form-group col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
                        <label for="objet">Objet :</label>
                        <input type="text" class="form-control" id="objet" placeholder="objet" name="objet" maxlength="50"> </div>
                    <div class="form-group col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
                        <label for="message">Message :</label>
                        <textarea class="form-control" name="message" id="comment" cols="30" rows="8" maxlength="2000" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
                        <input id="input-repl-2" type="file" class="file-loading" accept="image/*" name="fichier"> </div>
                    <div class="form-group col-sm-offset-3 col-sm-9 col-xs-offset-1 col-xs-11 col-md-offset-3 col-md-6">
                        <button type="submit" class="btn">Envoyer</button>
                    </div>
                </form>
                <!-- FOOTER -->
                <?php include 'footer.php'; ?>
    </div>
</body>

</html>