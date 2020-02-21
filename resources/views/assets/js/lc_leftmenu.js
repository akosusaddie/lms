var base_url = 'http://localhost:80/lms/';


function current_show() {
    $(".fakeloader").css("visibility", "visible");
}

function current_opac() {
    $(".fakeloader").css("visibility", "hidden");
}

function lc_getstep(act, id, idd2) {
    current_show();
    var formval=$('form').serialize() + "&act=" + act + "&id=" + id + "&idd2=" + idd2;
    // alert(formval);
    $.ajax({
        type: "POST",
        url: base_url + 'lc_getstep.blade.php',
        data: formval,
        success: function (msg) {
            $("#current_area2").html(msg);
               //current_opac();
               // Materialize.toast('Success! Patient Information Saved.', 4000, 'success');
        }
    });
}

 