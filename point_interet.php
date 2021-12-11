<?php 
   $interet = array("image/Stack_Overflow_logo.png" , "image/sports.png" , "image/cake.png" , 
   "image/music.jpg" , "image/boxing.png")

?>    
<div class="point_interet carte">

        <div>
            <h3>Point d'interets</h3>
            <i> Simple passe temps pour se faire un peu plaisir</i>
        </div>

        <div class="entertain">
            <?php foreach($interet as $i){ ?>
            <img src="<?=$i?>" alt="">
            <?php } ?>
        </div>
       
</div>


<?php 

class interets {
    public $loisir;

    public function __construct(string $loisir) {
        $this->loisir= $loisir;
    }

    public function get_loisir (string $loisir){
        return $this->loisir;
    }
    
}

?>    