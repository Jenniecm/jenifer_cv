<?php 
    $academy=array(
        array("diploma" => "Dipet 2 Electronique",
         "place" => "@ENSET de Douala", "obtentionyear"=>"Aout 2016",
         "specialisation"=>"Gestion d'eclairage d'une maison( Android + Adruino)"),
        
        array("diploma" => "Oracle Certified et Associate",
         "place" => "@Kentnix Sarl", "obtentionyear"=>"Mars 2009",
         "specialisation"=>"Oracle Database 11g Administration"),
         
        array("diploma" => "Oracle SQL certified",
         "place" => "@Kentnix Sarl", "obtentionyear"=>"Decembre 2008",
         "specialisation"=>"SQl 2, SQL 3, XML"),

        array("diploma" => "Licence professionelle",
         "place" => "@Douala Institute of Tech.", "obtentionyear"=>"Octobre 2008",
         "specialisation"=>"Telecommunication et Reseau"),

        array("diploma" => "DEC/BTS",
         "place" => "@CCNB Dieppe Canada", "obtentionyear"=>"Septembre 2007",
         "specialisation"=>"Programmation Appliquee pour internet"),

        array("diploma" => "Baccalaureat",
         "place" => "@Lycee Technique de Douala Bassa", "obtentionyear"=>"Juin 2005",
         "specialisation"=>"Electrotechnique, Mention Bien (Major de centre)"),

        array("diploma" => "Baccalaureat",
         "place" => "@Lycee Technique de Douala Bassa", "obtentionyear"=>"Juin 2005",
         "specialisation"=>"Electrotechnique, Mention Bien (Major de centre)"),

        array("diploma" => "Baccalaureat",
         "place" => "@Lycee Technique de Douala Bassa", "obtentionyear"=>"Juin 2005",
         "specialisation"=>"Electrotechnique, Mention Bien (Major de centre)"),

        array("diploma" => "Baccalaureat",
         "place" => "@Lycee Technique de Douala Bassa", "obtentionyear"=>"Juin 2005",
         "specialisation"=>"Electrotechnique, Mention Bien (Major de centre)")
        
    )

?>
<div class="academy carte">
    <div class="header">

        <div class="header_infos">
            <img class="img_company" src="image/academy.png">
            <div>
                <p class="texta"> Cursus academique </p>
                <p class="texta"><i> Diplome et formations certifiantes </i></p>
            </div>
        </div>
        <img src="image/menu.png" class="img_menu">
    </div>

    <div class="scrollbartwo">
        <div class="training">

        <?php
           foreach ($academy as $a){
        ?>
            <div>
                <p class="text1"><?= $a['diploma'] ?> - <b> <?= $a['place'] ?></b>
                    <div class="training_year">
                        <p class="text1" style="color: #015f9f;"><?= $a['obtentionyear'] ?> -</p>
                        <i class="text1"><?= $a['specialisation'] ?></i>
                    </div>
                    <hr class="ligne1">
            </div>

            <?php } ?>

            
        </div>
    </div>
</div>


<?php 

require "mainclass_experience.php";

class academy extends experiences{
   public  $specialisation;

   public function __construct(string $specialisation){
        $this->specialisation= $specialisation;
   
}

        public function get_specialisation(){
            return $this->specialisation;
        }
}

?>