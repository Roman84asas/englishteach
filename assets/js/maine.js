jQuery(function($) {
//menu navigation
    $('.overlayMenu').onePageNav({
        scrollSpeed: 850,
        scrollThreshold: 0.8,
    });
//effect button
    if($('.button').length){
        $('.button').mousemove(function(e) {
            var x = e.pageX - $(this).offset().left;
                y = e.pageY - $(this).offset().top;

            e.target.style.setProperty('--x', x + "px");
            e.target.style.setProperty('--y', y + "px");
        });
    }
//menu mobile
    $("#navToggle").click(function() {
        $(this).toggleClass("active");
        $(".top_right_nav").toggleClass("open");
        // this line ▼ prevents content scroll-behind
        $("body").toggleClass("locked"); 
    });
//Scroll button
    $('#button').on( 'click', function(){ 
        var el = $(this);
        var dest = el.attr('href'); 
        if(dest !== undefined && dest !== '') { 
            $('html').animate({ 
                scrollTop: $(dest).offset().top 
            }, 850 
            );
        }
        return false;
    });
//Scroll top
    $('#top').on( 'click', function(){ 
        var el = $(this);
        var dest = el.attr('href'); 
        if(dest !== undefined && dest !== '') { 
            $('html').animate({ 
                scrollTop: $(dest).offset().top 
            }, 850 
            );
        }
        return false;
    });
});