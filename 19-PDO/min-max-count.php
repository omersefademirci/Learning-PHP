<?php 

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
echo "<pre>";

# MIN, MAX, COUNT KULLANIMI
// $sql = "SELECT MIN(id) as min_user_id, MAX(id) as max_user_id FROM users";

$sql = "SELECT COUNT(id) as toplam_id, user_name FROM users GROUP BY user_name HAVING toplam_id > 4";

$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);

print_r($users);
?>