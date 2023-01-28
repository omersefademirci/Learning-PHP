<?php 

// Cookies 


// 1 saatlik geçerli cookie 
// *24,  24 saatlik
setcookie("username", time() + (60 * 60));
setcookie("username","sefademirci", time() + (60 * 60));
setcookie("login","true", time() + (60 * 60));


echo $_COOKIE["login"];

//guncelleme
setcookie("username","sefademirci", time() + (60 * 60 * 24 * 30));

//silme

setcookie("username","sefademirci",time() - 3600);
?>