<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" author="Lise Poirier">
    <title>Welcome</title>
    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/navtrans.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Fonts -->
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> </head>

<body>
    <div class="container-fluid">
        <!-- NAVBAR -->
        <?php include 'nav.php'; ?>
            <!-- HEADER -->
            <?php include 'pagetype.php'; ?>
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