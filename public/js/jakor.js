 
$(function(){
	$('a[href^="#home"]').on('click', function(event) {
	  // отменяем стандартное действие$('a[href^="#"]').on('click', function(event) {
	  event.preventDefault();

	 // $('.navbar-collapse').removeClass('in');

	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
		  //alert(nh);
	  /*
	  * sc - в переменную заносим информацию о том, к какому блоку надо перейти
	  * dn - определяем положение блока на странице
	  */
	  
	  $('html, body').animate({scrollTop: dn}, 1000);
	  
	  /*
	  * 1000 скорость перехода в миллисекундах
	  */
	
	});
  });
  $('.navbar-collapse').on('click', 'a', function (e) {
    $(e.delegateTarget).collapse('toggle');
});
$(function(){
	$('a[href^="#pos"]').on('click', function(event) {
	  event.preventDefault();
	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
	  $('html, body').animate({scrollTop: dn}, 1000);
	});
  });
  $(function(){
	$('a[href^="#sectionAbout"]').on('click', function(event) {
	  event.preventDefault();
	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
	  $('html, body').animate({scrollTop: dn}, 1000);
	});
  });
  $(function(){
	$('a[href^="#secttionPartners"]').on('click', function(event) {
	  event.preventDefault();
	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
	  $('html, body').animate({scrollTop: dn}, 1000);
	});
  });
  $(function(){
	$('a[href^="#service"]').on('click', function(event) {
	  event.preventDefault();
	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
	  $('html, body').animate({scrollTop: dn}, 1000);
	});
  });
  $(function(){
	$('a[href^="#faq"]').on('click', function(event) {
	  event.preventDefault();
	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
	  $('html, body').animate({scrollTop: dn}, 1000);
	});
  });
  $(function(){
	$('a[href^="#mission"]').on('click', function(event) {
	  event.preventDefault();
	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
	  $('html, body').animate({scrollTop: dn}, 1000);
	});
  });
  $(function(){
	$('a[href^="#contact"]').on('click', function(event) {
	  event.preventDefault();
	  var sc = $(this).attr("href"),
		  dn = $(sc).offset().top-110;
		  nh=$('#nav').height();
	  $('html, body').animate({scrollTop: dn}, 1000);
	});
  });
 