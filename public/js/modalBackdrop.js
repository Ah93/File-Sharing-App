$("#edit-model").on('hide.bs.modal', function (e) {
    
    $(document.body).removeClass('modal-open');
    $('.modal-backdrop').remove();
});

$("#delete-model").on('hide.bs.modal', function (e) {
    
    $(document.body).removeClass('modal-open');
    $('.modal-backdrop').remove();
});