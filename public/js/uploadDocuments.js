
$( document ).ready(function() {
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#file-upload').submit(function(e) {
    e.preventDefault();

    let formData = new FormData(this);

   
    $('#fac-input-error').text('');
    $('#doc-input-error').text('');
    $('#file-input-error').text('');
    $('#sub-input-error').text('');

    
    $.ajax({
        async: true,
        type:'POST',
        url: "/add_document",
        data: formData,
        contentType: false,
        processData: false,
        success: (response) => {
                $('#successMsg').show(response);
        },
        error: function(response){
            console.log(response)
            $('#fac-input-error').text(response.responseJSON.errors.faculity_name);
            $('#doc-input-error').text(response.responseJSON.errors.document_type);
            $('#file-input-error').text(response.responseJSON.errors.file);
            $('#sub-input-error').text(response.responseJSON.errors.subject_name);
            
            
        }
   });
});

});