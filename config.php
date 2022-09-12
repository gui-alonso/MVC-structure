<?php

    require 'environment.php';

    if (ENVIRONMENT == 'development') {
        define("CONF_URL_TEST", "https://localhost/estrutura_mvc/");
        $config['dbname'] = 'estrutura_mvc';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    } else {
        define("CONF_URL_PRODUC", "https://localhost/estrutura_mvc/");
        $config['dbname'] = 'estrutura_mvc';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }

    global $db;

    try {

        $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
        
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMensage();
        exit;
    }