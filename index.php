<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <script>/*! modernizr 3.6.0 (Custom Build) | MIT *
    *https://modernizr.com/download/?-setclasses !*/
      !function(n,e,s){function o(n,e){return typeof n===e}function a(){var n,e,s,a,i,l,r;for(var c in f)if(f.hasOwnProperty(c)){if(n=[],e=f[c],e.name&&(n.push(e.name.toLowerCase()),e.options&&e.options.aliases&&e.options.aliases.length))for(s=0;s<e.options.aliases.length;s++)n.push(e.options.aliases[s].toLowerCase());for(a=o(e.fn,"function")?e.fn():e.fn,i=0;i<n.length;i++)l=n[i],r=l.split("."),1===r.length?Modernizr[r[0]]=a:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=a),t.push((a?"":"no-")+r.join("-"))}}function i(n){var e=r.className,s=Modernizr._config.classPrefix||"";if(c&&(e=e.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+s+"no-js(\\s|$)");e=e.replace(o,"$1"+s+"js$2")}Modernizr._config.enableClasses&&(e+=" "+s+n.join(" "+s),c?r.className.baseVal=e:r.className=e)}var t=[],f=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(n,e){var s=this;setTimeout(function(){e(s[n])},0)},addTest:function(n,e,s){f.push({name:n,fn:e,options:s})},addAsyncTest:function(n){f.push({name:null,fn:n})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var r=e.documentElement,c="svg"===r.nodeName.toLowerCase();a(),i(t),delete l.addTest,delete l.addAsyncTest;for(var u=0;u<Modernizr._q.length;u++)Modernizr._q[u]();n.Modernizr=Modernizr}(window,document);
  </script>
  <title>Kugo</title>
