<?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
  echo '<header class="header">
      <div class="container">
          <div class="header__inner">
              <a class="header__logo" href="/">z-neko</a>
              <nav class="nav">
                  <nav>
                      <a class="nav__link reg-log__panel" href="/views/login.php">войти</a>
                      <a class="nav__link reg-log__panel" href="/views/register.php">регестрация</a>
                  </nav>
                  <a class="nav__link" href="/">главная</a>
                  <a class="nav__link" href="/views/contacts.php">контакты</a>
                  <a class="nav__link" href="/views/helps.php">помощь</a>
              </nav>
          </div>
      </div>
  </header>';
}
else {
  echo '<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header-logo__bloc"><a class="header-logo" href="/">z-neko</a></div>
            <div class="header-menu">
                <div class="header-menu__item"><a href="/">главная</a></div>
                <div class="header-menu__item">
                    <a href="/views/contacts.php"><i class="fa fa-envelope-o fa-fw"></i>контакты</a>
                </div>
                <div class="header-menu__item"><img class="header-menu__avatar" src="/images/14.2.webp"></div>
            </div>
            </div>
    </div>
    <div class="header-sub" style="display: none">
        <div class="header-sub__bloc">
            <div class="header-sub__content">
                <div class="header__sub_menu">
                    <a class="header-sub__item" href="/views/profile.php"><i class="fa fa-user fa-fw"></i> Профиль пользователя</a>
                    <a class="header-sub__item" href="#"><i class="fa fa-bell fa-fw"></i> Уведомления</a>
                    <a class="header-sub__item" href="#"><i class="fa fa-users fa-fw"></i> Список друзей</a>

                    <div class="divider"></div>
                    <a class="header-sub__item" href="/views/faq.php"><i class="fa fa-question-circle fa-fw"></i> FAQ</a>
                    <a class="header-sub__item" href="/views/settings.php"><i class="fa fa-cog fa-fw"></i> Настройки</a>
                    <a class="header-sub__item text-danger" href="/views/logout.php"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                </div>
            </div>
        </div>
    </div>
</header>';
}