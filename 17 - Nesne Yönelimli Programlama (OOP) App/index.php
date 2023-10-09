<?php 

    class Sekil{
        public $a, $b, $c;

        function __construct($a, $b = null, $c = null){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

    }

    class Diktortgen extends sekil{

        public function cevreHesapla(){
            return 2 * ($this->a + $this->b);
        }
        public function alanHesapla(){
            return $this->a * $this->b;
        }
    }

    class Ucgen extends sekil{
        
        public function cevreHesapla(){
            return ($this->a * 2) + $this->b; 
        }
        public function alanHesapla(){
            return ($this->a * $this->b) / 2; 

        }
    }

    class Kare extends sekil{

        public function cevreHesapla(){
            return 4 * $this->a;
        }
        public function alanHesapla(){
            return $this->a * $this->a; 

        }
    }

    $diktorgen = new Diktortgen(3,5);
    $ucgen = new Ucgen(3,6);
    $kare = new Kare(5);

    echo "Uzun kenarı: <b>".$diktorgen->a."</b> Kısa kenarı: <b>".$diktorgen->b."</b> olan Dikdörtgenin ÇEVRESİ: <b>".$diktorgen->cevreHesapla()."</b> ALANI: <b>".$diktorgen->alanHesapla()."</b><br><br>";
echo "Bir kenarının uzunluğu: <b>".$ucgen->a."</b> Yükseklik: <b>".$ucgen->b." Çevresi: ".$ucgen->cevreHesapla()."</b> ALANI: <b>".$ucgen->alanHesapla()."</b> <br><br>";
echo "Kenar uzunluğu: <b>".$kare->a."</b> olan Karenin ÇEVRESİ: <b>".$kare->cevreHesapla()."</b> ALANI: <b>".$kare->alanHesapla()."</b>";


?>