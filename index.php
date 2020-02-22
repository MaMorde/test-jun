<?php
require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="media.css" />
  <title>Продукция ЭНЕРГОТЕХ</title>
</head>

<body>
  <div class="wrapper">
    <div class="burger-menu">
      <a href="#" class="burger-menu__button"><span class="burger-menu__lines"></span></a>
      <nav class="burger-menu__nav">
        <a href="" class="burger-menu__link-main active">Продукция<br /><img src="energ.png" alt="" /></a>
        <a href="" class="burger-menu__link-main">Стабилизаторы 220В</a>
        <a href="" class="burger-menu__link-main">Стабилизаторы 380В</a>
        <a href="" class="burger-menu__link-main">Генераторы 220В</a>
        <a href="" class="burger-menu__link-main">Генераторы 380В</a>
        <a href="" class="burger-menu__link-main">ИБП и батареи</a>
        <a href="" class="burger-menu__link-main">Прочая техника</a>
        <a href="" class="burger-menu__link-main">Услуги</a>
        <a href="" class="burger-menu__link-main">Акции</a>
        <a href="#" class="burger-menu__link-secondary">О компании</a>
        <a href="#" class="burger-menu__link-secondary">Доставка</a>
        <a href="#" class="burger-menu__link-secondary">Оплата</a>
        <a href="#" class="burger-menu__link-secondary">Сервис</a>
        <a href="#" class="burger-menu__link-secondary">Возврат</a>
        <a href="#" class="burger-menu__link-secondary">Статьи</a>
        <a href="#" class="burger-menu__link-secondary">Контакты</a>
      </nav>
      <div class="burger-menu__overlay"></div>
    </div>
    <div class="content">
      <header class>
        <div class="nav padd" id="nav">
          <ul>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Доставка</a></li>
            <li><a href="#">Оплата</a></li>
            <li><a href="#">Сервис</a></li>
            <li><a href="#">Возврат</a></li>
            <li><a href="#">Статьи</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="inf-block padd">
          <div class="inf-block__logo">
            <a href="#"><img class='logo__main-logo' src="logo.png" alt="" /></a>
          </div>
          <div class="inf-block__search-form">
            <form action="" method="get" id="searchform">
              <input type="text" placeholder="Поиск по товарам" />
              <img class="search2-logo" src="search2.png" alt="" />
              <a href="#"><img class="search1-logo" src="search.png" alt="" /></a>
            </form>
          </div>
          <div class="inf-block__date">
            <div class="date__phone">
              <div class="phone__number">8 (800) 707-99-24</div>
              <div class="phone__time">9.00 - 20.00 ежедневно</div>
            </div>
            <div class="date__statistics-logos">
              <div class="statistics-logos__stat-logo">
                <a href="#"><img src="stat.png" alt="" /></a>
                <div class="stat_counter">0</div>
              </div>
              <div class="statistics-logos__favor-logo">
                <a href="#"><img src="favor.png" alt="" style="margin-top: 10px;" /></a>
                <div class="favor_counter">6</div>
              </div>
              <div class="statistics-logos__basket-logo">
                <a href="#"><img src="basket.png" alt="" /></a>
                <div class="basket_counter">17</div>
              </div>
              <a href="#" class="search_header-btn">
                <img class="search22-logo" src="search2.png" alt="" />
              </a>
            </div>
          </div>
        </div>
        <div class="products padd">
          <ul>
            <a href="#" class="prod">
              <li class="products__li active">
                Продукция<br /><img src="energ.png" alt="" />
              </li>
            </a>
            <a href="#">
              <li class="products__li">Стабилизаторы 220В</li>
            </a>
            <a href="#">
              <li class="products__li">Стабилизаторы 380В</li>
            </a>
            <a href="#">
              <li class="products__li">Генераторы 220В</li>
            </a>
            <a href="#">
              <li class="products__li">Генераторы 380В</li>
            </a>
            <a href="#">
              <li class="products__li">ИБП и батареи</li>
            </a>
            <a href="#">
              <li class="products__li">Прочая техника</li>
            </a>
            <a href="#">
              <li class="products__li">Услуги</li>
            </a>
            <a href="#" class="special-offers">
              <li class="products__li">Акции</li>
            </a>
          </ul>
        </div>
        <div class="search-form__adapt padd">
          <form action="" method="get" id="searchform1">
            <input type="text" placeholder="Поиск по товарам" />
            <a href="#" class="search_btn"><img class="search11-logo" src="search.png" alt="" /></a>
          </form>
        </div>
        <div class="path padd">
          <div class="path__item">
            <a href="#">Главная</a><span class="arr">&nbsp;&rarr;&nbsp;</span><a href="#">Статьи</a>
          </div>
        </div>
      </header>
      <main>
        <div class="articles padd">
          <h1 style="font-family: 'PT Sans', sans-serif; padding-left:26px;">Полезная информация</h1>
          <div class='pagination-top'>
            <?php
            Pagination($length, $page);
            ?>
          </div>

          <div class="articles__wrapper">

            <?php

            while ($row = $query->fetch_assoc()) {
              echo '<div class="articles__item">';
              echo  '<div class="articles__item-img">';
              echo    '<img style="width:250px; height:180px" src=' . $row["image"] . 'alt="">';
              echo  '</div>';
              echo  '<div class="articles__item-text">';
              echo    '<div class="item-text__title">';
              echo     $row["title"];
              echo    '</div>';
              echo   '<div class="item-text__description">';
              echo      $row["description"];
              echo   '</div>';
              echo  '</div>';
              echo '</div>';
            }
            ?>


          </div>
          <div class='pagination-under'>
            <?php
            Pagination($length, $page);
            ?>
          </div>
        </div>
      </main>
    </div>
    <footer class="footer padd">
      <div class="footer__wrapper">
        <div class="footer__contacts-info">
          <div class="contacts-info__adress">
            121471, г. Москва ул. Рябиновая 55 стр. 28
          </div>
          <div class="contacts-info__mail">prestiszh06@mail.ru</div>
          <div class="contacts-info__phone">8 (800) 707-99-24</div>
          <div class="contacts-info__link"><a href="#">Контакты</a></div>
        </div>
        <div class="footer__time-info">
          <p>
            Режим работы<br />
            Пн-чт с 8.00 до 19.00<br />
            Пт с 8.00 до 17.00<br />
            Сб с 10.00 до 15.00<br />
            Вс(по предварительной договоренности).
          </p>
        </div>
        <div class="footer__links-info">
          <div class="links-info__blocks">
            <div class="info-blocks__first">
              <a href=№"">О компании</a>
              <a href=№"">Акции</a>
              <a href=№"">Доставка</a>
            </div>
            <div class="info-blocks__second">
              <a href=№"">Оплата</a>
              <a href=№"">Сервис</a>
              <a href=№"">Возврат</a>
            </div>
          </div>
          <a href=№"">Политика обработки персональных данных</a>
        </div>
        <div class="footer__logo-info">
          <div class="logo-info__img"><img src="rocket-logo.png" alt=""></div>
          <div class="logo-info__text"><span class="info__text-span">Разработка</span> <br> <span style="white-space:nowrap"> и продвижение сайта</span></div>
        </div>
      </div>
    </footer>
  </div>
  <script src="jquery-3.4.1.min.js"></script>
  <script src="script.js"></script>
</body>

</html>