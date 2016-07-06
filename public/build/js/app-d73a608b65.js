(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
/*
	Striped by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

'use strict';

(function ($) {

	skel.breakpoints({
		desktop: '(min-width: 737px)',
		wide: '(min-width: 1201px)',
		narrow: '(min-width: 737px) and (max-width: 1200px)',
		narrower: '(min-width: 737px) and (max-width: 1000px)',
		mobile: '(max-width: 736px)'
	});

	$(function () {

		var $window = $(window),
		    $body = $('body'),
		    $document = $(document);

		// Disable animations/transitions until the page has loaded.
		$body.addClass('is-loading');

		$window.on('load', function () {
			$body.removeClass('is-loading');
		});

		// Fix: Placeholder polyfill.
		$('form').placeholder();

		// Prioritize "important" elements on mobile.
		skel.on('+mobile -mobile', function () {
			$.prioritize('.important\\28 mobile\\29', skel.breakpoint('mobile').active);
		});

		// Off-Canvas Sidebar.

		// Height hack.
		var $sc = $('#sidebar, #content'),
		    tid;

		$window.on('resize', function () {
			window.clearTimeout(tid);
			tid = window.setTimeout(function () {
				$sc.css('min-height', $document.height());
			}, 100);
		}).on('load', function () {
			$window.trigger('resize');
		}).trigger('resize');

		// Title Bar.
		$('<div id="titleBar">' + '<a href="#sidebar" class="toggle"></a>' + '<span class="title">' + $('#logo').html() + '</span>' + '</div>').appendTo($body);

		// Sidebar
		$('#sidebar').panel({
			delay: 500,
			hideOnClick: true,
			hideOnSwipe: true,
			resetScroll: true,
			resetForms: true,
			side: 'left',
			target: $body,
			visibleClass: 'sidebar-visible'
		});

		// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
		if (skel.vars.os == 'wp' && skel.vars.osVersion < 10) $('#titleBar, #sidebar, #main').css('transition', 'none');
	});
})(jQuery);

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
