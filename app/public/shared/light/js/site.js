!function(){return function e(t,n,o){function i(u,a){if(!n[u]){if(!t[u]){var s="function"==typeof require&&require;if(!a&&s)return s(u,!0);if(r)return r(u,!0);var d=new Error("Cannot find module '"+u+"'");throw d.code="MODULE_NOT_FOUND",d}var c=n[u]={exports:{}};t[u][0].call(c.exports,function(e){return i(t[u][1][e]||e)},c,c.exports,e,t,n,o)}return n[u].exports}for(var r="function"==typeof require&&require,u=0;u<o.length;u++)i(o[u]);return i}}()({1:[function(e,t,n){var o,i;o=this,i=function(){return function(e){var t={};function n(o){if(t[o])return t[o].exports;var i=t[o]={exports:{},id:o,loaded:!1};return e[o].call(i.exports,i,i.exports,n),i.loaded=!0,i.exports}return n.m=e,n.c=t,n.p="",n(0)}([function(e,t){"use strict";e.exports=function(){if("undefined"==typeof document||"undefined"==typeof window)return{ask:function(){return"initial"},element:function(){return null},ignoreKeys:function(){},specificKeys:function(){},registerOnChange:function(){},unRegisterOnChange:function(){}};var e=document.documentElement,t=null,n="initial",o=n,i=Date.now(),r="false",u=["button","input","select","textarea"],a=[],s=[16,17,18,91,93],d=[],c={keydown:"keyboard",keyup:"keyboard",mousedown:"mouse",mousemove:"mouse",MSPointerDown:"pointer",MSPointerMove:"pointer",pointerdown:"pointer",pointermove:"pointer",touchstart:"touch",touchend:"touch"},w=!1,f={x:null,y:null},p={2:"touch",3:"touch",4:"mouse"},l=!1;try{var h=Object.defineProperty({},"passive",{get:function(){l=!0}});window.addEventListener("test",null,h)}catch(e){}var m=function(){var e=!!l&&{passive:!0};document.addEventListener("DOMContentLoaded",v),window.PointerEvent?(window.addEventListener("pointerdown",y),window.addEventListener("pointermove",E)):window.MSPointerEvent?(window.addEventListener("MSPointerDown",y),window.addEventListener("MSPointerMove",E)):(window.addEventListener("mousedown",y),window.addEventListener("mousemove",E),"ontouchstart"in window&&(window.addEventListener("touchstart",y,e),window.addEventListener("touchend",y))),window.addEventListener(O(),E,e),window.addEventListener("keydown",y),window.addEventListener("keyup",y),window.addEventListener("focusin",L),window.addEventListener("focusout",b)},v=function(){if(r=!(e.getAttribute("data-whatpersist")||"false"===document.body.getAttribute("data-whatpersist")))try{window.sessionStorage.getItem("what-input")&&(n=window.sessionStorage.getItem("what-input")),window.sessionStorage.getItem("what-intent")&&(o=window.sessionStorage.getItem("what-intent"))}catch(e){}g("input"),g("intent")},y=function(e){var t=e.which,i=c[e.type];"pointer"===i&&(i=S(e));var r=!d.length&&-1===s.indexOf(t),a=d.length&&-1!==d.indexOf(t),w="keyboard"===i&&t&&(r||a)||"mouse"===i||"touch"===i;if(M(i)&&(w=!1),w&&n!==i&&(x("input",n=i),g("input")),w&&o!==i){var f=document.activeElement;f&&f.nodeName&&(-1===u.indexOf(f.nodeName.toLowerCase())||"button"===f.nodeName.toLowerCase()&&!D(f,"form"))&&(x("intent",o=i),g("intent"))}},g=function(t){e.setAttribute("data-what"+t,"input"===t?n:o),k(t)},E=function(e){var t=c[e.type];"pointer"===t&&(t=S(e)),C(e),(!w&&!M(t)||w&&"wheel"===e.type||"mousewheel"===e.type||"DOMMouseScroll"===e.type)&&o!==t&&(x("intent",o=t),g("intent"))},L=function(n){n.target.nodeName?(t=n.target.nodeName.toLowerCase(),e.setAttribute("data-whatelement",t),n.target.classList&&n.target.classList.length&&e.setAttribute("data-whatclasses",n.target.classList.toString().replace(" ",","))):b()},b=function(){t=null,e.removeAttribute("data-whatelement"),e.removeAttribute("data-whatclasses")},x=function(e,t){if(r)try{window.sessionStorage.setItem("what-"+e,t)}catch(e){}},S=function(e){return"number"==typeof e.pointerType?p[e.pointerType]:"pen"===e.pointerType?"touch":e.pointerType},M=function(e){var t=Date.now(),o="mouse"===e&&"touch"===n&&t-i<200;return i=t,o},O=function(){return"onwheel"in document.createElement("div")?"wheel":void 0!==document.onmousewheel?"mousewheel":"DOMMouseScroll"},k=function(e){for(var t=0,i=a.length;t<i;t++)a[t].type===e&&a[t].fn.call(void 0,"input"===e?n:o)},C=function(e){f.x!==e.screenX||f.y!==e.screenY?(w=!1,f.x=e.screenX,f.y=e.screenY):w=!0},D=function(e,t){var n=window.Element.prototype;if(n.matches||(n.matches=n.msMatchesSelector||n.webkitMatchesSelector),n.closest)return e.closest(t);do{if(e.matches(t))return e;e=e.parentElement||e.parentNode}while(null!==e&&1===e.nodeType);return null};return"addEventListener"in window&&Array.prototype.indexOf&&(c[O()]="mouse",m()),{ask:function(e){return"intent"===e?o:n},element:function(){return t},ignoreKeys:function(e){s=e},specificKeys:function(e){d=e},registerOnChange:function(e,t){a.push({fn:e,type:t||"input"})},unRegisterOnChange:function(e){var t=function(e){for(var t=0,n=a.length;t<n;t++)if(a[t].fn===e)return t}(e);(t||0===t)&&a.splice(t,1)},clearStorage:function(){window.sessionStorage.clear()}}}()}])},"object"==typeof n&&"object"==typeof t?t.exports=i():"function"==typeof define&&define.amd?define("whatInput",[],i):"object"==typeof n?n.whatInput=i():o.whatInput=i()},{}],2:[function(e,t,n){e("what-input")},{"what-input":1}]},{},[2]);


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