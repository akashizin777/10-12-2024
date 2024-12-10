<?php

try {
    $banco = new PDO("sqlite:".__DIR__."/../../banco.sql");
} catch (\PDOException $e) {
    echo "Deu erro no banco ".$e->getMessage(); 
}