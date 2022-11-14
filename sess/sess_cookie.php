<?php
session_start();
$_SESSION['test'] = ' da luu';
// unset($_SESSION['test']); //xóa từng phần tử
// session_destroy(); //xóa hết
setcookie('test','thu nghiem',time()+36000);
echo 123 . ' ' . $_SESSION['test'];
