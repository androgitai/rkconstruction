window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("nav").style.padding = "15px 10px";
      document.getElementById("nav").style.background = "rgba(0, 0, 0, 0.6)";
    if (document.documentElement.clientWidth > 480) {
      document.getElementById("logo").style.width = "65px";
    }
    else {
      document.getElementById("logo").style.width = "35px";
    }
      
      
  } else {
    document.getElementById("nav").style.padding = "30px 15px";
    document.getElementById("nav").style.background = "rgba(0, 0, 0, 0)";
    if (document.documentElement.clientWidth > 480) {
      document.getElementById("logo").style.width = "80px";
    }
    else {
      document.getElementById("logo").style.width = "50px";
    }

      
      
  }
}

function myFunction() {
        var x = document.getElementById("navbar-right");
        if (x.className === "navbar-right") {
          x.className += " responsive";
        } else {
          x.className = "navbar-right";
        }
}