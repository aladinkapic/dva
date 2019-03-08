


/*** function to set projects ***/
var currently_set = -1; // represents resolution bigger than 1600px

function set_projects(){

    var projects_w = document.getElementById("projects_wrapper");
    var projects   = projects_w.getElementsByClassName("single_project");

    var window_w = window.innerWidth;

    // Variable to set height of main wrapper
    var divideWith = 0;

    // counter fo setting objects
    var counter = 1, rows_counter = 0;

    if(window_w > 1600){
        divideWith = 4;
        if(currently_set == 0) location.reload();
    }
    else if(window_w > 1000 && window_w <= 1600){
        divideWith = 3;
        if(currently_set == 1 || currently_set == 2) location.reload();
    }else if(window_w > 800 && window_w <= 1000){
        if(currently_set == 0) location.reload();
    }

    var project_w = parseInt((projects_w.clientWidth / divideWith) - 20);
    var project_h = parseInt(project_w * 1.3);

    var number_of_rows = projects.length / divideWith;
    if(parseInt(number_of_rows) != number_of_rows) number_of_rows = parseInt(number_of_rows) + 1;

    /** Set height of wrapper **/
    projects_w.style.height = (project_h*number_of_rows + 30*number_of_rows) + 'px';


    /** set on resolutions **/

    if(window_w > 1600){
        currently_set = 1;

        for(var i=0; i<projects.length; i++){
            projects[i].style.width  = project_w;
            projects[i].style.height = project_h;

            if(counter == 2){
                projects[i].style.left = ( (projects[i].clientWidth + 27)) + 'px';
            }else if(counter == 3){
                projects[i].style.left = ( (projects_w.clientWidth / 2) + 15) + 'px';
            }else if(counter == 4){
                projects[i].style.left = ( (projects_w.clientWidth)  - projects[i].clientWidth) + 'px';
            }

            // set top property
            projects[i].style.top  = (projects[i].clientHeight*rows_counter + rows_counter*25) + 'px';

            if(counter < 4) counter++;
            else{
                counter = 1;
                rows_counter++;
            }
        }

    }else if(window_w >1000 && window_w <= 1600){
        currently_set = 0;

        for(var i=0; i<projects.length; i++){
            projects[i].style.width  = project_w;
            projects[i].style.height = project_h;

            if(counter == 2){
                projects[i].style.left = (projects_w.clientWidth/2 - projects[i].clientWidth / 2) + 'px';
            }else if(counter == 3){
                projects[i].style.left = ( projects_w.clientWidth - projects[i].clientWidth) + 'px';
            }

            projects[i].style.top  = (projects[i].clientHeight*rows_counter + rows_counter*25) + 'px';

            console.log(counter);
            if(counter < 3) counter++;
            else{
                counter = 1;
                rows_counter++;
            }
        }
    }else if(window_w > 800 && window_w <= 1000){
        currently_set = 2;
    }

}



window.addEventListener("resize", function () {
    set_projects();
    //location.reload();
});
window.addEventListener("load", set_projects);