<?php 

/**
 * Hata Yönetimi
 */

// ini_set('display_errors',true);
// echo phpinfo();

//Tüm hataların gösterimi için hata raporlamalarını aktif etmeliyiz.

ini_set('display_errors', E_ALL); ini_set('display_startup_errors', 1);
error_reporting(1);

//phpinfo(); PHP'nin yapılandırması hakkında bilgi verir

/** */

// Hata Bastırma Operatörü (@)
// Fatal Error dışındaki hataları bastırmak için kullanılabilir.
// Olmayan bir değişkeni yazdırmaya çalışalım. echo @$test; // Uyarı vermeyecektir.

//try-catch yapısı
class MyError extends Exception {

    public function Bomb()
    {
        return '<div style="background-color: #000000; color: #ffffff; width: 100%; padding: 20px">
                    <p>'. $this->message .'</p>
                    <p><small>Dosya Yolu: '. $this->file .'</small></p>
                    <p><small>Hata Satırı: '. $this->line .'</small></p>
                </div>';
    }
}
try {
    throw new MyError('Şimdi böyle bir hata yazdırdığımızı düşünelim.');
}catch (MyError $e){
    echo $e->Bomb();
}

error_reporting();
// Hata raporlamayı tamamen kapatalım error_reporting(0);

// Basit hataları raporlayalım
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// E_NOTICE de raporlansa iyi olur (ilklendirilmemiş değişkenleri
// veya yanlış yazılmış değişken isimlerini yakalamak için, vb)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// E_NOTICE hariç bütün hatalar raporlansın
// Bu php.ini içindeki öntanımlı değerdir
error_reporting(E_ALL & ~E_NOTICE);

// Tüm PHP hatalarını raporlayalım
error_reporting(E_ALL);

// Tüm PHP hatalarını raporlayalım
error_reporting(-1);

// error_reporting(E_ALL) ile aynı;
ini_set('error_reporting', E_ALL);

?>