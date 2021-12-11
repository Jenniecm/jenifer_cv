<?php 
    $langue = array( "Francais","Anglais");


?>
    <div class="langue carte ">
     
        <div>
            <h3>Langues</h3>
            <i>Pratique en entreprise</i>
        </div>
        <?php 
            foreach($langue as $l) {
        ?>
        <div class="lang">
            <img src="image/tick_box.png">
            <p><?=$l?></p>
        </div>
        <?php } ?>
    </div>

<?php 

class langue{
    public $langue;

    public function __construct(string $langue){
        $this->langue;
    }
    public function get_langue(){
        return $this->langue;
    }
}

?>
