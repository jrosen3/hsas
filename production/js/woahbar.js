var stub_showing = false;

function woahbar_show() { 
    if(stub_showing) {
      $('.woahbar-stub').slideUp('fast', function() {
        $('.woahbar').show('drop', {direction:'up'}, 250); 
        $('body').animate({"marginTop": "2.4em"}, 250);
      }); 
    }
    else {
      $('.woahbar').show('drop', {direction:'up'}, 250); 
      $('body').animate({"marginTop": "2.4em"}, 250);
    };

    // move button down
    $(".bt-menu-trigger").css({
      'top':'40px'
    });

    $(".bt-menu ul:first-of-type").css({
      'top':'100px'
    });

}

function woahbar_hide() { 
    $('.woahbar').slideUp('fast', function() {
      $('.woahbar-stub').show('drop', {direction:'up'}, 250);  
      stub_showing = true;
    }); 

    if( $(window).width() > 1024 ) {
      $('body').animate({"marginTop": "0px"}, 250); // if width greater than 1024 pull up the body
    };

    // move button up
    $(".bt-menu-trigger").css({
      'top':'10px'
    });


    $(".bt-menu ul:first-of-type").css({
      'top':'70px'
    });

}

$().ready(function() {
    window.setTimeout(function() {
    woahbar_show();
 }, 500);
});