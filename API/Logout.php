<?php
    setcookie('Auth', $username, time() - 3600 * 24 * 30, '/');
    unset($_COOKIE['Auth']);
    echo true;
?>