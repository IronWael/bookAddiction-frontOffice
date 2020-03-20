function addToCart(title) {
    var shopnbrtag = document.getElementById('shopcartnbr');
    shopnbrtag.textContent = Number(shopnbrtag.textContent) + 1;

    if (shopnbrtag.classList.contains('badge-primary')) {
        shopnbrtag.classList.remove('badge-primary');
        shopnbrtag.classList.add('badge-warning');

    }

    var modalbody = document.getElementById('modalbody');
    modalbody.textContent = "The book "+'" '+ title +' "'+ " has been added to your basket.";

}
function filterBooks(category) {
    var books = document.getElementsByClassName('books');

    if (category == "all") {
        for (var index = 0; index < books.length; index++) {
            if (books[index].classList.contains("desafficher")) {
                books[index].classList.remove("desafficher");
            }
        }

    } else {
        for (var index = 0; index < books.length; index++) {
            if (!books[index].classList.contains(category)) {
                books[index].classList.add('desafficher')
            }else{
                if (books[index].classList.contains("desafficher")) {
                    books[index].classList.remove("desafficher");
                }
            }
        }
    }

}