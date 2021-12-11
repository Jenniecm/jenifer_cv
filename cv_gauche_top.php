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

        <div class="push_btn1" id="btn_send_mail" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img class="icon_img" src="icons/mail.png">
        </div>


        <div class="push_btn2" id="btn_pdf">
            <img class="icon_img" src="image/pdf.png">
        </div>
        <div class="push_btn" id="btn" onclick="activate_btn();">
            <img class="plus" src="image/email_send.png">
        </div>

        <script>
            function activate_btn() {
                if (document.getElementById('btn').className == 'push_btn') {
                    document.getElementById('btn').className = 'push_btn_activate';
                    document.getElementById('btn_send_mail').className = 'push_btn1_activate';
                    document.getElementById('btn_pdf').className = 'push_btn2_activate';
                } else {
                    document.getElementById('btn').className = 'push_btn';
                    document.getElementById('btn_send_mail').className = 'push_btn1';
                    document.getElementById('btn_pdf').className = 'push_btn2';

                }

            }
        </script>


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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h5 class="modal-title" id="exampleModalLabel">Share your CV</h5>
                </center>
                <button type="button" class="btn-close" name="send_mail" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form method="POST" action="send_mail.php">
                <div class="modal-body">
                    <p> Enter your email</p>
                    <input placeholder="user@mail.com" name="mailing" name="sendEmail" maxlength="50" type="email">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 

class Profil  {
    public $profile_pict;
    public $date_naissance;
    public $division;
    public $status;
    public $residance;
    public $ville;
    public $pays;
    public $num;
    public $mail_address;

    public function __construct(string $profile_pict, string $date_naissance, string $division,
    string $status, string $residence, string $ville, string $pays, string $num, string $mail_address)
    {
       $this-> profile_pict = $profile_pict;
       $this-> date_naissance = $date_naissance;
       $this-> division = $division;
       $this-> status =$status;
       $this-> residence =$residence;
       $this-> ville= $ville;
       $this-> pays = $pays;
       $this-> num= $num;
       $this-> mail_address= $mail_address; 
    }

    public function get_profile_pict ($profile_pict){
        return $this->profile_pict;
    }

    public function get_date_naissance($date_naissance){
        return $this->date_naissance;
    }
    public function get_division ($division){
        return $this->division;
    }
    public function get_status($status){
        return $this->status;
    }
    public function get_residence($residence){
        return $this->residence;
    }
    public function get_ville($ville){
        return $this->ville;
    }
    public function get_pays($pays){
        return $this->pays;
    }
    public function get_num($num){
        return $this->num;
    }
    public function get_mail_address($mail_address){
        return $this->mail_address;
    }

}

?>