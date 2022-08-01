$( document ).ready(function() {

    $.ajax({url: "/home_page", success: function(result){
        $("#getData").html(result);
}});

    $("#home_page").click(function(){
            $.ajax({url: "/home_page", success: function(result){
                $("#getData").html(result);
        }});
    });
    
    $("#add_document").click(function(){
            $.ajax({url: "/add_document", success: function(result){
                $("#getData").html(result);
        }});
    });
    
    $("#manage_document").click(function(){
            $.ajax({url: "/manage_document", success: function(result){
                $("#getData").html(result);
        }});
    });

    });

    