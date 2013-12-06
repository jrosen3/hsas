$(document).ready(function(){
	$("#ss").show();
	$("#board").hide();

	$("#home-btn").click(function(){
		$("#ss").show();
		$("#board").hide();
		menuHelper()
	});

	$("#board-btn").click(function(){
		$("#ss").hide();
		$("#board").show();
		menuHelper()
	});

});

function menuHelper(){
	$("#bt-menu").removeClass('bt-menu-open');
    $("#bt-menu").addClass('bt-menu-closed');
};

// function toggle(id, divs){
// 	var id = id.substring(0, str.length - 4)
// 	$(id).show()
// };