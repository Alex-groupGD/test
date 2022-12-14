<?php
require_once ('include/insert_pos.php');

class delete{
    public  function delete_user($id){
        $query = Database::prepare('
        DELETE FROM `transactions` WHERE `id` = :id
        ');

        $query->bindValue(":id",$id);

        if(!$query->execute()){
            throw new PDOException('ошибка при добавлении позиции');
        }
        else{
            return header('Location: ../all_sp.php');
        }

    }

}

if(!empty($_POST['id'])){
    $delete = new delete;
    $delete ->delete_user($_POST['id']);
}
