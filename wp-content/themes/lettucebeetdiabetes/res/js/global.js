// JSHint ignores
/* global FastClick: true */

$(document).ready(function () {
    prepare_fitvid();
    prepare_menu({
        container: $('#content'),
        menu_button: $('.menu-button'),
        menu_active_class: 'menu-active'
    });
    prepare_dropdowns();
});

function prepare_fitvid() {
    $("#page").fitVids();
}

function prepare_menu(options) {
    options.menu_button.on('click', function (e) {
        var body = $('body');

        body.toggleClass(options.menu_active_class);

        // if the menu is displayed, hook up an event to hide the menu when #page is tapped but not scrolled
        if (body.hasClass(options.menu_active_class)) {
            options.container.on('click', function () {
                body.toggleClass(options.menu_active_class);
                options.container.off('click'); // don't need to listen to this until the menu is opened
            });
            return;
        }

        options.container.off('click'); // don't need to listen to this until the menu is opened
    });

    $('.sub-menu').collapse({toggle: false}).addClass('collapse');

    $('.btn-menu-dropdown').on('click', function (e) {
        $(this).siblings('.sub-menu').collapse('toggle');
    });
}
function prepare_dropdowns() {
    // Add slideDown animation to Bootstrap dropdown when expanding.
    $('.dropdown').on('show.bs.dropdown', function() {
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function() {
      $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
}
