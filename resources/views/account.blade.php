@extends('layouts.app')

@section('content')

<!-- Персональный блок -->
<div class="s--header b-dark mob_fixed wf-section">
    <div class="c--main-container">
        <div class="c--personal_block">
            <div class="c--avatar">
                <div class="t--avatar_text">W</div>
            </div>
            <div class="c--personal_list">
                <div class="t--user_info">Имя Фамилия</div>
                <div class="c--personal_info">
                    <div class="c--pers_info_item">
                        <div class="t--user_info sub_info">user_mail@mail.com</div>
                        <a href="#" class="but--edit w-inline-block"></a>
                    </div>
                    <div class="c--pers_info_item">
                        <div class="t--user_info sub_info">+7 000 000 00 00</div>
                        <a href="#" class="but--edit w-inline-block"></a>
                    </div>
                </div>
                <a href="#" class="t--user_info link">Сменить пароль</a>
            </div>
        </div>
    </div>
</div>

<!-- Блок - Продолжить просмотр -->
<div class="s--playlist wf-section">
    <div class="c--main-container">
        <div class="c--fullwidth small_height">
            <h1 class="t--serial_title-2 xl">Смотрю сейчас</h1>
        </div>
        <div class="c--playlist_tabs">
            <div class="c--playlist_full">
                <a id="btn_s1-s1" href="#" class="c--playlist-item w-inline-block"><img src="images/luchshie-sitkomy-posle-2001-goda.jpg" loading="lazy" sizes="(max-width: 767px) 28vw, 29vw" srcset="images/luchshie-sitkomy-posle-2001-goda-p-500.jpeg 500w, images/luchshie-sitkomy-posle-2001-goda-p-800.jpeg 800w, images/luchshie-sitkomy-posle-2001-goda.jpg 1280w" alt="" class="img--series-cover-2">
                    <h4 class="t--series_title playlist">1. Лучшие ситкомы  после 2001 года</h4>
                    <p class="t--series_description playlist">Мы выбрали 9 самых крутых женщин из самых крутых сериалов и это прекрасно! <br></p>
                </a>
                <a id="btn_s1-s2" href="#" class="c--playlist-item w-inline-block"><img src="images/nashi-opyat-za-svoe-uzhasnaya-adaptatsiya-seriala-dve-devitsy-na-meli.jpg" loading="lazy" sizes="(max-width: 767px) 28vw, 29vw" srcset="images/nashi-opyat-za-svoe-uzhasnaya-adaptatsiya-seriala-dve-devitsy-na-meli-p-800.jpeg 800w, images/nashi-opyat-za-svoe-uzhasnaya-adaptatsiya-seriala-dve-devitsy-na-meli.jpg 1280w" alt="" class="img--series-cover-2">
                    <h4 class="t--series_title playlist">2. Наши опять за своё! Ужасная адаптация сериала Две девицы на мели</h4>
                    <p class="t--series_description playlist">Обзор на скандальный сериал &quot;Содержанки&quot; от культового театрального режиссера Константина Богомолова. Много секса, мало смысла и Ксения Собчак. Все, за что мы любим российские сериалы.<br></p>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Слайдер ИЗБРАННОЕ -->
<div class="s--serial-list color_dark wf-section">
    <div class="c--main-container">
        <h1 class="t--section_title">Мои сериалы</h1>
        <div class="c--slider_standart">
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
                <div class="but--favorite active small"><img src="images/ic_heart.svg" loading="lazy" alt="" class="ic_favorite"></div>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
                <div class="but--favorite active small"><img src="images/ic_heart.svg" loading="lazy" alt="" class="ic_favorite"></div>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
                <div class="but--favorite active small"><img src="images/ic_heart.svg" loading="lazy" alt="" class="ic_favorite"></div>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
                <div class="but--favorite active small"><img src="images/ic_heart.svg" loading="lazy" alt="" class="ic_favorite"></div>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
                <div class="but--favorite active small"><img src="images/ic_heart.svg" loading="lazy" alt="" class="ic_favorite"></div>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
                <div class="but--favorite active small"><img src="images/ic_heart.svg" loading="lazy" alt="" class="ic_favorite"></div>
            </div>
        </div>
        <div class="e--slider_fade color"></div>
        <div class="e--slider_fade mirror color"></div>
    </div>
</div>

<!-- Слайдер с рекомендациями -->
<div class="s--serial-list wf-section">
    <div class="c--main-container">
        <h1 class="t--section_title">Новинки WEBS</h1>
        <div class="c--slider_standart">
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
                <div class="c--serial-descript hide">
                    <h3 class="t--serial_title size_m">Горе от ума</h3>
                    <div class="t--serial-info">2019, Драма</div>
                </div>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
            </div>
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="e--slider_fade"></div>
        <div class="e--slider_fade mirror"></div>
    </div>
</div>

@endsection
