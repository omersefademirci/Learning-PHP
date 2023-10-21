<?php 

/*
 *   ## JSON
 *   
 *   JSON veri depolama ve veri alışverişi için kullanılan bir formattır.
 *   JSON .json uzantılı dosyalarda tutulabilir.
 *   JSON formatı,benzer fonksiyonlara sahip olan XML‘e (ing) daha basit ve hafif bir alternatiftir.
 *   Veriler Anahtar-Değer şeklinde tutulur.
 *   Bir JSON nesnesi {} küme parantezleriyle başlar ve biter.
 *   İçinde iki veya daha fazla anahtar/değer çiftlerine sahip olabilir ve bu ikisini bir virgül ile ayırır.
 *   Anahtar ve değerler : ile ayrılır {'isim': 'Şahin'} .
 *
 *  ## XML
 * 
 * - XML Extensible Markup Language, Genişletilebilir Biçimlendirme Dili
 * Xml gibi bir işaretleme dilidirç
 * Veriler hiyerarşik biçimde etiketler arasında tutulur.
 * .xml uzantılı dosyalar içerisinde tutulabilir.
*/


// $array = [
//     'name' => 'Sefa',
//     'surname' => 'Demirci',
//     'birthofday' => '26.03.2001'
// ];

// $obj = '{
//     "name" : "Sefa",
//     "surname" : "Sefa",
//     "birthofday" : "26.03.2001"
// }';
// $array = json_decode($obj);

// $obj = file_get_contents('user.json');

// $array = json_decode($obj, true);
// echo "<pre>";
// print_r($array); 


// echo json_encode($array);

// echo "<pre>";
// print_r($array);

// echo $array->name;

#Xml
// header("Content-type: application/xml; charset='utf8'")


// $users = simplexml_load_file('users.xml');
// echo "<pre>";
// print_r($users);


header('Content-type: application/xml charset="utf8" ');

$xml = new SimpleXMLElement('<kisiler/>');

// $user = $xml->addChild('user');
//     $user->addChild('name','Sefa');
//     $user->addChild('surname','Demirci');
//     $user->addChild('birth_of_day','26.03.2001');

    // echo $xml->asXML();

    require '../19-PDO/connect.php';
    
    $sql = "SELECT * From users";
    
    $q = $db->query($sql);

    $users = $q->fetchAll(PDO::FETCH_ASSOC);

    foreach($users as $user):
        $userXml = $xml->addChild('kisi');
        $userXml->addChild('name',$user['user_name']);
        $userXml->addChild('surname',$user['user_surname']);
        $userXml->addChild('group',$user['user_grup']);

    endforeach;
    
    echo $xml->asXML();









?>

