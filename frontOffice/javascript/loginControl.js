function removetxt() {
    var a = document.getElementById('label');
    var b = document.getElementById('checkbox');

    a.classList.remove('txt');
    b.classList.remove('txt');
    if (b.value = "") {
        b.classList.add('txt');
        a.classList.add('txt');
    }

}



function test() {
    var a = document.getElementById('testemail');
    var b = document.getElementById('testpassword');

    if ((a.value != "") && (b.value != "")) {
        var c = document.getElementById('link');
        c.setAttribute('href', 'file:///C:/Users/PETER/Desktop/FORMALAB/s4/html/dashboard.html');

    }
    else {alert('Please write all of your information!'); }
    /*else {
        if (a.value = "") { alert('Please complete your email!'); }
        if (b.value = "") { alert('Please complete your password!'); }
    }*/
    
}