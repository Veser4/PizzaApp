const AMOUNT_OF_LETTERS_IN_NUMBER = 2;
const DECREASE_PRICE = -1;
const INCREASE_PRICE = 1;

const orderResult = {
    'totalPrice': 0,
    'orders': {},
}

let orders = {};
let objectsAmountOfPizza = [];
const pizzas = document.querySelectorAll('.pizza-card');
const orderList = document.querySelector('.order-menu-list');
const totalPrice = document.querySelector('.order-menu__total-price');
const createOrderButton = document.querySelector('.order-menu__button');
const orderAlert = document.querySelector('.order-menu__error');

const menuItems = document.querySelectorAll('.navigation-list__item');
const sliderMenu = document.querySelector('.main-content-window');

function initializationMenuButtons()
{
    menuItems.forEach((elem, index) => {
        elem.addEventListener('click', () => {
            menuItems.forEach((el) => {
                el.querySelector('.navigation-block__icon').classList.remove('icon_choosen');
                el.classList.remove('item_choosen');
            })
            elem.querySelector('.navigation-block__icon').classList.add('icon_choosen');
            elem.classList.add('item_choosen');
            scrollSlider(index);
        })
    })
}

function passwordValidation(password) {
    const hasUppercase = /(.*[A-Z].*)/.test(password);
    const hasLowercase = /(.*[a-z].*)/.test(password);
    const hasNumbers = /(.*\d.*)/.test(password);
    if (!hasUppercase || !hasLowercase || password.length < 8 || !hasNumbers) {
      return false;
    }
    return true;
}

function initializationUpdateButtons()
{
    const inputNewPassword = document.getElementById('password');
    const inputNewAddress = document.getElementById('address');
    inputNewPassword.addEventListener('click', () => {
        // if passwordValidation(inputNewPassword.)
    })
}

function scrollSlider(id)
{
    sliderMenu.style = `top: -${100 * id}%`
}

function increaseAmountOfPizza(id)
{
    if (orders[id] < 99)
    {
        orders[id] = orders[id] + 1;
        objectsAmountOfPizza[id].innerText = String(orders[id]).padStart(AMOUNT_OF_LETTERS_IN_NUMBER, '0');
    }
}   

function decreaseAmountOfPizza(id, order)
{
    if (orders[id] > 1)
    {
        orders[id] = orders[id] - 1;
        objectsAmountOfPizza[id].innerText = String(orders[id]).padStart(AMOUNT_OF_LETTERS_IN_NUMBER, '0');
    }
    else
    {
        order.remove();
        delete orders[id];
    }
}

function changePrice(action, priceObject)
{
    price = Number(priceObject.replace('$', ''));
    orderResult['totalPrice'] = orderResult['totalPrice'] + action * price;
    totalPrice.innerText = `$${orderResult['totalPrice'].toFixed(2)}`
}

function addToOrder(pizza) 
{
    const id = pizza.querySelector('.pizza-info__id').innerText;
    const price = pizza.querySelector('.pizza-info__price').innerText;
    if (!(orders[id])) 
    {
        let order = document.createElement('div');
        const name = pizza.querySelector('.pizza-info__name').innerText;
        const weight = pizza.querySelector('.pizza-info__weight').innerText;
        order.className = 'order-menu__item';
        order.innerHTML = `
            <img src="" class="order-menu__image">
            <div class="order-menu-info">
                <p class="order-menu__id hidden">${id}</p>
                <p class="order-menu__name">${name}</p>
                <p class="order-menu__extra-info">${weight}</p>
                <div class="order-menu-footer">
                    <p class="order-menu__price">${price}</p>
                    <div class="order-menu-counter-block">
                        <p class="remove_item">-</p>
                        <p class="order-menu__count">01</p>
                        <p class="add_item">+</p>
                    </div>
                </div>
            </div>
        `

        orderAlertConroller(false, 'Лист заказа пуст!', false);
        orderList.append(order);
        orders[id] = 1;
        objectsAmountOfPizza[id] = order.querySelector('.order-menu__count');
        initializationOrdder(id, order);
        changePrice(INCREASE_PRICE, price);
    }
    else
    {
        if (orders[id] < 99)
        {
            changePrice(INCREASE_PRICE, price);
        } 
        increaseAmountOfPizza(id);
    }
}

function clearOrderList()
{
    orderList.innerHTML = ``;
    orderResult.totalPrice = 0;
    totalPrice.innerText = `$${orderResult['totalPrice'].toFixed(2)}`;
    objectsAmountOfPizza = [];
    orders = {};
}


function initializationPizzas()
{
    pizzas.forEach(pizza => {
        const button = pizza.querySelector('.pizza-info__add-button');
        button.addEventListener('click', () => {
            addToOrder(pizza);
        })
    });
} 



function initializationOrdder(id, order)
{
    const addButton = order.querySelector('.add_item');
    const removeButton = order.querySelector('.remove_item');
    const price = order.querySelector('.order-menu__price').innerText;
    addButton.addEventListener('click', () => {
        if (orders[id] < 99)
        {
            changePrice(INCREASE_PRICE, price);
        } 
        increaseAmountOfPizza(id);
        console.log(orders[id]);
    })
    removeButton.addEventListener('click', () => {
        decreaseAmountOfPizza(id, order);
        changePrice(DECREASE_PRICE, price);
    })
} 

function isOrdersEmpty()
{
    return (Object.keys(orders).length === 0);
}

function isPriseZero()
{
    return (orderResult.totalPrice === 0)
}

async function createOrder()
{
    if ((!isOrdersEmpty()) && (!isPriseZero()))
    {
        orderAlert.classList.add('height-zero');
        orderResult.orders = orders;
        let response = await fetch('/order/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(orderResult),
        });
        let status = await response.status;
        if (status === 200)
        {
            orderAlertConroller(true, 'Заказ добавлен', true);
            setTimeout(
                () => {
                    orderAlertConroller(true, 'Заказ добавлен', false);
                },
                4 * 1000
              );
            clearOrderList();
        }
        else
        {
            orderAlertConroller(false, 'Произошла ошибка, попробуйте позже', true);
        }
    }
    else
    {
        orderAlertConroller(false, 'Лист заказа пуст!', true);
    }
}

function orderAlertConroller(sucsess, text, visibility)
{
    if (sucsess)
    {
        orderAlert.classList.add('order-menu__sucsess');
    }
    else
    {
        orderAlert.classList.remove('order-menu__sucsess'); 
    }
    if (visibility)
    {
        orderAlert.classList.remove('height-zero');
    }
    else
    {
        orderAlert.classList.add('height-zero');
    }
    orderAlert.innerText = text;
}

function initializationOrderButton()
{
    console.log(createOrderButton);
    createOrderButton.addEventListener('click', () => createOrder());
}

window.addEventListener("DOMContentLoaded", () => { 
    initializationPizzas(); 
    initializationOrderButton();
    initializationMenuButtons()
})