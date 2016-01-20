// page init
jQuery(window).load(function() {
	initAnchors();
});

// smooth anchor scroll
function initAnchors() {
	// find elements
	var anchorLinks = jQuery('.controller a').filter('[href^="#"]'),
		mainAnchorLinks = jQuery('.controller a').filter('[href^="#"]'),
		mainAnchorParents = mainAnchorLinks.parent(),
		page = jQuery('html,body'),
		win = jQuery(window),
		activeClass = 'active',
		scrollDuration = 700;

	// smooth scroll function
	function scrollTo(offset) {
		page.stop().animate({
			scrollTop: offset
		}, scrollDuration);
	}

	// handle anchor links click
	anchorLinks.on('click', function(e) {
		e.preventDefault();

		var link = jQuery(this),
			targetBlock = link.attr('href').length > 1 ? jQuery(link.attr('href')) : jQuery('body'),
			targetOffset = targetBlock.offset().top;

		scrollTo(targetOffset);
	});

	// handle active sections
	var handleActiveClasses = function() {
		var scrollTop = win.scrollTop();

		mainAnchorLinks.each(function() {
			var anchorLink = jQuery(this),
				anchorSection = jQuery(anchorLink.attr('href'));

			if(anchorSection.length && anchorSection.offset().top <= scrollTop+1)  {
				mainAnchorParents.removeClass(activeClass);
				anchorLink.parent().addClass(activeClass);
			}
		});
		if (jQuery(mainAnchorLinks.eq(0).attr('href')).length && jQuery(mainAnchorLinks.eq(0).attr('href')).offset().top > scrollTop+1) {
			mainAnchorParents.removeClass(activeClass);
		}
	};
	handleActiveClasses();
	win.on('scroll', handleActiveClasses);
}

/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
;window.matchMedia=window.matchMedia||(function(e,f){var c,a=e.documentElement,b=a.firstElementChild||a.firstChild,d=e.createElement("body"),g=e.createElement("div");g.id="mq-test-1";g.style.cssText="position:absolute;top:-100em";d.appendChild(g);return function(h){g.innerHTML='&shy;<style media="'+h+'"> #mq-test-1 { width: 42px; }</style>';a.insertBefore(d,b);c=g.offsetWidth==42;a.removeChild(d);return{matches:c,media:h}}})(document);

/*! Picturefill - Responsive Images that work today. (and mimic the proposed Picture element with span elements). Author: Scott Jehl, Filament Group, 2012 | License: MIT/GPLv2 */
;(function(a){a.picturefill=function(){var b=a.document.getElementsByTagName("span");for(var f=0,l=b.length;f<l;f++){if(b[f].getAttribute("data-picture")!==null){var c=b[f].getElementsByTagName("span"),h=[];for(var e=0,g=c.length;e<g;e++){var d=c[e].getAttribute("data-media");if(!d||(a.matchMedia&&a.matchMedia(d).matches)){h.push(c[e])}}var m=b[f].getElementsByTagName("img")[0];if(h.length){var k=h.pop();if(!m||m.parentNode.nodeName==="NOSCRIPT"){m=a.document.createElement("img");m.alt=b[f].getAttribute("data-alt")}if(k.getAttribute("data-width")){m.setAttribute("width",k.getAttribute("data-width"))}else{m.removeAttribute("width")}if(k.getAttribute("data-height")){m.setAttribute("height",k.getAttribute("data-height"))}else{m.removeAttribute("height")}m.src=k.getAttribute("data-src");k.appendChild(m)}else{if(m){m.parentNode.removeChild(m)}}}}};if(a.addEventListener){a.addEventListener("resize",a.picturefill,false);a.addEventListener("DOMContentLoaded",function(){a.picturefill();a.removeEventListener("load",a.picturefill,false)},false);a.addEventListener("load",a.picturefill,false)}else{if(a.attachEvent){a.attachEvent("onload",a.picturefill)}}}(this));