<?php

if (isset($_COOKIE['micookie'])) {
    unset($_COOKIE['micookie']);
    setcookie('micookie','', time()-100);
}
if (isset($_COOKIE['micookie2'])) {
    unset($_COOKIE['micookie2']);
    setcookie('micookie2','', time()-100);
}

header('Location:ver_cookies.php');

?>