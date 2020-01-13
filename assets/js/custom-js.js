$(document).ready(function () {
    // alert('enter');

    $(".openlb").on("click", function () {
        var id = $(this).data("target")
        $("#" + id).fadeIn(1000);
        //   $(this).hide();
        var videoURL = $("#"+id).find('.video').prop('src');
        videoURL += "?autoplay=1";
        $("#"+id).find('.video').prop('src', videoURL);
    });


    $(".close-btn").on("click", function () {
        var id = $(this).data("target")
        $("#" + id).fadeOut(500);
        $("#button").show(250);
    });

    /* Pug page video Js */
    var modal = document.getElementById("homeVideo");
    var btn = document.getElementById("pug-video");
    var cancelbtn = document.getElementById("pug_modal");
    btn.onclick = function() {
     modal.style.display = "block";
     modal.style.opacity = "1";
    }
    cancelbtn.onclick = function() {
     modal.style.display = "none";
     modal.style.opacity = "0";
    }
    window.onclick = function(event) {
     if (event.target == modal) {
       modal.style.display = "none";
     }
    }


    var modal2 = document.getElementById("homeVideo2");
    var btn2 = document.getElementById("pug-video2");
    var cancelbtn2 = document.getElementById("pug_modal2");
    btn2.onclick = function() {
     modal2.style.display = "block";
     modal2.style.opacity = "1";
    }
    cancelbtn2.onclick = function() {
     modal2.style.display = "none";
     modal2.style.opacity = "0";
    }
    window.onclick = function(event2) {
     if (event2.target == modal) {
       modal2.style.display = "none";
     }
    }

    var modal3 = document.getElementById("homeVideo3");
    var btn3 = document.getElementById("pug-video3");
    var cancelbtn3 = document.getElementById("pug_modal3");
    btn3.onclick = function() {
     modal3.style.display = "block";
     modal3.style.opacity = "1";
    }
    cancelbtn3.onclick = function() {
     modal3.style.display = "none";
     modal3.style.opacity = "0";
    }
    window.onclick = function(event3) {
     if (event3.target == modal) {
       modal3.style.display = "none";
     }
    }

    var modal4 = document.getElementById("homeVideo4");
    var btn4 = document.getElementById("pug-video4");
    var cancelbtn4 = document.getElementById("pug_modal4");
    btn4.onclick = function() {
     modal4.style.display = "block";
     modal4.style.opacity = "1";
    }
    cancelbtn4.onclick = function() {
     modal4.style.display = "none";
     modal4.style.opacity = "0";
    }
    window.onclick = function(event4) {
     if (event4.target == modal) {
       modal4.style.display = "none";
     }
    }

    var modal5 = document.getElementById("homeVideo5");
    var btn5 = document.getElementById("pug-video5");
    var cancelbtn5 = document.getElementById("pug_modal5");
    btn5.onclick = function() {
     modal5.style.display = "block";
     modal5.style.opacity = "1";
    }
    cancelbtn5.onclick = function() {
     modal5.style.display = "none";
     modal5.style.opacity = "0";
    }
    window.onclick = function(event5) {
     if (event5.target == modal) {
       modal5.style.display = "none";
     }
    }


});