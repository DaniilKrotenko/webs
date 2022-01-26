@extends('layouts.app')

@section('content')


<!-- Главный баннер -->
<div class="s--header b-dark mob_fixed wf-section">
    <div class="c--main-container">
        <div class="c--slider_xl">
            <a href="#" class="c--one-slide--xl w-inline-block"><img src="images/last_program_banner_big.jpg" loading="lazy" alt="" class="b--slide-xl"></a>
            <a href="#" class="c--one-slide--xl w-inline-block"><img src="images/dark_banner.png" loading="lazy" alt="" class="b--slide-xl"></a>
            <a href="#" class="c--one-slide--xl w-inline-block"><img src="images/gotum_ban.jpg" loading="lazy" alt="" class="b--slide-xl"></a>
        </div>
    </div>
</div>

<!-- /Главный баннер -->

<!-- Слайдер - черный фон -->
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
<!-- Слайдер - черный фон -->

<!-- Слайдер - синий фон -->
<div class="s--serial-list color_dark wf-section">
    <div class="c--main-container">
        <h1 class="t--section_title">Самое популярное</h1>
        <div class="c--slider_standart">
            <div id="slider_standart" class="c--slider_item">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="e--slider_fade color"></div>
        <div class="e--slider_fade mirror color"></div>
    </div>
</div>

<!-- Каталог -->
<div id="catalog" class="s--serial-catalog wf-section">
    <div class="c--main-container">
        <h1 class="t--section_title">Каталог сериалов</h1>

        <!-- Фильтры -->
        <div class="button-group filters-button-group">
            <button class="but--playlist_tab is-checked" data-filter="*">Все жанры</button>
            <button class="but--playlist_tab" data-filter="filt_comedy">Комедия</button>
            <button class="but--playlist_tab" data-filter="filt_thriller">Боевик</button>
            <button class="but--playlist_tab" data-filter="filt_drama">Драма</button>
            <button class="but--playlist_tab" data-filter="filt_thriller">Триллер</button>
            <button class="but--playlist_tab" data-filter="filt_detective">Детектив</button>
            <button class="but--playlist_tab" data-filter="filt_horrors">Ужасы</button>
            <button class="but--playlist_tab" data-filter="filt_fantastic">Фантастика</button>
            <button class="but--playlist_tab" data-filter="filt_fantasy">Фэнтези</button>
            <button class="but--playlist_tab" data-filter="filt_historical">Исторический</button>
            <button class="but--playlist_tab" data-filter="filt_real">Реальные события</button>
            <button class="but--playlist_tab" data-filter="filt_adaptation">Экранизация</button>
            <button class="but--playlist_tab" data-filter="filt_arthouse">Артхаус</button>


        </div>

        <!-- Плитки -->
        <div class="grid">

            <div id="slider_standart grid-item" class="c--slider_item" data-category="filt_comedy">
                <a href="#" class="c--serial_cover w-inline-block"><img src="images/marta_serial_banner_min.jpg" loading="lazy" alt="" class="img--serial_cover_2">
                    <div class="a--activ_link">
                        <div class="ic--logo_play"></div>
                    </div>
                </a>
            </div>

        </div>


    </div>
</div>

@endsection
