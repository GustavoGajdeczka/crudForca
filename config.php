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
        define('ABSPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
    }

    /** caminho no server para o sistema **/
    if (!defined('BASE_URL')){
        define('BASE_URL', DIRECTORY_SEPARATOR . 'CRUD' . DIRECTORY_SEPARATOR);
    }

    /** caminho do arquivo de banco de dados **/
    if (!defined('DBAPI')){
        define('DBAPI', ABSPATH . 'inc' . DIRECTORY_SEPARATOR . 'database.php');
    }

    /** caminhos dos templates de header e footer **/
    define('HEADER_TEMPLATE', ABSPATH . 'inc' . DIRECTORY_SEPARATOR .'header.php');
    define('FOOTER_TEMPLATE', ABSPATH . 'inc' . DIRECTORY_SEPARATOR .'footer.php');
?>