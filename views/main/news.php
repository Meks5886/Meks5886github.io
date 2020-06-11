<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="Startup HTML template OptimizedHTML 5" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="icon" href="/public/images/ficn.png" />
    <meta property="og:title" content="PEAKY BARBER’S | Главная" />
    <meta property="og:image" content="/public/images/dest/bg header.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <link href="/public/styles/main.css" rel="stylesheet">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/styles/app.min.css">

  </head>
  <body>
    <div class="bg-form">
      <div class="form-content">
        <div class="header-form">
          <h2>ПОЗВОНИТЕ МНЕ</h2>
          <div class="close">
            <img src="/public/images/dest/cross.svg" alt="cross" />
          </div>
        </div>
        <form class="form">
          <div class="left">
            <label for="">Как к вам обращаться?</label>
            <input type="text" name="name" />
            <label for="">Ваш номер телефона</label>
            <input name="phone" type="text" placeholder="+375(__)___-__-__" />
          </div>
          <div class="right">
            <label for="">Удобное время</label>
            <div class="do">
              c<input type="text" placeholder="12:00" name="timeone" />по<input
                name="timetwo"
                type="text"
                placeholder="18:00"
              />
            </div>
            <input type="submit" value="ЗАКАЗАТЬ ЗВОНОК" />
          </div>
        </form>
        <div class="footer-form">
          <div class="address">
            <p class="location">г.Гомель, ул. Жарковского, 22</p>
            <a href="mailto:contact@peaky.by" class="mail">contact@peaky.by</a>
            <div class="call-link">
              <a href="tel:+375(29)353-50-00">
                +375 (29) 353-50-00
              </a>
              <a href="tel:+375(29)353-50-00">
                +375 (29) 353-50-00
              </a>
            </div>
          </div>
          <h2>КОНТАКТЫ</h2>
        </div>
      </div>
    </div>
    <div class="menu-mobile">
      <a href="/" class="nav-link">На главную</a>
      <a href="/uslugi" class="nav-link">Услуги</a>
      <a href="/galerie" class="nav-link">Галерея</a>
      <a href="/news" class="nav-link">Новости</a>
      <div class="telefon">
        <a href="tel:+375(29)433-33-21">+375 (29) 433-33-21</a>
      </div>
      <div class="icon-list">
        <a href="https://instagram.com/maksimnesmog?igshid=bt0w388w7wo3" target="_blank" class="icon-link"
          ><img src="/public/images/dest/Vector.png" alt="instagram"
        /></a>
        <a href="https://vk.com/yaeblantupoy" target="_blank" class="icon-link"
          ><img src="/public/images/dest/vk ico.png" alt="vk"
        /></a>
        <a href="https://t.me/maksimnesmog" target="_blank" class="icon-link"
          ><img src="/public/images/dest/telegramHeader.svg" alt="facebook"
        /></a>
      </div>
    </div>
<div id="my-header">
      <div class="top-line">
        <a href="/" class="header-logo"
          ><img src="/public/images/dest/Logo.png" alt="logo" class="logo-img"
        /></a>
        <nav>
          <a class="header-nav__link" href="/">На главную</a>
          <a class="header-nav__link" href="/uslugi"
            >Услуги</a
          >
          <a class="header-nav__link" href="/galerie">Галерея</a>
          <a class="header-nav__link active-header__link" href="/news">Новости</a>
        </nav>
        <a href="" class="header-callback__button callback blick">СВЯЗАТЬСЯ С НАМИ</a>
        <div class="header-social">
          <a target="_blank" href="https://instagram.com/maksimnesmog?igshid=bt0w388w7wo3" class="header-social__link"
            ><img src="/public/images/dest/services/header_inst.png" alt="social"
          /></a>
          <a target="_blank" href="https://vk.com/yaeblantupoy" class="header-social__link"
            ><img src="/public/images/dest/services/header_vk.png" alt="social"
          /></a>
          <a target="_blank" href="https://t.me/maksimnesmog" class="header-social__link"
            ><img src="/public/images/dest/telegramHeader.svg" alt="social"
          /></a>
        </div>
        <button class="hamburger hamburger--squeeze" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
    <header class="masthead" style="background-image: url('/public/images/dest/bg header.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Новости салона</h1>
                    <span class="subheading">все самые острые новости здесь</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p style='color: #111'>Список новостей пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a href="/post/<?php echo $val['id']; ?>">
                            <h2 class="post-title" style='color: #111'><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                        </a>
                        <p class="post-meta">Идентфикатор этого поста <?php echo $val['id']; ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix" style="margin-bottom: 20px">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="my-footer">
      <nav>
        <div class="footer-title" style='color: #111'>НАВИГАЦИЯ</div>
        <a href="/" class="footer-nav__link">На главную</a>
        <a href="/uslugi" class="footer-nav__link"
          >Услуги</a
        >
        <a href="/galerie" class="footer-nav__link active-footer__link">Галерея</a>
        <a href="/news" class="footer-nav__link">Новости</a>
      </nav>
      <div class="footer-middle">
        <a href="/" class="footer-logo"
          ><img src="/public/images/dest/Logofooter.png" alt="logo"
        /></a>
        <div class="footer-social">
          <a target="_blank" href="https://instagram.com/maksimnesmog?igshid=bt0w388w7wo3" class="footer-social__link"
            ><img src="/public/images/dest/services/footer_inst.png" alt="social"
          /></a>
          <a target="_blank" href="https://vk.com/yaeblantupoy" class="footer-social__link"
            ><img src="/public/images/dest/services/footer_vk.png" alt="social"
          /></a>
          <a target="_blank" href="https://t.me/maksimnesmog" class="footer-social__link"
            ><img src="/public/images/dest/telegramFooter.svg" alt="social"
          /></a>
        </div>
      </div>
      <div class="footer-contacts">
        <div class="footer-title" style='color: #111'>КОНТАКТЫ</div>
        <a
          href="https://yandex.by/maps/155/gomel/house/Z0gYdgdjTUUEQFtofXhzeHhgbA==/?ll=31.003402%2C52.429438&sll=31.003403%2C52.429438&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=16"
          target="_blank"
          class="footer-contacts__text"
          >г.Гомель, ул. Жарковского, 22</a
        >
        <a href="tel:+375(29)353-50-00" class="footer-contacts__link"
          >+375 (29) 353-50-00</a
        >
        <a href="tel:+375(29)353-50-00" class="footer-contacts__link"
          >+375 (29) 353-50-00</a
        >
        <a href="mailto:contact@peaky.by" class="footer-contacts__link"
          >contact@peaky.by</a
        >
      </div>
    </div>

    <a href="/">
      <div class="on-main-page">На главную</div>
    </a>

    <script src="/public/scripts/app.min.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
    <script src="/public/scripts/bootstrap.js"></script>
  </body>
</html>