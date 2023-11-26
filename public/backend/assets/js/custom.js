// /* ------------------------------------------------------------------------------
//  *
//  *  # Custom JS code
//  *
//  *  Place here all your custom js. Make sure it's loaded after app.js
//  *
//  * ---------------------------------------------------------------------------- */

$(document).on("click", ".delete", function (e) {
    e.preventDefault();
    var deleteLinkUrl = $(this).attr("href");
    var dataType = $(this).attr("href") ?
        $(this).attr("href") :
        "html";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    swalInit.fire({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",

        preConfirm: function () {
            $.ajax({
                url: deleteLinkUrl,
                type: "POST",
                data: {
                    _method: "DELETE"
                },
                dataType: 'html',
                success: function (data) {
                    var dataError =
                        dataType == "html" ? data.trim() : data.error;
                    if (typeof dataError !== typeof undefined && dataError) {
                        swalInit.fire({
                            title: "Oops...",
                            text: dataError,
                            icon: "error",
                            allowEscapeKey: false,
                            allowEnterKey: false,
                        });
                    } else {
                        swalInit.fire({
                            title: "Deleted!",
                            text: "This data has been deleted!",
                            confirmButtonColor: "#66BB6A",
                            icon: "success",
                            type: "success",
                            preConfirm: function () {
                                location.reload();
                            },
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swalInit.fire({
                        title: "Oops...",
                        text: dataError,
                        icon: "error",
                        allowEscapeKey: false,
                        allowEnterKey: false,
                    });
                },
            });
        },
    });
});

// ----------------------------------------------------------------------------------- end




$(document).on("click", ".removeCart", function (e) {
    e.preventDefault();
    var deleteLinkUrl = $(this).attr("href");
    var dataType = $(this).attr("href") ?
        $(this).attr("href") :
        "html";
        //alert(deleteLinkUrl);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    swalInit.fire({
        title: "Are you sure?",
        text: "You will not be able to recover this Product!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, remove it!",

        preConfirm: function () {
            $.ajax({
                url: deleteLinkUrl,
                type: "POST",
                data: {
                    _method: "DELETE"
                },
                dataType: 'json',
                success: function (data) {
                    var dataError =
                        dataType == "json" ? data.trim() : data.error;
                    if (typeof dataError !== typeof undefined && dataError) {
                        swalInit.fire({
                            title: "Oops...",
                            text: dataError,
                            icon: "error",
                            allowEscapeKey: false,
                            allowEnterKey: false,
                        });
                    } else {
                        swalInit.fire({
                            title: "Deleted!",
                            text: "This Product is removed from your cart!!",
                            confirmButtonColor: "#66BB6A",
                            icon: "success",
                            type: "success",
                            preConfirm: function () {
                                location.reload();
                            },
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swalInit.fire({
                        title: "Oops...",
                        text: dataError,
                        icon: "error",
                        allowEscapeKey: false,
                        allowEnterKey: false,
                    });
                },
            });
        },
    });
});


// Defaults sweet alert js
var swalInit = swal.mixin({
    buttonsStyling: false,
    customClass: {
        confirmButton: "btn btn-primary",
        cancelButton: "btn btn-light",
        denyButton: "btn btn-light",
        input: "form-control",
    },
});
// --------------------------------
