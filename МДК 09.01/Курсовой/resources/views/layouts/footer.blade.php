<footer class="w-[48rem] mt-10 m-auto flex flex-col p-3 bg-green-700 border-transparent rounded-xl">
    <!-- Панель навигации + кнопка "На вврех" -->
    <div class="h-12 flex justify-around py-3">
        <a class="nav-btn">Главная</a>
        <a class="nav-btn" href="diets.htm">Каталог диет</a>
        <a class="nav-btn mr-20" onclick="up(); showForm()">Попробовать бесплатно</a>
        <a class="nav-btn pageUp flex flex-col items-center cursor-pointer" id = 'up' onclick="return up()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
            </svg>          
        </a>
    </div>
    <!-- Логотип футера -->
    <div class="mt-7 ml-6 logo">
        <div class="flex logos">
            <img src="./images/salad.ico" class="h-10" alt="" width="40px">
            <p class="h-10 ml-3 flex items-center font-semibold text-green-300">Здорово Питаться.рф</p>
        </div>
    </div>

    <!-- Соц-сети -->
    <div class="mt-3 socials flex flex-row items-center justify-around">
        <p class="mr-96  text-green-300">Связаться с нами:</p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
        </svg>              
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
        </svg>              
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script src = '../js/scroll.js'></script>  
<script src = '../js/foodTable.js'></script>  
<script src = '../js/form.js'></script>  
