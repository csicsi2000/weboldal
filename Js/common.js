document.body.classList.add('js-loading');

$(function() {
    $("#nav-placeholder").load("Navbar.html");
});


window.addEventListener("load", showPage);

function showPage() {
  document.body.classList.remove('js-loading');
}

/*
$(window).load(function() {
    $("body").removeClass("preload");
})

window.onload = function() {
    document.body.classList.remove('preload');
}
*/