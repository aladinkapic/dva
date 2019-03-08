/** set to custom object **/
var active_slide = 0;

function set_slide_delayed(index){


    console.log("delayed");
}


function set_slide(index){
    console.log("wee");
    reset_it();
    setTimeout(function(){
        active_slide = index;

        var images = document.getElementsByClassName("image");
        var text   = document.getElementsByClassName("slider_texts");
        var arrows = document.getElementsByClassName("slider_arrow");

        for(var i=0; i<images.length; i++){
            if(i == index){
                images[i].className = "image";
                text[i].className   = "slider_texts";
                arrows[i].className = "slider_arrow slider_arrow_active";
                trigger_it();
            }else{
                images[i].className = "image image_hidden";
                text[i].className   = "slider_texts slider_texts_hidden";
                arrows[i].className = "slider_arrow";
            }
        }
    }, 600);
}