filterSelection("all");
function filterSelection(c) {
  var x, i, coast, userCoast;
  x = document.getElementsByClassName("card");
  coast = Number(document.getElementsByClassName('coast').innerHTML);
  userCoast = Number(document.getElementById('coastInp').value);
  if (c == "all") c = "";
  // Добавить класс "show" (display:block) к отфильтрованным элементам и удалите класс "show" из элементов, которые не выбраны
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function findAtUserCoast(){
    let userCoast = document.getElementById('coastInp').value;
    let goodsCoast = document.getElementsByClassName('coast');


    console.log(userCoast);

    for(let i = 0; i < goodsCoast.length; i++){
        if(Number(userCoast) > Number(goodsCoast[i].innerHTML)){
            goodsCoast[i].parentElement.style.display = 'flex';
            console.log('Del: ' + goodsCoast[i].innerHTML)
        } else if (userCoast == '') {
            filterSelection("all");
        } else {
            goodsCoast[i].parentElement.style.display = 'none';
        }

        console.log([goodsCoast[i].innerHTML])
    }
}

// Показать отфильтрованные элементы
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Скрыть элементы, которые не выбраны
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Добавить активный класс к текущей кнопке управления (выделите ее)
var btnContainer = document.getElementById("find-field");
var btns = btnContainer.getElementsByClassName("find-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}