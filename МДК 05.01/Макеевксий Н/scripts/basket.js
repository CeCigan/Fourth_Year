let good = [];
function addInBasket(e){
    basketGood = document.getElementById('gd' + e + '#').outerHTML;
    good.push(basketGood);

    good.slice()
    console.log(good + " ; ")


    localStorage.setItem('good', JSON.stringify(good));
}

function showBasket(){
    let bastekDIV = document.getElementById('basket');
    let jsonGood = JSON.parse(localStorage.getItem('good'));

    for(let i = 0; i<=jsonGood.length; i++){
        bastekDIV.innerHTML += jsonGood[i];
    }
    console.log(jsonGood + ' ; ' + bastekDIV)
}

function showGoodInfo(){
    let jsonGoods = JSON.parse(localStorage.getItem('good'));

    
}