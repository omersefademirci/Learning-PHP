<?php 

require 'connect.php';

# INNER JOİN

/*
$sql = "SELECT page_category, ptc.page_title FROM page         INNER JOIN page_to_content ptc on page.page_id = ptc.page_id
        WHERE page_type = 'service'";


$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}
*/


# INNER JOİN

/*
$sql = "SELECT page_category, ptc.page_title FROM page         LEFT JOIN page_to_content ptc on page.page_id = ptc.page_id
        WHERE page_type = 'service'";


$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}
*/


# RIGHT JOİN

/*
$sql = "SELECT page_category, ptc.page_title FROM page         RIGHT JOIN page_to_content ptc on page.page_id = ptc.page_id
        WHERE page_type = 'service'";


$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}
*/

/*
CREATE TABLE IF NOT EXISTS groups ( gorup_id INT(1) AUTO_INCREMENT, group_name VARCHAR(50), PRIMARY KEY (gorup_id) );

INSERT INTO groups (group_name) VALUES ('PHP Developer'),('Javascript Developer'),('C# Developer'),('Java Developer'),('React Developer'); 


 */
?>