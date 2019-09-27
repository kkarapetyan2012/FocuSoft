<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="./src/js/jquery.js"></script>
    <script src="./src/js/base.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content_center">
            <div class="center d-flex">
                <a class="logo" href="index.php">
                    <img src="./src/img/logo.png" alt="">
                </a>
                
                <nav class="menu">
                    <img class="burger" src="./src/img/burger.png" alt="">
                    
                    <ul class="d-flex  justify-content_space-between">
                        <li><a href="#">Все прогнозы</a></li>
                        <li><a href="#">Экспрессы</a></li>
                        <li><a href="#">Футбол</a></li>
                        <li><a href="#">Хоккей</a></li>
                        <li><a href="#">Теннис</a></li>
                        <li><a href="#">Баскетбол</a></li>
                        <li><a href="#">Волейбол</a></li>
                        <li><a href="#">Киберспорт</a></li>
                    </ul>
                   
                    
                   
                </nav>
                <div class="d-flex justify-content_center align-items_center">
                    <img class="search" src="./src/img/search.png" alt="">
                    <img class="share" src="./src/img/share-1.png" alt="">
                    <button class="login">Войти</button>
                </div>
               
            </div>

            
        </header>
        <section class="d-flex justify-content_center header-section">
            <div class="center d-flex justify-content_space-between border_bottom">
                <div class="d-flex justify-content_center align-items_center wighet">
                    <img class="icon" src="./src/img/raintin.png" alt="">
                    <span class="border-right">
                        <p>Рейтинг</p>
                        <p>Букмекеров</p>
                    </span>
                </div>
                <div class="d-flex justify-content_center align-items_center wighet">
                    <img class="icon" src="./src/img/bonus.png" alt="">
                    <span class="border-right">
                        <p>Бонусы</p>
                        <p>Букмекеров</p>
                    </span>
                </div>
                <div class="d-flex justify-content_center align-items_center wighet">
                    <img class="icon" src="./src/img/crown.png" alt="">
                    <span class="border-right">
                        <p>Vip</p>
                        <p>Прогнозы</p>
                    </span>
                </div>
                <div class="d-flex justify-content_center align-items_center wighet">
                    <img class="icon" src="./src/img/statistic.png" alt="">
                    <span class="border-right">
                        <p>Стати́стика</p>
                        <p>Прогнозов</p>
                    </span>
                </div>
                <div class="d-flex justify-content_center align-items_center wighet">
                    <img class="icon" src="./src/img/gid.png" alt="">
                    <span class="border-right">
                        <p>Гид</p>
                        <p>По ставкам</p>
                    </span>
                </div>
                <div class="d-flex justify-content_center align-items_center wighet">
                    <img class="icon" src="./src/img/cup.png" alt="">
                    <span class="border-right">
                        <p>Конкурсы</p>
                        <p>Прогнозов</p>
                    </span>
                </div>
                
                <div class="d-flex justify-content_center align-items_center wighet">
                    <img class="icon" src="./src/img/many.png" alt="">
                    <span class="border-right">
                        <p>100.000 рублей</p>
                        <p>Челлендж</p>
                    </span>
                </div>
            </div>
        </section>

        <section class="d-flex justify-content_center">
            <div class="content">
                <nav class="navigation">
                    <ul class="d-flex">
                        <li><a href="#">Главная</a></li>
                        <li> > </li>
                        <li><a href="#">Все прогнозы на спорт</a></li>
                        <li> > </li>
                        <li><a href="">Центр ставок</a></li>
                    </ul>
                </nav>
                <h1>Рейтинг экспертов</h1>
                <div class=" d-flex justify-content_space-between">
                    <div class="tabs">
                        <div class="tab">
                            <button class="tablinks active" onclick="opentab(event, 'stable')">Стабильные за месяц</button>
                            <button class="tablinks" onclick="opentab(event, 'month')">За месяц</button>
                            <button class="tablinks" onclick="opentab(event, 'all_time')">за все время</button>
                            <button class="tablinks" onclick="opentab(event, 'win')">выигрышные серии</button>
                            <button class="tablinks" onclick="opentab(event, 'popular')">популярные</button>
                        </div>

                        <div id="stable" class="tabcontent" style="display: block">
                            <table class="table">
                                <thead>
                                    <tr class="d-flex justify-content_space-between">
                                        <th>N </th>
                                        <th>Имя <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Прибыль <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Всего </th>
                                        <th>W/L/D</th>
                                        <th>Кф</th>
                                        <th>Сумма</th>
                                        <th>% <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>ROI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>1</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>2</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>3</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>4</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>5</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>6</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>7</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>8</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>9</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>10</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>11</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>12</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>13</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>14</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>15</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>16</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>17</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>18</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>19</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>20</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>

                        <div id="month" class="tabcontent">
                        <table class="table">
                                <thead>
                                    <tr class="d-flex justify-content_space-between">
                                        <th>N </th>
                                        <th>Имя <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Прибыль <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Всего </th>
                                        <th>W/L/D</th>
                                        <th>Кф</th>
                                        <th>Сумма</th>
                                        <th>% <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>ROI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>1</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>2</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>3</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>4</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>5</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>6</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>7</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>8</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>9</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>10</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>11</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>12</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>13</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>14</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>15</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>16</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>17</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>18</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>19</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>20</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>

                        <div id="all_time" class="tabcontent">
                        <table class="table">
                                <thead>
                                    <tr class="d-flex justify-content_space-between">
                                        <th>N </th>
                                        <th>Имя <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Прибыль <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Всего </th>
                                        <th>W/L/D</th>
                                        <th>Кф</th>
                                        <th>Сумма</th>
                                        <th>% <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>ROI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>1</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>2</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>3</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>4</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>5</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>6</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>7</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>8</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>9</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>10</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>11</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>12</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>13</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>14</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>15</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>16</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>17</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>18</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>19</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>20</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                        <div id="win" class="tabcontent">
                        <table class="table">
                                <thead>
                                    <tr class="d-flex justify-content_space-between">
                                        <th>N </th>
                                        <th>Имя <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Прибыль <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Всего </th>
                                        <th>W/L/D</th>
                                        <th>Кф</th>
                                        <th>Сумма</th>
                                        <th>% <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>ROI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>1</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>2</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>3</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>4</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>5</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>6</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>7</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>8</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>9</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>10</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>11</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>12</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>13</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>14</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>15</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>16</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>17</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>18</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>19</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>20</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                        <div id="popular" class="tabcontent">
                        <table class="table">
                                <thead>
                                    <tr class="d-flex justify-content_space-between">
                                        <th>N </th>
                                        <th>Имя <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Прибыль <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>Всего </th>
                                        <th>W/L/D</th>
                                        <th>Кф</th>
                                        <th>Сумма</th>
                                        <th>% <img src="./src/img/arrow-up.png" alt=""></th>
                                        <th>ROI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>1</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>2</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>3</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>4</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>5</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>6</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>7</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>8</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>9</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>10</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>11</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>12</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>13</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>14</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>15</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>16</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>17</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>18</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>19</td>
                                        <td>Владимир Петров</td>
                                        <td>+356.8%</td>
                                        <td>89</td>
                                        <td>48/39/2</td>
                                        <td>3.17</td>
                                        <td>262</td>
                                        <td>55%</td>
                                        <td>+34.1%</td>
                                    </tr>
                                    <tr class="d-flex justify-content_space-between">
                                        <td>20</td>
                                        <td>Михаил Филиппов</td>
                                        <td>+311.3%</td>
                                        <td>81</td>
                                        <td>42/31/1</td>
                                        <td>3.02</td>
                                        <td>234</td>
                                        <td>51%</td>
                                        <td>+32.2%</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>

                        <div class="d-flex justify-content_center" style="margin-top: 54px; color: #58b094;font-weight: bold; padding-bottom: 20px;">
                            Показать еще <img style="width: 8px;" class="icon" src="./src/img/to-right.png" alt="">
                        </div>
                    </div>
                    <div class="sidebar">
                        <ul>
                            <li>
                                <span>Прогнозы <img class="to-left" src="./src/img/to-left.png" alt=""></span>
                                <ul class="sub-menu">
                                    <li><a href="">Прогнозы</a></li>
                                    <li><a href="">Прогнозы</a></li>
                                    <li><a href="">Прогнозы</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>По видам спорта <img class="to-bottom" src="./src/img/to-bottom.png" alt=""></span>
                                <ul class="sub-menu">
                                    <li><a href="">Прогнозы</a></li>
                                    <li><a href="">Прогнозы</a></li>
                                    <li><a href="">Прогнозы</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>Футбол <img class="to-left" src="./src/img/to-left.png" alt=""></span>
                                <ul class="sub-menu">
                                    <li><a href="">Прогнозы</a></li>
                                    <li><a href="">Прогнозы</a></li>
                                    <li><a href="">Прогнозы</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>Хоккей <img class="to-bottom" src="./src/img/to-bottom.png" alt=""></span>
                                <ul class="sub-menu">
                                    <li><a href="">КХЛ</a></li>
                                    <li class="sub_active"><a href="">НХЛ</a></li>
                                    <li><a href="">Сборные</a></li>
                                    <li><a href="">ЧМ-2018</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>Теннис <img class="to-left" src="./src/img/to-left.png" alt=""></span>
                                <ul class="sub-menu">
                                    <li><a href="">КХЛ</a></li>
                                    <li><a href="">НХЛ</a></li>
                                    <li><a href="">Сборные</a></li>
                                    <li><a href="">ЧМ-2018</a></li>
                                </ul>
                            </li>
                            <li><a href="">Баскетбол</a></li>
                            <li><a href="">Волейбол</a></li>
                            <li><a href="">Киберспорт</a></li>
                            <li><a href="">Бокс/MMA/UFC</a></li>
                            <li><a href="">Бейсбол</a></li>
                            <li><a href="">Водное поле</a></li>
                            <li><a href="">Биатлон</a></li>
                            <li><a href="">Рейтинг букмекеров</a></li>
                            <li><a href="">Бонусы</a></li>
                            <li><a href="">100.000 рублей</a></li>
                            <li>
                                <span>Гид по ставкам <img class="to-left" src="./src/img/to-left.png" alt=""></span>
                                <ul class="sub-menu">
                                    <li><a href="">КХЛ</a></li>
                                    <li><a href="">НХЛ</a></li>
                                    <li><a href="">Сборные</a></li>
                                    <li><a href="">ЧМ-2018</a></li>
                                </ul>
                            </li>
                            <li><a href="">Конкурс</a></li>
                            <li><a href="">Новости</a></li>
                            <li><a href="">О нас</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </section>

        <footer class="d-flex justify-content_center align-items_center">
            <div class="center d-flex">
                <a class="logo-footer" href="index.php">
                    <img src="./src/img/logo-w.png" alt="">
                </a>
                <div class="copyright">
                    <p>&copy; 2011 - <?php
                        $currentDateTime = date('Y');
                        echo $currentDateTime;
                    ?></p>
                    <p>
                        Любое использование материалов приветствуется при гиперссылке.
                    </p>
                </div>
                <div class="connection">
                    <img src="./src/img/massage.png" alt="">
                    связаться с нами
                </div>
                <div class="social">
                    <p>Мы в социальных сетях:</p>
                    <div class="social-icon">
                        <img src="./src/img/vk.png" alt="">
                        <img src="./src/img/fb.png" alt="">
                        <img src="./src/img/tw.png" alt="">
                        <img src="./src/img/telegram.png" alt="">
                    </div>
                    
                </div>
            </div>
        </footer>
        
    </div>
    <script>
