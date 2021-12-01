<?php
    $competence = array(array("option"=> "Developpement Front End" , 
    "dev_language"=> "HTML5, SASS, VueJS, Angular" , "progress"=> 90),

    array("option"=> "Developpement Front End" , 
    "dev_language"=> "HTML5, SASS, VueJS, Angular" , "progress"=> 70),

    array("option"=> "Developpement Front End" , 
    "dev_language"=> "HTML5, SASS, VueJS, Angular" , "progress"=> 80),

    array("option"=> "Developpement Front End" , 
    "dev_language"=> "HTML5, SASS, VueJS, Angular" , "progress"=> 60),

    array("option"=> "Developpement Front End" , 
    "dev_language"=> "HTML5, SASS, VueJS, Angular" , "progress"=> 95),

    array("option"=> "Developpement Front End" , 
    "dev_language"=> "HTML5, SASS, VueJS, Angular" , "progress"=> 85) )

    // array("option"=> "Developpement Front End"),

    // array("option"=> "Developpement Front End"),

    // array("option"=> "Developpement Front End"),

    // array("option"=> "Developpement Front End"),

    // array("option"=> "Developpement Front End")
    // );

    // $dev = array(array("dev_language"=> "HTML5, SASS, VueJS, Angular"),

    // array("dev_language"=> "HTML5, SASS, VueJS, Angular"),

    // array("dev_language"=> "HTML5, SASS, VueJS, Angular"),

    // array("dev_language"=> "HTML5, SASS, VueJS, Angular"),

    // array("dev_language"=> "HTML5, SASS, VueJS, Angular"),

    // array("dev_language"=> "HTML5, SASS, VueJS, Angular")
    // )
?>

    <div class="cv_gauche_bottom carte">
        <?php foreach($competence as $c ) { ?>
        <div class="competence">
            <img src="image/tick_box.png" alt="">
            <div style="flex: 1;">
                <div class="competence_dev">
                    <h4 class="text1"> <?= $c['option'] ?></h4>
                    <img src="image/star.png" height="15" width="15" alt="">
                   
                </div>
                <p class="text1"><?= $c['dev_language'] ?></p>
                <div class="progression">
                    <div class="progression_bar" style="width: <?=$c['progress']?>%;"></div>
                    <span class="progression_circle" style="right: <?=100 - $c['progress']?>%;"></span>
                </div>
            </div>
        </div>

        <?php } ?>
<!-- 
        <div class="competence">
            <img src="image/tick_box.png" alt="">
            <div style="flex: 1;">
                <div class="competence_dev">
                    <h4 class="text1"> Developpement Front End</h4>
                    <img src="image/star.png" height="15" width="15" alt="">
                </div>
                <p class="text1">HTML5, SASS, VueJS, Angular</p>
                <div class="progression">
                    <div class="progression_bar" style="width: 70%;"></div>
                    <span class="progression_circle" style="right: 30%;"></span>
                </div>
            </div>
        </div>

        <div class="competence">
            <img src="image/tick_box.png" alt="">
            <div style="flex: 1;">
                <div class="competence_dev">
                    <h4 class="text1"> Developpement Front End</h4>
                    <img src="image/star.png" height="15" width="15" alt="">
                </div>
                <p class="text1">HTML5, SASS, VueJS, Angular</p>
                <div class="progression">
                    <div class="progression_bar" style="width: 80%;"></div>
                    <span class="progression_circle" style="right: 20%;"></span>
                </div>
            </div>
        </div>

        <div class="competence">
            <img src="image/tick_box.png" alt="">
            <div style="flex: 1;">
                <div class="competence_dev">
                    <h4 class="text1"> Developpement Front End</h4>
                    <img src="image/star.png" height="15" width="15" alt="">
                </div>
                <p class="text1">HTML5, SASS, VueJS, Angular</p>
                <div class="progression">
                    <div class="progression_bar" style="width: 60%;"></div>
                    <span class="progression_circle" style="right: 40%;"></span>
                </div>
            </div>
        </div>

        <div class="competence">
            <img src="image/tick_box.png" alt="">
            <div style="flex: 1;">
                <div class="competence_dev">
                    <h4 class="text1"> Developpement Front End</h4>
                    <img src="image/star.png" height="15" width="15" alt="">
                </div>
                <p class="text1">HTML5, SASS, VueJS, Angular</p>
                <div class="progression">
                    <div class="progression_bar" style="width: 95%;"></div>
                    <span class="progression_circle" style="right: 5%;"></span>
                </div>
            </div>
        </div>

        <div class="competence">
            <img src="image/tick_box.png" alt="">
            <div style="flex: 1;">
                <div class="competence_dev">
                    <h4 class="text1"> Developpement Front End</h4>
                    <img src="image/star.png" height="15" width="15" alt="">
                </div>
                <p class="text1">HTML5, SASS, VueJS, Angular</p>
                <div class="progression">
                    <div class="progression_bar" style="width: 85%;"></div>
                    <span class="progression_circle" style="right: 15%;"></span>
                </div>
            </div>
        </div> -->


    </div>

