$(function () {
    $("#btnAdd").bind("click", function () {
        var div = $("<tr />");
        div.html(GetDynamicTextBox(""));
        $("#TextBoxContainer").append(div);
    });
    $("body").on("click", ".remove", function () {
        $(this).closest("tr").remove();
    });
});
function GetDynamicTextBox(value) {
    return '<td><input name = "social_heading[]" type="text" value = "' + value + '" class="form-control" /></td>' + '<td><input name = "social_url[]" type="url" value = "' + value + '" class="form-control" /></td>' + '<td><input name = "social_icon[]" type="text" value = "' + value + '" class="form-control" /></td>' +'<td><button type="button" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i></button></td>'
}
