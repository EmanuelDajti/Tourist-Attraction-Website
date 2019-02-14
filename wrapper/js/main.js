 $(document).ready(function() {
    $(".menu-icon").click(function() {
             $(".menu-icon").toggleClass("active");
    });

  $(".menu-icon").click(function() {
             $(".sidenav").toggleClass("activate");     
    });

  });

 var i = 0; // Start point
	var images = [];
	var time = 3000;

	// Image List
	images[0] = './Imazhet/foto1.PNG';
	images[1] = './Imazhet/imazhi6.jpeg';
	images[2] = './Imazhet/imazhi8.jpeg';

	// Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;

 $(document).ready(function(){
             var offset = 250;
             var duration = 500;
             $(window).scroll(function(){
                if ($(this).scrollTop() > offset) {
                  $("#scroll").fadeIn(duration);
                
                }else{
                  $("#scroll").fadeOut(duration);
             
                }
             });
             $("#scroll").click(function(){
              $("body, html").animate({scrollTop:0}, duration);
             });
    });



    $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });