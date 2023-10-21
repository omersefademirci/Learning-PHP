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

$select = $db->query('SELECT * FROM users WHERE id > 2 AND users.id < 5');

// $sql = "SELECT * FROM users WHERE id > 2 AND id < 10 LIMIT 5 ";
$sql = "SELECT * FROM users WHERE id > 2 AND id < 10 ORDER BY user_grup DESC ";
$q = $db->query($sql);
$users = $q->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($users);

?>