@include('layouts.header')
<main>
    <div class="p-3 mt-10 mb-10 info m-auto w-3/4 text-sm text leading-5 text-blue-700 bg-blue-300 border-transparent rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 float-left fill-blue-700 mr-1">
          <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
        </svg>
        <p>
          Этот браузер продуктов питания позволяет сортировать все наши продукты
          по десяткам различных питательных веществ и анализировать плотность
          питательных веществ, отображая пищевую ценность «на 100 г». 
          Хотите добавить блюдо в свой план? Добавьте
          его в избранное, и он появится в вашем банке еды на странице
          планировщика.
        </p>
      </div>

      <div class="pages flex w-3/12 m-auto p-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z" clip-rule="evenodd" />
        </svg>
         Страница 1 из 50+ 
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
        </svg>
      </div>

      <!-- Сайдбар с параметрами -->
      <div class="food-tb flex flex-row justify-between ">
        <div class="mr-10">
          <form action="" method="" class="sidebar-find">
            <input type="text" name="" id="" placeholder="Найти рецепт" />
            <button type="submit" class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg>   
            </button>         
          </form>
          <h4 class="mt-3 text-xl">Тип</h4>
          <ul class="lists">
            <li><button href="">Рецепты</button></li>
            <li><button href="">Основные блюда</a></li>
            <li><button href="">Готовые блюда</button></li>
            <li><button href="">Фирменные блюда</a></li>
          </ul>

          <h4 class="mt-3 text-xl">Категории</h4>
          <ul class="lists">
            <li><button href="">Все</button></li>
            <li><button href="">Напитки</button></li>
            <li><button href="">Дисерты</button></li>
            <li><button href="">Мясные</button></li>
            <li><button href="">Салаты</button></li>
            <li><button href="">Бутерброды</button></li>
            <li><button href="">Супы</button></li>
            <li><button href="">Мучное</button></li>
            <li><button href="">Другое</button></li>
            <li><button href="">Главные блюда</button></li>
            <li><button href="">Вторые блюда</button></li>
          </ul>
        </div>

        
      <!-- Таблица с блюдами -->
      <table class="result-table">
        <tr class="td-title">
          <td>Изображения</td>
          <td>Название</td> 
          <td>Подробная информация</td> 
          <td class="border-none">Действия</td>
        </tr>

        <tr class="td-title mt-3" id='diet-tb'>
          <td class="food-pic"><a href=""><img src="images//chiken_with_lemon.jpg" alt="" class=""></a></td>
          <td class="h-full">Жареная курочка с лимоном</td>
          <td class="h-full">
            Масса: 230 грамм <br>
            <b class="mt-3">На 100 грамм приходится</b>
            Калорийность: 28 ккал <br>
            Белки: 9.3 мг/грамм <br>
            Жиры: 0.9 мг
          </td>
          <td class="border-none">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="m-auto w-10 h-10 fill-green-700 active:fill-green-300 cursor-pointer">
            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
          </svg>
          </td>
        </tr>
        
        
        <tr class="td-title mt-3" id='diet-tb'>
          <td class="food-pic"><a href=""><img src="images//Salat-tunez-pomidor.jpg" alt="" class=""></a></td>
          <td class="h-full">Салат с тунцом и помидорами</td>
          <td class="h-full">
            Масса: 300 грамм <br>
            <b>На 100 грамм приходится</b>
            Калорийность: 39.3 ккал <br>
            Белки: 6.5 мг <br>
            Жиры: 0,4 мг <br>
            Углеводы: 2.3 гр <br>
          </td>
          <td class="border-none">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="m-auto w-10 h-10 fill-green-700 active:fill-green-300 cursor-pointer">
            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
          </svg>
          </td>
        </tr>
      </table>
</main>
@include('layouts.footer')