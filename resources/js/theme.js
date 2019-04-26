$(function () {
    activateNotificationAndTasksScroll();

    // Notification Destroy
    $(document).on('click', '.notification__destroy', function (e) {
        e.preventDefault();

        var target = $(this).attr('data-target');
        var elem = $(`.notification__block[data-id="${target}"]`);
        elem.addClass('close');

        setTimeout(() => {
            elem.remove();
        }, 500);
    });
});

//Activate notification and task dropdown on top right menu
function activateNotificationAndTasksScroll() {
    $('.navbar-right .dropdown-menu .body .menu').slimscroll({
        height: '254px',
        color: 'rgba(0,0,0,0.5)',
        size: '4px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}