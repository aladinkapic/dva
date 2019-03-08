/*** function for creating dots ***/

function create_dots(div_id){
    
    var wrapper = document.getElementById(div_id);

    var wrapper_w = wrapper.clientWidth;
    var wrapper_h = wrapper.clientHeight;

    for(var i=0; i < (wrapper_h / 15); i++){
        for(var j=0; j < (wrapper_w / 15); j++){
            var dot = document.createElement("div");
            dot.className = "dot";
            dot.style.left = (j * 15) + 'px';
            dot.style.top  = (i * 15) + 'px';

            var inner_dot = document.createElement("div");
            inner_dot.className = "inner_dot";
            dot.appendChild(inner_dot);
            wrapper.appendChild(dot);
        }
    }
}