<?php require "utils/utils.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remasterised</title>
    <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="jenifer_cv.css">
    <script src="bootstrap1/js/bootstrap.min.js" defer></script>
</head>

<body>
    <div class="cv">
        <!------------------------------ top gauche -------------------------->
        <?php require_once 'cv_gauche_top.php'; ?>


        <!------------------------------- top bottom ------------------------>
        <?php require_once 'cv_gauche_bottom.php'; ?>

        <div class="cv_droit">

            <!----------------------------- cv_droit_experience ----------------->
            <?php require_once 'experience_pro.php'; ?>

            <!--------------------------- cv_droit_point_interet ------------------->
            <?php require_once 'point_interet.php'; ?>

            <!---------------------------- cv_droit_langue ---------------------------->
            <?php require_once 'langue.php'; ?>


            <!----------------------------- cv_droit_academy -------------------------->
            <?php require_once 'academy.php'; ?>


            <?php require_once "mainclass_experience"; ?>

        </div>

    </div>

</body>

</html>