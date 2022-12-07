<?php
require_once ('include/insert_pos.php');

class select
{
    public static function select_pos(): ?array
    {
        $query = Database::prepare('
        SELECT SCAN,transactions.thickness as transactions_thickness,customer.Customer as customer_Customer,TEXT_com,COAST
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
}