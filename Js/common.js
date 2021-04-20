document.body.classList.add('js-loading');

$(function() {
    $("#nav-placeholder").load("Navbar.html");
});


window.addEventListener("load", showPage);

function showPage() {
  document.body.classList.remove('js-loading');
}

const body = document.body;
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    var isChecked = $("#toggle").is(":checked");

    if (window.matchMedia("(orientation: landscape)").matches){
        document.getElementById("toggle").checked = false;
        isChecked == false;
    }

    if (prevScrollpos > currentScrollPos || isChecked == true) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-60px";
    }
  prevScrollpos = currentScrollPos;
}
