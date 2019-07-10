@extends('layouts.master')

@section('content')
  <div id="hero-section" data-ix="vacancy-menu-action" class="w-section hero-section centered _1 vacancy">
    <div class="pattern-overlay vacancy"></div>
    <div class="w-embed w-hidden-medium w-hidden-small w-hidden-tiny video vacancy" style="background-image: url(https://www.aftec.fr/sites/www.aftec.fr/files/fotolia_43949261_l.jpg);    background-position: center;
    background-size: 100%;
    background-repeat: no-repeat;">
      
    </div>
    <div data-animation="cross" data-duration="2000" data-infinite="1" data-delay="9000" data-autoplay="1" class="w-slider hero-slider vacancy">
      <div class="w-slider-mask"><div class="w-slide slide-photo-1 vacancy" style="transform: translateX(0px); opacity: 1;">
          <div class="hero">
            <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading vacancy" 
            style="opacity: 1; transform: translateX(0px) translateY(0px); transition: opacity 1000ms ease 0s, transform 1000ms ease 0s;">ПРЕВРАЩАЕМ КОНТАКТЫ В КЛИЕНТОВ!</h1>
            <img width="400" src="assets/img/line_d.svg" data-ix="fade-in-bottom-page-loads" class="hero-line" style="opacity: 1; transform: translateX(0px) translateY(0px); transition: opacity 1000ms ease 0s, transform 1000ms ease 0s;">
            <div data-ix="fade-in-bottom-page-loads" class="hero-subheading" style="opacity: 1; transform: translateX(0px) translateY(0px); transition: opacity 1000ms ease 0s, transform 1000ms ease 0s;">ПРОФЕССИОНАЛЬНЫЕ УСЛУГИ В СФЕРЕ ПРОДАЖ И МАРКЕТИНГА</div>
          </div>
        </div>
    </div>
    
      
      <a href="/" class="w-inline-block link-logo-main">
          <img width="421" src="assets/img/123124.png" class="logo-main-1">
      </a>
    </div>
    
  </div>
  <div data-ix="display-non-on-load" class="ddlidt" style="display: none;"></div>
  <div id="vacancys" class="w-section maps">
    <h2 id="vacancy" class="section-heading centered h2 vacancy alt">Наши услуги</h2><img width="400" src="assets/img/line_d.svg" class="line-img">
    <div data-ix="fade-in-bottom-scroll-in" class="section-subheading center vacancy head" style="opacity: 1; transform: translateX(0px) translateY(0px); transition: opacity 1000ms ease 0s, transform 1000ms ease 0s;">выберите город</div>
    <div data-duration-in="580" data-duration-out="300" class="w-tabs tab-menu1">
      <div class="w-tab-menu menu">
        <a data-w-tab="Tab 3" class="w-tab-link w--current w-inline-block _1tab">
          <!--<div class="text-vac adres">Белгород</div>-->
        </a>
      </div>
      <div class="w-tab-content">
        <div data-w-tab="Tab 3" class="w-tab-pane w--tab-active">
          <div class="w-row row-vac office_text">
            <div class="w-col w-col-12 w-col-stack">
              <div class="text-vac color">1. Пакет контакт центра START - 15% от оборота продаж</div>
            </div>
          </div>
          <div class="w-row row-vac office_text">
            <div class="w-col w-col-12 w-col-stack">
              <div class="text-vac color">2. Пакет контакт центра PROF - 40% от оборота продаж</div>
            </div>
          </div>
          <div class="w-row row-vac office_text">
            <div class="w-col w-col-12 w-col-stack">
              <div class="text-vac color">3. Обработка входящего трафика в товарных группах - по запросу</div>
            </div>
          </div>
          <div class="w-row row-vac office_text">
            <div class="w-col w-col-12 w-col-stack">
              <div class="text-vac color">4. Консультация по стратегии развития бизнеса и привлечения инвестиций - 50 000 рублей</div>
            </div>
          </div>
          <div class="w-row row-vac office_text">
            <div class="w-col w-col-12 w-col-stack">
              <div class="text-vac color">5. Консультация/разбор существующего бизнес проекта - 100 000 рублей</div>
            </div>
          </div>
          <div class="w-row row-vac office_text">
            <div class="w-col w-col-12 w-col-stack">
              <div class="text-vac color">6. Сопровождение менторство проекта - 1 000 000 рублей в месяц</div>
            </div>
          </div>
          <div class="w-row row-vac office_text">
            <div class="w-col w-col-12 w-col-stack">
              <div class="text-vac color">7. Услуги по организации деловых мероприятий, конгрессов, деловых миссий (в том числе зарубежом) - по согласованию</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection