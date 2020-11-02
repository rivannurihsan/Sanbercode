<?php 
    require_once 'robot.php';
    //inheritance
    class robot_hewan extends robot{

        public function get_kekuatan(){
            echo "Bisa Renang....";
        }
        //overriding
        public function get_suara(){
            return 'Suaranya adalah ....' . $this->suara;
        }

        public function testing(){
            //return self::get_suara();
            return parent::get_suara();
        }

    }
?>