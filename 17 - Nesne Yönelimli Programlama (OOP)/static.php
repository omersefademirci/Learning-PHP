<?php 

    /**
     * Static method
     * Sınıf özelliklerinin ya da methodların static olarak tanımlanması, 
     * o özelliklerin ve yöntemlerin sınıfı başlatmadan kullanılabilmesini sağlar.
     * 
     * Static methodlar Ram'de tutulur ve daha performaslıdır.
     * 
     * Static methodlar Ram'de tutulduğu için sınıfı tekrar başlattığımızda statik olarak güncellenen verilere ulaşabiliriz.
     * 
     * Static değerlere "this" yerine "self" ile erişebiliyoruz
     */

     class UserStatic{

        public static $isim;
        public $soyisim;

        public static function setIsım($isim){

            self::$isim = $isim;
        }
        public static function getIsım($isim){

            return self::$isim;
        }


    }        
    UserStatic::setIsım('sefa');
    echo UserStatic::getIsım('sefa');


?>