<?php 

require 'connect.php';

$sql = "SELECT COUNT(id) total, user_surname FROM test GROUP BY user_surname"; $query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}
 

?>