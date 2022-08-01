$(document).ready(function () {
  getRecordsMD();
    $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    
    $('body').on('submit', '#updateEditForm', function (e) {
      e.preventDefault();

     
      let formData = new FormData(this);
      // formData.append('_method', 'put');
      var id = formData.get('id');

    $('#fac-input-error').text('');
    $('#doc-input-error').text('');
    $('#sub-input-error').text('');
       
      // alert(id)
       
        $.ajax({
          url: '/fileEdit/' + id,
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function (response) {
            $('#edit-model').modal('hide');
            getRecordsMD();
            // $("#getData").load("manage_document #manageDocument");
            //$(".modal-backdrop").hide();
            // $('body').removeClass('modal-open');
            // $('.modal-backdrop').remove();
            //$('.modal-backdrop').remove();
          },
          error: function(response){
            console.log(response)
            $('#fac-input-error').text(response.responseJSON.errors.faculity_name);
            $('#doc-input-error').text(response.responseJSON.errors.document_type);
            $('#sub-input-error').text(response.responseJSON.errors.subject_name);
        }
      });
    });

    $('body').on('click', '#btn-delete', function (e) {
      e.preventDefault();

      var id = $("#idd").val();
         
      // alert(id)
       
        $.ajax({
          url: '/fileDelete/' + id,
          type: "POST",
          data: {id: id},
          contentType: false,
          processData: false,
          success: function (response) {
            $('#delete-model').modal('hide');
            getRecordsMD();
            // $(".modal-backdrop").hide();
            // $('body').removeClass('modal-open');
            //$('.modal-backdrop').remove();
          },
          error: function(response){
            console.log(response)
            
        }
      });
    });

    $('body').on('click', '#editFiles', function (event) {
    
        event.preventDefault();
        var id = $(this).data('id');
        $.get('file/' + id + '/edit', function (data) {
             $('#userCrudModal').html("Edit file");
             $('#btn-edit').val("Edit file");
             $('#edit-model').modal('show');
             $('#id').val(data.data.id);
             $('#faculity_name').val(data.data.faculity_name);
             $('#document_type').val(data.data.document_type);
             $('#file').val(data.data.file);
             $('#subject_name').val(data.data.subject_name);
             $('#description').val(data.data.description);
         })
    });

    $('body').on('click', '#deleteFiles', function (event) {
    
      event.preventDefault();
      var id = $(this).data('id');
      $.get('file/' + id + '/delete', function (data) {
           $('#userCrudModal').html("Delete file");
           $('#btn-delete').val("Delete file");
           $('#delete-model').modal('show');
           $('#idd').val(data.data.id);
       })
  });

  $('body').on('click', '#delete-product', function (e) {
    e.preventDefault();
    var product_id = $(this).data("id");
    if(confirm("Are You sure want to delete !")){
    $.ajax({
    type: "get",
    url: "product-list/delete/"+product_id,
    success: function (data) {
    var oTable = $('#laravel_datatable').dataTable(); 
    oTable.fnDraw(false);
    },
    error: function (data) {
    console.log('Error:', data);
    }
    });
  }
});


//Get all records
function getRecordsMD() {
  $.ajax({  //create an ajax request to display.php
   type: "GET",
   url: "get_manage_document",
   datatType : 'json',       
   success: function (data) {
     console.log(data.filedata);
     $("tbody").html("");
     $.each(data.filedata, function (key, item) {
         var rows = $('<tr>\
       <td>'+item.id+'</td>\
       <td>'+item.name+'</td>\
       <td>'+item.faculity_name+'</td>\
       <td>'+item.document_type+'</td>\
       <td>'+item.subject_name+'</td>\
       <td>'+item.description+'</td>\
       <td>\
         <button type="button" id="editFiles" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit-model" data-id="'+item.id+'"><i class="fas fa-edit"></i></button>\
         <button type="button" id="deleteFiles" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-model" data-id="'+item.id+'"><i class="fas fa-trash"></i></button>\
       </td>\
     </tr>');
     $("tbody").append(rows);
     
     });
     $('#manageDocument').DataTable();
   }
 });
}

  }); 
 
// $(document).ready(function () {
//   $("#edit-model").modal({backdrop: false});
// }); 

