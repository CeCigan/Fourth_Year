@include('layouts.header')
<div class="w-full h-[150%] absolute hidden" id = 'divReg'>
    <form action="" id="form" class="my-10 w-3/12 m-auto left-2/4 top-2/4 p-3 bg-gray-200 flex flex-col border-2 rounded-md z-20">
        <button onclick="closeForm();">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" 
            class="w-6 h-6 ml-auto relative cursor-pointer hover:fill-red-500">
            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
        </svg> 
        </button>
        <h2 class="text-center font-semibold text-lg">Регистрация</h2>
            
        <input type="text" id="name" placeholder="Ваше имя" required class=""/>
        <input type="email" id="surname" placeholder="Ваш email" required />
        <input
            type="tel"
            id="telephone"
            placeholder="Ваш телефон"
            maxlength="18"
        />
        <input type="password" id="password" placeholder="Пароль" required />
        <input
            type="password"
            id="passwordCheck"
            placeholder="Пароль еще раз"
            required
            onchange="validate();"
        /><br />

        <input type="submit" 
        id="submit" 
        value="Регистрация" 
        class="mt-3 m-auto text-center justify-center h-12 
                font-normal tracking-wide bg-green-700 text-white transition duration-200 rounded shadow-md
                hover:bg-green-500 focus:shadow-lg focus:outline-none cursor-pointer"/>
    </form>
</div>

