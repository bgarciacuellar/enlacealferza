$( document ).ready(function() {
    switch (menuIcon) {
        case "home":
            $('#v-pills-dashboard-tab').addClass('active');
            $('#v-pills-dashboard').addClass('show active');
            break;
        case "people":
            $('#v-pills-employees-tab').addClass('active');
            $('#v-pills-employees').addClass('show active');
            break;
        case "topic":
            $('#v-pills-projects-tab').addClass('active');
            $('#v-pills-projects').addClass('show active');
            break;
        case "leads":
            $('#v-pills-leads-tab').addClass('active');
            $('#v-pills-leads').addClass('show active');
            break;
    
        default:
            break;
    }
    console.log(menuIcon);
});



function getAnniversary(inputId, data) {
    let userImage = $("#user-anniversary-" + inputId);

    $('.custom-event-image-anniversary').removeClass('active');
    userImage.addClass('active');

    $('.card-body-events-card-name-anniversary').text(data.full_name);
    $('.card-footer-events-card-date-anniversary').text(`${data.entry_formated_date} (${data.anniversary_amount}) años`);
}

function getBirthday(inputId, data) {
    let userImage = $("#user-birthday-" + inputId);

    $('.custom-event-image-birthday').removeClass('active');
    userImage.addClass('active');

    $('.card-body-events-card-name-birthday').text(data.full_name);
    $('.card-footer-events-card-date-birthday').text(data.birthday_formated_date);
}