<?php 
   $experience = array(
        array("profession" => "Chef des projets technologiques", "societe" => "@Ets. M DE M",
        "annee"=> "De juillet 2019 à ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"Chef du projet annuaire-universel.cm de l'ART"),

        array("profession" => "Fondateur & DT", "societe" => "@Startup ChickDev",
        "annee"=> "De juillet 2019 à ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"Réalisation de plusieurs sites web et applications mobiles"),

        array("profession" => "Enseignant", "societe" => "@INSTITUT UNIVERSITAIRE DE LA CÔTE",
        "annee"=> "De octobre 2011 à ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"'Analyse UML & Merise', 'BD SQL, Oracle et MySQL', 'Dev ios et Android', 'BI & BigData
        Talend DI & Hadoop', 1, 2, 3,4 Anne"),

        array("profession" => "Developpeur en chef", "societe" => "@Kayroual group",
        "annee"=> "De Mai 2013 a Juin 2015", "link"=> "http://mdem.cm", 
        "poste"=>"Realisation de multiple projets logiciels et web, infographie"),

        array("profession" => "Responsable commerciale", "societe" => "@Bao Sarl",
        "annee"=> "De juillet 2019 à ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"Realisation de multiple projets logiciels et web, infographie"),

        array("profession" => "Chef des projets technologiques", "societe" => "@Ets. M DE M",
        "annee"=> "De juillet 2019 à ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"Chef du projet annuaire-universel.cm de l'ART")
        )
?>

    <div class="experience carte">
        <div class="header">

            <div class="header_infos">
                <img class="img_company" src="image/companyx.png">
                <div>
                    <p class="texta"> Experience professional </p>
                    <p class="texta"><i> Expertise en entreprise </i></p>
                </div>
            </div>
            <img src="image/menu.png" class="img_menu">

        </div>
        <div class="scrollbar">
            <div class="body_experience">
                <?php 
                    foreach ($experience as $e){
                ?>
                <div>
                    <p class="text1"><?= $e['profession'] ?> - <b> <?= $e['societe'] ?></b></p>
                    <p class="text1" style="color: #015f9f;"><?= $e['annee'] ?> - <?= $e['link'] ?></p>
                    <p class="text1"><?= $e['poste'] ?></p>
                    <hr class="ligne1">
                </div>

                <?php } ?>
                <!-- <div>
                    <p class="text1">Fondateur & DT - <b> @Startup ChickDev</b></b></p>
                    <p class="text1" style="color: #015f9f;">De juin 2015 à ce jour - http://mdem.cm</p>
                    <p class="text1">Réalisation de plusieurs sites web et applications mobiles</p>
                    <hr class="ligne1">
                </div>
                <div>
                    <p class="text1">Enseignant - <b> @INSTITUT UNIVERSITAIRE DE LA CÔTE</b></p>
                    <p class="text1" style="color: #015f9f;">De octobre 2011 à ce jour - http://mdem.cm</p>
                    <p class="text1">'Analyse UML & Merise', 'BD SQL, Oracle et MySQL', 'Dev ios et Android', 'BI &
                        BigData
                        Talend DI & Hadoop', 1, 2, 3,4 Anne </p>
                    <hr class="ligne1">
                </div>
                <div>
                    <p class="text1">Developpeur en chef - <b> @Kayroual group</b>
                        <p class="text1" style="color: #015f9f;">De Mai 2013 a Juin 2015 - http://mdem.cm</p>
                        <p class="text1">Realisation de multiple projets logiciels et web, infographie</p>
                        <hr class="ligne1">
                </div>
                <div>
                    <p class="text1">Responsable commerciakle <b> @Bao Sarl</b>
                        <p class="text1" style="color: #015f9f;">Decembre 2012 a Juin 2013- http://mdem.cm</p>
                        <p class="text1">Realisation de multiple projets logiciels et web, infographie</p>
                </div> -->

            </div>
        </div>
    </div>
