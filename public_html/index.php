<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="style/index.css">
  <title>Программист Ампилов</title>
</head>
<body class="page">
  <header class="header container">
    <div class="header__content">
      <div class="header__nav">
        <p class="header__text">
          ampilovs
        </p>
        <nav class="header__nav">
          <a href="#portfolio" class="header__nav-link">Портфолио</a>
          <a href="#contacts" class="header__nav-link">Контакты</a>
        </nav>
      </div>
      <div class="promo">
        <div class="promo__content">
          <div class="promo__column">
            <h1 class="promo__title">
              Здравствуйте! Меня зовут Сергей 👋
            </h1>
            <p class="promo__subtext">
              Я <span class="promo__subtext_job">программист, занимаюсь веб-разработкой</span>
                и веду блог об ИТ. В данный момент работаю над проектом
              <span class="promo__subtext_project">
                ampilovs.ru - Персональный сайт программиста
                <i class="fa fa-code" aria-hidden="true"></i>
              </span>
              и прохожу обучение на курсе
              <span class="promo__subtext_project">
                [Udemy] TypeScript с нуля - полный курс и паттерны проектирования
                <i class="fa fa-book" aria-hidden="true"></i>
              </span>
            </p>
            <p class="promo__subtext">
              <a
                href="#contacts"
                class="promo__link promo__link_color-blue">
                  Связаться
              </a>
              <a
                href="#portfolio"
                class="promo__link promo__link_color-yellow">
                Портфолио
              </a>
            </p>
          </div>
          <img src="images/avatar.png" alt="banner" class="promo__banner">
        </div>
      </div>
      <div class="promo__scroll-down"></div>
    </div>
  </header>
  <main>
    <div class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="portfolio__title">Portfolio</h2>
        <div class="portfolio__row">
          <div class="portfolio__item portfolio__item_size-60 portfolio__we">
            <div class="portfolio__item-content">
              <h3 class="portfolio__item_title">
                Интернет-магазин вина <b>wineexpress.ru</b>
              </h3>
              <p class="portfolio__item_description">
                Онлайн-винтрина с функцией заказа доставки в пункт выдачи
              </p>
              <ul class="portfolio__item_tech-list">
                <li class="portfolio__item_tech-element">PHP</li>
                <li class="portfolio__item_tech-element">Bitrix</li>
                <li class="portfolio__item_tech-element">JavaScript</li>
                <li class="portfolio__item_tech-element">jQuery</li>
              </ul>
              <a 
                href="https://wineexpress.ru/"
                target="_blank"
                class="portfolio__item_link">
                  Перейти на сайт
              </a>
            </div>
          </div>
          <div class="portfolio__item portfolio__item_size-30 portfolio__amp">
            <div class="portfolio__item-content">
              <h3 class="portfolio__item_title">
                Одностраничный сайт <b>ampilovs.ru</b>
              </h3>
              <p class="portfolio__item_description">
                Персональный сайт программиста
              </p>
              <ul class="portfolio__item_tech-list">
                <li class="portfolio__item_tech-element">HTML</li>
                <li class="portfolio__item_tech-element">CSS</li>
                <li class="portfolio__item_tech-element">JavaScript</li>
                <li class="portfolio__item_tech-element">PHP</li>
              </ul>
              <a 
              href="https://github.com/SergeiAmpilov/ampilovs-ru"
              target="_blank"
              class="portfolio__item_link">
              GitHub
            </a>
            </div>
          </div>
        </div>
        <div class="portfolio__row">
          <div class="portfolio__item portfolio__item_size-30 portfolio__cli">
            <div class="portfolio__item-content">
              <h3 class="portfolio__item_title">
                CLI-утилита <b>weather</b>
              </h3>
              <p class="portfolio__item_description">
                Утилита командной строки получает прогноз погоды
              </p>
              <ul class="portfolio__item_tech-list">
                <li class="portfolio__item_tech-element">Node.js</li>
                <li class="portfolio__item_tech-element">CLI</li>
                <li class="portfolio__item_tech-element">API</li>
                <li class="portfolio__item_tech-element">Npm</li>
              </ul>
              <div class="portfolio__item_list-links">
                <a 
                  href="https://github.com/SergeiAmpilov/weather-cli"
                  target="_blank"
                  class="portfolio__item_link">
                  GitHub
                </a>              
                <a 
                  href="https://www.npmjs.com/package/weather-cli-amp"
                  target="_blank"
                  class="portfolio__item_link">
                  Go to npmjs.com
                </a>
              </div>
            </div>
          </div>
          <div class="portfolio__item portfolio__item_size-60 portfolio__htl">
            <div class="portfolio__item-content">
              <h3 class="portfolio__item_title">
                How to learn
              </h3>
              <p class="portfolio__item_description">
                Как научиться учиться. Учебный проект на тему методик обучения и повышения эффективности
              </p>
              <ul class="portfolio__item_tech-list">
                <li class="portfolio__item_tech-element">HTML</li>
                <li class="portfolio__item_tech-element">CSS</li>
                <li class="portfolio__item_tech-element">БЭМ</li>
                <li class="portfolio__item_tech-element">github</li>
              </ul>
              <div class="portfolio__item_list-links">
                <a 
                  href="https://github.com/SergeiAmpilov/how-to-learn"
                  target="_blank"
                  class="portfolio__item_link">
                  GitHub
                </a>              
                <a 
                  href="https://ampilovs.ru/demo/how-to-learn/"
                  target="_blank"
                  class="portfolio__item_link">
                  Go Live
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="portfolio__row">
          <div class="portfolio__item portfolio__item_size-60 portfolio__rut">
            <div class="portfolio__item-content">
              <h3 class="portfolio__item_title">
                Russian travel
              </h3>
              <p class="portfolio__item_description">
                Сайт посвящен путешествиям по Россия
              </p>
              <ul class="portfolio__item_tech-list">
                <li class="portfolio__item_tech-element">HTML</li>
                <li class="portfolio__item_tech-element">CSS</li>
                <li class="portfolio__item_tech-element">БЭМ</li>
                <li class="portfolio__item_tech-element">Grid</li>
                <li class="portfolio__item_tech-element">github</li>
              </ul>
              <div class="portfolio__item_list-links">
                <a 
                  href="https://github.com/SergeiAmpilov/russian-travel"
                  target="_blank"
                  class="portfolio__item_link">
                  GitHub
                </a>
                <a 
                  href="https://sergeiampilov.github.io/russian-travel/"
                  target="_blank"
                  class="portfolio__item_link">
                  Go Live on Github Pages
                </a>
                <a 
                  href="https://ampilovs.ru/demo/russian-travel/"
                  target="_blank"
                  class="portfolio__item_link">
                  Go Live
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div class="contacts" id="contacts">
      <div class="container">
        <div class="contacts__content">
          <div class="contacts__content_left">
            <h2 class="contacts__title">Контакты</h2>
            <p class="contacts__paragraph">
              Буду рад пообщаться по поводу вашего проекта или вакансии, пишите!
            </p>
            <p class="contacts__paragraph">
              <b>email:</b>
              <a
                href="mailto:ampilov@list.ru"
                class="contacts__mail-link">
                  ampilov@list.ru
              </a>
            </p>
            <p class="contacts__paragraph">
              Также, вы можете найти меня в социальных сетях:
            </p>
            <ul class="contacts__link-list">
              <li class="contacts__link-list_item">
                <a href="https://www.linkedin.com/in/sergei-ampilov/" target="_blank">
                  <img src="images/lin500.png" alt="страница на linkedin" class="contacts__icon">
                </a>
              </li>
              <li class="contacts__link-list_item">
                <a href="https://github.com/SergeiAmpilov/" target="_blank">
                  <img src="images/github250.png" alt="профиль на github" class="contacts__icon">
                </a>
              </li>
              <li class="contacts__link-list_item">
                <a href="https://www.youtube.com/channel/UCXpXbD_W2W40TEmlahZx7sQ" target="_blank">
                  <img src="images/youtube500.png" alt="Youtube Programmis Ampilov" class="contacts__icon">
                </a>
              </li>
              <li class="contacts__link-list_item">
                <a href="https://www.codewars.com/users/sergei.ampilov" target="_blank">
                  <img src="https://www.codewars.com/users/sergei.ampilov/badges/small" alt="">
                </a>
              </li>
            </ul>
          </div>
          <img
            class="contacts__image"
            src="images/asy4.png"
            alt="Сергей Ампилов">
        </div>
      </div>
    </div> 
    <div class="technology">
      <div class="container">
        <h2 class="technology__title">
          Технологии 💻
        </h2>
        <p class="technology__description">
          Набор технологий, с которыми я работаю
        </p>
        <div class="technology__section">
          <div class="technology__group">
            <img 
              src="images/techicons/html.png" 
              alt="HTML" 
              class="technology__group_img">
            <p class="technology__group_text">HTML</p>
          </div>
          <div class="technology__group">
            <img 
              src="images/techicons/css.png" 
              alt="CSS" 
              class="technology__group_img">
            <p class="technology__group_text">CSS</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/javascript.png"
              alt="Javascript"
              class="technology__group_img">
            <p class="technology__group_text">Javascript</p>
          </div>
          <div class="technology__group">
            <img  
              src="images/techicons/typescript.png"
              alt="Typescript"
              class="technology__group_img">
            <p class="technology__group_text">Typescript</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/react.png"
              alt="React"
              class="technology__group_img">
            <p class="technology__group_text">React</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/nodejs.png"
              alt="Node.js"
              class="technology__group_img">
            <p class="technology__group_text">Node.js</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/expressjs.png"
              alt="Express.js"
              class="technology__group_img">
            <p class="technology__group_text">Express.js</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/php.png"
              alt="php"
              class="technology__group_img">
            <p class="technology__group_text">PHP</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/bitrix.png"
              alt="Bitrix"
              class="technology__group_img">
            <p class="technology__group_text">Bitrix</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/bitrix24.png"
              alt="Bitrix"
              class="technology__group_img">
            <p class="technology__group_text">Bitrix 24</p>
          </div>
          <div class="technology__group">
            <img  
              src="images/techicons/mysql.png"
              alt="MySQL"
              class="technology__group_img">
            <p class="technology__group_text">MySQL</p>
          </div>
          <div class="technology__group">
            <img
              src="images/techicons/mongodb.png"
              alt="MongoDB"
              class="technology__group_img">
            <p class="technology__group_text">MongoDB</p>
          </div>
        </div>
      </div>
    </div>  
    <div class="education">
      <div class="container">
        <h2 class="education__title">Образование</h2>
        <div class="education__columns">
          <ul class="education__list">
            <li class="education__list_item">
              12.2022 - 02.2023
              <b>Udemy</b>
              <p class="education__list_item-name">
                TypeScript с нуля - полный курс и паттерны проектирования
              </p>
            </li>
            <li class="education__list_item">
              10.2021 - 09.2022
              <b>Яндекс.Практикум</b>
              <p class="education__list_item-name">Web-разработчик</p>
            </li>
            <li class="education__list_item">
              02.2020 - 05.2020
              <b>Битрикс</b>
              <p class="education__list_item-name">
                Разработчик на Bitrix
              </p>
            </li>
            <li class="education__list_item">
              06.2019 - 09.2019
              <b>WebForMyself</b>
              <p class="education__list_item-name">
                Разработка сайтов на платформе Bitrix
              </p>
            </li>
          </ul>
          <ul class="education__list">
            <li class="education__list_item">
              06.2019 - 08.2019
              <b>WebForMyself</b>
              <p class="education__list_item-name">
                Программист PHP
              </p>
            </li>  
            <li class="education__list_item">
              01.2019 - 04.2019
              <b>Hexlet</b>
              <p class="education__list_item-name">
                Программист PHP
              </p>
            </li>
            <li class="education__list_item">
              01.2019 - 04.2019
              <b>Hexlet</b>
              <p class="education__list_item-name">
                Программист Javascript
              </p>
            </li>
            <li class="education__list_item">
              01.2019 - 02.2019
              <b>Хуториум</b>
              <p class="education__list_item-name">
                Разработка Frontend с использованием библиотеки React
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="sertificates">
      <div class="container">
        <h2 class="education__title">Сертификаты</h2>
        <ul class="sertificates__list">
          <li class="sertificates__list_item">
            <img
              src="images/bxsert/bx3.jpg"
              alt="Сертификат Битрикс Разрабоотчик Bitrix Framework"
              class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
              src="images/bxsert/bx5.jpg"
              alt="Сертификат Битрикс Многосайтовость"
              class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
            src="images/bxsert/bx8.jpg"
            alt="Сертификат Битрикс Интеграция с 1С"
            class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
              src="images/bxsert/bx2.jpg"
              alt="Сертификат Битрикс Установка и настройка"
              class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
            src="images/bxsert/bx7.jpg"
            alt="Сертификат Битрикс Технология композитный сайт"
            class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
            src="images/bxsert/bx4.jpg"
            alt="Сертификат Битрикс Продвижение сайта и маркетинг"
            class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
            src="images/bxsert/bx6.jpg"
            alt="Сертификат Битрикс Администратор Базовый"
            class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
            src="images/bxsert/bx9.jpg"
            alt="Сертификат Битрикс Администратор Модули"
            class="sertificates__list_img">
          </li>
          <li class="sertificates__list_item">
            <img
            src="images/bxsert/bx10.jpg"
            alt="Сертификат Битрикс Администратор Бизнес"
            class="sertificates__list_img">
          </li>          
          <li class="sertificates__list_item">
            <img
              src="images/bxsert/bx1.jpg"
              alt="Сертификат Битрикс Контент-менеджер"
              class="sertificates__list_img" >
          </li>
        </ul>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer__content">
        <div class="footer__element">
          © 2022
        </div>
        <div class="footer__element">
          Создано с любовью ❤️
        </div>
        <div class="footer__element">
          ampilovs.ru
        </div>
      </div>
    </div>
  </footer>
  <div class="popup popup__container popup__hidden">
    <div class="popup__content">
      <img
        src="images/bxsert/bx1.jpg"
        alt="Сертификат Битрикс Контент-менеджер"
        class="popup__img" >
    </div>
  </div>
  <script src="scripts/index.js"></script>
</body>
</html>
