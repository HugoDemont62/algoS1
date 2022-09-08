<?php
session_start();

    try {
        $db = new PDO('mysql:localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo "Connection failed : " . $e->getMessage();
    }




