	// var xhr = new XMLHttpRequest();
	// xhr.open("GET", uriOfCachedPage, true);
	// xhr.setRequestHeader("Cache-Control", "max-age=0");
	// xhr.send();

	//
	// var url = $(location).attr("href");
	// var url = url.split('/');
	// var name = url.slice(-1).pop();
	// $('.menu_cast_item').each(function(index, value){
	// 	console.log(value.attr('a'))
	// 	if ( value.attr('a') == name ){
	// 		$(this).addClass('ativo');
	// 	} 
	// });

var fadeDuration=2000;
var slideDuration=7500;
var currentIndex=1;
var nextIndex=1;

var fadeDuration2=2000;
var slideDuration2=7500;
var currentIndex2=1;
var nextIndex2=1;
var timer2;

var open = 0;

$(document).ready(function(){

	$('#menu_cel').click(function(){
		if(open == 0){
			open = 1;
			$('#menu_cast_cel2').show();
		}
		else{
			open = 0;
			$('#menu_cast_cel2').hide();
		}
	});

	var h = $(window).height();
	var w = $(window).width();


	$('#menu-icon').click(function(){
		$('#menu').fadeIn();
		$('#menu-bg').fadeIn();
		$('#logo-br').fadeOut();
		$('#menu-icon').fadeOut();
		var i = 0;
		$('#menu ul li').each(function(){
			$(this).delay(i).animate( { opacity: 1, marginTop: 0, marginBottom: 0 } , 200);
			i = i + 200;
		});
	});

	$('#menu .fechar').click(function(){
		var i = 0;
		$('#menu ul li').each(function(){
			$(this).delay(i).animate( { opacity: 0, marginTop: -40, marginBottom: 40 } , 200);
			i = i + 200;
		});

		$('#menu').delay(1000).fadeOut();
		$('#menu-bg').delay(1000).fadeOut();
		$('#logo-br').delay(1000).fadeIn();
		$('#menu-icon').delay(1000).fadeIn();

	});

	$('#slider li').css({ opacity: 0.0, display: "none" });
	$("#slider li:nth-child("+nextIndex+")").addClass('show').css({ display: "inline" }).animate({ opacity: 1.0 }, fadeDuration);

	var t = setInterval(nextSlide, 5000);

	$('#fechar_jan').click(function(){
		$('#resposta').html('');
		$('#email_enviado').fadeOut();
		$('#submitter').attr('disabled', '').attr('value', 'Enviar');
	});

});

$(window).load(function(){
	var h = $(window).height();
	var w = $(window).width();
	var horizontal = 1;

	if(h>w){
		horizontal = 0;
		$('#background').css({height: 100+'%'});
		$('#background #slider img').css({position: 'absolute', height: 120+'%', width: 'auto', top: 0})
		var d = $('#background #slider img').width()/2*-1;
		$('#background #slider img').css({left: 50+'%', marginLeft: d});

	}
	else if((h/w) <= 0.58 && w < 1000){
		$('video').css( { height: h, width: 100+'%' } );
		$('#background').css( { height: h*1, width: 100+'%' } );
		$('.img_slider').each(function(){
			$(this).css( { height: "auto", width: 100+'%' } );
		});
		$('#menu ul li').addClass('hmenu');
	}

	$('body, html').animate( { scrollTop:0 } , 0);

	if(horizontal == 1 && w >=1300){
		$('#background').mouseParallax({ moveFactor: 6.5, zIndexValue: 1 });
		$('#background').css( { height: h*1.1 } );
	}
	else{
		var wimg = $('#background img').width();
		var pos_x = ((wimg-w)/2)*-1;
		$('#background').css( { height: h } );
	}
});

function nextSlide(){
	nextIndex = currentIndex + 1;
	if(nextIndex > $('#slider li').length){
		nextIndex =1;
	}
	$("#slider li:nth-child("+nextIndex+")").addClass('show').css({ display: "inline" }).animate({ opacity: 1.0 }, fadeDuration);
	$("#slider li:nth-child("+currentIndex+")").animate({ opacity: 0.0 }, fadeDuration, function(){
		$(this).css({ display: "none" });
	}).removeClass('show');
	currentIndex = nextIndex;
}



function mensagem(){
    alert('Para utilizar as imagens do nosso site, por favor, entre em contato com a nossa equipe.');
    return false;
}

function bloquearCopia(Event){
    var Event = Event ? Event : window.event;
    var tecla = (Event.keyCode) ? Event.keyCode : Event.which;
    if(tecla == 17){
        mensagem();
	}
}
