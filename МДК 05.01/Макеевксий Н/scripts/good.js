function showGood(id){
    console.log(id);
    localStorage.setItem('id', JSON.stringify(id));

    
    let content_block = document.getElementById('good-info');
    let catalog_goods = Array();

    id = JSON.parse(localStorage.getItem('id'));
    for(let i = 0; i < site_goods.length; i++){
        var item = site_goods[i];

        var itemName = item.name;
        var itemPrefix = item.prefix;
        var itemDesc = item.desciption;
        var itemImage = item.image;
        var itemId = item.id;
        var itemCoast = item.coast;

        if(' 00'+itemId == id){
            catalog_goods.push(
            `<div class="good-card">
                <img src="`+itemImage+`" alt="">
                <div>
                <p><b>`+itemName+`</b></p>
                <p>`+ itemDesc +`</p>
                <div class="doing-panel">
                    <p style="font-size: 22px;">`+itemCoast+`</p>
                    <button class="oblique">В корзину</button>
                </div>
                </div>
            </div>`
        );
        }
        content_block.innerHTML += catalog_goods[i];
    }
    
}