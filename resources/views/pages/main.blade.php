@extends('layouts.master')

@section('content')
  <div data-collapse="small" data-animation="over-right" data-duration="300" class="w-nav nav-bar-vac"><a href="#" data-ix="show-and-hide-14" class="w-nav-link link-lng mob">Рус <span class="darrow">▼</span></a>
    <div class="w-nav-button menu-button">
      <div class="w-icon-nav-menu menu-icon"></div>
    </div>
    <nav role="navigation" class="w-nav-menu w-clearfix navigation-menu"><a href="index.html" class="w-nav-link nav-link">Главная</a><a href="#services" class="w-nav-link nav-link services">Услуги</a><a href="vacancii.html" class="w-nav-link nav-link vacant">Вакансии</a><img width="20" src="assets/img/4_outline1.svg" class="_4"><a href="#contacts" class="w-nav-link nav-link wb">Контакты</a><a href="#" data-ix="show-and-hide-14" class="w-nav-link link-lng">Рус <span class="darrow">▼</span></a>
    </nav>
  </div>
  <div data-ix="display-non-on-load" class="ddlidt"><a href="glavnaia-eng.html" class="dd-link">Eng</a>
  </div>
  <div data-collapse="small" data-animation="over-right" data-duration="400" class="w-nav nav-bar-vac-fix">
    <a href="index.html" class="w-nav-brand brand-link"><img width="117" src="assets/img/logoarce_white.svg" class="logo">
    </a>
    <div class="w-nav-button menu-button">
      <div class="w-icon-nav-menu menu-icon"></div>
    </div>
    <nav role="navigation" class="w-nav-menu w-clearfix navigation-menu fixed"><a href="#hero-section" class="w-nav-link nav-link">Главная</a><a href="#services" class="w-nav-link nav-link">Услуги</a><a href="vacancii.html" class="w-nav-link nav-link vacant">Вакансии</a><img width="20" src="assets/img/4_outline1.svg" class="_4"><a href="#contacts" class="w-nav-link nav-link re">Контакты</a><a href="#" data-ix="show-and-hide-32" class="w-nav-link nav-link lng">Рус <span class="darrow">▼</span></a>
      <div data-ix="display-non-on-load" class="ddlidts">
        <div data-ix="show-and-hide-33" class="dd-wrap"><a href="#" class="dd-link">Укр</a><a href="#" class="dd-link">Eng</a><a href="#" class="dd-link">PL</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="w-section modal1">
    <div class="w-clearfix popup"><a href="#" data-ix="modal-phone-no" class="hollow-button all-caps close _1">+</a>
      <h2 id="mail-section" data-ix="fade-in-bottom-scroll-in" class="section-heading centered pop">позвоните нам</h2>
      <p data-ix="fade-in-bottom-scroll-in" class="contact-phone-text">ПО ВОПРОСАМ
        <br>СОТРУДНИЧЕСТВА:
        <br>7 499 705 89 80
        <br>
        <br>ПО ВОПРОСАМ
        <br>ТРУДОУСТРОСТРОЙСТВА:
        <br>8 4722 402 194</p>
    </div>
  </div>
  <div class="w-section modal-info">
    <div class="modal2 alt1"><a href="#" data-ix="modal-infol-no" class="hollow-button all-caps close info _88">+</a>
      <h2 class="section-heading centered info">Информационная линия</h2><img width="400" src="assets/img/line_d.svg" class="line-info">
      <div class="section-subheading center inform main">ВОСПОЛЬЗОВАВШИСЬ ДАННОЙ УСЛУГОЙ, ВЫ ПОЛУЧАЕТЕ:</div>
      <div class="w-row row-info">
        <div class="w-col w-col-6 col1-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Номер для инфолинии: мобильный, городской, 0800</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Персональную систему голосового меню (IVR)</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Круглосуточную информационную поддержку</p>
          </div>
        </div>
        <div class="w-col w-col-6 col2-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Онлайн-доступ к записям и отчетам в удобной для Вас форме</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Регистрацию всех обращений клиентов по разным тематикам и каналам связи</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Качество согласно корпоративным стандартам</p>
          </div>
        </div>
      </div><a href="#section-form" data-ix="modal-infol-no" class="hollow-button btn-form">ЗАКАЗАТЬ&nbsp;</a>
    </div>
  </div>
  <div class="w-section modal-shop">
    <div class="modal2 alt"><a href="#" data-ix="modal-shopl-no" class="hollow-button all-caps close info _88">+</a>
      <h2 class="section-heading centered info">ОБСЛУЖИВАНИЕ ИНТЕРНЕТ-МАГАЗИНОВ</h2><img width="400" src="assets/img/line_d.svg" class="line-info">
      <div class="section-subheading center inform main">ВОСПОЛЬЗОВАВШИСЬ ДАННОЙ УСЛУГОЙ, ВЫ ПОЛУЧАЕТЕ:</div>
      <div class="w-row row-info">
        <div class="w-col w-col-6 col1-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Круглосуточную обработку и оформление заказов</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Качество согласно корпоративным стандартам</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Программное обеспечение для регистрации данных или интеграцию с Вашей CRM</p>
          </div>
        </div>
        <div class="w-col w-col-6 col2-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Онлайн-доступ к звонкам Ваших клиентов</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Актуализацию данных клиента</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Отчеты в удобной форме</p>
          </div>
        </div>
      </div><a href="#section-form" data-ix="modal-shopl-no" class="hollow-button btn-form">ЗАКАЗАТЬ&nbsp;</a>
    </div>
  </div>
  <div class="w-section modal-phone-shop">
    <div class="modal2"><a href="#" data-ix="modal-phone-shop-no" class="hollow-button all-caps close info _88">+</a>
      <h2 class="section-heading centered info">ПРОДАЖИ ПО ТЕЛЕФОНУ</h2><img width="400" src="assets/img/line_d.svg" class="line-info">
      <div class="section-subheading center inform main">ВОСПОЛЬЗОВАВШИСЬ ДАННОЙ УСЛУГОЙ, ВЫ ПОЛУЧАЕТЕ:</div>
      <div class="w-row row-info">
        <div class="w-col w-col-6 col1-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Эффективную презентацию Ваших товаров/услуг</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Персонализированный подход в продвижении продукта</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Оформление заявок на товары и услуги</p>
          </div>
        </div>
        <div class="w-col w-col-6 col2-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Формирование базы данных потенциальных и/или действующих клиентов</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Онлайн-доступ к звонкам</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Отчеты в удобной форме</p>
          </div>
        </div>
      </div><a href="#section-form" data-ix="modal-phone-shop-no" class="hollow-button btn-form">ЗАКАЗАТЬ&nbsp;</a>
    </div>
  </div>
  <div class="w-section modal-infoline">
    <div class="modal2 alt2 lg"><a href="#" data-ix="modal-infoline-no" class="hollow-button all-caps close info _88">+</a>
      <h2 class="section-heading centered info alt">СЛУЖБА ПОДДЕРЖКИ</h2><img width="400" src="assets/img/line_d.svg" class="line-info">
      <div class="section-subheading center inform main">ВОСПОЛЬЗОВАВШИСЬ ДАННОЙ УСЛУГОЙ, ВЫ ПОЛУЧАЕТЕ:</div>
      <div class="w-row row-info">
        <div class="w-col w-col-6 col1-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Круглосуточную помощь, консультацию и информирование клиентов</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Обработку запросов через любые каналы коммуникаций: телефон, чат, е-mail, sms, сайт, соцсети</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Информирование клиента о статусе запроса</p>
          </div>
        </div>
        <div class="w-col w-col-6 col2-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Фиксацию обращений клиентов по различным тематикам и каналам связи</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Онлайн-доступ к звонкам</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info hiden ru"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Качество согласно корпоративным стандартам</p>
          </div>
        </div>
      </div><a href="#section-form" data-ix="modal-infoline-no" class="hollow-button btn-form">ЗАКАЗАТЬ&nbsp;</a>
    </div>
  </div>
  <div class="w-section modal-checing">
    <div class="modal2 alt3"><a href="#" data-ix="modal-checking-no" class="hollow-button all-caps close info _88">+</a>
      <h2 class="section-heading centered info">АНКЕТИРОВАНИЕ И ОПРОСЫ</h2><img width="400" src="assets/img/line_d.svg" class="line-info">
      <div class="section-subheading center inform main">ВОСПОЛЬЗОВАВШИСЬ ДАННОЙ УСЛУГОЙ, ВЫ ПОЛУЧАЕТЕ:</div>
      <div class="w-row row-info">
        <div class="w-col w-col-6 col1-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Разработку индивидуального сценария проведения опроса согласно Вашим требованиям</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Количественные и качественные результаты опроса</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Контроль качества заполнения опросных форм</p>
          </div>
        </div>
        <div class="w-col w-col-6 col2-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Оперативные сроки выполнения</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Онлайн-доступ к системе записи звонков</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Отчет в удобной форме</p>
          </div>
        </div>
      </div><a href="#section-form" data-ix="modal-checking-no" class="hollow-button btn-form">ЗАКАЗАТЬ&nbsp;</a>
    </div>
  </div>
  <div class="w-section modal-database alter">
    <div class="modal2 alter"><a href="#" data-ix="modal-database-no" class="hollow-button all-caps close info _88">+</a>
      <h2 class="section-heading centered info">АКТУАЛИЗАЦИЯ БАЗ ДАННЫХ</h2><img width="400" src="assets/img/line_d.svg" class="line-info">
      <div class="section-subheading center inform main">ВОСПОЛЬЗОВАВШИСЬ ДАННОЙ УСЛУГОЙ, ВЫ ПОЛУЧАЕТЕ:</div>
      <div class="w-row row-info">
        <div class="w-col w-col-6 col1-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Базу данных с актуальной информацией согласно Вашему запросу</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Информирование и сегментирование клиентов при обзвоне</p>
          </div>
        </div>
        <div class="w-col w-col-6 col2-info">
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Обновление информации в оперативные сроки</p>
          </div>
          <div data-ix="fade-in-right-scroll-in" class="w-clearfix tezis-info"><img width="23" src="assets/img/Very-Basic-Checkmark-icon.png" data-ix="fade-in-right-scroll-in" class="img-info">
            <p data-ix="fade-in-right-scroll-in" class="p-gives r info">Отчет в удобной форме</p>
          </div>
        </div>
      </div><a href="#section-form" data-ix="modal-database-no" class="hollow-button btn-form alt">ЗАКАЗАТЬ&nbsp;</a>
    </div>
  </div>
  <a href="#hero-section" data-ix="fade-opacity-navigation" class="w-inline-block link-ip">
    <div class="link-up">&lt;</div>
  </a>
  <div id="hero-section" data-ix="menu-action" class="w-section hero-section centered">
    <div data-ix="fade-in-bottom-page-loads" class="div-button"><a href="#about-section" data-ix="movie-arrow-doown" class="hollow-button all-caps">&gt;</a>
      <div class="div-icons-contact">
        <a href="#section-form" class="w-clearfix w-inline-block mail-link"><img width="25" src="assets/img/envelope5_1.svg" data-ix="modal-mail" class="mail-icon _1">
        </a>
        <a href="#footer" class="w-clearfix w-inline-block mail-link"><img width="20" src="assets/img/map_outline.svg" class="mail-icon">
        </a>
        <a href="#" data-ix="modal-phone" class="w-clearfix w-inline-block mail-link"><img width="25" src="assets/img/telephone_outline (1).svg" class="mail-icon">
        </a>
      </div>
    </div>
    <div data-animation="cross" data-duration="2000" data-infinite="1" data-delay="9000" data-autoplay="1" class="w-slider hero-slider main1">
      <div class="w-slider-mask mask main">
        <div class="w-slide slide-photo-1 vacancy main">
          <div data-ix="new-interaction" class="w-container hero-container slider-1">
            <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading"><br>ANYTIME</h1><img src="assets/img/line_gray.svg" data-ix="fade-in-bottom-page-loads" class="hero-line">
            <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">в&nbsp;любое время, в любой точке мира
              <br> мы&nbsp;<span class="bold">ВСЕГДА</span>&nbsp;на связи</div>
          </div>
        </div>
        <div class="w-slide slide-3">
          <div data-ix="new-interaction" class="w-container hero-container slider-1">
            <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading main"><br>RELIABLE</h1><img src="assets/img/line_gray.svg" data-ix="fade-in-bottom-page-loads" class="hero-line">
            <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">благодаря&nbsp;<span class="bold">НАДЕЖНОМУ</span>&nbsp;
              <br>сервису, нам доверяют своих клиентов ведущие компании мира</div>
          </div>
        </div>
        <div class="w-slide slide-4 main">
          <div data-ix="new-interaction" class="w-container hero-container slider-1">
            <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading"><br>COMMUNICATION</h1><img src="assets/img/line_gray.svg" data-ix="fade-in-bottom-page-loads" class="hero-line">
            <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">мы искренне помогаем КЛИЕНТАМ, СОЗДАВАЯ позитивные и приятные ВПЕЧАТЛЕНИЯ от каждой&nbsp;<span class="bold">КОМмУНиКАЦИИ</span>
            </div>
          </div>
        </div>
        <div class="w-slide slide-5 _5">
          <div data-ix="new-interaction" class="w-container hero-container slider-1">
            <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading"><br>EXPERT</h1><img src="assets/img/line_gray.svg" data-ix="fade-in-bottom-page-loads" class="hero-line">
            <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">имея богатый опыт и постоянно совершенствуясь, мы являемся &nbsp;<span class="bold">ЭКСПЕРТами</span>&nbsp;в создании целевых решений для наших Заказчиков</div>
          </div>
        </div>
      </div>
      <div class="w-slider-arrow-left link-slider main">
        <div data-ix="move-left" class="left-arrow">&lt;</div>
      </div>
      <div class="w-slider-arrow-right link-slider main _1">
        <div data-ix="move-right" class="right-arrow"><strong class="right-arrow">&gt;</strong>
        </div>
      </div>
      <a href="index.html" class="w-inline-block link-logo-main"><img width="421" src="assets/img/logoarce_w-OUTLINE.svg" class="logo-main-1"><img src="assets/img/logoarce_whte.svg" data-ix="hover-bg" class="logo-main-2">
      </a>
    </div>
  </div>
  <div id="about-section" class="w-section about-section">
    <div class="heading">
      <h2 id="vacancy" class="section-heading centered h2">ПРОФЕССИОНАЛЬНЫЙ АУТСОРСИНГОВЫЙ КОНТАКТНЫЙ ЦЕНТР</h2><img width="400" src="assets/img/line_gray.svg" class="line-img">
      <div class="about">
        <div class="w-row about-row">
          <div data-ix="fade-in-downscroll-in" class="w-col w-col-6 w-col-stack col1"></div>
          <div class="w-col w-col-6 w-col-stack col2">
            <div class="centered">
              <p class="about-text">
                <br>&nbsp;&nbsp;&nbsp;&nbsp;ARCE&nbsp;contact&nbsp;center&nbsp;– надежный аутсорсинговый партнер ведущих российских и международных компаний. На сегодняшний день в&nbsp;ARCE&nbsp;сontact&nbsp;сenter&nbsp;работает&nbsp;более 1000 сотрудников, обслуживающих клиентов&nbsp;со всего мира на более чем десяти языках.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;С 2010 года мы делаем клиентский сервис надежным и простым, во многом благодаря доверительным и высокопрофессиональным отношениям с нашими Заказчиками. Каждый проект, независимо от его масштабов, является частью нашего большого дела, над которым работает квалифицированная команда специалистов.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Наш бренд «A.R.C.E» максимально точно передает ценности, которые являются основными в нашей работе:&nbsp;«A – Anytime, R – Reliable, C - Communication, E - Expert».</span>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Мы всегда открыты для инноваций и рады сотрудничеству с профессионалами.
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br><span class="autor">С уважением, учредитель ARCE contact center<br xmlns="http://www.w3.org/1999/xhtml">Олег Мирошниченко<br></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="services" class="w-section section scills">
    <h2 class="section-heading scills">услуги</h2><img width="400" src="assets/img/line_gray.svg" class="line-img">
    <div class="section-subheading center white">ARCE contact center&nbsp;</div>
    <div data-animation="slide" data-duration="1500" data-infinite="1" data-easing="ease-in-out" data-delay="9000" data-autoplay="1" class="w-slider slider">
      <div class="w-slider-mask mask">
        <div class="w-slide">
          <div class="w-row row-wins">
            <div data-ix="fade-in-right-scroll-in" class="w-col w-col-4 column1">
              <a href="#" data-ix="madal-info" class="w-inline-block info"><img width="50" src="assets/img/info.svg" class="img">
                <div class="text">ИНФОРМАЦИОННАЯ&nbsp;
                  <br>ЛИНИЯ</div>
              </a><a href="#" data-ix="madal-info" class="btn">подробнее &gt;</a>
            </div>
            <div data-ix="fade-in-bottom-scroll-in" class="w-col w-col-4 column1">
              <a href="#" data-ix="modal-shop" class="w-inline-block info"><img width="50" src="assets/img/cart.svg" class="img">
                <div class="text">ОБСЛУЖИВАНИЕ&nbsp;
                  <br>ИНТЕРНЕТ-МАГАЗИНОВ</div>
              </a><a href="#" data-ix="modal-shop" class="btn">подробнее &gt;</a>
            </div>
            <div data-ix="fade-in-left-scroll-in" class="w-col w-col-4 column1">
              <a href="#" data-ix="madal-phone-shop" class="w-inline-block info"><img width="50" src="assets/img/phone.svg" class="img">
                <div class="text">ПРОДАЖИ&nbsp;
                  <br>ПО ТЕЛЕФОНУ</div>
              </a><a href="#" data-ix="madal-phone-shop" class="btn">подробнее &gt;</a>
            </div>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-row row-wins">
            <div class="w-col w-col-4 column1">
              <a href="#" data-ix="madal-infoline" class="w-inline-block info"><img width="50" src="assets/img/headset.svg" class="img">
                <div class="text">СЛУЖБА&nbsp;
                  <br>ПОДДЕРЖКИ</div>
              </a><a href="#" data-ix="madal-infoline" class="btn">подробнее &gt;</a>
            </div>
            <div class="w-col w-col-4 column1">
              <a href="#" data-ix="madal-checking" class="w-inline-block info"><img width="50" src="assets/img/cheklist.svg" class="img">
                <div class="text">АНКЕТИРОВАНИЕ&nbsp;
                  <br>И ОПРОСЫ</div>
              </a><a href="#" data-ix="madal-checking" class="btn">подробнее &gt;</a>
            </div>
            <div class="w-col w-col-4 column1">
              <a href="#" data-ix="madal-database" class="w-inline-block info"><img width="50" src="assets/img/database.svg" class="img">
                <div class="text">АКТУАЛИЗАЦИЯ&nbsp;
                  <br>БАЗ ДАННЫХ</div>
              </a><a href="#" data-ix="madal-database" class="btn">подробнее &gt;</a>
            </div>
          </div>
        </div>
      </div>
      <div data-ix="move-left" class="w-slider-arrow-left l-arrow">
        <div class="left-arrow _1">&lt;</div>
      </div>
      <div data-ix="move-right" class="w-slider-arrow-right r-arrow">
        <div class="right-arrow _1">&gt;</div>
      </div>
      <div class="w-slider-nav w-round pin-slider"></div>
    </div>
  </div>
  <!--<div id="section-form" class="w-section section-promoutes">-->
  <!--  <div class="div-form">-->
  <!--    <div class="section-subheading center inform">Свяжитесь с нами прямо сейчас</div><img class="line-img" width="400" src="assets/img/line_d.svg">-->
  <!--    <div class="w-form">-->
  <!--      <form class="form-busy" name="email-form-2" id="email_form_1" data-name="Email Form 2" data-ix="fade-in-right-scroll-in" method="post">-->
  <!--        <div class="w-row row-form">-->
  <!--          <div class="w-col w-col-6">-->
  <!--            <label class="name-field" for="name">Имя:</label>-->
  <!--            <input class="w-input name-field" id="name" type="text" placeholder="Введите Имя" name="name" data-name="name" required="required">-->
  <!--          </div>-->
  <!--          <div class="w-col w-col-6">-->
  <!--            <label class="name-field" for="phone">Телефон:</label>-->
  <!--            <input class="w-input phone-f" id="phone" type="text" placeholder="Укажите Ваш телефон" name="phone" data-name="phone" required="required">-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <label class="name-field" for="email">Ваш E-mail:</label>-->
  <!--        <input class="w-input mail-field" id="email" type="email" placeholder="Введите Ваш e-mail" name="email" required="required" data-name="email">-->
  <!--        <label class="name-field" for="field">Описание запроса:</label>-->
  <!--        <textarea class="w-input input" id="field" placeholder="Опишите Ваш запрос" name="field" data-name="field"></textarea>-->
  <!--        <input class="w-button submit-btn" type="submit" value="отправить" data-wait="Идет отправка..." wait="Идет отправка..." onclick="SendPost( $(this) );">-->
  <!--      </form>-->
  <!--      <div class="w-form-done">-->
  <!--        <p>Упс! Что-то пошло не так при отправке формы. Перезагрузите страницу и повторите попытку.</p>-->
  <!--      </div>-->
  <!--      <div class="w-form-fail">-->
  <!--        <p>Благодарим вас! Мы получили Вашу заявку! В ближайшее время с Вами свяжется наш менеджер.</p>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <div id="footer" class="w-section footer center">
    <div id="contacts" class="section-title-group footer">
      <h2 id="map-section" class="section-heading centered footer white">Контакты</h2><img width="400" src="assets/img/line_gray.svg" class="line-img">
      <div>
        <div class="w-row map-row">
          <div class="w-col w-col-8 w-col-stack w-clearfix map-col">
            <div class="section-subheading head-map">Обеспечиваем коммуникации в любой точке мира</div>
            <div class="map"><img width="832" src="assets/img/map_vector.svg" class="img-map">
            </div>
          </div>
          <div class="w-col w-col-4 w-col-stack contacts">
            <div class="section-subheading map-contact head">Свяжитесь с нами:</div>
            <div class="section-subheading map-contact tel">7 499 705 89 80</div>
            <div class="section-subheading map-contact ss">По вопросам сотрудничества:</div>
            <div class="section-subheading map-contact mail">sales@arcecallcenter.com</div>
            <div class="section-subheading map-contact ss">По вопросам трудоустройства:</div>
            <div class="section-subheading map-contact tel">hr@arcecallcenter.com</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section w-clearfix copyright footer">
    <div class="footer-text">ARCE Contact Center. Copyright © 2015. All rights reserved</div>
    <div class="w-clearfix soc">
      <a href="https://instagram.com/arce_contact_center/" target="_blank" class="w-inline-block soc-link insta"><img width="40" src="assets/img/logoarce_wb_instagram.svg" class="tweet-icon">
      </a>
      <a href="http://vk.com/arce_belgorod" target="_blank" class="w-inline-block soc-link"><img width="40" src="assets/img/logoarce_wb_vk.svg" class="tweet-icon">
      </a>
      <a href="mailto:sales@arcecallcenter.com" target="_blank" class="w-inline-block soc-link"><img width="43" src="assets/img/logoarce_envelope.svg" class="tweet-icon">
      </a>
      <a href="tel:7 499 705 89 80" target="_blank" class="w-inline-block soc-link"><img width="43" src="assets/img/logoarce_phone.svg" class="tweet-icon">
      </a>
    </div>
  </div>
