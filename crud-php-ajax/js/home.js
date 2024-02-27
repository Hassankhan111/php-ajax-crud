
$(document).ready(function(){

    function loaddata(){
        $.ajax({
         url : 'loaddata.php',
         method : 'POST',
         success : function(data){
            $("#load-data").html(data);
           }
        });
    }

    loaddata();

    // delete record 
    $(document).on("click",".delete-btn",function(){
        if(confirm("do you relly want to delete this record")){
          var id = $(this).data("id");
          var element = this;
          $.ajax({
            url : 'delete.php',
            type : 'POST',
            data : {id : id},
            success : function(res){
               if(res == 1){
                 $(element).closest("tr").fadeOut();
               }else{
                 $("#error-message").html("Record Cannt Deleted Successfully").slideDown();
                 $("#success-message").slideUp();
               }
            }

          });
        }
    });

    // search 
    $("#search-term").on("keyup",function(){
       var value = $(this).val();
      
       $.ajax({
          url : 'search.php',
          type : 'POST',
          data : {search : value},
          success : function(data){
             $('#load-data').html(data);
          }
       });
    });

    //insert data 

    $("#save-btn").click(function(e){
        e.preventDefault();

     var name = $("#student_name").val();
      if(name == ""){
        $("#error-message").html("All feild are required").slideDown();
        $("#success-message").slideUp();
      }else{

        $.ajax({
          url : 'insert.php',
          type : 'POST',
          data : {sname : name },
          success : function(data){
            if(data == 1){
                $("#insert-form").trigger('reset');
                loaddata();
                $("#success-message").html("Record Inserted Successfully").slideDown();
                $("#error-message").slideUp();
            }else{
                $("#error-message").html("Record Cant Insert Successfully").slideDown();
                $("#success-message").slideUp(); 
                alert(data);
            }
          }
        });
      }
    });


    // show modelbox
    $(document).on("click", ".edit-btn",function(){
     $("#model").show();
      var id = $(this).data("eid");
     //alert(id);

     $.ajax({
        url : 'load-update-data.php',
        type : 'POST',
        data : {id : id},
        success : function(data){
           $("#model-form table").html(data);
        }
        
     });
     
    });

    //close modelbox
    $("#close-btn").click(function(){
        $("#model").hide();
    });

    // INSER UPDATE RECORD
    $(document).on("click" ,"#update-id" ,function(){
     
      var Eid = $("#Eid").val();
      var fname = $("#fname").val();
    
       
      $.ajax({
        url : 'insert-update.php',
        type : 'POST',
        data : {Eid : Eid , fname: fname , lname: lname},
        success : function(data){
          if(data == 1){
            $("#model").hide();
            loaddata();
           }
        }
      });
    });
    
});