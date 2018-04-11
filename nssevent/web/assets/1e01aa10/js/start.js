
/**
 * Website start here
 */
 
 $(window).load(function() {
	$("table").each( function() {
		if($(this).find('.caption').length > 0){
		var wi_ = $(this).find('.caption').width();
		$(this).find('.ck_image').css("width", wi_ + 16);
		}
		else{
			$(this).find('.ck_image').css("width", "auto");
		}
	});
	if($('#banner-top').length > 0){
		var top = $('#banner-top').offset().top - parseFloat($('#banner-top').css('marginTop').replace(/auto/, 0));
		if($('.wrapper > .block-adv-1').length > 0 ){
			var footTop = $('footer').offset().top - parseFloat($('footer').css('marginTop').replace(/auto/, 0)) - 354;
		}
		else{
			var footTop = $('footer').offset().top - parseFloat($('footer').css('marginTop').replace(/auto/, 0)) - 226;
		}
		var maxY = footTop - $('#banner-top').outerHeight() - 100;
		$(window).scroll(function(evt) {
			var y = $(this).scrollTop();	
			if (y > top) {
			   if (y < maxY) {
					$('#banner-top').addClass('fixed').removeAttr('style');  
				} else {
					var hl = $('.right-side').outerHeight();
					var hr = $('.left-side').outerHeight();
					if(hl < hr){
						$('#banner-top').removeClass('fixed').css({
							position: 'absolute',
							top: ($('.gettop').outerHeight() - $('#banner-top').outerHeight() - 46) + "px"
						});
					}					
				}
			} else {
				$('#banner-top').removeClass('fixed');
			}
		});	
	}	
	if($('#banner-top-1').length > 0){
		var top_ = $('#banner-top-1').offset().top - parseFloat($('#banner-top-1').css('marginTop').replace(/auto/, 0));
		
		if($('.wrapper > .block-adv-1').length > 0 ){
			var footTop_ = $('footer').offset().top - parseFloat($('footer').css('marginTop').replace(/auto/, 0)) - 374;
		}
		else{
			var footTop_ = $('footer').offset().top - parseFloat($('footer').css('marginTop').replace(/auto/, 0)) - 246;
		}
		var maxY_ = footTop_ - $('#banner-top-1').outerHeight() - 50;
		$(window).scroll(function(ev) {
			var y_ = $(this).scrollTop();	
			if (y_ > top_) {
			   if (y_ < maxY_) {
					$('#banner-top-1').addClass('fixed').removeAttr('style');  
				} else {
					var hl_ = $('.right-side').outerHeight();
					var hr_ = $('.sidebar').outerHeight();
					if(hl_ < hr_){
						$('#banner-top-1').removeClass('fixed').css({
							position: 'absolute',
							top: ($('.gettop').outerHeight() - $('#banner-top-1').outerHeight() - 4) + "px"
						});
					}					
				}
			} else {
				$('#banner-top-1').removeClass('fixed');
			}
		});	
	}
	
});
$(document).ready(function($){
	if($(".slide_content").length > 0){
	$('.slide_content').each( function() {
        var srcs = $(this).find("img").attr('src');
		$(this).attr('href', srcs );
		var caption_ = $(this).find('.ck_legend.caption').text();
		$(this).attr('title', caption_);
		$(this).attr('data-fancybox-group', 'gallery');
		
    });
	
	var detail_url;
		$('.slide_content').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',
			closeBtn  : false,
			helpers : {
				buttons	: {},
				thumbs : {
					width  : 100,
					height : 100
				}
			},
			beforeLoad : function(){
				detail_url = document.URL;
			},
			afterLoad : function() {
				var toolbar = '<div class="tool-box"><a href="#" title=""></a><ul class="socialbar"><li><iframe src="//www.facebook.com/plugins/like.php?href='+detail_url+'&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></li></ul></div>';
				$(".fancybox-wrap").append(toolbar);
                var alt = $(this.element).parents().find("#object_title").text();
				$(".tool-box > a").text(alt);
				
				var tooltitle = '<div class="tool-title"></div>';
				$(".fancybox-wrap").append(tooltitle);
				var title = $(this.element).attr('title');
				$(".tool-title").text(title);
			},
			afterShow : function() {
				var wh = $(window).height();
				var imgh = $(".fancybox-image").height();
				if( imgh > wh ){
					$(".fancybox-image").css({"height": "100%" , "width": "auto"});
				}
				else{
				
					$(".fancybox-image").css({"height": "auto" , "width": "100%" , "margin-top": (wh-imgh)/2});
					
				}
			}
		});
	}
	$("#link-search").click(function() {
		if($(".frm-search").hasClass("show")){
			$(".frm-search").removeClass("show");
		}
		else{
			$(".frm-search").addClass("show");
		}
	});
	$(".btn-menu").click(function() {
		if($(".list-cata").hasClass("active")){
			$(".list-cata").removeClass("active");
		}
		else{
			$(".list-cata").addClass("active");
		}
	});
	if($(".flexslider12").length > 0){
		 $('.flexslider12').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            itemWidth: 175,
			minItems: 1,
            itemMargin: 10
         });
		 $(".flexslider12" ).animate({opacity: 1}, 1400); 
	}
	if($(".flexslider-ev").length > 0){
		 $('.flexslider-ev').flexslider(); 
	}
	if($(".flexslider-school").length > 0){
		 $('.flexslider-school').flexslider({
		   animation: "slide"
		 }); 
	}
	if($(".flexslider-info").length > 0){
		 $('.flexslider-info').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: true,
            itemWidth: 115,
			minItems: 1,
            itemMargin: 35
         });
		 $(".flexslider12" ).animate({opacity: 1}, 1400); 
	}
	$('.ratecv li.current').prevAll(".star").addClass("current");
	$('.ratecv li').mouseenter(function () {
		$(this).addClass('starred');
		$(this).prevAll(".star").addClass("starred");
	})

	$('.ratecv li').mouseleave(function () {
		$('.ratecv .starred').each(function () {
			$(this).removeClass("starred");
		});
	});

	$('.ratecv li').click(function () {
		$('.ratecv li.current').removeClass("current");
		$(this).addClass("current")
		$(this).prevAll(".star").addClass("current");
	});
	if($(".btn-top").length > 0){
		$(window).scroll(function () {
			var e = $(window).scrollTop();
			if (e > 300) {
				$(".btn-top").show()
			} else {
				$(".btn-top").hide()
			}
		});
		$(".btn-top").click(function () {
			$('body,html').animate({
				scrollTop: 0
			})
		})
	}
});
$(document).click(function() {
	$(".list-cata").removeClass("active");
	$(".frm-search").removeClass("show");
});
$('.list-cata, .btn-menu, #link-search').click(function(event){
	event.stopPropagation();
}); 
$('.popup').click(function(event){
	event.stopPropagation();
}); 
$('.frm-search').click(function(event){
	event.stopPropagation();
}); 

function tabBlock(id){
	$('#'+ id +' .tab:first').show();
	$('#'+ id +' ul.tab-ul li:first').addClass('active');
	$('#'+ id +' ul.tab-ul li a').click(function(){ 
		$('#'+ id +' ul.tab-ul li').removeClass('active');
		$(this).parent().addClass('active'); 
		var currentTab = $(this).attr('href'); 
		$('#'+ id +' .tab').hide();
		$(currentTab).show();
		if($('.scroll-pane').length > 0){
			$('.scroll-pane').jScrollPane();	
		}
		$(currentTab).find('.cnt-sub-tab:first').show();
		$(currentTab).find('.sub-tab a:first').addClass('selected');
		return false;
	});
}
function openPopup(id){
	$("#"+id).fadeIn(100);	 
	/*code for play game*/
	var h = $("#"+id+" > .popup").height();
	$("#"+id+" > .popup").css("margin-top", -h/2);
	if($(".scroll-pane").length > 0){
		$('.scroll-pane').jScrollPane();	
	}
	 
}
function closePopup(id){
	$("#"+id).fadeOut(100);	
	//$("#header > .closepp").remove();
	
	
}