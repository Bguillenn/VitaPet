var profile = document.getElementById("profile-button");
var language = document.getElementById("language-button");

profile.addEventListener("click", function(){
    document.getElementById("profile-options").classList.toggle("show-menu");
});

language.addEventListener("click", function(){
    document.getElementById("language-options").classList.toggle("show-menu");
});

window.onclick = function(event) {
    
    if (!event.target.matches("#language-button") && !event.target.matches("#language-button *")) {
      var dropdown = document.getElementById("language-options");
        if (dropdown.classList.contains('show-menu')) {
          dropdown.classList.remove('show-menu');
        }
      
    }
    if(!event.target.matches('#profile-button') && !event.target.matches('#profile-button *')) {
        var dropdown = document.getElementById("profile-options");
        if (dropdown.classList.contains('show-menu')) {
          dropdown.classList.remove('show-menu');
        }
    }
  }