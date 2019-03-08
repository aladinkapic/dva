
/*** upload user image ***/
function upload_user_image(){
    var data = new FormData();
    var ins = document.getElementById('file').files.length;
    for (var x = 0; x < ins; x++) {
        data.append("file[]", document.getElementById('file').files[x]);
    }

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            var icon = document.getElementById("main_profile_image");
            icon.setAttribute('src', 'uploaded_images/'+this.responseText);
        }
    };
    xml.open('POST', 'parts/user_part/http/upload_user_image.php');
    xml.setRequestHeader('Cache-Control', 'no-cache');
    xml.send(data);
}



/*** upload cover image ***/
function upload_cover_image(){
    var data = new FormData();
    var ins = document.getElementById('cover_img').files.length;
    for (var x = 0; x < ins; x++) {
        data.append("cover_img[]", document.getElementById('cover_img').files[x]);
    }

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            var icon = document.getElementById("cover_image");
            icon.setAttribute('src', 'uploaded_images/'+this.responseText);
        }
    };
    xml.open('POST', 'parts/user_part/http/upload_cover_image.php');
    xml.setRequestHeader('Cache-Control', 'no-cache');
    xml.send(data);
}


/*** upload company logo ***/
function upload_company_logo(){
    var data = new FormData();
    var ins = document.getElementById('file').files.length;
    for (var x = 0; x < ins; x++) {
        data.append("file[]", document.getElementById('file').files[x]);
    }

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            var icon = document.getElementById("main_profile_image");
            icon.setAttribute('src', 'uploaded_images/'+this.responseText);
        }
    };
    xml.open('POST', 'parts/user_part/http/upload_company_logo.php');
    xml.setRequestHeader('Cache-Control', 'no-cache');
    xml.send(data);
}
