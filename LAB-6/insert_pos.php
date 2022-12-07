<?php


        /*require 'sql_query.php';
        require 'connect.php';

        $price = $_POST['price'];
        $customer_Customer = $_POST['customer_Customer'];
        $TEXT_com = $_POST['TEXT_com'];
        $transactions_thickness = $_POST['transactions_thickness'];

        mysqli_query( conect() , query_insert_pos( $price , $customer_Customer, $TEXT_com , $transactions_thickness ));*/





        /*class static function get*/



        class Database{
            private static $instance = null;

            private static $connection = null;

            protected function __construct()
            {

                $this->connection = new \PDO(
                    "mysql:host=127.0.0.1;dbname=dsatbase;charset=utf8",
                    "root",
                    "",
                    [
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,

                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

                        PDO::ATTR_EMULATE_PREPARES => false
                    ]

                );

            }


            protected function __clone(){

            }

            public function __wakeup(){
                throw new \BadFunctionCallException('unlable to ....');
            }

            public static function getInstance():Database
            {
               if (null=== self::$instance){
                   self::$instance = new static();
               }

               return self::$instance;
            }

            public static function connection(): \PDO
            {
                return static::getInstance()->connection;
            }

            public static function prepare($statement):\PDOStatement
            {
                return static::connection()->prepare($statement);
            }

            public static  function lastInsertID():int
            {
                return intval(  static::connection()->self::lastInsertID());
            }

        }


