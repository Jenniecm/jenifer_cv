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
    </div>

<?php 

class Competency {
    public $dev_type;
    public $used_tech;
    public $progression;

    public function __construct($dev_type, $used_tech, $progression)
    {
        $this->dev_type= $dev_type;
        $this->used_tech=$used_tech;
        $this->progression;
    }

    public function get_dev_type(){
        return $this->dev_type;
    }

    public function get_used_tech(){
        return $this->used_tech;
    }

    public function get_progression(){
        return $this->progression;
    }
}

?>