<main class="w-8/12 m-auto flex flex-col justify-center z-0">
    <!-- Секция с калькулятором -->
    <div class="flex flex-col items-center">
        <div class="mt-10 diet-calculator">
            <!-- Поле выбора диеты -->
            <ul class="select-diet flex justify-between border border-[#ebebebaa] 
            rounded-2xl shadow-slate-300 shadow-lg select-none">
                <li class="diet" id = 'diet-btn'>
                    <p>Всеядная</p>
                    <img src="./images/anythind-diet.png" alt="anything-diet">
                </li>
                <li class="diet" id = 'diet-btn'>
                    <p>Палео</p>
                    <img src="./images/paleo-diet.png" alt="paleo-diet">
                </li>
                <li class="diet" id = 'diet-btn'>
                    <p>Вегетарианская</p>
                    <img src="./images/vegetarian-diet.png" alt="vagetarian-diet">
                </li>
                <li class="diet" id = 'diet-btn'>
                    <p>Веганская</p>
                    <img src="./images/vegan-diet.png" alt="vagan-diet">
                </li>
                <li class="diet" id = 'diet-btn'>
                    <p>Кетогенная</p>
                    <img src="./images/ketogenic-diet.png" alt="vagan-diet">
                </li>
                <li class="diet mr-5" id = 'diet-btn'>
                    <p>Средизиноморская</p>
                    <img src="./images/mediterranean-diet.png" alt="middlearea-diet">
                </li>
            </ul>
        </div>

        <!-- Калькулятор -->
        <div class="calculator">
            <form action="" class="text-xl">
                <p class="w-full text-center text-base text-red-500" id = 'report'></p>
                <table class="w-full    ">
                    <!-- Выбор количества калорий -->
                    <div class="my-3 text-center text-sm text-red-500" id = "alert"></div>
                    <tr>
                        <td>
                            <label for="kkals" class="mr-12">На сегодня мне нужно</label>
                        </td>
                        <td>
                            <input type="number" name="kkals" id="kkalsInput" placeholder="#### Килокалорий"    ><br>
                        </td>
                    </tr>

                    <!-- Выбор количества блюд -->
                    <tr>
                        <td>
                            <label for="count">В количестве</label>
                        </td>
                        <td>
                            <select type="number" name="count" id="foodCount" placeholder="1 блюда">
                                <option value="1">1 блюда</option>
                                <option value="2">2 блюда</option>
                                <option value="3">3 блюда</option>
                                <option value="4">4 блюда</option>    
                                <option value="5">5 блюда</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="w-full">
                        <td rowspan="4" colspan="4" class=" flex justify-center">
                            <input type ='button' 
                            value="Сгенирировать" 
                            class="w-fit mt-3 m-auto text-center justify-center h-12 
                            px-3 font-normal tracking-wide bg-green-700 text-white transition duration-200 rounded shadow-md
                            hover:bg-green-500 focus:shadow-lg focus:outline-none cursor-pointer"
                            onclick="getFoods();">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    

    <!-- Панель управления результатами -->
    <div class="result-box hidden"  id = 'food-cards'>
        <div class="flex items-baseline">
            <div class="mr-4 p-3 border rounded-s-md" id = 'kkalsPlan'>
                
            </div>
            <div>
                <button class="p-2 flex border-transparent rounded-md hover:border border-gray-300">
                    <p class="mr-2">Подобрать еще</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>                          
                </button>
            </div>
        </div>

        <!-- Див с выдачей результата -->
        <div class="flex mt-5">
            <div class="foods-card-group">
                <div class="food-card ">
                    <div class="good w-fit flex flex-col justify-between p-3 border-2 rounded-xl">
                        <table class="mb-7">
                            <tr>
                                <td class="reload">Завтрак</td>
                                <td><div class="w-1 mr-1.5 reload cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg> 
                                </div></td>
                            </tr>
                            <tr>
                                <td>200 килокалорий</td>
                            </tr>
                        </table>

                        <div class="mb-3 foods border rounded-md">
                            <div class="food-name flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="food-pic">
                                        <img src="images/Vegetable_Plov.jpg" alt="" class="">
                                    </div>
                                    <div class="">
                                        <p class="pb-1">Рис с овощами</p>
                                        <span class="">354 каллорий</span>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                    class="w-10 h-10 mr-5 cursor-pointer">
                                    <path  stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>                                      
                            </div>
                        </div>
                        
                        <div class="foods border rounded-md">
                            <div class="food-name flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="food-pic">
                                        <img src="images/Salat-tunez-pomidor.jpg" alt="" class="">
                                    </div>
                                    <div class="">
                                        <p class="pb-1">Салат с тунцом и помидорами</p>
                                        <span class="">260 каллорий</span>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                                class="w-10 h-10 mr-5 cursor-pointer">
                                    <path  stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>                                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Сепаратор -->
            <div class="ml-7 border-l-2"></div>

            <!-- Блок с подробной информацией о блюде -->
            <div class=" w-1/4 h-fit p-3 ml-10 flex flex-col food-card-info bg-gray-600 text-white border-transparent rounded-se-xl rounded-ee-xl" 
            id="food-card-info">
                <p class="food-name font-semibold text-lg" id = 'name'>Рис с овощами</p>
                <p class="cook-time text-lg" id = 'cook-time'>30 минут готовки</p>
                <div class="mt-1 mb-2 border-b-2 border-dotted"></div>
                <p class="mt-1">В одном блюде:</p>
                <div class=" flex justify-between" id = 'kkals'>    
                    <p class="text-lg text-emerald-400">Калории</p>
                    <p class="text-lg">193.6</p>
                </div>
                <div class="flex justify-between text-violet-400" id = 'uglevods'>
                    <p class="text-lg">Углеводы</p>
                    <p class="text-lg">193.6</p>
                </div>
                <div class="flex justify-between text-orange-400" id = 'shiri'>
                    <p class="text-lg">Жиры</p>
                    <p class="text-lg">193.6</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Преимущества -->
    <div class="w-[60vw] mt-10 mb-10 m-auto advantages ">
        <p class="font-bold text-xl  mb-10 flex justify-around">Создайте свой рацион питания за 5 минут</p>
        <div class="advantages-cards-group flex justify-between flex-wrap">
            <div class="w-max flex justify-between">
                <div class="advantages-card w-1/4 flex flex-col items-center">
                    <img src="images/buy-food.png " alt="" class="w-24">
                    <b class="text-center">Придерживайтесь любого стиля питания или создайте свой </b>
                    <p class="text-center"> Вы можете настроить популярные стили питания, такие как веганский и палео, в соответствии со своими потребностями и предпочтениями.</p>
                </div>

                <div class="advantages-card w-1/4 flex flex-col items-center">
                    <img src="images/axiety.png" alt="" class="">
                    <b class="text-center">Избавьте себя от беспокойства с 
                        выбором, чего вам съесть</b>
                    <p class="text-center"> Принимайте важные решения заранее и по собственному графику. Тогда не о чем беспокоиться, когда придет время есть.</p>
                </div>
            </div>
            <div class="advantages-card w-1/4 m-auto h-fit flex flex-col items-center">
                <img src="images/fredge.png" alt="" class="">
                <b class="text-center">Увеличьте место в своем холодильнике </b>
                <p class="text-center"> Заблаговременное планирование означает, что меньше продуктов портятся в холодильнике. 
                    Добавьте то, что у вас уже есть, в виртуальную кладовую, и наши алгоритмы будут использовать это в приоритетном порядке.
                </p>
            </div>
        </div>
    </div>

    <!-- Отзывы о нас -->
    <div class="reviews">
        <div class="review flex flex-row justify-stretch">
            <img src="images/before-after-1.jpg" alt="before-after" class="">
            <p class="text-green-300 review-text"> — “Когда-то я делал летсплеи по майнкрафту, но потом 
                я записался в качалку. Мои характеристики были 150 / 114. 
                Благодаря этому сайту я смог составить свой рацион, 
                начать эффективно заниматься и похудеть на 60 килограмм за 1.5 года
                Позже я завёл ручного хомяка Семёна, спасибо!!!” 
            </p>
        </div>
        <p class="mt-2 text-white">Владимир Мухбар<br>
            Фотомодель журнала "SemenO"</p>

        <div class="review mt-10 flex flex-row justify-stretch">
            <p class="text-green-300 review-text"> — “Когда-то я делал летсплеи по майнкрафту, но потом 
                я записался в качалку. Мои характеристики были 150 / 114. 
                Благодаря этому сайту я смог составить свой рацион, 
                начать эффективно заниматься и похудеть на 60 килограмм за 1.5 года
                Позже я завёл ручного хомяка Семёна, спасибо!!!” 
            </p>
            <img src="images/before-after-2.jpg" alt="before-aftet" class="">
        </div>
        <p class="mt-2 text-white float-right w-72">Максим Сельков<br>
            Региональный чемпион по тяжелой атлетике</p>
        <button class="mt-10">Начать бесплатно</button>
    </div>   
</main>
@include('layouts.footer')
