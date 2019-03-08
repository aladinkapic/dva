/** slider images **/
var current = 0;

function login_slider(){
    var images       = document.getElementsByClassName("slide_image");
    var shaddow_part = document.getElementsByClassName("shaddow_part");

    if((current + 1) == images.length ){
        current = 0;
    }else current ++;

    for(var i=0; i<images.length; i++){
        if(i == current){
            images[i].className       = "slide_image";
            shaddow_part[i].className = "shaddow_part";
        }else{
            images[i].className       = "slide_image slide_hidden";
            shaddow_part[i].className = "shaddow_part shaddow_part_hidden";
        }
    }
}


function start_changing(){
    login_slider();
    setTimeout(start_changing, 5000);

    // hide loading
    //document.getElementById("loading").style.display = 'none';
}



/**** Login - start session ****/

function login(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var keep_me = document.getElementById("check");

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;

            console.log(response);

            if(response == 'logged') window.location = "profile.php?path=Osobni%20podaci&cat=Root%20Admin&what=Uredite%20Vaš%20profil&icon=fa-network-wired&desc=Izmijenite%20osobne%20podatke,%20kako%20vaše%20tako%20i%20vaše%20kompanije";
            else if(response == 'fail_password'){
                show_notifiy_cart("Unijeli ste pogrešnu šifru !", "fas fa-times");
            }else if(response == 'fail_email'){
                show_notifiy_cart("Unijeli ste pogrešan email !", "fas fa-times");
            }
        }
    };
    xml.open('POST', 'parts/user_part/http/login.php');

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("email=" + email.value + "&password=" + password.value + "&keep_me=" + keep_me.checked);
}



function new_password(){
    var email = document.getElementById("email");

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;

            console.log(response);

            if(response == 'logged') window.location = "profile.php?path=Osobni%20podaci&cat=Root%20Admin&what=Uredite%20Vaš%20profil&icon=fa-network-wired&desc=Izmijenite%20osobne%20podatke,%20kako%20vaše%20tako%20i%20vaše%20kompanije";
            else if(response == 'fail_password'){
                show_notifiy_cart("Unijeli ste pogrešnu šifru !", "fas fa-times");
            }else if(response == 'fail_email'){
                show_notifiy_cart("Unijeli ste pogrešan email !", "fas fa-times");
            }
        }
    };
    xml.open('POST', 'parts/user_part/http/pass_review.php');

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("email=" + email.value);
}


window.addEventListener("keyup", function(event) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
        //Start searching
        console.log("Enter pressed !");
        login();
        //window.location = "categories.php?search=" + input.value;
    }
});