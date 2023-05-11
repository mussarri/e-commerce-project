<?php

global $db;
if (post('submit')) {
    if (!post('username')){
        $error = 'Kullanıcı adını giriniz';
    }elseif (!post('password')){
        $error = 'Şifrenizi giriniz';
    }else{
        $username = post('username');
        $password = post('password');
        $query = $db->prepare('SELECT * FROM ecommerce.user WHERE username=:username');
        $query->execute([
            'username' => $username,
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);
        if (!$row){
            $error = 'Kullanıcı bulunamadı';
        }elseif(!password_verify($password, $row['password'])){
            $error = 'Yanlış parola';
        }else{
            login($row);
            $success='Başarı ile giriş yaptınız';
            header('Refresh:3;url=' . site_url());
        }
    }
}

require view('login');