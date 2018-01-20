<nav class="navigation uk-flex-none">
    <div class="uk-flex-middle uk-margin-small" uk-grid>
        <div class="uk-width-1-2 uk-width-1-5@l">
            <a href="" class="uk-logo">
                <img src="assets/images/logo.png" alt="Look for Travel">
            </a>
        </div>
        <div class="uk-width-1-2 uk-width-3-5@l">
            <div class="uk-hidden@l uk-text-right">
                <button class="uk-button uk-button-text" uk-toggle="target: .mobile-search; animation: uk-animation-fade">
                    <i class="fa fa-2x fa-search"></i>
                </button>
                <button class="uk-button uk-button-text uk-margin-left" uk-toggle="target: .mobile-navigation; animation: uk-animation-fade">
                    <i class="fa fa-2x fa-bars"></i>
                </button>
            </div>
        </div>
        <div class="uk-width-1-5 uk-visible@l">
            <form class="search uk-flex">
                <div class="uk-inline uk-flex-1 uk-margin-small-right">
                    <input type="search" class="uk-input uk-form-small">
                    <ul class="form-results uk-list" hidden>
                        <li>
                            <a href="">Таиланд</a>
                        </li>
                        <li>
                            <a href="">Аюттхая — самый крупный город мира в XVIII столетии</a>
                        </li>
                        <li>
                            <a href="">Таиланд</a>
                        </li>
                        <li>
                            <a href="">
                                <em>Ещё</em>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="uk-button uk-button-text uk-flex-none">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <ul class="uk-subnav uk-subnav-pill uk-visible@l">
        <li>
            <a href="#">Направления
                <i class="fa fa-caret-down"></i>
            </a>
            <div uk-drop="offset: 0; mode: click">
                <ul class="submenu-directions uk-list">
                    <li>
                        <a href="">Азия</a>
                        <ul class="sub" uk-drop="offset: 0;pos: right-top; mode: hover; boundary: .submenu-directions; boundary-align: true">
                            <li>
                                <a href="">
                                    <span class="star star-mini gold">1</span>Китай</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini silver">2</span>Индия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini bronze">3</span>Индонезия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">4</span>Пакистан</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">5</span>Бангладеш</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">6</span>Япония</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">7</span>Филиппины</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">8</span>Вьетнам</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">9</span>Иран</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">10</span>Турция</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">11</span>Таиланд</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini"></span> Остальные</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Европа</a>
                        <ul class="sub" uk-drop="offset: 0;pos: right-top; mode: hover; boundary: .submenu-directions; boundary-align: true">
                            <li>
                                <a href="">
                                    <span class="star star-mini gold">1</span>Россия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini silver">2</span>Германия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini bronze">3</span>Великобритания</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">4</span>Франция</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">5</span>Италия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">6</span>Италия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">7</span>Италия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">8</span>Италия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">9</span>Италия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">10</span>Италия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini">1</span>Италия</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="star star-mini"></span> Остальные</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Северная Америка</a>
                    </li>
                    <li>
                        <a href="">Южная Америка</a>
                    </li>
                    <li>
                        <a href="">Африка</a>
                    </li>
                    <li>
                        <a href="">Океания</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#">Темы
                <i class="fa fa-caret-down"></i>
            </a>
            <div uk-drop="offset: 0; mode: click; boundary: .uk-subnav; boundary-align: true">
                <ul class="submenu-topics uk-list">
                    <li>
                        <a href="">Маршруты</a>
                        <div class="submenu-announces" uk-drop="offset: 10; mode: hover; boundary: .submenu-topics; boundary-align: true">
                            <div class="uk-child-width-1-4 uk-grid-small" uk-grid>
                                <div>
                                    <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                        <header class="uk-light uk-cover-container">
                                            <img src="assets/images/sample/announce4.jpg" srcset="assets/images/sample/announce4@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                            <div class="overlay uk-position-cover">
                                                <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                                <div class="title uk-h4" itemprop="name">Нячанг-Винперл-Далат-Муйне</div>
                                                <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                                <i class="type fa fa-file-text-o"></i>
                                            </div>
                                        </header>
                                    </a>
                                </div>
                                <div>
                                    <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                        <header class="uk-light uk-cover-container">
                                            <img src="assets/images/sample/announce3.jpg" srcset="assets/images/sample/announce3@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                            <div class="overlay uk-position-cover">
                                                <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                                <div class="title uk-h4" itemprop="name">Разноцветный Бангкок</div>
                                                <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                                <i class="type fa fa-file-text-o"></i>
                                            </div>
                                        </header>
                                    </a>
                                </div>
                                <div>
                                    <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                        <header class="uk-light uk-cover-container">
                                            <img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                            <div class="overlay uk-position-cover">
                                                <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                                <div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
                                                <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                                <i class="type fa fa-file-text-o"></i>
                                            </div>
                                        </header>
                                    </a>
                                </div>
                                <div>
                                    <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                        <header class="uk-light uk-cover-container">
                                            <img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                            <div class="overlay uk-position-cover">
                                                <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                                <div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
                                                <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                                <i class="type fa fa-file-text-o"></i>
                                            </div>
                                        </header>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="">Лайфхаки</a>
                    </li>
                    <li>
                        <a href="">Эксперты</a>
                    </li>
                    <li>
                        <a href="">Авторские туры</a>
                    </li>
                    <li>
                        <a href="">Дороги</a>
                    </li>
                    <li>
                        <a href="">Документы</a>
                    </li>
                    <li>
                        <a href="">Бюджет</a>
                    </li>
                    <li>
                        <a href="">С детьми</a>
                    </li>
                    <li>
                        <a href="">Лечение</a>
                    </li>
                    <li>
                        <a href="">Авиакомпании</a>
                    </li>
                    <li>
                        <a href="">Самолеты</a>
                    </li>
                    <li>
                        <a href="">Аэропорты</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#">Карта мира</a>
        </li>
        <li>
            <a href="#">Блог авторов</a>
            <div uk-drop="offset: 10; mode: hover; boundary: .uk-subnav; boundary-align: true; delay-show:100">
                <div class="submenu-announces">
                    <div class="uk-child-width-1-4 uk-grid-small" uk-grid>
                        <div>
                            <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                <header class="uk-light uk-cover-container">
                                    <img src="assets/images/sample/announce4.jpg" srcset="assets/images/sample/announce4@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                    <div class="overlay uk-position-cover">
                                        <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                        <div class="title uk-h4" itemprop="name">Нячанг-Винперл-Далат-Муйне</div>
                                        <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                        <i class="type fa fa-file-text-o"></i>
                                    </div>
                                </header>
                            </a>
                        </div>
                        <div>
                            <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                <header class="uk-light uk-cover-container">
                                    <img src="assets/images/sample/announce3.jpg" srcset="assets/images/sample/announce3@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                    <div class="overlay uk-position-cover">
                                        <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                        <div class="title uk-h4" itemprop="name">Разноцветный Бангкок</div>
                                        <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                        <i class="type fa fa-file-text-o"></i>
                                    </div>
                                </header>
                            </a>
                        </div>
                        <div>
                            <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                <header class="uk-light uk-cover-container">
                                    <img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                    <div class="overlay uk-position-cover">
                                        <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                        <div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
                                        <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                        <i class="type fa fa-file-text-o"></i>
                                    </div>
                                </header>
                            </a>
                        </div>
                        <div>
                            <a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
                                <header class="uk-light uk-cover-container">
                                    <img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
                                    <div class="overlay uk-position-cover">
                                        <div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                        <div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
                                        <time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
                                        <i class="type fa fa-file-text-o"></i>
                                    </div>
                                </header>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a href="#">О редакции</a>
        </li>
    </ul>
</nav>