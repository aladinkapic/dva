/*** upload slider image ***/


function upload_slider_image(id, image_id, src = null){ /** first param is id of form, second is id of image to be displayed **/
var data = new FormData();
    var ins = document.getElementById(id).files.length;
    for (var x = 0; x < ins; x++) {
        data.append(id+"[]", document.getElementById(id).files[x]);
    }

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            var icon = document.getElementById(image_id);
            icon.setAttribute('src', src+this.responseText);
            icon.style.display = 'block';
        }
    };
    xml.open('POST', '../administrator_slider');

    <!-- create crf token and upload photo -->
    var metas = document.getElementsByTagName('meta');
    for (var i=0; i<metas.length; i++) {
        if (metas[i].getAttribute("name") == "csrf-token") {
            xml.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
        }
    }
    xml.send(data);
}




function upload_image(id, image_id, src = null, link = null, aditional = null, image_name){ /** first param is id of form, second is id of image to be displayed **/
    var data = new FormData();
    data.append(id, document.getElementById(id).files[0]);

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            var response = JSON.parse(this.responseText);

            if(aditional){
                // set image ID
                document.getElementById(aditional).value = response['id'][0];
            }
            if(image_name){
                document.getElementById(image_name).value = response['image'][0];
            }


            var icon = document.getElementById(image_id);
            icon.setAttribute('src', src + response["image"][0]);
            icon.style.display = 'block';
        }
    };
    xml.open('POST', link);

    <!-- create crf token and upload photo -->
    var metas = document.getElementsByTagName('meta');
    for (var i=0; i<metas.length; i++) {
        if (metas[i].getAttribute("name") == "csrf-token") {
            xml.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
        }
    }
    xml.send(data);
}

function upload_one_of_them(id, image_id, src = null, link = null){ /** first param is id of form, second is id of image to be displayed **/
var data = new FormData();
    data.append(id, document.getElementById(id).files[0]);

    // images wrapper
    var images = document.getElementsByClassName("swiper-wrapper")[0];

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            var response = JSON.parse(this.responseText);
            images.innerHTML = '';

            for(var i=0; i<response.length; i++){
                console.log(response[i]['name']);

                var div = document.createElement("div");
                div.className = 'swiper-slide';

                var img = document.createElement("img");
                img.src = src + response[i]['name'];

                div.appendChild(img);

                images.appendChild(div);
            }


            var swiper = new Swiper('.swiper1', {
                slidesPerView: 1,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }
            });

        }
    };
    xml.open('POST', link);

    <!-- create crf token and upload photo -->
    var metas = document.getElementsByTagName('meta');
    for (var i=0; i<metas.length; i++) {
        if (metas[i].getAttribute("name") == "csrf-token") {
            xml.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
        }
    }
    xml.send(data);
}

