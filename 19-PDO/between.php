<?php 

require 'connect.php';

$sql =  "SELECT * FROM users WHERE id BETWEEN 1 AND 5";

$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);

print_r($users);

?>