/** trigger it **/
function trigger_it(){
    var top_line    = document.getElementsByClassName("top_line");
    var right_line  = document.getElementsByClassName("right_line");
    var bottom_line = document.getElementsByClassName("bottom_line");
    var left_line   = document.getElementsByClassName("left_line");

    /** pošto u reset funkciji stavimo opacity na 0, ovdje trebamo vratiti na 1 prije promjene transitionDelay vrijednosti **/
    top_line[0].style.opacity = "1";
    right_line[0].style.opacity = "1";
    bottom_line[0].style.opacity = "1";
    left_line[0].style.opacity = "1";


    /** Vrati na staro da se "punI" jedna po jedna strana" **/
    right_line[0].style.transitionDelay = "0.4s";
    bottom_line[0].style.transitionDelay = "0.8s";
    left_line[0].style.transitionDelay = "1.2s";

    /** omogući animaciju preko CSS-a => width and height put to 100% **/
    top_line[0].className = "top_line top_line0";
    right_line[0].className = "right_line right_line0";
    bottom_line[0].className = "bottom_line bottom_line0";
    left_line[0].className = "left_line left_line0";
}


function reset_it(){
    var top_line    = document.getElementsByClassName("top_line");
    var right_line  = document.getElementsByClassName("right_line");
    var bottom_line = document.getElementsByClassName("bottom_line");
    var left_line   = document.getElementsByClassName("left_line");


    // set delay to zero seconds //
    right_line[0].style.transitionDelay = "0s";
    bottom_line[0].style.transitionDelay = "0s";
    left_line[0].style.transitionDelay = "0s";


    // now fade it out then remove classes //
    top_line[0].style.opacity = "0";
    right_line[0].style.opacity = "0";
    bottom_line[0].style.opacity = "0";
    left_line[0].style.opacity = "0";

    top_line[0].className = "top_line";
    right_line[0].className = "right_line";
    bottom_line[0].className = "bottom_line";
    left_line[0].className = "left_line";
}





window.onload = function(){
    trigger_it();
};