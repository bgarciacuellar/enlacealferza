function getUserId(id, inputClass) {
    $("." + inputClass).val(id);
}

function geEmployeeData(data) {
    const { id, name, email, role } = data;
    $(".update-employee-id").val(id);
    $(".update-employee-name").val(name);
    $(".update-employee-email").val(email);
    $(`.update-employee-role  option[value='${role}']`).attr("selected", true);
}

function getAdditinalAddressData(data) {
    const { id, address } = data;
    $(".update-additional_address_id").val(id);
    $(".update-additional-address").val(address);
}

function getAdditinalPhoneNumberData(data) {
    const { id, phone_number } = data;
    $(".update-additional-phone-number-id").val(id);
    $(".update-additional-phone-number").val(phone_number);
}

function getAdditinalEmailData(data) {
    const { id, email } = data;
    $(".update-additional-email-id").val(id);
    $(".update-additional-email").val(email);
}

function getAdditionalContactData(data) {
    const { id, name, phone_number, email } = data;
    $(".update-additional-contact-id").val(id);
    $(".update-additional-contact-name").val(name);
    $(".update-additional-contact-email").val(email);
    $(".update-additional-contact-phone-number").val(phone_number);
}
