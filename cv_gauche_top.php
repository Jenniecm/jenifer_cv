<?php 
    // $background_image= array("image/def.png");
    $content = array("param1"=> "Nee le 13 septembre 2002", "param2"=> "Originaire de l'ouest Cameroun",
    "param3"=> "Celibataire");

    $content1= array("params1"=> "Residant a Ndogbon", "params2"=> "Douala - Cameroun",
    "params3"=> "Celibataire");

    $content3 =array( "paramt1"=> "(237) 698893305",
    "paramt2"=> "Mobile, Whatsapp, Telegram");

    $content4 = array( "paramx1"=> "jenifer.t65@yahoo.com",
    "paramx2"=> " Yahoo");

    $i = "image/photocv.jpeg";
    $img = "image/def.jpg";



    ?>

<div class="cv_gauche_top carte ">
    <div class="cv_profile" style="background-image: url(<?= $img ?>);">
        <div class="couverture"></div>
        <div class="search_bar">
            <img src="image/menu1.png" class="search_img">
            <span>Besoin d'un chef projet</span>
            <img src="image/search.png" class="search_img">
            <span>|</span>
            <img src="image/cross.png" class="search_img">
        </div>
        <div class="div_pict">
            <img class="pict" src="<?= $i ?>">
            <div class="profile_elements">
                <h3 class="pname">TCHOUTEZO Jenifer</h3>
                <p class="psub">Student</p>
            </div>
        </div>

        <div class="push_btn">
            <span class="plus">+</span>
        </div>
    </div>

    <div class="contenu">

        <div class="cv_info">

            <div class="data">
                <img class="birth" src="icons/birth.png">
                <div class="over_all">
                    <p class="texta"> <?= $content['param1'] ?></p>
                    <p class="texta"> <?= $content['param2'] ?></p>
                    <p class="texta"><?= $content['param3'] ?></p>
                    <hr class="ligne">
                </div>
            </div>

            <div class="data">
                <!--Location-->
                <img class="birth" src="icons/map.png">
                <div class="over_all">
                    <p class="texta"> <?= $content1['params1'] ?></p>
                    <p class="texta"> <?= $content1['params2'] ?></p>
                    <p class="texta"><?= $content1['params3'] ?></p>
                    </p>
                    <hr class="ligne">
                </div>

            </div>

            <div class="data">
                <!--date of birth-->
                <img class="birth" src="icons/tel.png">
                <div class="over_all">
                    <p class="texta"> <?= $content3['paramt1'] ?></p>
                    <p class="texta"><?= $content3['paramt2'] ?></p>
                    </p>
                    <hr class="ligne">
                </div>

            </div>

            <div class="data">
                <!--date of birth-->
                <img class="birth" src="icons/mail.png">
                <div class="over_all">
                    <p class="texta"><?= $content4['paramx1'] ?></p>
                    <p class="texta"> <?= $content4['paramx2'] ?></p>
                    </p>
                    <hr class="ligne">
                </div>

            </div>


        </div>

        <div class="projects">
            <div>
                <p class="texta">+45 PROJETS</p>
            </div>

            <div>
                <p class="texta">+31 PROJETS</p>
            </div>

            <div>
                <p class="texta"> 12ANS D'EXP</p>
            </div>
        </div>

    </div>
    <div class="lign_red">
        <span style=" background-color: rgb(238, 79, 79);"></span>
        <span></span>
        <span></span>
    </div>


</div>