/* Requires JQuery 1.7+ */
!function ($) {

	"use strict";

	var dropdownSelector = '.dropdown-toggle';

	/**
	 * Removes .open class from all dropdown-enabled
	 * objects.
	**/
	function clearMenus() {
		$(dropdownSelector).parent('li').removeClass('open');
	}

	/**
	 * Add dropdown behavior to selected items.
	 * Items should have a parent <li> tag and 
	 * expect to have an .open class when
	 * expanded.
	 * @param {String} selector 
	 * @return {JQuery} see http://api.jquery.com/each/
	**/
	$.fn.dropdown = function (selector) {
		return this.each(function () {
			$(this).on('click', selector || dropdownSelector, function () {
				var li = $(this).parent('li');
				var isActive = li.hasClass('open');

				clearMenus();
				!isActive && li.toggleClass('open');
				return false;
			});
		});
	};

	/* Apply dropdown to html elements */
	$(function () {
		$('html').bind("click", clearMenus);
		$('body').dropdown(dropdownSelector);
	});

}(window.jQuery || window.ender);