// 
$(window).load(function(){
    setTimeout(function() {
           // Do something after 5 seconds
           $('.loader').fadeOut();
           $('.afterload').fadeIn();
        window.dispatchEvent(new Event('resize'));
        }, 1);


});

// ===== Scroll to Top ====
