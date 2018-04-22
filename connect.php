<?php

/* konfigurasi */
$user = 'human';
$pass = 'rahasia';
$host = 'localhost';
$db   = 'phonebook';

/* buat koneksi ke server mysql */
$link = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()) {
    echo "Database Failed to Built";
    exit;
}