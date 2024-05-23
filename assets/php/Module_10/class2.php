<?php
session_name('Myapp');
session_start([
    'cookie_lifetime'=>60
]);
// $_SESSION['name']='Jahid Hasan';
echo $_SESSION['name'];
// session_destroy();