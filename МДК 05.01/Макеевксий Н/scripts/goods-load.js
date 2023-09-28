function catalog_load(){
    let content_block = document.getElementById('cards-group');
    let catalog_goods = Array();

    for(let i = 0; i < site_goods.length; i++){
        var item = site_goods[i];

        var itemName = item.name;
        var itemPrefix = item.prefix;
        var itemImage = item.image;
        var itemId = item.id;
        var itemCoast = item.coast;

        catalog_goods.push(
            '<div class="card '+itemPrefix +' show" id="gd00'+itemId+'">'+
                '<a class="filter good-link" href="goodCard.htm" id="gd00'+itemId +'">'+itemName+'</a>' +
                '<img src="'+itemImage+'" alt=""><br>' +
                '<p class="coast">'+itemCoast+'</p>'+
                '<button class="oblique" onclick="addInBasket(`00'+itemId+'`)">В корзину</button>'+
            '</div>'
        );

        content_block.innerHTML += catalog_goods[i];
    }
}
