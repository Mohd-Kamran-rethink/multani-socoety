function renderCities(state_id) {
    $.ajax({
        url: BASE_URL + "/app/cities?state_id=" + state_id,
        success: function (data) {
            if (data) {
                $("#cities-select").html(data);
            }
        },
    });
}
function handleBureauImage(type) {
    if (type == "add-image") {
        let nowStatus = $("#add-images-checkbox").prop("checked");
        if (nowStatus == false) {
            $(".share-image-checkbox-main").show();
        } else {
            $(".share-image-checkbox-main").hide();
        }
        $("#share-profile-checkbox").prop("checked", false);
        $(".drag-profile").toggle();
    } else if (type == "share-profile-image") {
        $("#add-images-checkbox").prop("checked", false);
        $(".modal").modal("show");
    } else if (type == "decline") {
        $("#share-profile-checkbox").prop("checked", false);
        $("#add-images-checkbox").prop("checked", false);
    }
}
