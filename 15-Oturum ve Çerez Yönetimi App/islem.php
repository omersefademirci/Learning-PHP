<?php

session_start();

include 'functions/helper.php';

$user = [
   'sahinserver' => [
        'eposta' => 'sahin@stebilsin.com',
        'password' => '123456'
    ],
   'sefademirci'=> [
        'eposta' => 'omersefademirci@gmail.com',
        'password' => '1422'
    ],
];

if (get('islem') == 'giris'){

    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if(!post('username')){
        // echo 'Lütfen kullanıcı adınızı giriniz!';
        $_SESSION['error'] = 'Lütfen kullanıcı adınızı giriniz!';
        header('Location:login.php');
        exit();
    }elseif (!post('password')){    
        $_SESSION['error'] = 'Lütfen kullanıcı şifrenizi giriniz';
        header('Location:login.php');
        exit();
    }else{

        if(array_key_exists(post('username'), $user)){

            if($user[post('username')]['password'] == post('password')){
                
                $_SESSION['login'] = true;
                $_SESSION['kullanici_adi'] = post('username');
                $_SESSION['eposta'] = $user[post('username')]['eposta']; 
                header('Location:index.php');
                exit();
            
            }else{
                
                $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı!';
                header('Location:login.php');
                exit();
            }

        }else{
            $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı!';
            header('Location:login.php');
            exit();
        }
    }
}

if(get('islem') == 'hakkimda'){

    $aboutMe = post(('hakkimda'));
    $file = 'db/'.session('kullanici_adi').'.txt';
 
    $islem = file_put_contents($file, htmlspecialchars($aboutMe));
    if($islem){
        header('Location:index.php?islem=true');
    }else{
        header('Location:index.php?islem=false');
    }

}

if(get('islem') == 'logout' ){

    session_destroy();
    session_start();

    $_SESSION['error'] = "Oturum sonlandırıldı";
    header('Location:login.php');
}

if(get('islem') == 'change'){

    setcookie('color', get('color'), time() + (86400 * 360) );

    header('Location:'.$_SERVER['HTTP_REFERER'] ?? 'index.php' );

}