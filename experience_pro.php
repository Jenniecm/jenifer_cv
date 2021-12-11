<?php 
   $experience = array(
        array("profession" => "Chef des projets technologiques", "societe" => "@Ets. M DE M",
        "date_debut"=> "2019-07-01", "date_fin"=> "ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"Chef du projet annuaire-universel.cm de l'ART"),

        array("profession" => "Fondateur & DT", "societe" => "@Startup ChickDev",
        "date_debut"=> "2015-06-01", "date_fin"=>"ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"Réalisation de plusieurs sites web et applications mobiles"),

        array("profession" => "Enseignant", "societe" => "@INSTITUT UNIVERSITAIRE DE LA CÔTE",
        "date_debut"=> "2011-11-01", "date_fin"=>"ce jour", "link"=> "http://mdem.cm", 
        "poste"=>"'Analyse UML & Merise', 'BD SQL, Oracle et MySQL', 'Dev ios et Android', 'BI & BigData
        Talend DI & Hadoop', 1, 2, 3,4 Anne"),

        array("profession" => "Developpeur en chef", "societe" => "@Kayroual group",
        "date_debut"=> "2013-05-01", "date_fin"=>"2015-06-01", "link"=> "http://mdem.cm", 
        "poste"=>"Realisation de multiple projets logiciels et web, infographie"),

        array("profession" => "Responsable commerciale", "societe" => "@Bao Sarl",
        "date_debut"=> "2012-12-01", "date_fin"=>"2013-12-01", "link"=> "http://mdem.cm", 
        "poste"=>"Realisation de multiple projets logiciels et web, infographie"));

        $array_of_date = array ();
        foreach($experience as $e){
            array_push($array_of_date, $e['date_debut']);
        }
 


?>

    <div class="experience carte">
        <div class="header">

            <div class="header_infos">
                <img class="img_company" src="image/companyx.png">
                <div>
                    <p class="texta"> Experience professional ( <?= Utils::count($array_of_date) ?> ans) </p>
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
                    <p class="text1" style="color: #015f9f;">De <?= Utils::date_format_letters( $e['date_debut']) ?> a <?= Utils::date_format_letters($e['date_fin']) ?>  - <?= $e['link'] ?></p>
                    <p class="text1"><?= $e['poste'] ?></p>
                    <hr class="ligne1">
                </div>

                <?php } ?>
                
            </div>
        </div>
    </div>

<?php 
require "mainclass_experience.php";

class experience_pro extends experiences{
    public $date_debut;
    public $link;
    public $domaine;

}

?>
