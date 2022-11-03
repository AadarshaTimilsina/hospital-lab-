var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["patientid"] = document.getElementById("patientid").value;
    formData["checkup"] = document.getElementById("checkup").value;
    formData["reportimage"] = document.getElementById("reportimage").value;
    formData["report"] = document.getElementById("report").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.fullName;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.email;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.salary;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.city;
    cell4 = newRow.insertCell(4);
    cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm() {
    document.getElementById("patientid").value = "";
    document.getElementById("checkup").value = "";
    document.getElementById("reportimage").value = "";
    document.getElementById("report").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("patientid").value = selectedRow.cells[0].innerHTML;
    document.getElementById("checkup").value = selectedRow.cells[1].innerHTML;
    document.getElementById("reportimage").value = selectedRow.cells[2].innerHTML;
    document.getElementById("report").value = selectedRow.cells[3].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.patientid;
    selectedRow.cells[1].innerHTML = formData.checkup;
    selectedRow.cells[2].innerHTML = formData.reportimage;
    selectedRow.cells[3].innerHTML = formData.report;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("employeeList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("patientid").value == "") {
        isValid = false;
        document.getElementById("patientidValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("patientidValidationError").classList.contains("hide"))
            document.getElementById("patientidValidationError").classList.add("hide");
    }
    return isValid;
}