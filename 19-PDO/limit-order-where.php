<?php 

try{
    $db = new PDO('mysql:host=localhost;dbname=my_php','root');
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $db->setAttribute(3, 2);

    $db->query('SET @@lc_time_names = "tr_TR"; ');
    $db->query('SET CHARACTER SET utf8mb4');
    $db->query('SET CHARACTER_SET_CONNECTION = utf8mb4');
    

}catch (PDOException $exception){
    
    echo $exception->getMessage();
}
echo "<pre>";

$sql = "SELECT user_name FROM users WHERE user_name LIKE '%SEFA%' ";

$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);
print_r($users);



?>