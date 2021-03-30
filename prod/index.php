<?php
    $phone_link = '+79999999999';
    $phone_format = '+7 (999) 999-99-99';
    $companyName = "Название компании";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>
    <title>Document</title>
</head>
<body>

<div class="burger-menu">
    <header class="header">
        <div class="container header__wrap">
            <svg class="logo header__logo">
                <use xlink:href="./images/stack/sprite.svg#logo_alt"></use>
            </svg>

            <nav class="header__menu">
                <a href="#about" class="header__menu-item">О нас</a>
                <a href="#advantages" class="header__menu-item">Преимущества</a>
                <a href="#contacts" class="header__menu-item">Где находимся</a>
            </nav>

            <div class="header__contacts">
                <a href="tel:<?= $phone_link?>" class="button header__phone-btn"><?= $phone_format?></a>

                <div class="burger-btn not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <div class="container burger-menu__wrap">
        <nav class="burger-menu__list">
            <a href="#about" class="burger-menu__list-item">О нас</a>
            <a href="#advantages" class="burger-menu__list-item">Преимущества</a>
            <a href="#contacts" class="burger-menu__list-item">Где находимся</a>
        </nav>
        <div class="burger-menu__contacts">
            <div class="burger-menu__block">
                <h4 class="burger-menu__block-title">Наш телефон:</h4>
                <a href="tel:<?= $phone_link?>" class="burger-menu__block-text"><?= $phone_format?></a>
            </div>
            <div class="burger-menu__block">
                <h4 class="burger-menu__block-title">Мы работаем:</h4>
                <div class="burger-menu__block-text">
                    С 8:00 до 23:00
                    <span class="line-break">Без выходных</span>
                </div>
            </div>
        </div>
        <button class="button button_alt burger-menu__button">Оставить заявку</button>
    </div>
</div>

<section class="promo">
    <header class="header">
        <div class="container header__wrap">
            <svg class="logo header__logo">
                <use xlink:href="./images/stack/sprite.svg#logo"></use>
            </svg>

            <nav class="header__menu">
                <a href="#about" class="header__menu-item">О нас</a>
                <a href="#advantages" class="header__menu-item">Преимущества</a>
                <a href="#contacts" class="header__menu-item">Где находимся</a>
            </nav>

            <div class="header__contacts">
                <a href="tel:<?= $phone_link?>" class="button header__phone-btn"><?= $phone_format?></a>

                <div class="burger-btn not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <div class="container promo__wrap">
        <div class="promo-info">
            <h1 class="promo__title">Работа сервисным <span class="line-break">инженером в СПб</span></h1>
            <div class="promo__subtitle">С зарплатой от 80 000 руб./мес.</div>
            <button class="button promo-button open-popup">Оставить заявку</button>
        </div>
        <img src="./images/promo-man.png" alt="мужик" class="promo__img">
    </div>
</section>

<section id="about" class="about">
    <div class="container about__wrap">
        <div class="row about__row">
            <div class="col-xl-6 col-lg-6 col-12 about__info">
                <h2 class="about__title"><?= $companyName; ?></h2>
                <div class="about__subtitle">Профессиональный ремонт компьютерной техники</div>
                <p class="about__text">
                    Наша группа компаний входит в тройку крупнейших сервисных центров по ремонту телефонов, компьютерной и бытовой техники. Принимаем более 4000 заказов ежемесячно. Открыты филиалы в 5 регионах России.
                </p>
                <p class="about__text">
                    Работая у нас, вы имеете возможность получать стабильно высокий доход и развиваться на постоянно растущем рынке, который не подвержен экономическому кризису. Ежегодный рост запросов на ремонт компьютеров, ноутбуков и телефонов составляет 20-30%.
                </p>
            </div>

            <div class="col-xl-6 col-lg-6 col-12">
                <img src="./images/team.jpg" alt="Команда" class="about__img">
            </div>
        </div>
    </div>
</section>

