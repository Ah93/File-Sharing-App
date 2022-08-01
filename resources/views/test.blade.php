<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script
    src=//code.jquery.com/jquery-3.5.1.min.js
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin=anonymous></script>
    <script src=//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js></script>
  </head>
  <body >
    <div >
      <a href="javascript:;" id="getData" >Get Data</a>
      <div >
        <div >
        <table id="manageDocument" class="table table-striped table-bordered" style="width:100%">
									 <thead>
												<tr>
													<th>ID</th>
													<th>File Name</th>
													<th>Faculity Name</th>
													<th>Document Type</th>
													<th>Subject Name</th>
													<th>Description</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
        </h1>
        <div ></div>
      </div>
    </div>
    
    <script type=text/javascript>
      $(document).ready(function() {
        getRecordsMD();
        function getRecordsMD() {
         $.ajax({  //create an ajax request to display.php
          type: "GET",
          url: "test-sys",       
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

          }
        });
      }
      });
      
      </script>


  </body>
</html>