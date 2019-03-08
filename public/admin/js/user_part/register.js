/** function to register user **/


function register(){
    var email = document.getElementById("email");
    var name = document.getElementById("name");
    var pass_1 = document.getElementById("pass_1");
    var pass_2 = document.getElementById("pass_2");

    var check = document.getElementById("check");

    if(email.value == '' || name.value == '' || pass_1.value == '' || pass_2.value == ''){
        // email //
        if(email.value == ''){
            set_custom_border(email, "#C52932");
        }else{set_custom_border(email, "rgba(0,0,0,0.15)");}

        // name of user //
        if(name.value == ''){
            set_custom_border(name, "#C52932");
        }else{set_custom_border(name, "rgba(0,0,0,0.15)");}

        // password once //
        if(pass_1.value == ''){
            set_custom_border(pass_1, "#C52932");
        }else{set_custom_border(pass_1, "rgba(0,0,0,0.15)");}

        // password second time //
        if(pass_1.value == ''){
            set_custom_border(pass_2, "#C52932");
        }else{set_custom_border(pass_2, "rgba(0,0,0,0.15)");}
    }else{
        /* all fields filled */
        if(pass_1.value != pass_2.value){
            // passwords are not equal
        }
        /* reset all borders to black */
        reset_borders(email, name, pass_1, pass_2);

        if(check.checked  != true){
            alert("Morate se složiti sa uslovima korištenja !!");
        }else{
            // REGISTER USER //
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var response = this.responseText;
                    console.log(response);

                    if(response == 'already has'){
                        alert("Vaša email adresa već postoji u bazi !!");
                        //window.location = 'register.php';
                    }

                    if(response == 1){
                        show_notifiy_cart("Uspješno ste se registrovali!!");
                    }

                    //window.location = "index.php";
                }
            };
            xml.open('POST', 'parts/user_part/http/register_user.php');

            xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xml.send("email=" + email.value + "&name=" + name.value + "&password=" + pass_1.value);
        }
    }
}


/* reset backgrounds */
function reset_borders(email, name, pass_1, pass_2){
    email.style.border = "2px solid rgba(0,0,0,0.15)";
    name.style.border = "2px solid rgba(0,0,0,0.15)";
    pass_1.style.border = "2px solid rgba(0,0,0,0.15)";
    pass_2.style.border = "2px solid rgba(0,0,0,0.15)";
}

function set_custom_border(what, color){
    what.style.border = "2px solid " + color;
}


window.addEventListener("keyup", function(event) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
        //Start searching
        console.log("Enter pressed !");
        register();
        //window.location = "categories.php?search=" + input.value;
    }
});