<!--  <section class="section-contact section-wrapper gray-bg">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="section-title">-->
<!--                    <h2>Контакты</h2>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!--.row-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <address>-->
<!--                    <strong>Email</strong><br>-->
<!--                    <a href="mailto:info@ropp.ru">info@ropp.ru</a>-->
<!--                </address>-->
<!--            </div>-->
<!--        </div>-->
        <!--.row-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="feedback-form">-->
<!--                    <h2>Есть вопросы ?</h2>-->

<!--                    <form id="contactForm" action="/form" method="POST">-->
<!--                    	<input type="hidden" name="_token" value="LgMbtMLuXl8EWNGeaWBzzdAB6yizkbiny6FlgB6J">-->
<!--                        <div class="form-group">-->
<!--                            <label for="InputName">Имя</label>-->
<!--                            <input type="text" name="p1" required="" class="form-control" id="InputName" placeholder="Введите ваше имя">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="InputEmail">Почта</label>-->
<!--                            <input type="email" name="email" required="" class="form-control" id="InputEmail" placeholder="Введите ваг еmail">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="message-text" class="control-label">Сообщение</label>-->
<!--                            <textarea class="form-control" rows="4" required="" name="p2" id="message-text" placeholder="Введите ваше сообщение"></textarea>-->
<!--                        </div>-->

<!--                        <button type="submit" class="btn btn-primary">Отправить</button>-->
<!--                    </form>-->
<!--                </div>-->
                <!-- .feedback-form -->


<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--.container-fluid-->
<!--</section>-->
@endsection