<section id="advantages" class="advantages">
    <div class="container advantages__wrap">
        <h2 class="section__title advantages__title">Делаем всё, чтобы Вы могли комфортно работать и достойно зарабатывать</h2>

        <div class="advantages__blocks">
            <div class="advantages__block">
                <svg class="advantages__block-icon">
                    <use xlink:href="./images/stack/sprite.svg#clock"></use>
                </svg>
                <h4 class="advantages__block-title">Гибкий график</h4>
                <div class="advantages__block-text">Блок с текстом “Раскрытие преимущества”</div>
            </div>
            <div class="advantages__block">
                <svg class="advantages__block-icon">
                    <use xlink:href="./images/stack/sprite.svg#bills"></use>
                </svg>
                <h4 class="advantages__block-title">Достойная зарплата</h4>
                <div class="advantages__block-text">Блок с текстом “Раскрытие преимущества”</div>
            </div>
            <div class="advantages__block">
                <svg class="advantages__block-icon">
                    <use xlink:href="./images/stack/sprite.svg#team"></use>
                </svg>
                <h4 class="advantages__block-title">Адаптация новых сотрудников</h4>
                <div class="advantages__block-text">Блок с текстом “Раскрытие преимущества”</div>
            </div>
            <div class="advantages__block">
                <svg class="advantages__block-icon">
                    <use xlink:href="./images/stack/sprite.svg#help"></use>
                </svg>
                <h4 class="advantages__block-title">Поддержка инженеров</h4>
                <div class="advantages__block-text">Блок с текстом “Раскрытие преимущества”</div>
            </div>
            <div class="advantages__block">
                <svg class="advantages__block-icon">
                    <use xlink:href="./images/stack/sprite.svg#bar-chart"></use>
                </svg>
                <h4 class="advantages__block-title">Постоянный рост</h4>
                <div class="advantages__block-text">Блок с текстом “Раскрытие преимущества”</div>
            </div>
            <div class="advantages__block">
                <svg class="advantages__block-icon">
                    <use xlink:href="./images/stack/sprite.svg#orders"></use>
                </svg>
                <h4 class="advantages__block-title">Много заказов</h4>
                <div class="advantages__block-text">Блок с текстом “Раскрытие преимущества”</div>
            </div>
        </div>
    </div>
</section>

<section class="vacancy-info">
    <div class="container vacancy-info__wrap">
        <div class="row vacancy-info__row">
            <div class="col-xl-6 col-lg-6 col-12 vacancy-info__info">
                <h2 class="vacancy-info__title">Чем вам предстоит заниматься</h2>

                <ul class="vacancy-info__list">
                    <li class="vacancy-info__list-item">— Диагностика неисправностей и ремонт Apple iPhone, iPad;</li>
                    <li class="vacancy-info__list-item">— Установка и настройка программного обеспечения;</li>
                    <li class="vacancy-info__list-item">— Модульный ремонт без пайки;</li>
                    <li class="vacancy-info__list-item">— Работа с клиентами – физические лица и юридические лица.</li>
                </ul>
            </div>

            <div class="col-xl-6 col-lg-6 col-12">
                <img src="./images/engineer.jpg" alt="Команда" class="vacancy-info__img">
            </div>
        </div>
        <div class="row vacancy-info__row">
            <div class="col-xl-6 col-lg-6 col-12">
                <img src="./images/team.jpg" alt="Команда" class="vacancy-info__img">
            </div>

            <div class="col-xl-6 col-lg-6 col-12 vacancy-info__info">
                <h2 class="vacancy-info__title">Ты нам подходишь, если:</h2>

                <ul class="vacancy-info__list">
                    <li class="vacancy-info__list-item">— Имеешь опыт работы мастером по ремонту телефонов iPhone (а также iPad) или по аналогичной специальности (но не обязательно, мы проводим полный курс обучения ремонту телефонов и техники Apple);</li>
                    <li class="vacancy-info__list-item">— Ты трудолюбив и ответственнен за результат, активная жизненная позиция;
                    </li>
                    <li class="vacancy-info__list-item">— У тебя есть желание зарабатывать, учиться и развиваться.</li>
                </ul>

                <button class="button button_alt open-popup">Позвоните мне</button>
            </div>
        </div>
    </div>
</section>

<section class="vacancies">
    <div class="container">
        <h2 class="section__title">Актуальные вакансии мастера по ремонту Apple в России</h2>

        <div class="vacancies__list">
            <img src="./images/vacancy.jpg" alt="Вакансия" class="vacancies__list-item">
            <img src="./images/vacancy.jpg" alt="Вакансия" class="vacancies__list-item">
            <img src="./images/vacancy.jpg" alt="Вакансия" class="vacancies__list-item">
            <img src="./images/vacancy.jpg" alt="Вакансия" class="vacancies__list-item">
            <img src="./images/vacancy.jpg" alt="Вакансия" class="vacancies__list-item">
        </div>
    </div>
</section>

