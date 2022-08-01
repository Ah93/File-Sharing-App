$(document).ready(function () {
 
    getRecords();
//Get all records
function getRecords() {
  $.ajax({  //create an ajax request to display.php
   type: "GET",
   url: "get_home_page",
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
         <a href="file-upload/download/'+item.name+'" download="'+item.name+'">\
             <button class="btn btn-success btn-sm"><i class="fa fa-download"></i> Download</button>\
         </a>\
         </td>\
     </tr>');
     $("tbody").append(rows);
     });
     $('#homePage').DataTable();
   }
 });
}
});