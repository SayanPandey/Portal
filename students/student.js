/*
	*Sayan Pandey*15/IT/21*
*/
$(document).ready(function(){
	$("#toggle").click(function(){
		$("#form1").slideToggle();
		$("#form2").slideToggle();
		$(this).text($(this).text() == 'Already registered'?'Register now ':'Already registered');
	});
	$('a').click(function(){
		$('#forms').slideDown();
	});
	$('#home').click(function(){
		$('#forms').slideUp();
	});
	$("#p2,#cp2").on("keyup",function(){
		if($("#p2").val()==$("#cp2").val()){
			$("#message").text("Password Matched").removeClass("alert-danger").addClass("alert alert-success");
			$('#reg').removeAttr("disabled");
		}
		else{
			$('#message').html('Password Not Matching').addClass("alert alert-danger").removeClass("alert-success");
			$('#reg').attr("disabled", "disabled");
		}
	});
	//My personal code for responsive webpage (Sayan Pandey 15/IT/21)
	var w = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
	if(w<=768){
		$("#list").css({'position':'relative'});
		$("#departtoggle").css({'display':'block'});
		$("#list").css({'display':'none'});
		
	}
	window.addEventListener("resize", function(){
		var x=window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
		if(x<=768){
			$("#list").css({'position':'relative'});
			$("#departtoggle").css({'display':'block'});
			$("#list").css({'display':'none'});
		}
		else{
			$("#list").css({'position':'sticky'});
			$("#departtoggle").css({'display':'none'});
			$("#list").css({'display':'block'});
		}
	});
	$("#departbutton").click(function(){
		$("#list").slideToggle();
	});
	
	//AJAX usage Sayan Pandey (15/IT/21)
	var request;

	$("#form2").submit(function(){
		event.preventDefault();
		if(request){        
			request.abort();    
		}
		 var $form = $(this);
		 var $inputs = $form.find("input, select, button, textarea");
		 var $serializedData = $form.serialize();

		 request = $.ajax({        
			url: "reg.php",        
			type: "post",        
			data: $serializedData
		});
		request.done(function (response, textStatus, jqXHR){
			if(response==="success"){
				$("#regi").slideUp(function(){
				$(this).find("h1").text("Successfully Registered");
				$(this).removeClass("alert-info alert-danger").addClass("alert-success").css({'background-image':'none','color':'green','text-shadow':'none'});
				$('#message').html('Successfully Registered').removeClass("alert-danger").addClass("alert-success");
				$("#form2").slideUp();
				$("#form1").slideDown();
				});
			}
			else{
				$("#regi").slideUp(function(){
				$(this).find("h1").text(response);
				$(this).addClass("alert-danger").removeClass("alert-success").css({'background-image':'none','color':'red','text-shadow':'none'});
				$('#message').html(response).addClass("alert alert-danger").removeClass("alert-success");
				});
			}
			$("#regi").slideDown();
		});
		request.fail(function (jqXHR, textStatus, errorThrown){
			$('#message').html('Something went wrong!! please try again later.').addClass("alert-danger").removeClass("alert-success");
		});
		request.always(function () {
			// Renew the inputs
			$inputs.prop("disabled", false);
			$inputs.val("");
			(function(){
				$("#department2").val($(".depart").first().text());
			})();
		});
		return false;
	});

	//Login errorThrown
	if(error!=0){
		$("#regi").hide().removeClass("alert-success alert-info alert-danger").addClass("alert-warning").css({'background-image':'none','color':'red','text-shadow':'none'});
		$("#regi").find("h1").html(error);
		$("#regi").slideDown();
	}
	
});
function getData(x){
	$(".list-group").children().removeClass("active");
	$(x).addClass("active");
	$(".depart").text($(x).text());
	$("#department").val($(x).text());
	$("#department2").val($(x).text());
}