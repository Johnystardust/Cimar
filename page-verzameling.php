<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 11/10/2015
 * Time: 1:08 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 11/10/2015
 * Time: 10:18 AM
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="includes/stylesheet/style.css"/>

    <!-- Fontello -->
    <link rel="stylesheet" href="includes/fontello/fontello-embedded.css"/>

</head>
<body>

<div class="container-fluid no-padding">

    <?php include_once('includes/partials/menu.php'); ?>

    <div id="right">

        <div class="row no-margin">
            <div id="page-title" class="col-md-12">
                <h3>Nieuwsoverzicht</h3>
                <hr/>
                <hr/>
            </div>
        </div>

        <div class="row no-margin">
            <?php include_once('includes/partials/page-verzameling-content.php'); ?>

            <?php include_once('sidebar.php'); ?>

        </div>

        <?php include_once('footer.php'); ?>

    </div><!-- end right -->

</div><!-- end container -->

</body>
</html>