</head>
<body>
  <div class="container">
    <nav class="navbar">
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Сервис</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Сотрудничество</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Заказать звонок</a>
        </li>
        <li class="header-nav-item">
          <div class="header-socials">
            <a href="#" class="header-socials-link">
              <svg height="13px" width="13px">
                <use href="./img/sprite.svg#viber"></use>
              </svg>
            </a>
  
            <a href="#" class="header-socials-link">
              <svg height="13px" width="13px">
                <use href="./img/sprite.svg#whatsapp"></use>
              </svg>
            </a>
  
            <a href="#" class="header-socials-link">
              <svg height="13px" width="13px" fill="#5D6C7B">
                <use href="./img/sprite.svg#telegram"></use>
              </svg>
            </a>
          </div>
        </li>
      </ul>
      <a href="tel:+78005055461" class="header-phone">+7 (800) 505-54-61</a>
    </nav>
  </div>
    <div class="header-separator"></div>

  <div class="container">
    <header class="header">
      <a href="./" class="header-logo">Kugoo</a>

      <button class="button header-button">
        <div class="header-button-lines">
          <div class="header-button-line"></div>
          <div class="header-button-line"></div>
          <div class="header-button-line"></div>
        </div>
        Каталог
      </button>

      <div class="header-controls">
        <input type="text" class="header-input" placeholder="Искать самокат KUGO">
        <button class="button button-search">
          <svg width="16" height="16">
            <use href="./img/sprite.svg#search"></use>
          </svg>
        </button>
      </div>

      <ul class="header-links">
        <li class="header-links-item">
          <a href="#" class="header-link">
            <img src="./img/balance.svg" alt="balance">
          </a>
        </li>

        <li class="header-links-item">
          <a href="#" class="header-link">
            <svg width="20" height="20" fill="#282739">
              <use href="./img/sprite.svg#heart"></use>
            </svg>
          </a>
        </li>

        <li class="header-links-item">
          <a href="#" class="header-link">
            <svg width="20" height="20">
              <use href="./img/sprite.svg#cart"></use>
            </svg>
            Корзина
          </a>
        </li>
      </ul>
    </header>

    <section class="banner">
      <div class="banner-image">
        <div class="banner-content">
          <div class="banner-schedule">
            <svg width="15" height="15">
              <use href="./img/sprite.svg#pin"></use>
            </svg>
            <span class="banner-address">Восточно-Кругликовская улица, 86</span>
            <span class="banner-time">Вт - Сб 10:00 - 20:00</span>
          </div>

          <h1 class="banner-title">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
          <p class="banner-text">в Москве без ограничения по времени</p>

          <ul class="banner-features">
            <li class="banner-features-item">
              <div class="banner-features-item-icon">
                <svg width="16" height="16">
                  <use href="./img/sprite.svg#scooter"></use>
                </svg>
              </div>
              <p class="banner-features-item-text">Поймете, какая модель вам подходит</p>
            </li>
            <li class="banner-features-item">
              <div class="banner-features-item-icon">
                <svg width="16" height="16" fill="#FFF">
                  <use href="./img/sprite.svg#energy"></use>
                </svg>
              </div>
              <p class="banner-features-item-text">Проверите лучшие самокаты в деле</p>
            </li>
          </ul>

          <button class="button-light banner-button" data-toggle="modal">Записаться</button>
        </div>
      </div>
    </section>

    <section class="section test-drive">
      <div class="section-wrapper">
        <h2 class="section-title test-drive-title">Определите максимально подходящую вам модель
          не&nbsp;теоретически, а на практике</h2>
          <div class="section-content">
            <h3 class="section-list-title">Тест-драйв поможет:</h3>
            <ul class="section-list">
              <li class="section-list-item">
                <svg width="22" height="22" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                <b>Понять</b>&nbsp;подходит ли вам конкретная модель;
              </li>

              <li class="section-list-item">
                <svg width="22" height="22" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                <b>Испытать</b>&nbsp;самокат в «реальной жизни»;
              </li>

              <li class="section-list-item">
                <svg width="22" height="22" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                <b>Оценить</b>&nbsp;удобство хранения и эксплуатации;
              </li>

              <li class="section-list-item">
                <svg width="22" height="22" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                <b>Узнать</b>&nbsp;реальные характеристики и возможности модели.
              </li>
            </ul>
        </div>
      </div>

      <picture>
        <source type="image/webp" srcset="./img/scooters.webp">
        <source type="image/jpg" srcset="./img/scooters.jpg">
        <img src="./img/scooters.jpg" alt="scooters" class="test-drive-image">
      </picture>
      
    </section>

    <section class="section education">

      <picture>
        <source type="image/webp" srcset="./img/e-scooters.webp">
        <source type="image/jpg" srcset="./img/e-scooters.jpg">
        <img src="./img/e-scooters.jpg" alt="e-scooters" class="education-image">
      </picture>
      <div class="section-wrapper">
        <h2 class="section-title education-title">Научим правильной и&nbsp;безопасной езде в городе вас&nbsp;или вашего ребенка</h2>
          <div class="section-content">
            <h3 class="section-list-title">На обучении специалист расскажет:</h3>
            <ul class="section-list">
              <li class="section-list-item">
                <svg width="22px" height="22px" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                Как подготовить самокат к поездке;
              </li>

              <li class="section-list-item">
                <svg width="22px" height="22px" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                Как «завести» самокат;
              </li>

              <li class="section-list-item">
                <svg width="22px" height="22px" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                Как вести себя во время поездки и обезопасить себя и окружающих;
              </li>

              <li class="section-list-item">
                <svg width="22px" height="22px" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                Как складывать и раскладывать электросамокат;
              </li>

              <li class="section-list-item">
                <svg width="22px" height="22px" class="section-list-icon">
                  <use href="./img/sprite.svg#check-circle"></use>
                </svg>
                Как ухаживать за своим девайсом.
              </li>
            </ul>
        </div>
      </div>
    </section>

    <section class="section models"> 
      <h2 class="section-title models-title">Сейчас для тест-драйва и обучения доступны следующие модели</h2>
      <div class="models-wrapper">
        <div class="model-card">
          <span class="model-bage red-bage">ХИТ</span>
          <img src="./img/balance.svg" alt="balance" class="card-icon">
          <div class="models-card-image">
          <picture>
            <source type="image/webp" srcset="./img/scooter.webp">
            <source type="image/png" srcset="./img/scooter.png">
            <img src="./img/scooter.png" alt="scooter" class="card-image">
          </picture>
          </div>
          <div class="card-content">
          <h3 class="card-title">Kugoo Kirin M4</h3>
          <ul class="characteristics">
            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#accumulator"></use>
              </svg>
              2000 mAh
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#speedometer"></use>
              </svg>
              60 км/ч
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18" fill="#5D6C7B">
                <use href="./img/sprite.svg#energy"></use>
              </svg>
              1,2 л.с.
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#timer"></use>
              </svg>
              5 часов
            </li>
          </ul>
          <div class="card-footer">
            <div class="card-price">
              <p class="price-old">39 900 ₽</p>
              <p class="price-new">29 900 ₽</p>
            </div>
            <div class="card-footer-icons">
              <div class="card-footer-icon">
                <svg width="20" height="20">
                  <use href="./img/sprite.svg#card-cart"></use>
                </svg>
              </div>

              <div class="card-footer-icon">
                <svg width="20" height="20" fill="#6F73EE">
                  <use href="./img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
          </div>
          <button class="button card-button" data-toggle="modal">Записаться на тест-драйв</button>
        </div>
        </div>

        <div class="model-card">
          <span class="model-bage green-bage">Новинка</span>
          <img src="./img/balance.svg" alt="balance" class="card-icon">
          <div class="models-card-image">
            <picture>
              <source type="image/webp" srcset="./img/scooter.webp">
              <source type="image/png" srcset="./img/scooter.png">
              <img src="./img/scooter.png" alt="scooter" class="card-image">
            </picture>
          </div>
          <div class="card-content">
          <h3 class="card-title">Kugoo Kirin M4</h3>
          <ul class="characteristics">
            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#accumulator"></use>
              </svg>
              2000 mAh
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#speedometer"></use>
              </svg>
              60 км/ч
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18" fill="#5D6C7B">
                <use href="./img/sprite.svg#energy"></use>
              </svg>
              1,2 л.с.
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#timer"></use>
              </svg>
              5 часов
            </li>
          </ul>
          <div class="card-footer">
            <div class="card-price">
              <p class="price-old">39 900 ₽</p>
              <p class="price-new">29 900 ₽</p>
            </div>
            <div class="card-footer-icons">
              <div class="card-footer-icon">
                <svg width="20" height="20">
                  <use href="./img/sprite.svg#card-cart"></use>
                </svg>
              </div>

              <div class="card-footer-icon">
                <svg width="20" height="20" fill="#6F73EE">
                  <use href="./img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
          </div>
          <button class="button card-button" data-toggle="modal">Записаться на тест-драйв</button>
        </div>
        </div>

        <div class="model-card">
          <span class="model-bage red-bage">ХИТ</span>
          <img src="./img/balance.svg" alt="balance" class="card-icon">
          <div class="models-card-image">
            <picture>
              <source type="image/webp" srcset="./img/scooter.webp">
              <source type="image/png" srcset="./img/scooter.png">
              <img src="./img/scooter.png" alt="scooter" class="card-image">
            </picture>
          </div>
          <div class="card-content">
          <h3 class="card-title">Kugoo Kirin M4</h3>
          <ul class="characteristics">
            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#accumulator"></use>
              </svg>
              2000 mAh
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#speedometer"></use>
              </svg>
              60 км/ч
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18" fill="#5D6C7B">
                <use href="./img/sprite.svg#energy"></use>
              </svg>
              1,2 л.с.
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#timer"></use>
              </svg>
              5 часов
            </li>
          </ul>
          <div class="card-footer">
            <div class="card-price">
              <p class="price-old">39 900 ₽</p>
              <p class="price-new">29 900 ₽</p>
            </div>
            <div class="card-footer-icons">
              <div class="card-footer-icon">
                <svg width="20" height="20">
                  <use href="./img/sprite.svg#card-cart"></use>
                </svg>
              </div>

              <div class="card-footer-icon">
                <svg width="20" height="20" fill="#6F73EE">
                  <use href="./img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
          </div>
          <button class="button card-button" data-toggle="modal">Записаться на тест-драйв</button>
        </div>
        </div>

        <div class="model-card">
          <span class="model-bage green-bage">Новинка</span>
          <img src="./img/balance.svg" alt="balance" class="card-icon">
          <div class="models-card-image">
            <picture>
              <source type="image/webp" srcset="./img/scooter.webp">
              <source type="image/png" srcset="./img/scooter.png">
              <img src="./img/scooter.png" alt="scooter" class="card-image">
            </picture>
          </div>
          <div class="card-content">
          <h3 class="card-title">Kugoo Kirin M4</h3>
          <ul class="characteristics">
            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#accumulator"></use>
              </svg>
              2000 mAh
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#speedometer"></use>
              </svg>
              60 км/ч
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18" fill="#5D6C7B">
                <use href="./img/sprite.svg#energy"></use>
              </svg>
              1,2 л.с.
            </li>

            <li class="characteristics-item">
              <svg width="18" height="18">
                <use href="./img/sprite.svg#timer"></use>
              </svg>
              5 часов
            </li>
          </ul>
          <div class="card-footer">
            <div class="card-price">
              <p class="price-old">39 900 ₽</p>
              <p class="price-new">29 900 ₽</p>
            </div>
            <div class="card-footer-icons">
              <div class="card-footer-icon">
                <svg width="20" height="20">
                  <use href="./img/sprite.svg#card-cart"></use>
                </svg>
              </div>

              <div class="card-footer-icon">
                <svg width="20" height="20" fill="#6F73EE">
                  <use href="./img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
          </div>
          <button class="button card-button" data-toggle="modal">Записаться на тест-драйв</button>
        </div>
        </div>
      </div>
    </section>

    <section class="section section cta">
      <h2 class="section-title cta-title">Нет нужной модели, которую хотите протестировать?</h2>
      <form action="handler.php" method="POST" class="cta-form phone-form">
        <p class="cta-form-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
        <div class="input-group-wrapper">
          <div class="input-group phone-input-group">
          <input type="tel" class="input phone-input phone-mask" placeholder="+7 (_ _ _) _ _ - _ _ - _ _" name="userphone" required maxlength="30">
          </div>
          <button type="submit" class="button cta-form-button">Оставить заявку на тест-драйв</button>
        </div>
          <div class="cta-form-footer">
            <div class="input-group checkbox-group cta-checkbox-group">
            <input type="checkbox" class="cta-checkbox" name="checkbox" required>
            </div>
            <p class="cta-form-footer-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#" class="cta-form-footer-link">политикой конфиденциальности</a></p>
          </div>
        
      </form>
      <picture>
        <source type="image/webp" srcset="./img/young-woman-smiling.webp">
        <source type="image/png" srcset="./img/young-woman-smiling.png" >
        <img src="./img/young-woman-smiling.png" alt="young-woman-smiling" class="cta-image">
      </picture>
    </section>
  </div>

  <footer class="footer">
    <div class="footer-header">
      <div class="container">
        <div class="footer-header-wrapper">
          <h3 class="footer-title">Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты</h3>
          <form action="handler.php" method="POST" class="footer-form email-form">
            <div class="input-group footer-input-group">
            <input type="text" class="input footer-input" placeholder="Введите Ваш email" name="usermail" required>
            </div>
            <button type="submit" class="button-light footer-button">Подписаться</button>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="footer-top">
        <div class="footer-menu-wrapper">
          <h3 class="footer-menu-title">Каталог товаров</h3>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электросамокаты</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электроскутеры</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электровелосипеды</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Электровелосипеды</a>
            </li>
          </ul>
        </div>

          <div class="footer-menu-wrapper">
            <h3 class="footer-menu-title">Покупателям</h3>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Сервисный центр</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Доставка и оплата</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Рассрочка</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Тест-драйв</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Блог</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Сотрудничество</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Контакты</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Акции</a>
              </li>
            </ul>
        </div>

        <div class="footer-menu-wrapper">
          <h3 class="footer-menu-title">Контакты</h3>
          <ul class="footer-contacts-list footer-menu-column-2">
            <li class="footer-contacts-item">
              <p class="footer-contacts-title">Call-центр</p>
              <a href="#" type="tel:+78005055461" class="footer-contacts-phone">+7 (800) 505-54-61</a>
              <p class="footer-contacts-schedule">Пн-Вс 10:00 - 20:00</p>
            </li>
            <li class="footer-contacts-item">
              <p class="footer-contacts-title">Сервисный центр</p>
              <a href="#" type="tel:+74993507692" class="footer-contacts-phone">+7 (499) 350-76-92</a>
              <p class="footer-contacts-schedule">Пн-Вс 10:00 - 20:00</p>
            </li>
          </ul>
        </div>

        <div class="footer-menu-wrapper">
          <a href="#" class="footer-link">Заказать звонок</a>
        </div>
      </div>

      <div class="footer-separator"></div>

      <div class="footer-bottom">
        <a href="./" class="footer-logo">Kugoo</a>
        <div class="load-badges-wrapper">
          <a href="#" class="load-badge">
            <picture>
              <source type="image/webp" srcset="./img/google-play-badge.webp">
              <source type="image/png" srcset="./img/google-play-badge.png" >
              <img src="./img/google-play-badge.png" alt="google-play-badge">
            </picture>
          </a>
          <a href="#" class="load-badge">
            <picture>
              <source type="image/webp" srcset="./img/app-store-badge.webp">
              <source type="image/png" srcset="./img/app-store-badge.png" >
              <img src="./img/app-store-badge.png" alt="app-store-badge">
            </picture>
          </a>
        </div>
          <div class="social-badges-wrapper">
            <a href="#" class="social-badge">
              <svg height="20px" width="20px">
                <use href="./img/sprite.svg#vk"></use>
              </svg>
              <div class="social-badge-content">
                <h4 class="social-badge-title">Вконтакте</h4>
                <p class="social-badge-subscribers">3300</p>
              </div>
            </a>

            <a href="#" class="social-badge">
              <svg height="20px" width="20px">
                <use href="./img/sprite.svg#youtube"></use>
              </svg>
              <div class="social-badge-content">
                <h4 class="social-badge-title">YouTube</h4>
                <p class="social-badge-subscribers">3603</p>
              </div>
            </a>

            <a href="#" class="social-badge">
              <svg height="20px" width="20px" fill="#039BE5">
                <use href="./img/sprite.svg#telegram"></use>
              </svg>
              <div class="social-badge-content">
                <h4 class="social-badge-title">Telegram</h4>
                <p class="social-badge-subscribers">432</p>
              </div>
            </a>
          
        </div>
      </div>

      <div class="footer-separator"></div>

      <div class="footer-wrapper">
        <div class="footer-legal">
          <a href="#" class="footer-legal-link">Реквизиты</a>
          <a href="#" class="footer-legal-link">Политика конфиденциальности</a>
        </div>

        <div class="footer-payments-wrapper">
          <ul class="footer-payments-list">
            <li class="payment-badge">
              <a href="#" class="payment-badge-link">
                <svg height="10px" width="25px">
                  <use href="./img/sprite.svg#google-pay"></use>
                </svg>
              </a>
            </li>

            <li class="payment-badge">
              <a href="#" class="payment-badge-link">
                <svg height="10px" width="25px">
                  <use href="./img/sprite.svg#apple-pay"></use>
                </svg>
              </a>
            </li>

            <li class="payment-badge">
              <a href="#" class="payment-badge-link">
                <svg height="8px" width="24px">
                  <use href="./img/sprite.svg#visa"></use>
                </svg>
              </a>
            </li>

            <li class="payment-badge">
              <a href="#" class="payment-badge-link">
                <svg height="14px" width="22px">
                  <use href="./img/sprite.svg#mastercard"></use>
                </svg>
              </a>
            </li>

            <li class="payment-badge">
              <a href="#" class="payment-badge-link">
                <svg height="14px" width="22px">
                  <use href="./img/sprite.svg#maestro"></use>
                </svg>
              </a>
            </li>

            <li class="payment-badge">
              <a href="#" class="payment-badge-link">
                <svg height="15px" width="24px">
                  <use href="./img/sprite.svg#webmoney"></use>
                </svg>
              </a>
            </li>

            <li class="payment-badge">
              <a href="#" class="payment-badge-link">
                <svg height="16px" width="15px">
                  <use href="./img/sprite.svg#qiwi"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="footer-chats-wrapper">
          <p class="footer-chats-text">Online чат:</p>

          <a href="#" class="footer-social-link">
          <svg height="16px" width="16px" class="footer-social-icon">
            <use href="./img/sprite.svg#viber"></use>
          </svg>
          </a>         

          <a href="#" class="footer-social-link">
          <svg height="16px" width="16px" class="footer-social-icon">
            <use href="./img/sprite.svg#whatsapp"></use>
          </svg>
          </a>

          <a href="#" class="footer-social-link">
          <svg height="16px" width="16px" fill="#5D6C7B" class="footer-social-icon">
            <use href="./img/sprite.svg#telegram"></use>
          </svg>
          </a>
          
        </div>
      </div>
    </div>
  </footer>
  
 <div class="modal">
  <div class="modal-dialog">
    <svg width="25" height="25" class="modal-close">
      <use href="./img/sprite.svg#close"></use>
    </svg>
    <div class="modal-content">
      <h2 class="modal-title">Запишитесь на&nbsp;тест-драйв электросамоката</h2>
      <p class="modal-title-text">и подберите модель для себя</p>
      <p class="modal-text">Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.</p>

      <form action="handler.php" class="modal-form phone-form" method="POST">
        <p class="modal-form-text">Как с вами удобнее связаться?</p>
        <div class="input-group phone-input-group modal-phone-input-group">
        <input type="tel" class="input phone-input modal-phone-input phone-mask" placeholder="+7 (_ _ _) _ _ - _ _ - _ _" name="userphone" required maxlength="30">
        </div>
        <button type="submit" class="button modal-button">Оформить предзаказ</button>
        <div class="modal-form-footer">
          <div class="input-group checkbox-group">
          <input type="checkbox" class="modal-checkbox" name="checkbox" required>
          </div>
          <p class="modal-form-footer-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#" class="modal-form-footer-link">политикой конфиденциальности</a></p>
        </div>
      </form>
    </div>
    <div class="modal-image-wrapper">
      <picture>
        <source type="image/webp" srcset="./img/modal-img.webp">
        <source type="image/jpg" srcset="./img/modal-img.jpg" >
        <img src="./img/modal-img.jpg" alt="modal-image" class="modal-image">
      </picture>
    </div>
  </div>
</div> 

  <script src="js/just-validate.production.min.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>