<section class="employees">
    <div class="container">
        <h2 class="section__title section__title_alt">
            Наши лучшие сотрудники
        </h2>
        <div class="section__subtitle">
            Ты можешь стать одним из них!
        </div>
        <div class="employees-slider">
            <div class="employees-slider__slide">
                <img src="./images/engineers-photo.jpg" alt="инженер" class="employees-slider__slide-img">
                <h3 class="employees-slider__slide-name">Поп артёмов</h3>
                <div class="employees-slider__slide-profession">Старший сервис-инженер</div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Возраст:</span> 29 лет
                </div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Деятельность:</span> ремонт техники Apple со стажем работы более 4-х лет
                </div>
                <div class="employees-slider__slide-text">
                    Доход: <span class="text_bold">150 000 руб./мес.</span>
                </div>
            </div>
            <div class="employees-slider__slide">
                <img src="./images/engineers-photo.jpg" alt="инженер" class="employees-slider__slide-img">
                <h3 class="employees-slider__slide-name">Поп артёмов</h3>
                <div class="employees-slider__slide-profession">Старший сервис-инженер</div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Возраст:</span> 29 лет
                </div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Деятельность:</span> ремонт техники Apple со стажем работы более 4-х лет
                </div>
                <div class="employees-slider__slide-text">
                    Доход: <span class="text_bold">150 000 руб./мес.</span>
                </div>
            </div>
            <div class="employees-slider__slide">
                <img src="./images/engineers-photo.jpg" alt="инженер" class="employees-slider__slide-img">
                <h3 class="employees-slider__slide-name">Поп артёмов</h3>
                <div class="employees-slider__slide-profession">Старший сервис-инженер</div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Возраст:</span> 29 лет
                </div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Деятельность:</span> ремонт техники Apple со стажем работы более 4-х лет
                </div>
                <div class="employees-slider__slide-text">
                    Доход: <span class="text_bold">150 000 руб./мес.</span>
                </div>
            </div>
            <div class="employees-slider__slide">
                <img src="./images/engineers-photo.jpg" alt="инженер" class="employees-slider__slide-img">
                <h3 class="employees-slider__slide-name">Поп артёмов</h3>
                <div class="employees-slider__slide-profession">Старший сервис-инженер</div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Возраст:</span> 29 лет
                </div>
                <div class="employees-slider__slide-text">
                    <span class="text_bold">Деятельность:</span> ремонт техники Apple со стажем работы более 4-х лет
                </div>
                <div class="employees-slider__slide-text">
                    Доход: <span class="text_bold">150 000 руб./мес.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container">
        <div class="row about__row">
            <div class="col-xl-5 col-lg-5 col-12 about__info">
                <h2 class="about__title team__title">Дружная команда, вдохновляющая на успех</h2>

                <p class="about__text">
                    Наша группа компаний насчитывает более 200 сотрудников, находящихся в разных точках России.
                </p>
                <p class="about__text">
                    (может быть расписать пару предложений по типу “станьте частью этих веселых ребят, оставляйте заявку и бла-бла-бла. И ниже вставить кнопку “Оставить заявку)
                </p>
            </div>

            <div class="col-xl-7 col-lg-7 col-12 team__slider">
                <img src="./images/team_1.jpg" alt="Команда" class="about__img">
                <img src="./images/team_2.jpg" alt="Команда" class="about__img">
                <img src="./images/team_3.png" alt="Команда" class="about__img">
                <img src="./images/team_4.jpg" alt="Команда" class="about__img">
                <img src="./images/team_5.jpg" alt="Команда" class="about__img">
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <h2 class="section__title section__title_alt">Готовы зарабатывать?</h2>
        <div class="section__subtitle">Просто выполните 3 простых шага:</div>
        <div class="steps__blocks">
            <div class="steps__block">
                <div class="steps__block-icon">1</div>
                <div class="steps__block-text">
                    Позвоните нам или оставьте заявку
                </div>
            </div>
            <div class="steps__block">
                <div class="steps__block-icon">2</div>
                <div class="steps__block-text">
                    Приезжайте на собеседование и заполните анкету
                </div>
            </div>
            <div class="steps__block">
                <div class="steps__block-icon">3</div>
                <div class="steps__block-text">
                    Станьте специалистом нашего сервисного-центра
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contacts" class="contacts">
    <div class="container">
        <div class="row contacts__row">
            <div class="col-12 col-xl-6 col-lg-6 contacts__info">
                <h2 class="contacts__info-title">Есть вопросы?</h2>
                <div class="contacts__info-subtitle">Оставьте ваши данные и мы свяжемся с вами</div>

                <form action="./mail.php" method="POST" class="contacts__form">
                    <div class="contacts__form-inputs">
                        <div class="contacts__form-input">
                            <label for="contacts__form-name" class="contacts__form-label">Ваше имя:</label>
                            <input id="contacts__form-name" type="text" name="user_name" placeholder="Ваше имя">
                        </div>

                        <div class="contacts__form-input">
                            <label for="contacts__form-phone" class="contacts__form-label">Ваш телефон:</label>
                            <input id="contacts__form-phone" type="text" name="user_phone" placeholder="+7 (999) 999-99-99" required>
                        </div>
                    </div>

                    <button class="button button_alt">Позвоните мне</button>
                    <div class="contacts__form-footnote">
                        Нажимая кнопку “Позвоните мне” я соглашаюсь с <a href="./politika.html" target="_blank">политикой обработки персональных данных</a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-xl-6 col-lg-6">
                <div id="map" class="contacts__map"></div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">

    <div class="container footer__wrap">
        <svg class="logo footer__logo">
            <use xlink:href="./images/stack/sprite.svg#logo_alt"></use>
        </svg>

        <div class="footer__contacts">
            <div class="footer__contact">
                <svg class="footer__contact-icon">
                    <use xlink:href="./images/stack/sprite.svg#placeholder"></use>
                </svg>
                <div class="footer__contact-col">
                    <h4 class="footer__contact-title">Наш адрес</h4>
                    <div class="footer__contact-text">ул. Садовая д.9</div>
                </div>
            </div>

            <div class="footer__contact">
                <svg class="footer__contact-icon">
                    <use xlink:href="./images/stack/sprite.svg#call"></use>
                </svg>
                <div class="footer__contact-col">
                    <h4 class="footer__contact-title">Наш телефон</h4>
                    <a href="tel:<?= $phone_link?>" class="footer__contact-text footer__contact-phone"><?= $phone_format?></a>
                </div>
            </div>
        </div>

        <div class="footer__misc">
            <div class="footer__copyright"><?= $companyName; ?> - все права защищены</div>
            <a href="./politika.html" class="footer__policy" target="_blank">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

