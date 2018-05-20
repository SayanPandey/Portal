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

	$("#departbutton").click(function(){
		$("#list").slideToggle();
	});
	
	//Stack menu when collapsed
	$('#bs-example-navbar-collapse-1').on('show.bs.collapse', function() {
		$('.nav-tabs').addClass('nav-stacked');
	});

	//Unstack menu when not collapsed
	$('#bs-example-navbar-collapse-1').on('hide.bs.collapse', function() {
		$('.nav-tabs').removeClass('nav-stacked');
	});

//My personal code for responsive webpage (Sayan Pandey 15/IT/21)
	var w = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
	if(w<=768){
		$("#list").css({'position':'relative'});
		$("#departtoggle").css({'display':'block'});
		$("#list").css({'display':'none'});
		$("#tg_switch").css({'min-width':'50vw'});
		
	}
	window.addEventListener("resize", function(){
		var x=window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
		if(x<=768){
			$("#list").css({'position':'relative'});
			$("#departtoggle").css({'display':'block'});
			$("#list").css({'display':'none'});
			$("#tg_switch").css({'min-width':'50vw'});
		}
		else{
			$("#list").css({'position':'sticky'});
			$("#departtoggle").css({'display':'none'});
			$("#list").css({'display':'block'});
			$("#tg_switch").css({'min-width':'30vw'});
		}
	});	

//Document.ready end	
});
function getData(x){
	$(".list-group").children().removeClass("active");
	$(x).addClass("active");
	$(".depart").text($(x).text());
	$("#department").val($(x).text());
	$("#department2").val($(x).text());
}

$("#tg_button").click(function(){
	$.post("Season.php",function(data,status){
		if(data==1){
			$("#tg_button").removeAttr('style').animate({
				right:'0px',
				borderColor:"#55FF00"
			});
		}
		else{
			$("#tg_button").css({'right':'0px'}).animate({
				left:'0px',
				borderColor:"red"
			});
		}
	});
});
