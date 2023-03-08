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