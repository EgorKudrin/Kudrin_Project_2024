<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FoodZero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mycss/styles.css">
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
        <div class="con-green">
            <header>
                <div class="con-right">
                    <a href="index.html"><img src="/img/Logo.png" alt="Логотип" style="max-width: 200px;"></a>
                    <button type="button" class="none-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="/img/NaviOpen.png" alt="Меню">
                    </button>
                </div>
                <div class="con-left d-sm-none d-md-block" style="width: 350px;">
                    <div class="text-number">+7 000 000 00 00</div>
                    <button class="bron">
                        <a href="login.html" style="text-decoration: none; color: white;">
                            Личный кабинет
                        </a>
                    </button>
                </div>
            </header>
            <div class="about">
                <div class="contaniner">
                    <div class="row">
                        <div class="col">
                            <h1>Здоровое питание важная часть жизни</h1>
                            <div class="text-green">Ресторан здоровой кухни города Б</div>
                            <img src="/img/plates.png" alt="крупы" class="three">
                        </div>
                        <div class="col">
                            <img src="/img/Image-1.png" alt="Блюдо" style="max-width: 500px; max-height: 630px;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="/img/Image-2.png" alt="блюдо" style="max-width: 500px; max-height: 353px;">
                            <h4>Начни еду прямо сейчас</h4>
                            <div class="text-green">
                                Здесь вы найдёте блюда, приготовленные из свежих и натуральных ингредиентов, 
                                которые помогут вам сохранить здоровье и улучшить самочувствие. 
                            </div>
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <div class="text-green">
                                В нашем ресторане вы сможете насладиться уютной атмосферой, 
                                приятной музыкой и внимательным обслуживанием. 
                            </div>
                            <img src="/img/Image-3.png" alt="блюдо" style="max-width: 500px; max-height: 890px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="con-bg">
            <div class="con-main">
                <h3>Наше меню</h3>

                <div class="prace">
                    <div class="container">
                        <div class="row">
                            <?php
                            $dbUser = 'root';
                            $dbName = 'food';
                            $dbPass = 'root';
                
                            $mysqli = new mysqli('localhost', $dbUser, $dbPass, $dbName);
                            $query = "set names utf8";
                            $mysqli->query($query);
                            $query = "select * from menu";
                            $results = $mysqli->query($query);
                            while($row = $results->fetch_assoc()){
                            echo '
                            <div class="col bludo">
                                <div class="position">
                                    <div class="money">'.$row["prace"].'₽</div>
                                    <div class="position-h">'.$row["name"].'</div>
                                    <div class="about-position">'.$row["about"].'</div>
                                </div>
                            </div>
                            ';}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="con-about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="/img/group-1.png" alt="повар" style="max-width: 700px; max-height: 950px;">
                    </div>
                    <div class="col">
                        <h3>Идеально для вас</h3>
                        <div class="text-about">
                            Мы предлагаем широкий ассортимент вегетарианских, веганских и безглютеновых блюд, 
                            а также разнообразные напитки и десерты. 
                        </div>
                        <img src="/img/Leaf.png" alt="лист" style="max-width: 350px; max-height: 350px; margin: 20% 0% 0% 20%;">
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