
document.addEventListener('DOMContentLoaded', function () {

// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

// Add a click event on each of them
$navbarBurgers.forEach(function ($el) {
	$el.addEventListener('click', function () {

		// Get the target from the "data-target" attribute
		var target = $el.dataset.target;
		var $target = document.getElementById(target);

		// Toggle the class on both the "navbar-burger" and the "navbar-menu"
		$el.classList.toggle('is-active');
		$target.classList.toggle('is-active');

	});
});
}
});


// used for accordions
var acc =
document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;


        if (panel.style.maxHeight) {
					//accordion is open, we need to close it
            // panel.style.display = "none";
						panel.style.maxHeight = null;
        } else {
					//accordion is closed
            // panel.style.display = "block";
						panel.style.maxHeight = panel.scrollHeight + "px";

        }
    });
}


//active tabs need repair jquery
// $(".sexytabs").tabs({
//   show: { effect: "slide", direction: "left", duration: 200, easing: "easeOutBack" } ,
//   hide: { effect: "slide", direction: "right", duration: 200, easing: "easeInQuad" }
// });

$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){
							$("html,body").animate({scrollTop:
							$(".thetop").offset().top},"1000");
return false})})


//load more
$(function () {
    $("div").slice(0, 8).addClass('display');
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("div:hidden").slice(0, 8).addClass('display');
        if ($("div:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

$('a[href=#top]').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 600);
    return false;
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
