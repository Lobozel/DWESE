
function show(id) {
    var p = document.getElementById(id);
    p.setAttribute('type', 'text');
}

function hide(id) {
    var p = document.getElementById(id);
    p.setAttribute('type', 'password');
}

window.onload = function() {
	let pwShown = 0;
	let pwShownR = 0;
	let pwShownRC = 0;


    document.getElementById("eye").addEventListener("click", function () {
		if (pwShown == 0) {
			document.getElementById("eye_icon").src="icons/eye_closed.png";
            pwShown = 1;
            show("password");
        } else {
			document.getElementById("eye_icon").src="icons/eye.png";
            pwShown = 0;
            hide("password");
        }
	}, false);
	document.getElementById("eye_R").addEventListener("click", function () {
		if (pwShownR == 0) {
			document.getElementById("eye_icon_R").src="icons/eye_closed.png";
            pwShownR = 1;
            show("password_R");
        } else {
			document.getElementById("eye_icon_R").src="icons/eye.png";
            pwShownR = 0;
            hide("password_R");
        }
	}, false);
	document.getElementById("confirm-eye").addEventListener("click", function () {
		if (pwShownRC == 0) {
			document.getElementById("confirm-eye_icon").src="icons/eye_closed.png";
            pwShownRC = 1;
            show("confirm-password");
        } else {
			document.getElementById("confirm-eye_icon").src="icons/eye.png";
            pwShownRC = 0;
            hide("confirm-password");
        }
    }, false);
};


$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
