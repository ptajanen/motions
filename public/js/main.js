// moves to the delete page
$(document).on('click', '.delete-motions', function() {
    var id = $(this).attr('delete-motions');

    bootbox.confirm({
        message: "<h4>Are you sure you want to delete this record ?</h4>",
        buttons: {
            confirm: {
                label: '<i class="fa fa-check"></i> Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: '<i class="fa fa-times"></i> No',
                className: 'btn-primary'
            }
        },
        callback: function(result) {
            // was Yes-button clicked?
            if (result == true) {
                var url = "/motions/delete/" + id;
                $(location).attr('href', url);
            }
        }
    });
    return false;
});