<?php 

function conectarDB() : mysqli {
    $db = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_BD']);
    // $db = new mysqli('localhost', 'id19910716_bienesraices_crud_edgarp', 'FC$v\8|o-O]t{s=x', 'id19910716_bienesraices_crud');

    // debuguear($_ENV);

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
    
}