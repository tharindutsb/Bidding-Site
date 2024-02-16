

function login() {

    var uid = document.getElementById("uid");
    var upw = document.getElementById("upw");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var txt = r.responseText;

            if (txt == "success") {
                // alert(txt.length)
                window.location = "homepage.php";
            } else {
                alert(txt);
            }
        }

    }

    r.open("GET", "signinprocess.php?id=" + uid.value + "&pw=" + upw.value, true);
    r.send();

}

function signup() {
    var id = document.getElementById("id");
    var pw = document.getElementById("pw");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var no = document.getElementById("no");
    var cpw = document.getElementById("cpw");

    var f = new FormData();
    f.append("id", id.value);
    f.append("pw", pw.value);
    f.append("fn", fname.value);
    f.append("ln", lname.value);
    f.append("em", email.value);
    f.append("no", no.value);
    f.append("cpw", cpw.value);

    var r1 = new XMLHttpRequest();

    r1.onreadystatechange = function () {
        if (r1.readyState == 4) {
            var txt = r1.responseText;


            if (txt == "1") {

                Swal.fire("Enter first name");

            } else if (txt == "2") {
                Swal.fire("Enter last name");

            } else if (txt == "3") {

                Swal.fire("Enter username name");
            } else if (txt == "4") {

                Swal.fire("Enter contact ");
            } else if (txt == "5") {

                Swal.fire("not valid contact ");
            } else if (txt == "6") {
                Swal.fire("Enter email");

            } else if (txt == "7") {
                Swal.fire("invalid email");

            } else if (txt == "8") {
                Swal.fire("enter password");

            } else if (txt == "9") {
                Swal.fire("invalid password");

            } else if (txt == "10") {
                cpw.style = "border:1px solid red;"
                Swal.fire("confrim password not match");
                
            } else {
                // Swal.fire("Succes");
                window.location = "login.php";
            }
        }

    }

    r1.open("POST", "signupprocess.php", true);

    r1.send(f);

}