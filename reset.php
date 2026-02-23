<?php
require_once 'main/inc/global.inc.php';

$newpass = password_hash('Admin123', PASSWORD_DEFAULT);

$sql = "UPDATE user SET password = '$newpass' WHERE username = 'admin'";
Database::query($sql);

echo "Password berhasil direset ke: Admin123";
