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

// $sql =  "SELECT * FROM users WHERE id IN(1,2,3)";
$sql =  "SELECT * FROM users WHERE id NOT IN(1,2,3)";

$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);

print_r($users);