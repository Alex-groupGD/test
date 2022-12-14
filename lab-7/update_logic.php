<?php
require_once ('include/insert_pos.php');

class update{
    public function update_pos( $id , $SCAN , $price , $customer_Customer, $TEXT_com, $transactions_thickness){
        $query = Database::prepare(
            'UPDATE `transactions` SET `SCAN` = :SCAN , 
                        `thickness` = :transactions_thickness,
                        `id_customer` = :customer_Customer, 
                        `TEXT_com`=:TEXT_com, 
                        `COAST` =:price
                        WHERE `id` = :id
            '
        );


        $query->bindValue(":id",$id);
        $query->bindValue(":transactions_thickness",$transactions_thickness);
        $query->bindValue(":price",$price);
        $query->bindValue(":customer_Customer",$customer_Customer);
        $query->bindValue(":TEXT_com",$TEXT_com);
        $query->bindValue(":SCAN",$SCAN);

        $query->execute();

        return header('Location: ../all_sp.php');



    }

}


$up = new update;
$up->update_pos($_POST['id'],$_POST['SCAN'],$_POST['price'], $_POST['customer_Customer'] ,$_POST['TEXT_com'] ,$_POST['transactions_thickness']);