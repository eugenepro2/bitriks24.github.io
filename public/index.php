<?php
$referer = $_SERVER["HTTP_REFERER"];
$actual_link = "http://".$_SERVER['HTTP_HOST'].parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ( strpos($referer, "yandex") ) :
  $request = parse_url($referer, PHP_URL_QUERY);
  parse_str($request, $params);
  $query = $params['text'];
endif;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lidkom</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../css/tingle.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/font.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="row middle-md center-md center-sm center-xs">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="header__button box"><a onclick="modalCallBack.open()" class="button">Заказать бесплатный звонок</a></div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="logo"><img src="img/logo.png" alt="">
              <h1 class="logo__heading">Агенство маркетинга и рекламы</h1>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="header__info">
              <p class="header__info__phone">+7 3412 77-44-28</p>
              <div><img src="img/pdf.png" alt=""><a href="/lidkom_presentation.pdf" class="header__info__presentation">презенатация компании</a></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="offer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="offer__heading">Запуск отдела продаж в <img class="b24" src="img/b24.png"> за 1 день с бесплатным обучением</h1>
            <ul class="offer__list">
              <li class="offer__list__item">Настройка интерфейса Битрикс24 под вашу нишу </li>
              <li class="offer__list__item">Интеграция с виртуальной АТС</li>
              <li class="offer__list__item">Создание корпоративной почты</li>
              <li class="offer__list__item">10 бесплатных обучающих видео для менеджеров</li>
              <li class="offer__list__item">Консультации после установки</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="call--back">
      <div class="container">
        <div class="row center-md middle-md">
          <div class="col-md-12">
            <p class="call--back__text">Оставьте заявку на консультацию и составление бесплатного технического задания</p>
            <form>
              <input type="hidden" name="search_query" value="&lt;?php echo $query;?&gt;">
              <input type="hidden" name="referer" value="&lt;?php echo $referer;?&gt;">
              <input type="hidden" name="campaign" value="" class="dynamic_inputs">
              <input type="hidden" name="term" value="" class="dynamic_inputs">
              <input type="hidden" name="source" value="" class="dynamic_inputs">
              <input type="hidden" name="Goal" value="Оставить заявку, первая форма">
              <input type="hidden" name="Url" value="&lt;?php echo $actual_link ?&gt;">
              <div class="form flex">
                <input type="text" name="name" placeholder="Имя:" required class="form__name">
                <input type="tel" name="phone" placeholder="Телефон:" required class="form__phone">
                <input type="submit" value="Заказать бесплатный звонок" class="button button__form">
              </div>
              <div class="form__checkbox start-md">
                <input type="checkbox" checked required id="check"><span> 
                  <label for="check">Согласен с обработкой данных</label></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="recommendation">
      <div class="container">
        <div class="row center-sm center-xs">
          <div class="col-md-12">
            <h2 class="heading">Рекомендуем внедрить <img class="b24" src="img/b24.png"> в следующих отраслях</h2>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <figure class="recommendation__block flex"><img src="/img/recommendation/1.png" alt="">
              <p class="recommendation__block__text">Производство</p>
            </figure>
            <div class="recommendation__block flex"><img src="/img/recommendation/2.png" alt="">
              <p class="recommendation__block__text">Сфера обслуживания</p>
            </div>
            <div class="recommendation__block flex"><img src="/img/recommendation/3.png" alt="">
              <p class="recommendation__block__text">Транспорт и логистика</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="recommendation__block flex"><img src="/img/recommendation/4.png" alt="">
              <p class="recommendation__block__text">ИТ разработка</p>
            </div>
            <div class="recommendation__block flex"><img src="/img/recommendation/5.png" alt="">
              <p class="recommendation__block__text">Франчайзин</p>
            </div>
            <div class="recommendation__block flex"><img src="/img/recommendation/6.png" alt="">
              <p class="recommendation__block__text">Автоцентры и автодилеры</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="recommendation__block flex"><img src="/img/recommendation/7.png" alt="">
              <p class="recommendation__block__text">Интернет торговля</p>
            </div>
            <div class="recommendation__block flex"><img src="/img/recommendation/8.png" alt="">
              <p class="recommendation__block__text">Аутсорсинговые контакт-центры</p>
            </div>
            <div class="recommendation__block flex"><img src="/img/recommendation/9.png" alt="">
              <p class="recommendation__block__text">Поставщики оборудования</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="recommendation__block flex"><img src="/img/recommendation/10.png" alt="">
              <p class="recommendation__block__text">Строительство</p>
            </div>
            <div class="recommendation__block flex"><img src="/img/recommendation/11.png" alt="">
              <p class="recommendation__block__text">Профессиональные услуги</p>
            </div>
            <div class="recommendation__block flex"><img src="/img/recommendation/12.png" alt="">
              <p class="recommendation__block__text">Оптовая торговля, дистрибуция</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="service">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Услуги</h2>
          </div>
          <div class="col-md-7 col-sm-12">
            <div class="service__block">
              <p class="service__block__heading service__block__heading__first">Стартовый пакет внедрения</p>
              <p class="service__block__text">Дополнительные услуги</p>
              <ul class="service__block__list">
                <li>ТЗ  (1,5 часа)</li>
                <li>Почта (по удобному варианту для нас, яндекс, гугл, майл, почта хостинга) + ФИО сотрудников. имя почтового ящика</li>
                <li>Создаем портал (имя портала)</li>
                <li>Настройки портала (Настройка компании+реквизиты для выставления счетов)</li>
                <li>Поиск сотрудника + пригласить + настройка почты</li>
                <li>Права доступа</li>
                <li>Структура компании</li>
                <li>Настройка карточки клиента (Контакт, Комания, Сделка) необходимые поля из ТЗ</li>
                <li>Интеграция с внешними источниками (Телефон, почта, форма заявки с сайта, приложение виджет от Б24, Социальные сети и сервисы аналитики Roistat) для создания Лидов</li>
                <li>Заливка Контактов, Компаний, Сделок</li>
                <li>Добавление товаров</li>
                <li>Настройка полей для счетов</li>
                <li>Бизнес процесс или несколько БП</li>
                <li>Подписане промежуточного АКТа</li>
                <li>IP телефония (используем систему от Б24 или интеграция Облачных АТС или АТС Asterisk)</li>
                <li>Формирование графических отчетов (воронка продаж, сделки)</li>
                <li>Обучение персонала</li>
                <li>Подписание АКТА и закрытие проекта</li>
                <li>Техническая поддерка (консультация по телефону + чат + почта)</li>
              </ul>
              <div class="service__block__cloud--top--first"></div>
              <div class="service__block__cloud--bottom--first"></div>
            </div>
          </div>
          <div class="col-md-5 col-sm-12">
            <div class="service__block height-1">
              <p class="service__block__heading">Индивидуальная разработка по ТЗ</p>
              <div class="service__block__cloud--top--second"></div>
              <div class="service__block__cloud--bottom--second"></div>
            </div>
            <div class="service__block height-2">
              <p class="service__block__heading">Дополнительные услуги</p>
              <ul class="service__block__list">
                <li>Обучение персонала заказчика</li>
                <li>IP телефония под ключ</li>
                <li>Техническая поддержка</li>
                <li>Разработка по ТЗ</li>
                <li>Настройка 1С</li>
                <li>Разработка обучающих видео роликов</li>
                <li>Установка и настройка LMS (Портал по обучению и аттестации сотрудников компании)</li>
                <li>Установка и настройка коробочной версии Б24</li>
                <li>Коллтрекинг с рекламных площадок</li>
              </ul>
              <div class="service__block__cloud--top--third"></div>
              <div class="service__block__cloud--bottom--third"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="call--back">
      <div class="container">
        <div class="row center-md middle-md">
          <div class="col-md-12">
            <p class="call--back__text">Оставьте заявку на консультацию и составление бесплатного технического задания</p>
            <form>
              <input type="hidden" name="search_query" value="&lt;?php echo $query;?&gt;">
              <input type="hidden" name="referer" value="&lt;?php echo $referer;?&gt;">
              <input type="hidden" name="campaign" value="" class="dynamic_inputs">
              <input type="hidden" name="term" value="" class="dynamic_inputs">
              <input type="hidden" name="source" value="" class="dynamic_inputs">
              <input type="hidden" name="Goal" value="Оставить заявку, вторая форма">
              <input type="hidden" name="Url" value="&lt;?php echo $actual_link ?&gt;">
              <div class="form flex">
                <input type="text" name="name" placeholder="Имя:" required class="form__name">
                <input type="tel" name="phone" placeholder="Телефон:" required class="form__phone">
                <input type="submit" value="Заказать бесплатный звонок" class="button button__form">
              </div>
              <div class="form__checkbox start-md">
                <input type="checkbox" checked required id="check1"><span> 
                  <label for="check1">Согласен с обработкой данных</label></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Кейсы</h2>
          </div>
        </div>
      </div>
      <div class="portfolio__first portfolio__block">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 middle-md middle-sm middle-xs">
              <p class="portfolio__heading">Продажа франшизи кофе с собой "Кофе ленд"</p>
              <p class="portfolio__task">Задачи:</p>
              <p class="portfolio__text">Интегрировать сайт с Битрикс24, для контроля вхоящих заявок с сайта и аналитики эффективности рекламных каланов.</p>
              <p class="portfolio__result">Реализовано:</p>
              <ul class="portfolio__list"> 
                <li>- Созданы дополнительные кастомные поля для записи данных из UTM метки</li>
                <li>- Настроены бизнес процессы автоматичесского распределения заявок по ответственным менеджерам</li>
                <li>- Настроена сквозная аналитика для отслеживания эфективности контекстной рекламы</li>
                <li>- Настроена виртуальная телефония с записью звонков</li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 top-md top-sm center-xs">
              <div class="portfolio__first__logo"><img src="/img/portfolio/1-logo.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="portfolio__second portfolio__block">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12 top-md top-sm center-xs">
              <div class="portfolio__first__logo"><img src="/img/portfolio/2-logo.png" alt=""></div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 end-md end-sm end-xs text--left">
              <p class="portfolio__heading">Продажа франшизи пледов "Sleepy"</p>
              <p class="portfolio__task">Задачи:</p>
              <p class="portfolio__text">Интегрировать посадочные страницы с Битрикс24, настроить аналитику для контроля эффективности источников рекламы, настрока бизнес процесса для рампределения заявок по ответственным менеджерам.</p>
              <p class="portfolio__result">Реализовано:</p>
              <ul class="portfolio__list"> 
                <li>- Интегрированы двумя раздными способами несколько посадочных страниц, в том числе страницы реализованные на конструкторе и самописные</li>
                <li>- Добавлены кастомные поля для UTM меток и других параметров фильтрации заявок.</li>
                <li>- Настроены бизнес процессы автоматичесского распределения заявок по менеджерам</li>
                <li>- Настроено автоматичесское уведомление клиенто, сообщением из Битрикс24 с данными об ответственном менеджере и параметрах заявки</li>
                <li>- Настроена маршрутизация входящих звонков в телефонии.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="portfolio__third portfolio__block">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 middle-md middle-sm middle-xs">
              <p class="portfolio__heading">Банк РФИ</p>
              <p class="portfolio__task">Задачи:</p>
              <ul class="portfolio__list"> 
                <li>- Разработать партнерскую посадочную страницу с возможностью загрузки файлов, для ускорения обработки входящих заявок менеджерами.</li>
                <li>-  Интегрировать посадочную страницу с Битрикс24, прикрепленные файлы поместить в отдельную папку в Облаке Битрикса24.</li>
                <li>- Настроить бизнес процессы конвертации заявок в контакты, компании, сделки и создать уведомления ответственным менеджерам.</li>
              </ul>
              <p class="portfolio__result">Реализация:</p>
              <ul class="portfolio__list">
                <li>- Разработана посадочная страница с ипользованием CRM форм Битрикс24 для загрузки файлов.</li>
                <li>- Добавленные кастомные поля в карточку Лида</li>
                <li>- Разработан бизнес процесс конвертации входящих заявок среди ответственных менеджеров с уведомлением</li>
                <li>- Настроены права для группы менеджеров по работе с партнерами</li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 top-md top-sm center-xs">
              <div class="portfolio__first__logo"><img src="/img/portfolio/3-logo.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="portfolio__fourth portfolio__block">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-5 col-xs-12 top-md top-sm center-xs">
              <div class="portfolio__first__logo"><img src="/img/portfolio/4-logo.png" alt=""></div>
            </div>
            <div class="col-md-6 col-sm-7 col-xs-12 middle-md end-md end-sm end-xs text--left middle-sm middle-xs">
              <p class="portfolio__heading">Бурение скважин</p>
              <p class="portfolio__task">Задачи: </p>
              <p class="portfolio__text">Внедрить Битрикс24 для управления продажами, документооборотом и контролем задач.</p>
              <p class="portfolio__result">Реализация:</p>
              <ul class="portfolio__list">
                <li>- Интегрирован сайт с карточкой Лида</li>
                <li>- Кобавлены кастомные поля для UTM меток</li>
                <li>- Настроена корпоративная почта для создания именных почтовых ящиков из Битрикс24</li>
                <li>- Настроены права для всех сотрудников</li>
                <li>- Настроены карточки Контактов, Компаний, Сделок</li>
                <li>- Настроены бизнес процессы для уведомления менеджеров о заявках</li>
                <li>- Прочитан курс по внедрению для руководителей компании</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="portfolio__fifth portfolio__block">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-sm-8 col-xs-12 middle-md middle-sm middle-xs">
              <p class="portfolio__heading">Бурение скважин</p>
              <p class="portfolio__task">Задачи:</p>
              <p class="portfolio__text">Автоматизировать отдел продаж и обеспечить сбор входящих заявок из раздных городов в единую систему. Обучить менеджеров управленияю системой</p>
              <p class="portfolio__result">Реализация:</p>
              <ul class="portfolio__list">
                <li>- Интегрированы посадочные страницы франчайзи из раздных городов, в единые кастомные поля карточки Лида</li>
                <li>- Настроены бизнес процессы распределения заявок в системе</li>
                <li>- Настроены уведомления</li>
              </ul>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-12 top-md top-sm center-xs start-md">
              <div class="portfolio__first__logo"><img src="/img/portfolio/5-logo.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row start-md center-xs">
          <div class="col-md-4 col-sm-12">
            <div class="footer__copyright">
              <p class="footer__copyright__text__first"> © 2016, ООО «Лидком». Все права защищены. Использование материалов сайта разрешено только с согласия правообладателей.</p>
              <p class="footer__copyright__text__second">
                426057, УР, г. Ижевск,
                <br>  ул. Буммашевская, 7/1 (деловой центр Crocus)
                <br> ОГРН 1141841002676; ИНН 1841041254; КПП 184101001<a href="lidkom_confidential.pdf" class="footer__copyright__link">Политика конфиденциальности</a>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 center-md">
            <div class="logo"><img src="img/logo.png" alt="">
              <h1 class="logo__heading">Агенство маркетинга и рекламы</h1>
            </div>
            <div class="logo__social"><span class="logo__social__vk">Блог учредителя <a href="//vk.com/osotov" rel="nofollow" target="_blank">Ivan Osotov</a></span></div>
          </div>
          <div class="col-md-4 col-sm-12 end-md">
            <div class="footer__contact">
              <p class="footer__contact__heading">Служба поддержки</p>
              <p class="footer__contact__phone">тел. +7 3412 77-44-28  — ежедневно</p><a href="mailto:office@lidkom.ru" class="footer__contact__email">office@lidkom.ru</a>
              <p class="footer__contact__hour">с 9:00 до 18:00 по московскому времени</p><a onclick="modalCallBack.open()" class="footer__contact__call--back">Обратный звонок</a>
              <p class="footer__contact__promo">ПРОМО КОД ДЛЯ<a href="http://callbackhunter.com/lidkom" target="_blank" class="footer__contact__link">CALLBACKHUNTER.COM</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div style="display: none;" class="call--back--modal">
      <div class="row center-md middle-md">
        <div class="col-md-12 col-sm-12 col-xs-12 center-md center-sm center-xs">
          <p class="call--back__text">Оставьте заявку на консультацию и составление бесплатного технического задания</p>
          <form>
            <input type="hidden" name="search_query" value="&lt;?php echo $query;?&gt;">
            <input type="hidden" name="referer" value="&lt;?php echo $referer;?&gt;">
            <input type="hidden" name="campaign" value="" class="dynamic_inputs">
            <input type="hidden" name="term" value="" class="dynamic_inputs">
            <input type="hidden" name="source" value="" class="dynamic_inputs">
            <input type="hidden" name="Goal" value="Оставить заявку(в шапке)">
            <input type="hidden" name="Url" value="&lt;?php echo $actual_link ?&gt;">
            <div class="form flex">
              <input type="text" name="name" placeholder="Имя:" required class="form__name">
              <input type="tel" name="phone" placeholder="Телефон:" required class="form__phone">
              <input type="submit" value="Заказать бесплатный звонок" class="button button__form">
            </div>
            <div class="form__checkbox cetnter-md cetnter-sm cetnter-xs">
              <input type="checkbox" checked required id="check2"><span> 
                <label for="check2">Согласен с обработкой данных</label></span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div style="display: none;" class="call--back--modal--footer">
      <div class="row center-md middle-md">
        <div class="col-md-12 col-sm-12 col-xs-12 center-md center-sm center-xs">
          <p class="call--back__text">Оставьте заявку на консультацию и составление бесплатного технического задания</p>
          <form>
            <input type="hidden" name="search_query" value="&lt;?php echo $query;?&gt;">
            <input type="hidden" name="referer" value="&lt;?php echo $referer;?&gt;">
            <input type="hidden" name="campaign" value="" class="dynamic_inputs">
            <input type="hidden" name="term" value="" class="dynamic_inputs">
            <input type="hidden" name="source" value="" class="dynamic_inputs">
            <input type="hidden" name="Goal" value="Оставить заявку(в футере)">
            <input type="hidden" name="Url" value="&lt;?php echo $actual_link ?&gt;">
            <div class="form flex">
              <input type="text" name="name" placeholder="Имя:" required class="form__name">
              <input type="tel" name="phone" placeholder="Телефон:" required class="form__phone">
              <input type="submit" value="Заказать бесплатный звонок" class="button button__form">
            </div>
            <div class="form__checkbox cetnter-md cetnter-sm cetnter-xs">
              <input type="checkbox" checked required id="check2"><span> 
                <label for="check2">Согласен с обработкой данных</label></span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="../js/tingle.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>