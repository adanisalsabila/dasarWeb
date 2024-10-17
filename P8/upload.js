$(document).ready(function() {
    $('#upload-form').on('submit', function(e) {
        e.preventDefault(); 
        var formData = new FormData(this); 

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response); 
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
