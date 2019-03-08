/*** WOrk with choose month ***/

var open_g_months = 0; var open_g_years = 0;

function open_get_months(){
    var months = document.getElementById("choose_month");

    if(!open_g_months){
        open_g_months ++;
        months.style.display = 'block';
    }else{
        open_g_months = 0;
        months.style.display = 'none';
    }
}

function open_get_years(){
    var months = document.getElementById("choose_year");

    if(!open_g_years){
        open_g_years ++;
        months.style.display = 'block';
    }else{
        open_g_years = 0;
        months.style.display = 'none';
    }
}



function get_month(what, text, year){
    var link = "/views_per_month/"+ what + "/" + year;
    // go to location
    window.location = link;
}

function get_year(year, day){

    var link = "/views_per_month/"+ day + "/" + year;
    // go to location
    window.location = link;
}
