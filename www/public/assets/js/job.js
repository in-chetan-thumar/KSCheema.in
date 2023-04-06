function showJobSaveModal(e){
    $(".divOffcanvas").empty();
    e.preventDefault();
    $('#status').show();
    $('#preloader').show();
    var url = $(e.currentTarget).attr('href');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        type: "get",
        data: {},
        success: function (data, textStatus, jqXHR) {
            $('#status').hide();
            $('#preloader').hide();
            if (!data.error) {
                $(".divOffcanvas").html(data.view)
                var bsOffcanvas = new bootstrap.Offcanvas($("#offcanvasCreate"))
                bsOffcanvas.show()
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $('#status').hide();
            $('#preloader').hide();
            toastr.error('Error occurred!');

        }

    });
}

function showJobEditModal(e){
    $(".divOffcanvas").empty();
    e.preventDefault();
    $('#status').show();
    $('#preloader').show();
    var url = $(e.currentTarget).attr('href');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        type: "get",
        data: {},
        success: function (data, textStatus, jqXHR) {
            $('#status').hide();
            $('#preloader').hide();
            if (!data.error) {
                $(".divOffcanvas").html(data.view)
                var bsOffcanvas = new bootstrap.Offcanvas($("#offcanvasCreate"))
                bsOffcanvas.show()
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $('#status').hide();
            $('#preloader').hide();
            toastr.error('Error occurred!');

        }

    });
}
