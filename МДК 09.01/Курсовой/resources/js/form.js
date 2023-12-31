// Маска телефона
window.addEventListener('DOMContentLoaded', function () {
  ;[].forEach.call(document.querySelectorAll('#telephone'), function (input) {
    var keyCode
    function mask(event) {
      event.keyCode && (keyCode = event.keyCode)
      var pos = this.selectionStart
      if (pos < 3) event.preventDefault()
      var matrix = '+7 (___)-___-__-__',
        i = 0,
        def = matrix.replace(/\D/g, ''),
        val = this.value.replace(/\D/g, ''),
        new_value = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) || def.charAt(i) : a
        })
      i = new_value.indexOf('_')
      if (i != -1) {
        i < 5 && (i = 3)
        new_value = new_value.slice(0, i)
      }
      var reg = matrix
        .substr(0, this.value.length)
        .replace(/_+/g, function (a) {
          return '\\d{1,' + a.length + '}'
        })
        .replace(/[+()]/g, '\\$&')
      reg = new RegExp('^' + reg + '$')
      if (
        !reg.test(this.value) ||
        this.value.length < 5 ||
        (keyCode > 47 && keyCode < 58)
      )
        this.value = new_value
      if (event.type == 'blur' && this.value.length < 5) this.value = ''
    }

    input.addEventListener('input', mask, false)
    input.addEventListener('focus', mask, false)
    input.addEventListener('blur', mask, false)
    input.addEventListener('keydown', mask, false)
  })
})

// Проверка полей паролей на совпадение
document.getElementById('submit').disabled = true
function validate() {
  password1 = document.getElementById('password').value
  password2 = document.getElementById('passwordCheck').value
  if (password1 == password2) {
    document.getElementById('submit').disabled = false
  } else {
    document.getElementById('submit').disabled = true
  }
}

// манипуляции формой
function closeForm(){
  document.getElementById('divReg').classList.add('hidden');
}
function showForm(){
  document.getElementById('divReg').classList.remove('hidden');
}

let i = 0, a = document.getElementById('diet-btn')

document.getElementById('diet-btn').onclick = function(){
  i++;
  if(i % 2== 0){
    a.classList.add = 'bg-red-500';
  } else {
    a.classList.remove = 'bg-red-500';
  }
  console.log(i);
};


