<?php



assert($conect = mysqli_connect($host = "127.0.0.1", "root", $password="", $data= "dsatbase"));    //Подключаемся к базе данных
mysqli_select_db($conect, 'dsatbase');                                               //Устанавливаем базу данных для запросов


//Подключаемся к базе данных
if ($conect -> connect_error)
{
  die('Ошибка подключения (' . $conect->connect_errno . ')' . $conect -> connect_error);
}


function addpercent($asd)
{
    return '%'.$asd.'%';
}

//$query = "SELECT SCAN,transactions.thickness as transactions_thickness,customer.Customer as customer_Customer,TEXT_com,COAST
             // FROM transactions
              //INNER JOIN customer ON transactions.id_customer = customer.id_customer";
$Count = 0;


if(isset($_GET['aplFilter']))
{
        $transactions_thickness = '%%';
        $customer_Customer = '%%';
        $TEXT_com = '%%';
        $pr_start = 0;
        $pr_end = PHP_INT_MAX;
    $query = "SELECT SCAN,transactions.thickness as transactions_thickness,customer.Customer as customer_Customer,TEXT_com,COAST
              FROM transactions
              INNER JOIN customer ON transactions.id_customer = customer.id_customer WHERE ";



            if (!empty($_GET['pr_start'])){


                $pr_start = $_GET['pr_start'];
                $query .= 'COAST >= '.$pr_start;

                $Count++;
            }

            if (!empty($_GET['pr_end'])){
                if ($Count > 0){$query .= ' AND ';}
                $pr_end = $_GET['pr_end'];
                $query .= 'COAST <= '.$pr_end;

                $Count++;
            }


      if (!empty($_GET['transactions_thickness'])){
          if ($Count > 0){$query .= ' AND ';}
          $transactions_thickness = addpercent($_GET['transactions_thickness']);

          $query .= ' transactions.thickness = '.' "'.$_GET['transactions_thickness'].'"';
        $Count++;
      }




      if (!empty($_GET['customer_Customer'])){
          if ($Count > 0){$query .= ' AND ';}
        $customer_Customer = addpercent($_GET['customer_Customer']);

          $query .= 'customer.Customer = '.' "'.$_GET['customer_Customer'].'"';
          $Count++;
      }



      if (!empty($_GET['TEXT_com'])){
          if ($Count > 0){$query .= ' AND ';}
        $TEXT_com = addpercent($_GET['TEXT_com']);

          //$query .= 'TEXT_com = '.' "'.$_GET['TEXT_com'].'"';
          $query .= ' TEXT_com LIKE'.' "'.$TEXT_com.'"';
          //$query .= 'TEXT_com LIKE '.$TEXT_com;

        $Count++;
      }





}



else
{
    $query = "SELECT SCAN,transactions.thickness as transactions_thickness,customer.Customer as customer_Customer,TEXT_com,COAST
              FROM transactions
              INNER JOIN customer ON transactions.id_customer = customer.id_customer";
  $_GET['transactions_thickness'] = "";
  $_GET['customer_Customer'] = "";
  $_GET['TEXT_com'] = "";
  $_GET['COAST'] = "";
  $_GET['pr_start'] = "";
  $_GET['pr_end'] = "";


}
$PrepareAppleQuery = mysqli_prepare($conect, $query);
mysqli_stmt_execute($PrepareAppleQuery);
$Result = mysqli_stmt_get_result($PrepareAppleQuery);
$monic = mysqli_fetch_all($Result, MYSQLI_ASSOC);


//$stmt = mysqli_prepare($conect, $query) or die(mysqli_error($conect));
?>

