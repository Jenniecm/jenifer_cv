<?php 
class Utils {
    public static function date_format_letters (string $date) :string
    {
        $month = "";
        if ($date == "ce jour"){
            return $date;
        }

        $sub_date= date_parse($date);

        switch ($sub_date['month']){
            case 1: 
            $month="Janvier";
            break;

            case 2: 
            $month="Fevrier";
            break;

            case 3: 
            $month="Mars";
            break;

            case 4: 
            $month="Avril";
            break;

            case 5: 
            $month="Mai";
            break;

            case 6: 
            $month="Juin";
            break;

            case 7: 
            $month="Juillet";
            break;

            case 8: 
            $month="Aout";
            break;

            case 9: 
            $month="Septembre";
            break;

            case 10: 
            $month="Octobre";
            break;

            case 11: 
            $month="Novembre";
            break;

            case 12: 
            $month="Decembre";
            break;
            default: die("invalid date");
             

        }
 
        return $month." ".$sub_date["year"];

    }

    public static function count (array $array_of_date) : int
    {

        $array_of_timeStamp = array();
        foreach ($array_of_date as $a){
            array_push($array_of_timeStamp, strtotime($a));
        }

        $min= $array_of_timeStamp[0];
        foreach($array_of_timeStamp as $a){
            if ($a <= $min){
                $min = $a;
            }
        }

        $date_actuel = strtotime(date ("Y-m-d"));
        $experience_time= $date_actuel - $min;

        return round($experience_time/(60*60*24*365));
    }
}
  
// echo Utils::count("2002-09-13");

?>