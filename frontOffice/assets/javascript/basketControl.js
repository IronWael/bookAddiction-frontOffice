/*function addQte(idLivre){
    var qte = document.getElementById(idLivre);
    qte.textContent = Number(qte.textContent) + 1;
}
function removeQte(idLivre){
    var qte = document.getElementById(idLivre);
    if (qte.textContent>1){
    qte.textContent = Number(qte.textContent) - 1;
    }
}*/
function updateQte(idBook,operation,idPrix,prix){
var qteChr = document.getElementById(idBook);
var prixChr = document.getElementById(idPrix);

if(operation=="add"){
qteChr.textContent = Number(qteChr.textContent) + 1;
prixChr.textContent = Number(prixChr.textContent) + prix;
}
else {
    if(Number(qteChr.textContent)>1){
    qteChr.textContent = Number(qteChr.textContent) - 1;
    prixChr.textContent = Number(prixChr.textContent) - prix; 
}
}

}
function removeFromCart(idRowLivre){
    var Livre = document.getElementById(idRowLivre);
    Livre.remove();
    var products = document.getElementsByClassName('product');
    var myAlertDiv = document.getElementById('aucunproduit');
    if(products.length==0){
        myAlertDiv.classList.remove('d-none');
    }

}
