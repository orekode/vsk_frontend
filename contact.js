document.addEventListener("DOMContentLoaded", function(){
    setTimeout(function(){
        document.getElementById("contact-form").classList.add("show-form");
        document.getElementById("splash_text").style.display="none";
        document.getElementById("contact-btn").style.display="none";
    }, 10000);
});