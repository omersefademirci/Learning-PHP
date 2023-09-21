<?php 


// SESSION

// Oturum kapanana kadar session açılır

session_start();
$_SESSION['name'] = 'Sefa';

// echo $_SESSION['name'];


// Oturum Silme

//session_destroy();