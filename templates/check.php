<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/main_page.css">
</head>
<body class="body">
    <div class="navigation-block">
        <ul class="navigation-list">
            <li class="navigation-list__item Choosen"><a href="#" class="navigation-list__link"><img src="/assets/main_icon.svg" alt="Main" class="navigation-block__icon"></a></li>
            <li class="navigation-list__item"><a href="#" class="navigation-list__link"><img src="/assets/profile_icon.svg" alt="Profile" class="navigation-block__icon"></a></li>
            <li class="navigation-list__item"><a href="#" class="navigation-list__link"><img src="/assets/payment_icon.svg" alt="Payment" class="navigation-block__icon"></a></li>
            <li class="navigation-list__item"><a href="#" class="navigation-list__link"><img src="/assets/settings_icon.svg" alt="Settings" class="navigation-block__icon"></a></li>
            <li class="navigation-list__item"><a href="#" class="navigation-list__link"><img src="/assets/contact_icon.svg" alt="Contact" class="navigation-block__icon"></a></li>
        </ul>
    </div>
    <div class="main-content-block">
        <div class="introduction">
            <div class="welocome-block">
                <p class="welocome-block__greating">Hello {{user.getName()}}</p>
                <p class="welocome-block__text">Welcome Back</p>
            </div>
        </div>
        <div class="banner">

        </div>
        <div class="menu-block">
            <h2 class="menu-block__title">Our Menu</h2>
        </div>
        <div class="pizzas-block">
            <div class="pizza-card">
                <img src="" alt="" class="pizza-card__image">
                <div class="pizza-info">
                    <p class="pizza-info__name">{{}}</p>
                    <p class="pizza-info__prepare-time">{{}}</p>
                    <div class="pizza-footer">
                        <p class="pizza-info__price">{{}}</p>
                        <a href="#" class="pizza-info__add-button">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="information-block">
        <div class="user-info"></div>
        <div class="credit-card-info"></div>
        <div class="order-menu">
            <div class="oreder-menu-list">

            </div>
            <div class="order-menu-footer">
                <p class="order-menu__text"></p>
                <p class="order-menu__total-price">$0.00</p>
            </div>
        </div>
    </div>
</body>
</html>
