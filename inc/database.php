<?php
    /* avisar sobre erros graves */
    mysqli_report(MYSQLI_REPORT_STRICT);

    /* abre a conexão com a base de dados, e retorna a conexão realizada */
    function open_database(){
        try{
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            return $conn;
        }catch(Exception $e){
            echo $e->getMessage();
            return null;
        }
    }

    /* fecha a conexão que for passada. */
    function close_database($conn){
        try{
            mysqli_close($conn);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    /* Pesquisa um Registro pelo ID em uma Tabela */
    function find($table = null, $id = null){
        $database = open_database();
        $found = null;

        try {
            if($id){
                $sql = "SELECT * FROM " . $table . " WHERE id = ". $id;
                $result = $database->query($sql);

                if($result->num_rows > 0){
                    $found = $result->fetch_assoc();
                } 
            }else{
                $sql = "SELECT * FROM " . $table;
                $result = $database->query($sql);

                if($result->num_rows > 0){
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                } 
            }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->getMessage();
            $_SESSION['type'] = 'danger';
        }

        close_database($database);
        return $found;
    }

    /* Pesquisa Todos os Registros de um tabela */
    function find_all($table){
        return find($table);
    }
?>