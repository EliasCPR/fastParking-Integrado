<?php

namespace App\Core;

class Model
{
    //Vamos aplicar o padrão de projeto Singleton
    private static $conexao;

    public static function getConexao()
    {



        $host = $_ENV["database_host"];
        $user = $_ENV["database_user"];
        $password = $_ENV["database_pass"]


        //se a conexão não estiver criada, criamos ela
        if(!isset(self::$conexao)){
            //self é usado para pegar um atributo estáticoo desta classe
            self::$conexao = new \PDO("mysql:host=$host;port=3306;dbname=fastParking;", $user, $password);
        }

        //retornamos a connexão
        return self::$conexao;
    }
}
