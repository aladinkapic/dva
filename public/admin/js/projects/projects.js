/*** INSERT SUBCATGORIES ***/
var open_subcategories = false;

function open_subcats(){
    var subcategories = document.getElementById("main_categories");

    if(!open_subcategories){
        subcategories.style.display = 'block';
        open_subcategories = true;
    }else{
        subcategories.style.display = 'none';
        open_subcategories = false;
    }
}


function set_category_id(id){
    document.getElementById("parent_id").value = id;
    open_subcats();
}







/************ INSERT PROJECT ****************/


var open_subcategories_2 = false;

function open_subcats_w(){
    var subcategories = document.getElementById("subcategories");

    if(!open_subcategories_2){
        subcategories.style.display = 'block';
        open_subcategories_2 = true;
    }else{
        subcategories.style.display = 'none';
        open_subcategories_2 = false;
    }
}
function choose_category(id, name){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            document.getElementById("object_category").value = name;
            document.getElementById("category_id").value = id;
            document.getElementById("subcategories").innerHTML = this.responseText;
            document.getElementById("all_object_subcategories").style.display = 'block';

            open_subcats();
        }
    };
    xml.open('POST', '../administrator_projects');

    <!-- create crf token and upload photo -->
    var metas = document.getElementsByTagName('meta');
    for (var i=0; i<metas.length; i++) {
        if (metas[i].getAttribute("name") == "csrf-token") {
            xml.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
        }
    }
    xml.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xml.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xml.send("id=" + id);
}



function choose_subcategory(id, name){
    document.getElementById("subcategory_id").value = id;
    document.getElementById("object_subcategory").value = name;
    open_subcats_w();
}

function choose_news_category(id, name){
    document.getElementById("object_category").value = name;
    document.getElementById("category_id").value = id;

    open_subcats();
}