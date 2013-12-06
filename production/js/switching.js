$(document).ready(function(){
	var url = document.URL;
	url = url.split('#');
	if (url[1] == 'submit'){
		toggle('artists');
	}
	else{
		toggle("home");
	}
	

	$("#artists-btn").click(function(){
		toggle("artists");
		menuHelper()
	});

	$("#board-btn").click(function(){
		toggle("board");
		menuHelper()
	});

	$("#connect-btn").click(function(){
		toggle("connect");
		menuHelper()
	});

	$("#gallery-btn").click(function(){
		toggle('gallery');
		menuHelper()
	});

	$("#home-btn").click(function(){
		toggle("home");
		menuHelper()
	});

	$("#support-btn").click(function(){
		toggle("support");
		menuHelper()
	});

	$("#testimonials-btn").click(function(){
		toggle("testimonials");
		menuHelper()
	});

	$(".woahbar-link").click(function(){
		toggle("artists");
	})

});

function menuHelper(){
	$("#bt-menu").removeClass('bt-menu-open');
    $("#bt-menu").addClass('bt-menu-closed');
};

function toggle(id){
	$("#artists").hide()
	$("#board").hide();
	$("#connect").hide();
	$("#gallery").hide()
	$("#home").hide();
	$("#support").hide();
	$("#testimonials").hide();
	$("#"+id).show();
};


