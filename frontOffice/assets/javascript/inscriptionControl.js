function validate(id, idgood, idbad) {
    var a = document.getElementById(id);
    var b = document.getElementById(idgood);
    var c = document.getElementById(idbad);
    var x;
    if (a.value != "") {

        b.classList.remove('d-none');
        a.classList.add('is-valid');

        c.classList.add('d-none');
        a.classList.remove('is-invalid');

        return true;

    } else {

        c.classList.remove('d-none');
        a.classList.add('is-invalid');

        b.classList.add('d-none');
        a.classList.add('is-invalid');
        return false;
    }

}



function validatesubmit(x) {
    var x = validate('validationServer01', 'firstnamegood', 'firstnamebad');
    var y = validate('validationServer02', 'lastnamegood', 'lastnamebad');
    var z = validate('validationServer03', 'passwordgood', 'passwordbad');
    var z1 = validate('validationServer04', 'repasswordgood', 'repasswordbad');
    if ((x == true) && (y == true) && (z == true) && (z1 == true)) {
        var d = document.getElementById('validationServer03');
        var f = document.getElementById('validationServer04');
        if (d.value!= f.value) {
            alert("You didn't re-type your password correctly!");
        } else {
            var z = document.getElementById('link');
            z.setAttribute('href', 'file:///C:/Users/PETER/Desktop/FORMALAB/s4/html/main.html');
        }
    } else {

        alert("Please complete all of your information!");

    }

}
