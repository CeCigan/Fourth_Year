<!-- Форма регистрации -->
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