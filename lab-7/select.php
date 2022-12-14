<?php
require_once ('include/insert_pos.php');

class select
{
    public static function select_pos(): ?array
    {
        $query = Database::prepare('
        SELECT id ,SCAN,transactions.thickness as transactions_thickness,customer.Customer as customer_Customer,TEXT_com,COAST
              FROM transactions
              INNER JOIN customer ON transactions.id_customer = customer.id_customer
        ');
        $query->execute();
        $positions = $query->fetchAll();
        /*var_dump(compact('positions'));*/


        if(!count($positions)){
            return null ;
        }


        return $positions;
    }

    public static function select_pos_where_id($id): ?array
    {

        $query = Database::prepare('
        SELECT   id, SCAN,transactions.thickness as transactions_thickness,customer.Customer as customer_Customer,TEXT_com,COAST 
              FROM transactions
              INNER JOIN customer ON transactions.id_customer = customer.id_customer WHERE  `id` = :id
        ');


        $query->bindValue(":id",$id);
        $query->execute();
        $position = $query->fetchAll();



        if(!count($position)){
            return null ;
        }


        return $position;
    }



}