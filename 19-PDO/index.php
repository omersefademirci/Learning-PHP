<?php 


//PDO


// $db = new PDO('mysql:host=localhost;');

try{
    $db = new PDO('mysql:host=localhost;dbname=my_php','root');
    
    //Query
    // $db->query('USE my_php');
    // $db->query('CREATE TABLE test_table(
    //             id INT(1),
    //             test VARCHAR(144),
    //             PRIMARY KEY(id)
    //         )');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $db->setAttribute(3, 2);

    $db->query('SET @@lc_time_names = "tr_TR"; ');
    $db->query('SET CHARACTER SET utf8mb4');
    $db->query('SET CHARACTER_SET_CONNECTION = utf8mb4');
    

}catch (PDOException $exception){
    
    echo $exception->getMessage();
}

$select = $db->query('SELECT * FROM users');
// $users = $select->fetchAll(PDO::FETCH_ASSOC);
// // $users = $select->fetchAll(2);

// echo "<pre>";
// print_r($users);

// $update = $db->query('UPDATE users SET user_name = "Omer Sefa" WHERE id = 3 ');

// if($update){
//     echo "Güncellendi";
// }else{
//     echo "Güncelleme başarısız";
// }

// $delete = $db->query('DELETE FROM users WHERE id = 5');
// if($delete){
//     echo "Silindi";
// }else{
//     echo 'Silinmedi';
// }

// $insert = $db->query("INSERT INTO users SET user_name = 'Sefa', user_surname = 'Demirci', user_grup = 'A,B,C' ");
$q = $db->prepare("INSERT INTO users SET 
                    user_name = ?, 
                    user_surname = ?, 
                    user_grup = ?
                    ");

$insert = $q->execute(['Sefa','Demirci','A,B,C,D,E']);

if($q->rowCount()){
    
    //Db eklenen son id getirir
    echo $db->lastInsertId().'<br>';
    echo $q->rowCount().'.'."Eklendi";

}else{
    echo 'Eklenmedi';
}

// TEK VERİ EKLEME $sql = "INSERT INTO test SET isim = 'Ahmet', soyisim = 'ERSEVER', abonelikler = 'A,B,C'"; $query = $db->query($sql); 
//  if ( $query->rowCount() ){ echo $query->rowCount().' adet veri eklendi'; }
// ÇOKLU VERİ EKLEME
//  $sql = "INSERT INTO test (isim, soyisim, abonelikler) VALUES ('Ahmet', 'ÇAKAR', 'A,D'), ('Musa', 'KALKAN', 'D'), ('Mehmet', 'BÜYÜK', 'F')";
               
// $query = $db->query($sql);

// if ( $query->rowCount() ){
//     echo $query->rowCount().' adet veri eklendi';
// }
// UPDATE
// $sql = "UPDATE test SET isim = 'ŞAHİN' WHERE id = 1"; $query = $db->query($sql); 
// if ( $query->rowCount() ){ echo $query->rowCount().' adet veri güncellendi'; }
// READ
// $sql = "SELECT * FROM test"; $query = $db->query($sql); 
// if ( $query->rowCount() ){ print_r($query->fetchAll(PDO::FETCH_ASSOC)); }

// $sql = "SELECT * FROM test WHERE id = 1"; $query = $db->query($sql); 
// if ( $query->rowCount() ){ print_r($query->fetch(PDO::FETCH_ASSOC)); }
// DELETE
// $sql = "DELETE FROM test WHERE id > 10"; $query = $db->query($sql); 
// if ( $query->rowCount() ){ echo $query->rowCount(). ' adet satır silindi.';
// PREPARE
// $query = $db->prepare("INSERT INTO test SET isim = ?, soyisim = ?, abonelikler = ?"); $insert = $query->execute(["Fatma", "BURAK", "A,B,C"]); if ( $query->rowCount() ){ echo $db->lastInsertId(); echo ' '.$query->rowCount()." adet satır etkilendi!"; }

?>