// show subcategories

var currently_open = -2;

function get_subcategory(index){
    var subcategories = document.getElementById("left_menu").getElementsByClassName("menu_all_subcats");
    var arrow = document.getElementById("left_menu").getElementsByClassName("fa-icon");

    if(index == currently_open){
        index = -1;
        currently_open = -2;
    }

    for(var i=0; i<subcategories.length; i++){
        if(i == index){
            var all_subcategories = subcategories[i].getElementsByClassName("menu_subcategory");
            currently_open = index;
            arrow[i].className = "fas fa-icon fa-angle-up";
            subcategories[i].style.height = (all_subcategories.length * 34) + 'px';
        }else{
            subcategories[i].style.height = '0px';
            arrow[i].className = "fas fa-icon fa-angle-down";
        }
    }
}




function get_notifications(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            document.getElementById("notifications_body_updated").innerHTML = response;
            //console.log(this.responseText);
        }
    };
    xml.open('GET', 'parts/notifications/get_notifications.php');

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send();
}

// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
    if (!Notification) {
        alert('Desktop notifications not available in your browser. Try Chromium.');
        return;
    }

    if (Notification.permission !== "granted")
        Notification.requestPermission();
});

function notifyMe(message, link) {
    if (Notification.permission !== "granted")
        Notification.requestPermission();
    else {
        var notification = new Notification('Notification title', {
            icon: 'images/logo_icon.ico',
            body: message,
        });

        notification.onclick = function () {
            window.open(link);
        };

    }

}



function get_number_of_notifications(){
    if (Notification.permission !== "granted")
        Notification.requestPermission();

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {


            var response = JSON.parse(this.responseText);
            //console.log(response);

            for(var i=0; i<response['user_data']['user_id'].length; i++){
                console.log("we are here");

                var message = 'Korisnik ' + response['user_data']['user_name'][i] + ' je kreirao novu fakturu. Molimo pogledajte ovdje..'
                var link = "user_preview.php?path=Osobni%20podaci&cat=Korisnici&what=John%20Doe&icon=fa-users&desc=Pregled%20korisnika%20te%20njihovih%20faktura&user_id=" + response['user_data']['user_id'][i];

                notifyMe(message, link);
            }

            //console.log(response['user_data']['user_id']);

            if(response['counter'].length == 1){
                // not an admin
                num_of = response['counter'][0];
            }else if(response['counter'].length == 2){
                var num_of = response['counter'][1];
            }

            document.getElementById("number_of_notifications").innerHTML = num_of;
            if(num_of){
                document.getElementById("updated_number_of_not").innerHTML = "Imate <span>"+ num_of +" </span> novih obavijesti.";
            }else document.getElementById("updated_number_of_not").innerHTML = "Nemate novih obavijesti.";



        }
    };
    xml.open('GET', 'parts/notifications/get_number_of_notifications.php');

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send();
}

/************** MESSAGES ***********************/

function get_messages(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {/*** Obavijest za administraciju ***/
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            document.getElementById("inbox_body_updated").innerHTML = response;
            //console.log(this.responseText);
        }
    };
    xml.open('GET', 'parts/notifications/get_messages.php');

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send();
}

function get_number_of_messages(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;

            //console.log(response);
            document.getElementById("updated_number_of_messages").innerHTML = response;
            if(response){
                document.getElementById("updated_number_of_inbox").innerHTML = "Imate <span>"+ response +" </span> novih poruka.";
            }else document.getElementById("updated_number_of_inbox").innerHTML = "Nemate novih poruka.";

        }
    };
    xml.open('GET', 'parts/notifications/get_number_of_messages.php');

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send();
}

function scroll_bottom(first = null){
    var element = document.getElementById("all_messages");

    if(((element.scrollHeight - element.clientHeight) - element.scrollTop) < 100  || first){
        element.scrollTop = element.scrollHeight - element.clientHeight;
    }

    //element.scrollTop = element.scrollHeight - element.clientHeight;
}



/** reload every second **/

var reload_message = 0, first_run = 0;

function reload_messages(){
    var to_who   = document.getElementById("to_who").value;
    var from_who = document.getElementById("from_who").value;

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("all_messages").innerHTML = this.responseText;
            if(!first_run){
                first_run ++;
                scroll_bottom(1);
            }else scroll_bottom();
        }
    };
    xml.open('POST', 'parts/support/get_message.php');
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("to_who=" + to_who + "&from_who=" + from_who);
}

/**** Get informations ****/

window.onload = function(){
    /*** Hide loading ***/
    // document.getElementById("loading_bar").style.display = 'none';
};


/*** show notification part ***/
var open_notification = 0; var open_inbox = 0;


function open_notifications(){
    var notifications = document.getElementById("notifications_wrapper");

    // hide inbox
    document.getElementById("messages_wrapper").style.display = 'none';
    open_inbox = 0;



    if(!open_notification){
        open_notification++;
        notifications.style.display = 'block';
    }else{
        open_notification = 0;
        notifications.style.display = 'none';
    }
}


/*** show images part ***/
function open_inbox_f(){
    var inbox = document.getElementById("messages_wrapper");

    //hide notificiations
    document.getElementById("notifications_wrapper").style.display = 'none';
    open_notification = 0;

    if(!open_inbox){
        open_inbox++;
        inbox.style.display = 'block';
    }else{
        open_inbox = 0;
        inbox.style.display = 'none';
    }
}










/***************************** LOCK SCREEN ************************************/


function unlock(){
    var psw = document.getElementById("lock_password").value;
    var height = window.innerHeight;

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;

            if(response == 1){
                document.getElementById("lock_screen").style.top = -height + 'px';
            }else if(response == 'false'){
                document.getElementById("password_message").style.display = 'block';
            }
        }
    };
    xml.open('POST', 'parts/user_part/http/lock_screen.php');
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("psw=" + psw);
}







/*************** move menu *****************/

var open_left_menu = 0;

function move_left_menu(){
    var left_menu = document.getElementById("left_menu");
    var body = document.getElementById("content");
    var window_w = window.innerWidth;

    if(window_w > 1200){
        if(!open_left_menu){
            open_left_menu ++;
            left_menu.style.left = '-320px';
            body.style.left = '30px';
            body.style.width = window.innerWidth - 60 + 'px';
        }else{
            open_left_menu = 0;
            left_menu.style.left = '0px';
            body.style.left = '350px';
            body.style.width = (window.innerWidth - 380) + 'px';
        }
    }else{
        if(!open_left_menu){
            open_left_menu ++;
            left_menu.style.left = '0px';
        }else{
            open_left_menu = 0;
            left_menu.style.left = '-320px';
        }
    }
}









