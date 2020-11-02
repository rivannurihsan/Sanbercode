<?php

    trait hewan{
        public $nama;
        public $darah = 50;
        public $jumlahkaki;
        public $keahlian;
        public function atraksi(){
            echo $this->nama . " Sedang " . $this->keahlian . "<br>";
        }
    }

    trait fight{
        public $attackpower;
        public $deffencepower;
        public function serang($lawan){
            return $this->nama . " sedang menyerang " . $lawan->nama . "<br>";
        }
        public function diserang($lawan){
            $this->darah = $this->darah - $lawan->attackpower / $lawan->deffencepower; 
            echo $this->nama . " sedang diserang " . $lawan->nama . "<br>";
        }
    }

    class elang{
        use hewan,fight;
        public function __construct($nama){
            $this->nama = $nama;
            $this->jumlahkaki = 2;
            $this->keahlian = "Terbang Tinggi";
            $this->attackpower = 10;
            $this->deffencepower = 5;
        }
        public function getinfohewan(){
            echo "=============================================<br>";
            echo "jenis hewan = " . get_class($this) . "<br>";
            echo "nama hewan = " . $this->nama . "<br>";
            echo "jumlah kaki = " . $this->jumlahkaki . "<br>";
            echo "keahlian = " . $this->keahlian . "<br>";
            echo "darah = " . $this->darah . "<br>";
            echo "attack power = " . $this->attackpower . "<br>";
            echo "deffence power = " . $this->deffencepower . "<br>";
            echo "=============================================<br><hr>";
        }
    }

    class harimau{
        use hewan,fight;
        public function __construct($nama){
            $this->nama = $nama;
            $this->jumlahkaki = 4;
            $this->keahlian = "Lari Cepat";
            $this->attackpower = 7;
            $this->deffencepower = 8;
        }
        public function getinfohewan(){
            echo "=============================================<br>";
            echo "jenis hewan = " . get_class($this) . "<br>";
            echo "nama hewan = " . $this->nama . "<br>";
            echo "jumlah kaki = " . $this->jumlahkaki . "<br>";
            echo "keahlian = " . $this->keahlian . "<br>";
            echo "darah = " . $this->darah . "<br>";
            echo "attack power = " . $this->attackpower . "<br>";
            echo "deffence power = " . $this->deffencepower . "<br>";
            echo "=============================================<br><hr>";
        }
    }
    
    //main program
    $elang_1 = new elang("elang_1");
    
    $harimau_1 = new harimau("harimau_1");

    $elang_1->getinfohewan();
    $harimau_1->getinfohewan();
    
    while ($harimau_1->darah >0) {
        $elang_1->atraksi();
        echo $elang_1->serang($harimau_1);
        echo $harimau_1->diserang($elang_1);
        echo "darah " . $harimau_1->nama . " = ". $harimau_1->darah. "<br><br>";
        if ($harimau_1->darah <= 0) {
            echo "darah " . $harimau_1->nama . " = 0" . "<br><br>";
            break;
        }
    }
?>