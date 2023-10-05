
// Функция получения еды
function getFoods(){
    let alertMass= document.getElementById('report')
        kkals_Input = document.getElementById('kkalsInput').value
        food_cards = document.getElementById('food-cards')
        food_Count = document.getElementById('foodCount')
        food_cards.classList.add('hidden');


    if(kkals_Input >= 200 && kkals_Input <= 3000){

        food_Count.addEventListener('change', function(){  
            var getValue = this.value;
            return getValue;
        });

        document.getElementById('kkalsPlan').innerHTML = 'Сегодняшний план: <b class="font-medium">' + kkals_Input + '  каллорий</b>';
        food_cards.classList.remove('hidden');
        alertMass.innerHTML = '';
        // console.log(kkals_Input + ' : ' + food_Count);
    } 
    else {
        alertMass.innerHTML = 'Введите допустимое количество калорий: от 200 до 3000';
        // console.log('Error: ' + kkals_Input + ' : ' + food_Count);
    }
}
