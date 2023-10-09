<?php 

    /**
    * 
    * Erişilebilirlik
    *
    * public
    * Her yerden erişilebilir.
    *
    * private
    * Sadece sınıf içerisinden erişilebilir.
    *   
    * protected
    * Dışarıdan erişilmez.
    * Sınıf içinde erişilebilir.
    * Miras alma yoluyla kullanılabilir.
    */

    //Kurucu Yıkıcı Methodlar
    class User
    {
        // User class tanımlandığında ilk çalışacak method
        public function __construct(){
            echo 'SINIF BAŞLADI';
        }

        // User class tanımlandığında en son çalışacak method
        public function __destruct(){
            echo 'SINIF SONLANDI';
        }

        public function hello(){
            echo 'Welcome to Construct and Destruct Methods'.'<br>';
        }

    }
    $user = new User();
    $user->hello();

    /**
     * Kalıtım
     * Bir sınıfın özellik ve methodlarını başka bir sınıfa aktarmamıza olanak sağlar.
     * 
     */

    class Hash{
        public function md5Hash($string){
            return md5($string);
        }
        public function sha1Hash($string){
            return sha1($string);
        }
    }

    class User2 extends Hash{

        public $username;
        public $password;

        public function saveUser($username, $password){

            $this->username = $username;
            $this->password = $this->md5Hash($password);

        }

        public function showUser($username, $password){

            $this->username = $username;
            $this->password = $this->sha1Hash($password);
            //extends edilen hash = parent
            $this->password = parent::sha1Hash($password);
        }

        public function sha1Hash($string){
            return sha1($string);
        }

    }

    $user2 = new User2();

    $user2->saveUser('sefa','sefaPassword');
    $user2->showUser('sefa','sefaPassword');

    /**
     * Final 
     * final olarak tanımlanan sınıflar ve methodlar kalıtım yoluyla çoğaltılamaz.
     */

    class Bir{

        public function methodBir(){
            echo "Method bir";
        }
    }

    class Iki extends Bir{

        final public function methodIki(){
            echo "Method iki";
        }
    }

    class Uc extends Iki{

        public function methodUc(){
            echo "Method Uc";
        }
        /**
         * Final Iki extends edildiği için aynı function ezilemez
         */
        
         //public function methodIki(){
        //    echo "Method iki";
        //}
    }

    $deger = new Uc();

    $deger->methodUc();
    $deger->methodIki();
    $deger->methodBir();




?>