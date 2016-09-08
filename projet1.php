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
            <!-- PAGE -->
            <?php include 'pagetype.php'; ?>
                <!-- PROJET -->
                <img class="img-responsive img-projet" src="img/img1.png" alt="">
                
                <div class="col-md-offset-1 col-md-5 col-sm-6 col-xs-12 presentation">
                    
                </div>
                <!-- FOOTER -->
                <?php include 'footer.php'; ?>
    </div>
</body>

</html>