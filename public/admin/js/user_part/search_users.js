function search_users(){
    var value = document.getElementById("search_users").value;
    var page  = document.getElementById("hidden_page").value;

    window.location = "all_users.php?path=Administracija&cat=Korisnici&what=Pregled%20korisnika&icon=fa-users&desc=Pregledajte%20sve%20registrovane%20korisnike&page="+ page +"&search=" + value;
}