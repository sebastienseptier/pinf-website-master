//jquery

// Il faudrait une fonction apelée par le php pour pas avoir à remettre le path à la main.
var BASE_URL = 'http://localhost/~user/mind-up-website/public/';

/*** Definition des dimensions des images du slider & animation des textes ***/

$(window).load(function() {
  	var largeur = $(heading).width();
    $(".heading_pic").css('width', largeur);
    $(".text_1").stop().animate({marginRight:0 + "px",opacity:1},1000);
    $(".text_2").stop().animate({marginLeft:0 + "px",opacity:1},1000);
    $(".text_3").stop().animate({marginTop:0 + "px",opacity:1},1000);
});

/*** Mise en route du slider ***/

$(function(){
	setInterval(function(){
      	var largeur = $(heading).width();
		$(".heading_pic").css('width', largeur);
      	window.onresize = function(){ 
      		largeur = $(heading).width();
      		$(".heading_pic").css('width', largeur);
      	}

        $("#heading ul").animate({marginLeft:-largeur},800,function(){
        	$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
        })
    }, 4000);
});

/*** Animation share boxes ***/

$(function(){
	var width = 40; //Largeur par défaut d'une box
	$(".box").mouseover( function(event) {
		$(this).stop().animate({marginRight:-10 + "px",width: width+10 + "px"},200);
	});
	$(".box").mouseleave( function(event) {
		$(this).stop().animate({marginRight:0 + "px",width: width + "px"},200);
	});
});

/*** Animation Lettres Cascading ***/

$(function(){
	$("#cascading").mouseover( function() {		
		$("#cascading h1").stop().animate({opacity : "1", letterSpacing: '0px' }, 1000);
	});
});

/*** Animation de la liste des membres ***/

$(function(){
	$("#team").mouseover( function() {		
		$(".team_list").stop().animate({marginLeft:0 + "px",opacity:1},600);
	});
	
});

/*** Création du bouton top ***/

$(document).ready(function(){
   $('body').append('<a href="#top" class="top_link" title="Revenir en haut de page"><img style="width:30px;height:30px;" src="' + BASE_URL +'ressources/top_arrow.png"/></a>');
   $('.top_link').css({
	'position'				:	'fixed',
	'right'					:	'20px',
	'bottom'				:	'50px',
	'display'				:	'none',
	'padding'				:	'20px',
	'background'			:	'#fff',
	'-moz-border-radius'	:	'40px',
	'-webkit-border-radius'	:	'40px',
	'border-radius'			:	'40px',
	'opacity'				:	'0.9',
	'z-index'				:	'2000',
	'width'					: 	'30',
	'height'				: 	'30',
	'border'				: 	'1px solid lightgrey'
});

   });

$(window).scroll(function(){
	posScroll = $(document).scrollTop();
	if(posScroll >=550) 
		$('.top_link').fadeIn(600);
	else
		$('.top_link').fadeOut(600);
});


/*** PROJECTS ANIMATION ***/

$(function($){

	var current = null;
	var t = parseInt($('#content a:first span.title').css('top'));
	var l = parseInt($('#content a:first span.desc').css('top'));

	$('#content a').mouseover(function(){
		if (current && $(this).index() != current.index()) {
			current.find('span.bg').stop().fadeOut();
		}
		if (current && $(this).index() == current.index()) {
			return null;
		}
		$(this).find('span.bg').hide().stop().fadeTo(300,0.7);
		$(this).find('span.title').css({
			opacity : 0,
			top : t + 25
		}).animate({
			opacity : 1,
			top : t
		});
		$(this).find('span.desc').css({
			opacity : 0,
			top : l + 25
		}).animate({
			opacity : 1,
			top : l
		});
		current = $(this);
	});
});

/*** NOTIFICATION BLOCK ***/

$(function(){
	
	$(document).mouseenter( function(event) {
		$(".notification").stop().fadeIn(500);
	});
	$(".notification>span").click( function(event) {
		$(".notification").stop().fadeOut(500);
	});
	$(".notification>span").mouseover( function(event) {
		$(this).removeClass('ui-icon ui-icon-closethick').addClass('ui-icon ui-icon-circle-close');
	});

	$(".notification>span").mouseleave( function(event) {
		$(this).removeClass('ui-icon ui-icon-circle-close').addClass('ui-icon ui-icon-closethick');
	});
});

