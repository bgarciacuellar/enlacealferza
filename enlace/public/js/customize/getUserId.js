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
