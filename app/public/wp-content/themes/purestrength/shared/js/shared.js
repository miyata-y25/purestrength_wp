//font
(function(d) {
	var config = {
		kitId: 'dux5oyg',
		scriptTimeout: 3000,
		async: true
	},
	h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

$(function(){

	//レスポンシブ
	function menuSwitch() {
		var windowW = parseInt(window.innerWidth);
		if(windowW < 1801) {
			$('#gnav-wrap').addClass('drawer-nav');
			$('.drawer').drawer();
			$('.drawer-nav a').on('click', function() {
				$('.drawer').drawer('close');
			});
		} else {
			$('#gnav-wrap').removeClass('drawer-nav');
		}
	}
	menuSwitch();
	function headerHSwitch() {
		var headerH = $('header').outerHeight();
		$('header + *').css('margin-top', headerH);
	}
	headerHSwitch();
	var timer = false;
	$(window).resize(function() {
		if (timer !== false) {
			clearTimeout(timer);
		}
		timer = setTimeout(function() {
			menuSwitch();
			headerHSwitch();
		}, 0);
	});

	//スムーススクロール
	var headerH = $('header').outerHeight();
	var urlHash = location.hash;
	if(urlHash) {
		$('html, body').stop().scrollTop(0);
		setTimeout(function(){
			var position = $(urlHash).offset().top - headerH;
			$('html, body').animate({scrollTop:position}, 0);
		}, 0);
	}
	$('a[href^="#"]').on('click', function() {
		var href= $(this).attr('href');
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - headerH;
		$('html, body').animate({scrollTop:position}, 400, 'swing');
		return false;
	});

	// アコーディオン
	$('.accordion>dt').click(function(){
		$(this).next('dd').slideToggle().siblings('dd').slideUp();
		$(this).toggleClass('on').siblings('dt').removeClass('on');
	});

});