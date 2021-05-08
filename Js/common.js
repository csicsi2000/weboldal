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
  let isChecked = $("#toggle").is(":checked");

  if (window.matchMedia("(orientation: landscape)").matches){
    document.getElementById("toggle").checked = false;
    isChecked == false;
  }

  if (prevScrollpos > currentScrollPos || isChecked == true) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-90px";
  }
  prevScrollpos = currentScrollPos;
}

/*
document.getElementById("toggle").addEventListener('change', ()=>{
  let isChecked = $("#toggle").is(":checked");
  if(isChecked){
    disableScroll();
  } else{
    enableScroll();
  }
  console.log("checkbox checked " + isChecked);
})

function preventDefault(e) {
  e.preventDefault();
  }

  function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
      preventDefault(e);
      return false;
  }
  }

  // modern Chrome requires { passive: false } when adding event
  var supportsPassive = false;
  try {
  window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
      get: function () { supportsPassive = true; } 
  }));
  } catch(e) {}

  var wheelOpt = supportsPassive ? { passive: false } : false;
  var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';


// call this to Disable
function disableScroll() {
  window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
  window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
  window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
  window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

  // call this to Enable
function enableScroll() {
  window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
  window.removeEventListener('touchmove', preventDefault, wheelOpt);
  window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}
*/
