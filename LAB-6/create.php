<?php
require_once ('include/insert_pos.php');

class  UserTable{
    public static function create( $SCAN , $price , $customer_Customer, $TEXT_com, $transactions_thickness){

        if($SCAN==null){
            header('Location: ../add_pos.php');
            exit();
        }
        if($price==null){
            header('Location: ../add_pos.php');
            exit();
        }if($customer_Customer==null){
            header('Location: ../add_pos.php');
            exit();
        }if($transactions_thickness==null){
            header('Location: ../add_pos.php');
            exit();
        }



        $query = Database::prepare(
            'INSERT INTO `transactions` ( `SCAN`, `thickness`, `id_customer`, `TEXT_com`, `COAST`) '.
            'VALUES ( :SCAN , :transactions_thickness , :customer_Customer , :TEXT_com,:price)'
        );







        $query->bindValue(":transactions_thickness",$transactions_thickness);
        $query->bindValue(":price",$price);
        $query->bindValue(":customer_Customer",$customer_Customer);
        $query->bindValue(":TEXT_com",$TEXT_com);
        $query->bindValue(":SCAN",$SCAN);

        if(!$query->execute()){
            throw new PDOException('ошибка при добавлении позиции');
        }

        return header('Location: ../all_sp.php');

    }

}





//var_dump($_POST);
$position = new UserTable;
$position -> create( $_POST['SCAN'],$_POST['price'], $_POST['customer_Customer'] ,$_POST['TEXT_com'] ,$_POST['transactions_thickness'] );

