<?php 

session_start();

if(isset($_SESSION['name'])){
    
    echo 'Merhaba '. $_SESSION['name']. ' hoş geldiniz.'; 
}else{
    echo 'Lütfen oturum açınız';
}

// echo $_SESSION['name'];