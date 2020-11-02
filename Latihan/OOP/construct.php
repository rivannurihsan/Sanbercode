<?php

require_once 'robot.php';
require_once 'hewan.php';
require_once 'orang.php';


$robot1 = new robot("asik bos",20);
$robot2 = new robot("as",30);
//echo 'suara robot : '. $robot1->suara .' ,punya berat : '. $robot1->berat;
//$robot1->bersuara();
//echo $robot1->berat_robot();
// echo "Before ";
// echo 'bunyinya ' . $robot1->get_suara() .'<br>';
// echo 'berat ' .$robot1->get_berat().'<br>';
// echo "After ";
// $robot1->set_berat(100);
// echo 'bunyinya ' . $robot1->get_suara() .'<br>';
// echo 'berat ' .$robot1->get_berat();

// $robothewan = new robot_hewan("masuk bos ",5);
// echo $robothewan->get_suara();
// echo $robothewan->testing();

// orang::bersuara();
// echo orang::$suara;

$robot1->set_suara("mantap mamang");
$robot1->set_berat(45);

$robot1->set_suara("zx mamang")->set_berat(8);

echo $robot1->suara . '-' .  $robot1->berat;

?>
