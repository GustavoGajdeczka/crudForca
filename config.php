<?php
    /** O nome do banco de dados*/
    define('DB_NAME', 'crudforca');

    /** Usuário do banco de dados MySQL */
    define('DB_USER', 'root');

    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD', '');

    /** nome do host do MySQL */
    define('DB_HOST', 'localhost');

    /** caminho absoluto para a pasta do sistema **/
    if( !defined('ABSPATH')){
        define('ABSPATH', dirname(__FILE__) . '/');
    }

    /** caminho no server para o sistema **/
    if (!defined('BASE_URL')){
        define('BASE_URL', '/CRUD/');
    }

    /** caminho do arquivo de banco de dados **/
    if (!defined('DBAPI')){
        define('DBAPI', ABSPATH . 'inc/database.php');
    }

    try{
        $conexao = new PDO("mysql:host=localhost; dbname=crudforca", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
        var_dump($conexao);
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>