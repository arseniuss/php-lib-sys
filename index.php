<!DOCTYPE html>
<html lang="lv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Library System</title>


        <!-- Bootstrap -->
        <link title="Local stylesheet" rel="stylesheet" href="css/bootstrap.min.css" media="screen">
        <link title="Remote stylesheet" rel="alternative stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="well" role="navigation">
                        <ul class="nav nav-stacked">
                            <li>Iespējas</li>
                            <li><a href="?d=search">Meklēšana</a></li>
                            <li><a href="#">Reģistrēšanās</a></li>
                            <li><a href="#">Autorizācija</a></li>
                            <li><a href="#">Kontakti</a></li>
                            <li>Kategorijas</li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <?php
                    if (isset($_GET['d']))
                        switch ($_GET['d']) {
                            case "search":
                                include './search.php';
                                break;

                            default:
                                break;
                        };
                    ?>
                </div>
            </div>
        </div>


        <!-- Javascript -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jQuery.cssParentSelector.js"></script>
    </body>
</html>