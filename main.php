<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FoodZero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mycss/style.css">
</head> 
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="none-btn" data-bs-dismiss="modal">
                        <img src="/img/NaviClose.png" alt="Закрыть">
                    </button>
                    <ul class="menu">
                        <li class="nav-item">
                            <a href="index.php" class="a-h2">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="main.php" class="a-h2">Меню</a>
                        </li>
                        <li class="nav-item">
                            <a href="bron.html" class="a-h2">Бронирование</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="a-h2">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>

  <main>
    <div class="con-h-h">
        <header>
            <div class="con-right">
                <a href="index.html"><img src="/img/Logo.png" alt="Логотип" style="max-width: 200px;"></a>
                <button type="button" class="none-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="/img/NaviOpen.png" alt="Меню">
                </button>
            </div>
            <div class="con-left d-sm-none d-md-block" style="width: 400px;">
                <div class="text-number">+7 000 000 00 00</div>
                <button class="bron">
                        <a href="login.html" style="text-decoration: none; color: white;">
                            Личный кабинет
                        </a>
                    </button>            
                </div>
        </header>

        <h1 style="margin-top: 15%;">Здоровое меню</h1>
    </div>

    <div class="con-main">
        <div class="" style="text-align: center;">
            <h3>Меню</h3>
            <div class="about-main">
                Здоровое меню для неравнодушных к себе
            </div>
        </div>

        <div class="container" style="margin-top: 5%;">
            <div class="row">
                <div class="col">
                    <img src="img/image-main.png" alt="блюдо" style="max-width: 500px;">
                </div>
                <div class="col">
                <div class="search-bar">
                    <form action="search.php" method="POST">
                        <input type="text" name="searchText">
                        <input type="submit" value="Искать" >
                    </form>        
                </div>
                    <?php
                    $dbUser = 'root';
                    $dbName = 'food';
                    $dbPass = 'root';
                
                    $searchText = $_POST['searchText'];
                    $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
                    $query = "set names utf8";
                    $mysqli->query($query);
                    $query = "select * from menu";
                    $results = $mysqli->query($query);
                    while($row = $results->fetch_assoc()){
                    echo '
                        <div class="position">
                            <div class="money">'.$row["prace"].'₽</div>
                            <div class="position-h">'.$row["name"].'</div>
                            <div class="about-position">'.$row["about"].'</div>
                        </div>
                    ';}?>
                </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
    <div class="con-logo">
        <h1>Food<br>Zero</h1>
    </div>
    <div class="con-con">
        <h6>Контакты</h6>

        <div class="con-text">
            +7 000 000 00 00 <br>
            foodzero@gmail.com <br>
            г. Барнаул, пр. Ленина 120
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>