function opentab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

$('.sidebar li span').on('click', function () {
    $(this).parent('li').children('.sub-menu').toggle('slow');
})

// $('.sidebar li span').each(function() {
    
//             $(this).removeClass('offset');
//         })

//         $('.sidebar li span').addClass('offset');

// if($(this).hasClass(!'clicked')){
//     alert(2)
            
//             $(this).removeClass('clicked');
//             $(this).children('.sub-menu').slideUp('slow');
            

//         } else {

//             alert(3)

//             $($('.sidebar li span')).each(function() {
//                 $('.sidebar li span').removeClass('clicked');
//                 $('.sub-menu').slideUp('slow');
//             })

//             $(this).addClass('clicked');
//             $(this).children('.sub-menu').slideDown('slow');

//         }
//     })

// $('.sidebar li span').click( function () {

// // $('.sidebar li span').each(function() {
// //     $(this).removeClass('offset');
// // })

// // $(this).addClass('offset');


//     if($(this).hasClass('clicked')){
        
//         $(this).removeClass('clicked');
//         $(this).children('.sub-menu').hide('slow');
        

//     } else {

//         $($('.sidebar li span')).each(function() {
//             $('.sidebar li span').removeClass('clicked');
//             $('.sub-menu').show('slow');
//         })

//         // $(this).addClass('clicked');
//         // $(this).children('.sub-menu').show('slow');

//     }

// })

</script>
</body>
</html>