<div class="popup popup_call-master">
    <div class="container popup__wrap">
        <form action="/configs/mail.php" method="post" class="popup__form">
            <h2 class="popup__form-title">
                Вызвать мастера
            </h2>
            <div class="popup__form-subtitle">
                Введите свои данные ниже, и наш менеджер перезвонит Вам для уточнения деталей.
            </div>
            <div class="popup__form-close">&times;</div>
            <div class="popup__form-input-wrap">
                <label for="popup-name" class="popup__form-label">Ваше имя:</label>
                <input id="popup-name" type="text" name="user_name" class="popup__form-input" placeholder="Ваше имя">
            </div>
            <div class="popup__form-input-wrap">
                <label for="popup-phone" class="popup__form-label">Ваш телефон:</label>
                <input id="popup-phone" type="text" name="user_phone" class="popup__form-input popup__form-input-phone" placeholder="+7 (999) 999 99-99" required>
            </div>
            <button type="submit" class="popup__form-button">Оставить заявку</button>
            <div class="popup__footnote">
                Нажимая на кнопку «Оставить заявку», я даю <a href="./politika.html" target="_blank">согласие на обработку персональных данных.</a>
            </div>
        </form>
    </div>
</div>

<div class="popup popup-thanks">
    <div class="container popup__wrap">
        <div class="popup__form">
            <h2 class="popup__form-title">
                Спасибо
            </h2>
            <div class="popup__form-subtitle">
                Оператор свяжется с вами через 5 минут.
            </div>
            <div class="popup__form-close">&times;</div>
            <button class="popup__form-button popup-thanks__form-btn">Закрыть</button>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./jquery-masked-input.min.js"></script>
<script src="./script.js"></script>
<script>
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            center: [59.924726, 30.317046],
            zoom: 13
        });

        const glyphServicesParams = {
            iconLayout: 'default#image',
            iconImageHref: './images/svg/placeholder.svg',
            iconImageSize: [40, 40]
        }

        let servicePlacemarks = {
            sadovaya: new ymaps.Placemark([59.924726, 30.317046], {
                balloonContentHeader: 'Наш офис на м. Садовая',
                balloonContentBody: 'Позвоните нам: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
            }, glyphServicesParams),
        };

        myMap.geoObjects.add(servicePlacemarks['sadovaya']);


        myMap.events.add('click', () => {
            for (let placemark in servicePlacemarks) {
                servicePlacemarks[placemark].balloon.close();
            }
            for (let placemark in engineerPlacemarks) {
                engineerPlacemarks[placemark].balloon.close();
            }
        });

        if (document.documentElement.clientWidth < 992) {
            myMap.behaviors.disable(['drag']);
        }
    }
</script>
</body>
</html>