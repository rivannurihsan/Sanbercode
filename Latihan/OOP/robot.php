<?php
    class robot{
        //property
        public $suara;
        public $berat;
    
        //construct
        public function __construct($suara, $berat){
            $this->suara = $suara;
            $this->berat = $berat;
        }
    
        //metode set dan get
    
        public function set_suara($suara1){
            $this->suara = $suara1;
            return $this;
        }
        public function set_berat($berat){
            $this->berat = $berat;
        }
    
        public function get_suara(){
            return $this->suara;
        }
        public function get_berat(){
            return $this->berat;
        }
    
        //metode
        public function bersuara(){
            echo 'suara robot : '. $this->suara;
        }
    
        public function berat_robot(){
            return $this->berat;
        }
    }
?>