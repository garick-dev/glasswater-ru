<?php echo $header; ?>
<section class="order">
    <div class="order__inner">
        <h2 class="title title_order">Заказы</h2>
        <div class="filter filter_order">
            <div class="filter__outer">
                <div class="filter__inner">
                    <div class="glide order__glide">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <div class="subtitle filter__button">вcе заказы</div>
                                </li>
                                <li class="glide__slide">
                                    <div class="subtitle filter__button">активные</div>
                                </li>
                                <li class="glide__slide">
                                    <div class="subtitle filter__button">завершенные</div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="order__row">
        <div class="order__left">
            <div class="subtitle order__number">1</div>
            <h3 class="subtitle">Видео хостинг</h3>
        </div>
        <div class="order__right">
            <div class="subtitle subtitle_normal order__date">28.09.2021</div>
            <div class="order__status order__status_active ">В процессе</div>
            <div class="order__status order__status_end hidden">Готово</div>
        </div>
    </div>
    <div class="order__row">
        <div class="order__left">
            <div class="subtitle order__number">2</div>
            <h3 class="subtitle">Разработка модулей</h3>
        </div>
        <div class="order__right">
            <div class="subtitle subtitle_normal order__date">21.09.2021</div>
            <div class="order__status order__status_active ">В процессе</div>
            <div class="order__status order__status_end hidden">Готово</div>
        </div>
    </div>
    <div class="order__row">
        <div class="order__left">
            <div class="subtitle order__number">3</div>
            <h3 class="subtitle">Разработка логотипа</h3>
        </div>
        <div class="order__right">
            <div class="subtitle subtitle_normal order__date">19.09.2021</div>
            <div class="order__status order__status_active ">В процессе</div>
            <div class="order__status order__status_end hidden">Готово</div>
        </div>
    </div>
    <div class="subtitle subtitle_normal order__button">+ Добавить новый проект</div>
</section>
<?php echo $footer; ?>
