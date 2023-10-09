<?php 

    /**
     * Chained Method yani Zincirleme Method
     * Bir sınıf içerisinde methodlar geriye sınıfın kendisini döndürdüğünde -> ile devam ederek ardına zincirleme olarak başka bir method daha alabilirler.
     * Aslında işin mantığı methodun geriye o sınıfın kendisini döndürüyor olmasıdır. Aşağıdaki örnekte bunu daha iyi anlayabiliriz.
     */

    class islem{
        
        public $sayi1;
        public $sayi2;

        public $toplam;
        public $carpim;
        public $bolum;
        public $fark;

        public function topla(){
            $this->toplam = $this->sayi1 + $this-> sayi2;
            return $this;
        }
        public function carp(){
            $this->carpim = $this->sayi1 * $this-> sayi2;
            return $this;
        }
        public function cikar(){
            $this->fark = $this->sayi1 - $this-> sayi2;
            return $this;
        }
        public function bol(){
            $this->bolum = $this->sayi1 / $this-> sayi2;
            return $this;
        }
        public function goster(){
            echo $this->carpim.'<br>';
            echo $this->toplam.'<br>';
            echo $this->fark.'<br>';
            echo $this->bolum.'<br>';
        }
    }
    $islem = new islem();
    $islem->sayi1 = 10;
    $islem->sayi2 = 5;

    $islem->topla()->carp()->cikar()->bol()->goster();


?>