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
