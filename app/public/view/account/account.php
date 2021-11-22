<?php echo $header; ?>
<section class="account">
    <h2 class="title title_account">Личный кабинет</h2>
    <h3 class="account__subtitle">Персональные данные</h3>
    <form class="form" action="">
        <div class="upload">
            <label class="upload__label" for="upload">
                <img src="/assets/media/public/pages/account/avatar.png" alt="">
            </label>
            <input type="file" id="upload" class="hide" name="upload">
        </div>
        <div class="form__row">
            <label class="subtitle" for="name">Имя</label>
            <input type="text" id="name" name="name" placeholder="Мария">
        </div>

        <div class="form__row">
            <label class="subtitle" for="lastName">Фамилия</label>
            <input type="text" id="lastName" name="lastName" placeholder="Иванова">
        </div>

        <div class="form__row">
            <label class="subtitle" for="phone">Телефон</label>
            <input type="text" id="phone" name="phone" placeholder="+7 961 555 99 33">
        </div>
        <div class="form__row">
            <label for="email" class="subtitle">Email</label>
            <input type="text" id="email" name="email"  placeholder="MariaIvanova@gmail.com">
        </div>
        <div class="form__row">
            <label for="password" class="subtitle">Пароль</label>
            <input type="password" id="password"name="password" placeholder="Пароль">
        </div>
        <div class="form__row submit">
            <div class="success">
                <div class="success__image">
                    <img src="/assets/media/public/pages/account/check.png" alt="">
                </div>
                <span class="success__text">Данные успешно сохранены</span>
            </div>

            <button class="button" type="submit">Сохранить</button>
        </div>
        <div class="info">
            <h3 class="account__subtitle account__subtitle_info">Информационные сообщения</h3>
            <div class="info__row">
                <input type="checkbox" id="info__email" class="info__checkbox" >
                <label class="info__fake" for="info__email"></label>
                <label class="subtitle subtitle_normal" for="info__email">Получать информационные сообщения на E-mail</label>
            </div>
            <div class="info__row">
                <input type="checkbox" id="info__sms" class="info__checkbox" >
                <label class="info__fake" for="info__sms"></label>
                <label class="subtitle subtitle_normal" for="info__sms">Получать информацию о скидках, новинках и выгодных предложениях по смс</label>
            </div>
        </div>

    </form>

</section>
<?php echo $footer; ?>
