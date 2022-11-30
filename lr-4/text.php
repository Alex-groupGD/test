<?php


require_once 'text_logic.php';
/*if ($_SESSION['user']) {
    header('Location: transactions.php');
} */?>



<!DOCTYPE html>

<html lang="en">
<meta charset="UTF-8">
<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
          xmlns="http://www.w3.org/1999/html">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="class.css">
</head>



<nav class="navbar navbar-expand-lg navbar-light bg-white" >
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" title="7 499 290 19 63"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file" viewBox="0 0 16 16">
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg> 8 (499) 290-19-63</a>
            </li>
            <li class="nav-item active">
                <text class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file" viewBox="0 0 16 16">
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg> 9:00 - 18:00</text>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#" title="info@wood-family.ru"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file" viewBox="0 0 16 16">
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg> info@wood-family.ru</a>
            </li>

        </ul>
    </div>

    <div class="position-absolute top-1 end-0 ">
        <p>Вы не авторизованы<a href="http://localhost/authorization_list.php?"> Ввести логин и пароль </a>или <a href="http://localhost/regist.php"> зарегистрироваться </a></p>
    </div>
    </div>
</nav>




<nav class="navbar navbar-expand-lg navbar-light bg-white">
 <span class="shadow">
    <div class="container-fluid"  style="text-align: left ">

      <img src="img/22.png" width="150" height="100" align="middle" style="margin-left: 100px; margin-top: 10px; margin-bottom: 10px;">


      <div class="container">

        <div class="row row-cols row-cols-lg-4 g-0 g-lg-0" >

          <div class="col-1" style="margin-left: 230px;margin-top: -92px;">

            <div class="nav-item dropdown">
          <span class="center">
            <a class="nav-link dropdown" href="" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #222222">
              <h6> О НАС</h6>

            </a></span>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
          <span class="center">
          <a class="dropdown-item" href="#">JAF в мир</a></span>
          <span class="center">
          <a class="dropdown-item" href="#">События</a></span>

        </div>
            </div>
          </div>

          <div class="col" style="margin-left: -20px;margin-top: -100px;">

            <div class="p ">
              <p class="center">

              <h6><a class="link-dark , nolonglink" href="https://mdbootstrap.com/">ПРОДУКЦИЯ ИЗ ДРЕВЕСИН</a></h6>
                </p>
            </div>

          </div>
          <div class="col" style="margin-left: 10px;margin-top: -80px;">
            <div class="p ">
              <div class="text-nowrap bd-highlight" style="margin-left: -120px;margin-top:   -5px;">
              <a class="link-dark , nolonglink" href="https://mdbootstrap.com/" > <h6>КРОВЕЛЬНАЯ ПРОДУКЦИЯ RUUKI</h6></p></a>
              </div>
            </div>
          </div>
          <div class="col"style="margin-left: 800px;margin-top: -85px;">
            <div class="p ">
              <div class="text-nowrap bd-highlight" style="width: 8rem;">
              <a class="link-dark , nolonglink" href="https://mdbootstrap.com/"  ><h6>ЗАКАЗ И ОПЛАТА</h6></p></a>
              </div>
            </div>
          </div>
          <div class="col" style="margin-left: 230px;margin-top: -60px;">
            <div class="p ">
              <a class="link-dark , nolonglink" href="https://mdbootstrap.com/" ><h6>ДОСТАВКА</h6></p></a>
            </div>
          </div>
          <div class="col" style="margin-left: 330px;margin-top: -60px;">
            <div class="p ">
              <a class="link-dark , nolonglink" href="https://mdbootstrap.com/" ><h6>КОНТАКТЫ</h6></p></a>
            </div>
          </div>
          <div class="col" style="margin-left: 430px;margin-top: -75px;">
            <div class="p ">
              <a class="link-dark , nolonglink" href="https://mdbootstrap.com/" ><p class="font-monospace"><h6>ПОРОДЫ ДЕРЕВА</h6></p></a>
            </div>
          </div>
        </span>

    </div>
    </div>
    </div>
</nav>
<body>

<div class="container-fluid" style="margin-top:5rem">
    <div class="row">
        <div class="col-md-1">
            <div class="p-1">

            </div>
        </div>
        <div class="col-md-10">

        </div>
        <div class="col-md-1"       >

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            <div class="p-1">

            </div>
        </div>
<!--////////////////////////////////////////////////////////////////////////-->
        <div class="col-md-1">

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">

        </div>

        <div class="col-md-10 mx-auto" style="background-color: white;min-height: 25rem;">
            <div class="text-center mt-3">
                <a href="text.php">
                    <button class="btn btn-secondary" style="height:3rem" >
                        Очистить
                    </button>
                </a>
                <a href="text.php?preset=1">
                    <button class="btn btn-secondary" style="height:3rem" >
                        Пресет №1
                    </button>
                </a>
                <a href="text.php?preset=2">
                    <button class="btn btn-secondary" style="height:3rem" >
                        Пресет №2
                    </button>
                </a>
                <a href="text.php?preset=3">
                    <button class="btn btn-secondary" style="height:3rem" >
                        Пресет №3
                    </button>
                </a>
                <a href="text.php?preset=x">
                    <button class="btn btn-secondary" style="height:3rem" >
                        Пресет № X
                    </button>
                </a>
            </div>




            <div class="container">
                <form class="m-5" action="text.php" method="post">
                    <label class="form-label" for="text">Введите текст</label>
                    <textarea class="form-control" name="text" id="text"><?php if(isset($_POST['text'])){ echo $_POST['text'];}?></textarea>
                    <button class="btn btn-primary mt-2">Отправить</button>
                </form>
        <div class="col-md-1">

        </div>
    </div>
</div>



        <table class="table">
            <tbody>
                <?php zad1()?>
            </tbody>
        </table>


        <table class="table">
            <tbody>
                <?php zad2() ?>
            </tbody>
        </table>

         <table class="table">
             <tbody>
                <?= zad3($_POST['text']) ?>
             </tbody>
         </table>


       <div><?php zad4($_POST['text']) ?></div>

<body>

<div  >
    <footer class="bg-dark text-center text-white" style="margin-top: 100px; min-height: 400px;" >


        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <p ><small><small>
                <div class="link-secondary" aria-current="page"  align="left" >
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-unstyled mb-0" style="margin-top: 50px; margin-left: 100px;">
                            <li>
                                <a href="#!" class="link-secondary" style=" text-decoration:none; ">Породы дерева</a>
                            </li>
                            <li>
                                <a href="#!" class="link-secondary" style=" text-decoration:none; ">Каталог</a>
                            </li>
                            <li>
                                <a href="#!" class="link-secondary" style=" text-decoration:none;">JAF в мире3</a>
                            </li>
                            <li>
                                <a href="#!" class="link-secondary" style=" text-decoration:none;">Контакты</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            </p> </small></small>
            <!--Grid column-->



            <!--Grid column-->

            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-start" style="background-color: rgba(0, 0, 0, 0.2);  margin-top: 180px;  min-height: 90px; ">
            <div class="breadcrumb-item active" aria-current="page" style="margin-left: 100px;  " >
                <p ><small><small>
                            © 2022

                            <a  class="link-secondary" href="https://mdbootstrap.com/" style=" text-decoration:none; text-decoration:none;"> ООО "Лесная семья" - дерево наш мир</a>– Все права защищены. Официальный сайт

                            <br>
                            ООО "Джей Эй Эф Рус" https://wood-family.ru
            </div>
            </p> </small></small>
        </div>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
</span>


</body>
</html>

