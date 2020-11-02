<?php

class robot{
    //property
    public $suara;
    public $berat;

    //metode set dan get

    public function set_suara($suara1){
        $this->suara = $suara1;
    }

    public function get_suara(){
        return $this->suara;
    }

    //metode
    public function bersuara(){
        echo 'suara robot : '. $this->suara;
    }

    public function berat_robot(){
        return $this->berat;
    }
}

//$robot1 = new robot;
//echo 'suara robot : '. $robot1->suara .' ,punya berat : '. $robot1->berat;
$robot1->bersuara();
echo $robot1->berat_robot();
$robot1->set_suara("asik bos");
echo 'bunyinya ' .$robot1->get_suara();
?>